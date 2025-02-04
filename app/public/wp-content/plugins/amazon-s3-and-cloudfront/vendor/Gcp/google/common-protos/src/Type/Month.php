<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/month.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Type;

use UnexpectedValueException;
/**
 * Represents a month in the Gregorian calendar.
 *
 * Protobuf type <code>google.type.Month</code>
 */
class Month
{
    /**
     * The unspecified month.
     *
     * Generated from protobuf enum <code>MONTH_UNSPECIFIED = 0;</code>
     */
    const MONTH_UNSPECIFIED = 0;
    /**
     * The month of January.
     *
     * Generated from protobuf enum <code>JANUARY = 1;</code>
     */
    const JANUARY = 1;
    /**
     * The month of February.
     *
     * Generated from protobuf enum <code>FEBRUARY = 2;</code>
     */
    const FEBRUARY = 2;
    /**
     * The month of March.
     *
     * Generated from protobuf enum <code>MARCH = 3;</code>
     */
    const MARCH = 3;
    /**
     * The month of April.
     *
     * Generated from protobuf enum <code>APRIL = 4;</code>
     */
    const APRIL = 4;
    /**
     * The month of May.
     *
     * Generated from protobuf enum <code>MAY = 5;</code>
     */
    const MAY = 5;
    /**
     * The month of June.
     *
     * Generated from protobuf enum <code>JUNE = 6;</code>
     */
    const JUNE = 6;
    /**
     * The month of July.
     *
     * Generated from protobuf enum <code>JULY = 7;</code>
     */
    const JULY = 7;
    /**
     * The month of August.
     *
     * Generated from protobuf enum <code>AUGUST = 8;</code>
     */
    const AUGUST = 8;
    /**
     * The month of September.
     *
     * Generated from protobuf enum <code>SEPTEMBER = 9;</code>
     */
    const SEPTEMBER = 9;
    /**
     * The month of October.
     *
     * Generated from protobuf enum <code>OCTOBER = 10;</code>
     */
    const OCTOBER = 10;
    /**
     * The month of November.
     *
     * Generated from protobuf enum <code>NOVEMBER = 11;</code>
     */
    const NOVEMBER = 11;
    /**
     * The month of December.
     *
     * Generated from protobuf enum <code>DECEMBER = 12;</code>
     */
    const DECEMBER = 12;
    private static $valueToName = [self::MONTH_UNSPECIFIED => 'MONTH_UNSPECIFIED', self::JANUARY => 'JANUARY', self::FEBRUARY => 'FEBRUARY', self::MARCH => 'MARCH', self::APRIL => 'APRIL', self::MAY => 'MAY', self::JUNE => 'JUNE', self::JULY => 'JULY', self::AUGUST => 'AUGUST', self::SEPTEMBER => 'SEPTEMBER', self::OCTOBER => 'OCTOBER', self::NOVEMBER => 'NOVEMBER', self::DECEMBER => 'DECEMBER'];
    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }
    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}
