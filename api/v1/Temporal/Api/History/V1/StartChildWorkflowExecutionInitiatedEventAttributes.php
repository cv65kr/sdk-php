<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.StartChildWorkflowExecutionInitiatedEventAttributes</code>
 */
class StartChildWorkflowExecutionInitiatedEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * Namespace of the child workflow
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     */
    protected $workflow_id = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     */
    protected $workflow_type = null;
    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     */
    protected $task_queue = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     */
    protected $input = null;
    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_execution_timeout = null;
    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_run_timeout = null;
    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     */
    protected $workflow_task_timeout = null;
    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 9;</code>
     */
    protected $parent_close_policy = 0;
    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 10;</code>
     */
    protected $control = '';
    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
     */
    protected $workflow_task_completed_event_id = 0;
    /**
     * Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 12;</code>
     */
    protected $workflow_id_reuse_policy = 0;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 13;</code>
     */
    protected $retry_policy = null;
    /**
     * If this child runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 14;</code>
     */
    protected $cron_schedule = '';
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 15;</code>
     */
    protected $header = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 16;</code>
     */
    protected $memo = null;
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 17;</code>
     */
    protected $search_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           Namespace of the child workflow
     *     @type string $workflow_id
     *     @type \Temporal\Api\Common\V1\WorkflowType $workflow_type
     *     @type \Temporal\Api\Taskqueue\V1\TaskQueue $task_queue
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *     @type \Google\Protobuf\Duration $workflow_execution_timeout
     *           Total workflow execution timeout including retries and continue as new.
     *     @type \Google\Protobuf\Duration $workflow_run_timeout
     *           Timeout of a single workflow run.
     *     @type \Google\Protobuf\Duration $workflow_task_timeout
     *           Timeout of a single workflow task.
     *     @type int $parent_close_policy
     *           Default: PARENT_CLOSE_POLICY_TERMINATE.
     *     @type string $control
     *           Deprecated
     *     @type int|string $workflow_task_completed_event_id
     *           The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *     @type int $workflow_id_reuse_policy
     *           Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *     @type \Temporal\Api\Common\V1\RetryPolicy $retry_policy
     *     @type string $cron_schedule
     *           If this child runs on a cron schedule, it will appear here
     *     @type \Temporal\Api\Common\V1\Header $header
     *     @type \Temporal\Api\Common\V1\Memo $memo
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Namespace of the child workflow
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Namespace of the child workflow
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Generated from protobuf field <code>string workflow_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @return \Temporal\Api\Common\V1\WorkflowType|null
     */
    public function getWorkflowType()
    {
        return $this->workflow_type;
    }

    public function hasWorkflowType()
    {
        return isset($this->workflow_type);
    }

    public function clearWorkflowType()
    {
        unset($this->workflow_type);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowType workflow_type = 3;</code>
     * @param \Temporal\Api\Common\V1\WorkflowType $var
     * @return $this
     */
    public function setWorkflowType($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowType::class);
        $this->workflow_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @return \Temporal\Api\Taskqueue\V1\TaskQueue|null
     */
    public function getTaskQueue()
    {
        return $this->task_queue;
    }

    public function hasTaskQueue()
    {
        return isset($this->task_queue);
    }

    public function clearTaskQueue()
    {
        unset($this->task_queue);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.taskqueue.v1.TaskQueue task_queue = 4;</code>
     * @param \Temporal\Api\Taskqueue\V1\TaskQueue $var
     * @return $this
     */
    public function setTaskQueue($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Taskqueue\V1\TaskQueue::class);
        $this->task_queue = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 5;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowExecutionTimeout()
    {
        return $this->workflow_execution_timeout;
    }

    public function hasWorkflowExecutionTimeout()
    {
        return isset($this->workflow_execution_timeout);
    }

    public function clearWorkflowExecutionTimeout()
    {
        unset($this->workflow_execution_timeout);
    }

    /**
     * Total workflow execution timeout including retries and continue as new.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_execution_timeout = 6 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_execution_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowRunTimeout()
    {
        return $this->workflow_run_timeout;
    }

    public function hasWorkflowRunTimeout()
    {
        return isset($this->workflow_run_timeout);
    }

    public function clearWorkflowRunTimeout()
    {
        unset($this->workflow_run_timeout);
    }

    /**
     * Timeout of a single workflow run.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_run_timeout = 7 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowRunTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_run_timeout = $var;

        return $this;
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getWorkflowTaskTimeout()
    {
        return $this->workflow_task_timeout;
    }

    public function hasWorkflowTaskTimeout()
    {
        return isset($this->workflow_task_timeout);
    }

    public function clearWorkflowTaskTimeout()
    {
        unset($this->workflow_task_timeout);
    }

    /**
     * Timeout of a single workflow task.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration workflow_task_timeout = 8 [(.gogoproto.stdduration) = true];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setWorkflowTaskTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->workflow_task_timeout = $var;

        return $this;
    }

    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 9;</code>
     * @return int
     */
    public function getParentClosePolicy()
    {
        return $this->parent_close_policy;
    }

    /**
     * Default: PARENT_CLOSE_POLICY_TERMINATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ParentClosePolicy parent_close_policy = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setParentClosePolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ParentClosePolicy::class);
        $this->parent_close_policy = $var;

        return $this;
    }

    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 10;</code>
     * @return string
     */
    public function getControl()
    {
        return $this->control;
    }

    /**
     * Deprecated
     *
     * Generated from protobuf field <code>string control = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setControl($var)
    {
        GPBUtil::checkString($var, True);
        $this->control = $var;

        return $this;
    }

    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
     * @return int|string
     */
    public function getWorkflowTaskCompletedEventId()
    {
        return $this->workflow_task_completed_event_id;
    }

    /**
     * The `WORKFLOW_TASK_COMPLETED` event which this command was reported with
     *
     * Generated from protobuf field <code>int64 workflow_task_completed_event_id = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWorkflowTaskCompletedEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->workflow_task_completed_event_id = $var;

        return $this;
    }

    /**
     * Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 12;</code>
     * @return int
     */
    public function getWorkflowIdReusePolicy()
    {
        return $this->workflow_id_reuse_policy;
    }

    /**
     * Default: WORKFLOW_ID_REUSE_POLICY_ALLOW_DUPLICATE.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.WorkflowIdReusePolicy workflow_id_reuse_policy = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setWorkflowIdReusePolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\WorkflowIdReusePolicy::class);
        $this->workflow_id_reuse_policy = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 13;</code>
     * @return \Temporal\Api\Common\V1\RetryPolicy|null
     */
    public function getRetryPolicy()
    {
        return $this->retry_policy;
    }

    public function hasRetryPolicy()
    {
        return isset($this->retry_policy);
    }

    public function clearRetryPolicy()
    {
        unset($this->retry_policy);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.RetryPolicy retry_policy = 13;</code>
     * @param \Temporal\Api\Common\V1\RetryPolicy $var
     * @return $this
     */
    public function setRetryPolicy($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\RetryPolicy::class);
        $this->retry_policy = $var;

        return $this;
    }

    /**
     * If this child runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 14;</code>
     * @return string
     */
    public function getCronSchedule()
    {
        return $this->cron_schedule;
    }

    /**
     * If this child runs on a cron schedule, it will appear here
     *
     * Generated from protobuf field <code>string cron_schedule = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setCronSchedule($var)
    {
        GPBUtil::checkString($var, True);
        $this->cron_schedule = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 15;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 15;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 16;</code>
     * @return \Temporal\Api\Common\V1\Memo|null
     */
    public function getMemo()
    {
        return $this->memo;
    }

    public function hasMemo()
    {
        return isset($this->memo);
    }

    public function clearMemo()
    {
        unset($this->memo);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.Memo memo = 16;</code>
     * @param \Temporal\Api\Common\V1\Memo $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Memo::class);
        $this->memo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 17;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes|null
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    public function hasSearchAttributes()
    {
        return isset($this->search_attributes);
    }

    public function clearSearchAttributes()
    {
        unset($this->search_attributes);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 17;</code>
     * @param \Temporal\Api\Common\V1\SearchAttributes $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\SearchAttributes::class);
        $this->search_attributes = $var;

        return $this;
    }

}
