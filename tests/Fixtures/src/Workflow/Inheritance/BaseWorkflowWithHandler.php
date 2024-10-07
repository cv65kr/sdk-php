<?php

/**
 * This file is part of Temporal package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Temporal\Tests\Workflow\Inheritance;

use Temporal\Workflow\WorkflowMethod;

abstract class BaseWorkflowWithHandler
{
    /** @WorkflowMethod */
    #[WorkflowMethod]
    public function handler(): void
    {
    }
}
