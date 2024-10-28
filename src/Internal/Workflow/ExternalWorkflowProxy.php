<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Internal\Workflow;

use React\Promise\PromiseInterface;
use Temporal\Internal\Declaration\Prototype\WorkflowPrototype;
use Temporal\Internal\Support\Reflection;
use Temporal\Workflow\ExternalWorkflowStubInterface;

class ExternalWorkflowProxy extends Proxy
{
    /**
     * @var string
     */
    private const ERROR_INVALID_SIGNAL_METHOD =
        'External workflows only support signal methods, however the called ' .
        'method named "%s" of external workflow "%s" is not valid signal method.'
    ;

    /**
     * @var class-string
     */
    private string $class;

    private WorkflowPrototype $workflow;

    private ExternalWorkflowStubInterface $stub;

    /**
     * @param class-string $class
     */
    public function __construct(string $class, WorkflowPrototype $workflow, ExternalWorkflowStubInterface $stub)
    {
        $this->class = $class;
        $this->workflow = $workflow;
        $this->stub = $stub;
    }

    public function __call(string $method, array $args): PromiseInterface
    {
        foreach ($this->workflow->getSignalHandlers() as $name => $definition) {
            if ($method === $definition->method->getName()) {
                $args = Reflection::orderArguments($definition->method, $args);

                return $this->stub->signal($name, $args);
            }
        }

        throw new \BadMethodCallException(
            \sprintf(self::ERROR_INVALID_SIGNAL_METHOD, $method, $this->class),
        );
    }
}
