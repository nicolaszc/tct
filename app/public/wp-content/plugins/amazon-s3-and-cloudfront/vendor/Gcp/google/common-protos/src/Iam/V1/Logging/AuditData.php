<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/iam/v1/logging/audit_data.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Iam\V1\Logging;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Audit log information specific to Cloud IAM. This message is serialized
 * as an `Any` type in the `ServiceData` message of an
 * `AuditLog` message.
 *
 * Generated from protobuf message <code>google.iam.v1.logging.AuditData</code>
 */
class AuditData extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Policy delta between the original policy and the newly set policy.
     *
     * Generated from protobuf field <code>.google.iam.v1.PolicyDelta policy_delta = 2;</code>
     */
    protected $policy_delta = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iam\V1\PolicyDelta $policy_delta
     *           Policy delta between the original policy and the newly set policy.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Iam\V1\Logging\AuditData::initOnce();
        parent::__construct($data);
    }
    /**
     * Policy delta between the original policy and the newly set policy.
     *
     * Generated from protobuf field <code>.google.iam.v1.PolicyDelta policy_delta = 2;</code>
     * @return \Google\Cloud\Iam\V1\PolicyDelta|null
     */
    public function getPolicyDelta()
    {
        return $this->policy_delta;
    }
    public function hasPolicyDelta()
    {
        return isset($this->policy_delta);
    }
    public function clearPolicyDelta()
    {
        unset($this->policy_delta);
    }
    /**
     * Policy delta between the original policy and the newly set policy.
     *
     * Generated from protobuf field <code>.google.iam.v1.PolicyDelta policy_delta = 2;</code>
     * @param \Google\Cloud\Iam\V1\PolicyDelta $var
     * @return $this
     */
    public function setPolicyDelta($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Cloud\Iam\V1\PolicyDelta::class);
        $this->policy_delta = $var;
        return $this;
    }
}
