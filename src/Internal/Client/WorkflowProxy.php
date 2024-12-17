<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Internal\Client;

use Temporal\Client\Update\LifecycleStage;
use Temporal\Client\Update\UpdateOptions;
use Temporal\Client\Update\WaitPolicy;
use Temporal\Client\WorkflowClient;
use Temporal\Client\WorkflowStubInterface;
use Temporal\DataConverter\Type;
use Temporal\Internal\Declaration\Prototype\WorkflowPrototype;
use Temporal\Internal\Support\Reflection;
use Temporal\Internal\Workflow\Proxy;
use Temporal\Workflow\ReturnType;

/**
 * @template-covariant T of object
 * @internal
 */
final class WorkflowProxy extends Proxy
{
    private const ERROR_UNDEFINED_METHOD =
        'The given workflow class "%s" does not contain a workflow, query or signal method named "%s"';

    public function __construct(
        public WorkflowClient $client,
        private readonly WorkflowStubInterface $stub,
        private readonly WorkflowPrototype $prototype,
    ) {}

    public function hasHandler(): bool
    {
        return $this->prototype->getHandler() !== null;
    }

    public function getHandlerReflection(): \ReflectionMethod
    {
        return $this->prototype->getHandler() ?? throw new \LogicException(
            'The workflow does not contain a handler method.',
        );
    }

    /**
     * @param non-empty-string $name Signal name
     */
    public function findSignalReflection(string $name): ?\ReflectionMethod
    {
        return ($this->prototype->getSignalHandlers()[$name] ?? null)?->method;
    }

    /**
     * @param non-empty-string $method
     * @return mixed|void
     *
     * @psalm-suppress MoreSpecificImplementedParamType
     */
    public function __call(string $method, array $args)
    {
        $handler = $this->prototype->getHandler();
        if ($handler !== null && $method === $handler->getName()) {
            $args = Reflection::orderArguments($handler, $args);


            $returnType = $this->__getReturnType();

            // no timeout (use async mode to get it)
            return $this->client
                ->start($this, ...$args)
                ->getResult(
                    type: $returnType !== null ? Type::create($returnType) : null,
                );
        }

        // Otherwise, we try to find a suitable workflow "query" method.
        foreach ($this->prototype->getQueryHandlers() as $name => $definition) {
            if ($definition->method->getName() === $method) {
                $args = Reflection::orderArguments($definition->method, $args);

                return $this->stub->query($name, ...$args)?->getValue(0, $definition->returnType);
            }
        }

        // Otherwise, we try to find a suitable workflow "signal" method.
        foreach ($this->prototype->getSignalHandlers() as $name => $definition) {
            if ($definition->method->getName() === $method) {
                $args = Reflection::orderArguments($definition->method, $args);
                $this->stub->signal($name, ...$args);

                return;
            }
        }

        // Otherwise, we try to find a suitable workflow "update" method.
        foreach ($this->prototype->getUpdateHandlers() as $name => $definition) {
            if ($definition->method->getName() === $method) {
                $args = Reflection::orderArguments($definition->method, $args);

                $options = UpdateOptions::new($name)
                    ->withUpdateName($name)
                    ->withResultType($definition->returnType)
                    ->withWaitPolicy(WaitPolicy::new()->withLifecycleStage(LifecycleStage::StageCompleted));

                return $this->stub->startUpdate($options, ...$args)->getResult();
            }
        }

        $class = $this->prototype->getClass();

        throw new \BadMethodCallException(
            \sprintf(self::ERROR_UNDEFINED_METHOD, $class->getName(), $method),
        );
    }

    /**
     * TODO rename: Method names cannot use underscore (PSR conflict)
     */
    public function __getUntypedStub(): WorkflowStubInterface
    {
        return $this->stub;
    }

    /**
     * TODO rename: Method names cannot use underscore (PSR conflict)
     */
    public function __getReturnType(): ?ReturnType
    {
        return $this->prototype->getReturnType();
    }
}
