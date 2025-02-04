<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/error_details.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Rpc;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Contains metadata about the request that clients can attach when filing a bug
 * or providing other forms of feedback.
 *
 * Generated from protobuf message <code>google.rpc.RequestInfo</code>
 */
class RequestInfo extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     */
    protected $request_id = '';
    /**
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     *
     * Generated from protobuf field <code>string serving_data = 2;</code>
     */
    protected $serving_data = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $request_id
     *           An opaque string that should only be interpreted by the service generating
     *           it. For example, it can be used to identify requests in the service's logs.
     *     @type string $serving_data
     *           Any data that was used to serve this request. For example, an encrypted
     *           stack trace that can be sent back to the service provider for debugging.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Rpc\ErrorDetails::initOnce();
        parent::__construct($data);
    }
    /**
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }
    /**
     * An opaque string that should only be interpreted by the service generating
     * it. For example, it can be used to identify requests in the service's logs.
     *
     * Generated from protobuf field <code>string request_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;
        return $this;
    }
    /**
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     *
     * Generated from protobuf field <code>string serving_data = 2;</code>
     * @return string
     */
    public function getServingData()
    {
        return $this->serving_data;
    }
    /**
     * Any data that was used to serve this request. For example, an encrypted
     * stack trace that can be sent back to the service provider for debugging.
     *
     * Generated from protobuf field <code>string serving_data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setServingData($var)
    {
        GPBUtil::checkString($var, True);
        $this->serving_data = $var;
        return $this;
    }
}
