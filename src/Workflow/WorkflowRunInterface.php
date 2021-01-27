<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Temporal\Workflow;

use Temporal\DataConverter\Type;

interface WorkflowRunInterface
{
    /**
     * Returns attached workflow execution.
     *
     * @return WorkflowExecution
     */
    public function getExecution(): WorkflowExecution;

    /**
     * Returns workflow result potentially waiting for workflow to complete.
     * Behind the scene this call performs long poll on Temporal service waiting
     * for workflow completion notification.
     *
     * @param string|\ReflectionClass|\ReflectionType|Type|null $type
     * @param int|null $timeout Timeout in seconds. Infinite by the default.
     * @return mixed
     * @see DateInterval
     */
    public function getResult($type = null, int $timeout = null);
}