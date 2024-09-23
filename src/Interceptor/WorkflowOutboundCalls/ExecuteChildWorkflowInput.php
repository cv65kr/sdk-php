<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Interceptor\WorkflowOutboundCalls;

use Temporal\Workflow\ChildWorkflowOptions;

/**
 * @psalm-immutable
 */
final class ExecuteChildWorkflowInput
{
    /**
     * @no-named-arguments
     * @internal Don't use the constructor. Use {@see self::with()} instead.
     */
    public function __construct(
        public readonly string $type,
        public readonly array $args = [],
        public readonly ?ChildWorkflowOptions $options = null,
        public readonly mixed $returnType = null,
    ) {}

    public function with(
        ?string $type = null,
        ?array $args = null,
        ?ChildWorkflowOptions $options = null,
        mixed $returnType = null,
    ): self {
        return new self(
            $type ?? $this->type,
            $args ?? $this->args,
            $options ?? $this->options,
            $returnType ?? $this->returnType,
        );
    }
}
