<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\MethodSettings;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Describes settings to use when generating API methods that use the
 * long-running operation pattern.
 * All default values below are from those used in the client library
 * generators (e.g.
 * [Java](https://github.com/googleapis/gapic-generator-java/blob/04c2faa191a9b5a10b92392fe8482279c4404803/src/main/java/com/google/api/generator/gapic/composer/common/RetrySettingsComposer.java)).
 *
 * Generated from protobuf message <code>google.api.MethodSettings.LongRunning</code>
 */
class LongRunning extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Initial delay after which the first poll request will be made.
     * Default value: 5 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_poll_delay = 1;</code>
     */
    protected $initial_poll_delay = null;
    /**
     * Multiplier to gradually increase delay between subsequent polls until it
     * reaches max_poll_delay.
     * Default value: 1.5.
     *
     * Generated from protobuf field <code>float poll_delay_multiplier = 2;</code>
     */
    protected $poll_delay_multiplier = 0.0;
    /**
     * Maximum time between two subsequent poll requests.
     * Default value: 45 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_poll_delay = 3;</code>
     */
    protected $max_poll_delay = null;
    /**
     * Total polling timeout.
     * Default value: 5 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_poll_timeout = 4;</code>
     */
    protected $total_poll_timeout = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Duration $initial_poll_delay
     *           Initial delay after which the first poll request will be made.
     *           Default value: 5 seconds.
     *     @type float $poll_delay_multiplier
     *           Multiplier to gradually increase delay between subsequent polls until it
     *           reaches max_poll_delay.
     *           Default value: 1.5.
     *     @type \Google\Protobuf\Duration $max_poll_delay
     *           Maximum time between two subsequent poll requests.
     *           Default value: 45 seconds.
     *     @type \Google\Protobuf\Duration $total_poll_timeout
     *           Total polling timeout.
     *           Default value: 5 minutes.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Client::initOnce();
        parent::__construct($data);
    }
    /**
     * Initial delay after which the first poll request will be made.
     * Default value: 5 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_poll_delay = 1;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getInitialPollDelay()
    {
        return $this->initial_poll_delay;
    }
    public function hasInitialPollDelay()
    {
        return isset($this->initial_poll_delay);
    }
    public function clearInitialPollDelay()
    {
        unset($this->initial_poll_delay);
    }
    /**
     * Initial delay after which the first poll request will be made.
     * Default value: 5 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration initial_poll_delay = 1;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setInitialPollDelay($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->initial_poll_delay = $var;
        return $this;
    }
    /**
     * Multiplier to gradually increase delay between subsequent polls until it
     * reaches max_poll_delay.
     * Default value: 1.5.
     *
     * Generated from protobuf field <code>float poll_delay_multiplier = 2;</code>
     * @return float
     */
    public function getPollDelayMultiplier()
    {
        return $this->poll_delay_multiplier;
    }
    /**
     * Multiplier to gradually increase delay between subsequent polls until it
     * reaches max_poll_delay.
     * Default value: 1.5.
     *
     * Generated from protobuf field <code>float poll_delay_multiplier = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setPollDelayMultiplier($var)
    {
        GPBUtil::checkFloat($var);
        $this->poll_delay_multiplier = $var;
        return $this;
    }
    /**
     * Maximum time between two subsequent poll requests.
     * Default value: 45 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_poll_delay = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getMaxPollDelay()
    {
        return $this->max_poll_delay;
    }
    public function hasMaxPollDelay()
    {
        return isset($this->max_poll_delay);
    }
    public function clearMaxPollDelay()
    {
        unset($this->max_poll_delay);
    }
    /**
     * Maximum time between two subsequent poll requests.
     * Default value: 45 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration max_poll_delay = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setMaxPollDelay($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->max_poll_delay = $var;
        return $this;
    }
    /**
     * Total polling timeout.
     * Default value: 5 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_poll_timeout = 4;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTotalPollTimeout()
    {
        return $this->total_poll_timeout;
    }
    public function hasTotalPollTimeout()
    {
        return isset($this->total_poll_timeout);
    }
    public function clearTotalPollTimeout()
    {
        unset($this->total_poll_timeout);
    }
    /**
     * Total polling timeout.
     * Default value: 5 minutes.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration total_poll_timeout = 4;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTotalPollTimeout($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->total_poll_timeout = $var;
        return $this;
    }
}
