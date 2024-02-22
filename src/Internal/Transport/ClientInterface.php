<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Internal\Transport;

use React\Promise\PromiseInterface;
use Temporal\Worker\Transport\Command\CommandInterface;
use Temporal\Worker\Transport\Command\RequestInterface;
use Temporal\Workflow\WorkflowContextInterface;

interface ClientInterface
{
    /**
     * @param RequestInterface $request
     * @param null|WorkflowContextInterface $context
     *
     * @return PromiseInterface
     */
    public function request(RequestInterface $request, ?WorkflowContextInterface $context = null): PromiseInterface;

    public function send(CommandInterface $request): void;

    /**
     * @param CommandInterface $command
     * @return bool
     */
    public function isQueued(CommandInterface $command): bool;

    /**
     * @param CommandInterface $command
     */
    public function cancel(CommandInterface $command): void;

    /**
     * Reject pending promise.
     *
     * @param CommandInterface $command
     * @param \Throwable $reason
     */
    public function reject(CommandInterface $command, \Throwable $reason): void;
}
