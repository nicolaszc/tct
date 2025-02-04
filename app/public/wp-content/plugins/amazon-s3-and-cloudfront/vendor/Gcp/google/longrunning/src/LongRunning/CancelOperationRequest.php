<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\LongRunning;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * The request message for [Operations.CancelOperation][google.longrunning.Operations.CancelOperation].
 *
 * Generated from protobuf message <code>google.longrunning.CancelOperationRequest</code>
 */
class CancelOperationRequest extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * @param string $name The name of the operation resource to be cancelled.
     *
     * @return \Google\LongRunning\CancelOperationRequest
     *
     * @experimental
     */
    public static function build(string $name) : self
    {
        return (new self())->setName($name);
    }
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the operation resource to be cancelled.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct($data);
    }
    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * The name of the operation resource to be cancelled.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;
        return $this;
    }
}
