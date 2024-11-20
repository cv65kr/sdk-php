<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Interceptor;

use Temporal\Client\Update\UpdateHandle;
use Temporal\Client\Workflow\WorkflowExecutionDescription;
use Temporal\DataConverter\ValuesInterface;
use Temporal\Interceptor\Trait\WorkflowClientCallsInterceptorTrait;
use Temporal\Interceptor\WorkflowClient\CancelInput;
use Temporal\Interceptor\WorkflowClient\DescribeInput;
use Temporal\Interceptor\WorkflowClient\GetResultInput;
use Temporal\Interceptor\WorkflowClient\QueryInput;
use Temporal\Interceptor\WorkflowClient\SignalInput;
use Temporal\Interceptor\WorkflowClient\SignalWithStartInput;
use Temporal\Interceptor\WorkflowClient\StartInput;
use Temporal\Interceptor\WorkflowClient\StartUpdateOutput;
use Temporal\Interceptor\WorkflowClient\TerminateInput;
use Temporal\Interceptor\WorkflowClient\UpdateInput;
use Temporal\Interceptor\WorkflowClient\UpdateWithStartInput;
use Temporal\Internal\Interceptor\Interceptor;
use Temporal\Workflow\WorkflowExecution;

/**
 * It's recommended to use `WorkflowClientCallsInterceptorTrait` when implementing this interface because
 * the interface might be extended in the future. The trait will provide forward compatibility.
 *
 * ```php
 * class MyWorkflowClientCallsInterceptor implements WorkflowClientCallsInterceptor
 * {
 *     use WorkflowClientCallsInterceptorTrait;
 *
 *     public function start(StartInput $input, callable $next): WorkflowExecution
 *     {
 *         error_log('Starting workflow: ' . $input->workflowType);
 *
 *         return $next($input);
 *     }
 * }
 * ```
 *
 * @see WorkflowClientCallsInterceptorTrait
 */
interface WorkflowClientCallsInterceptor extends Interceptor
{
    /**
     * @param StartInput $input
     * @param callable(StartInput): WorkflowExecution $next
     *
     * @return WorkflowExecution
     */
    public function start(StartInput $input, callable $next): WorkflowExecution;

    /**
     * @param SignalInput $input
     * @param callable(SignalInput): void $next
     *
     * @return void
     */
    public function signal(SignalInput $input, callable $next): void;

    /**
     * @param UpdateInput $input
     * @param callable(UpdateInput): StartUpdateOutput $next
     *
     * @return StartUpdateOutput
     */
    public function update(UpdateInput $input, callable $next): StartUpdateOutput;

    /**
     * @param SignalWithStartInput $input
     * @param callable(SignalWithStartInput): WorkflowExecution $next
     *
     * @return WorkflowExecution
     */
    public function signalWithStart(SignalWithStartInput $input, callable $next): WorkflowExecution;

    /**
     * @param UpdateWithStartInput $input
     * @param callable(UpdateWithStartInput): WorkflowExecution $next
     *
     * @return UpdateHandle
     */
    public function updateWithStart(UpdateWithStartInput $input, callable $next): UpdateHandle;

    /**
     * @param GetResultInput $input
     * @param callable(GetResultInput): ?ValuesInterface $next
     *
     * @return ValuesInterface|null
     */
    public function getResult(GetResultInput $input, callable $next): ?ValuesInterface;

    /**
     * @param QueryInput $input
     * @param callable(QueryInput): ?ValuesInterface $next
     *
     * @return ValuesInterface|null
     */
    public function query(QueryInput $input, callable $next): ?ValuesInterface;

    /**
     * @param CancelInput $input
     * @param callable(CancelInput): void $next
     *
     * @return void
     */
    public function cancel(CancelInput $input, callable $next): void;

    /**
     * @param TerminateInput $input
     * @param callable(TerminateInput): void $next
     *
     * @return void
     */
    public function terminate(TerminateInput $input, callable $next): void;

    /**
     * @param DescribeInput $input
     * @param callable(DescribeInput): void $next
     *
     * @return WorkflowExecutionDescription
     */
    public function describe(DescribeInput $input, callable $next): WorkflowExecutionDescription;
}
