<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: temporal/api/protocol/v1/message.proto

namespace Temporal\Api\Protocol\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * (-- api-linter: core::0146::any=disabled
 *     aip.dev/not-precedent: We want runtime extensibility for the body field --)
 *
 * Generated from protobuf message <code>temporal.api.protocol.v1.Message</code>
 */
class Message extends \Google\Protobuf\Internal\Message
{
    /**
     * An ID for this specific message.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Identifies the specific instance of a protocol to which this message
     * belongs.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 2;</code>
     */
    protected $protocol_instance_id = '';
    /**
     * The opaque data carried by this message. The protocol type can be
     * extracted from the package name of the message carried inside the Any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any body = 5;</code>
     */
    protected $body = null;
    protected $sequencing_id;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           An ID for this specific message.
     *     @type string $protocol_instance_id
     *           Identifies the specific instance of a protocol to which this message
     *           belongs.
     *     @type int|string $event_id
     *     @type int|string $command_index
     *     @type \Google\Protobuf\Any $body
     *           The opaque data carried by this message. The protocol type can be
     *           extracted from the package name of the message carried inside the Any.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Protocol\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * An ID for this specific message.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * An ID for this specific message.
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Identifies the specific instance of a protocol to which this message
     * belongs.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 2;</code>
     * @return string
     */
    public function getProtocolInstanceId()
    {
        return $this->protocol_instance_id;
    }

    /**
     * Identifies the specific instance of a protocol to which this message
     * belongs.
     *
     * Generated from protobuf field <code>string protocol_instance_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocolInstanceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol_instance_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 event_id = 3;</code>
     * @return int|string
     */
    public function getEventId()
    {
        return $this->readOneof(3);
    }

    public function hasEventId()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>int64 event_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 command_index = 4;</code>
     * @return int|string
     */
    public function getCommandIndex()
    {
        return $this->readOneof(4);
    }

    public function hasCommandIndex()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>int64 command_index = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommandIndex($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * The opaque data carried by this message. The protocol type can be
     * extracted from the package name of the message carried inside the Any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any body = 5;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getBody()
    {
        return $this->body;
    }

    public function hasBody()
    {
        return isset($this->body);
    }

    public function clearBody()
    {
        unset($this->body);
    }

    /**
     * The opaque data carried by this message. The protocol type can be
     * extracted from the package name of the message carried inside the Any.
     *
     * Generated from protobuf field <code>.google.protobuf.Any body = 5;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setBody($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
        $this->body = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getSequencingId()
    {
        return $this->whichOneof("sequencing_id");
    }

}
