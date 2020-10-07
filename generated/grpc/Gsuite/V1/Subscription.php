<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: gsuite/V1/api.proto

namespace Gsuite\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * <pre>
 * Subscription entity. See Google documentation for further details.
 * https://developers.google.com/admin-sdk/reseller/v1/reference/subscriptions
 * </pre>
 *
 * Protobuf type <code>gsuite.v1.Subscription</code>
 */
class Subscription extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>string sku_id = 1;</code>
     */
    private $sku_id = '';
    /**
     * <code>string sku_name = 2;</code>
     */
    private $sku_name = '';
    /**
     * <code>string subscription_id = 3;</code>
     */
    private $subscription_id = '';
    /**
     * <code>.gsuite.v1.Subscription.Plan plan = 4;</code>
     */
    private $plan = null;
    /**
     * <code>.gsuite.v1.Seats seats = 5;</code>
     */
    private $seats = null;
    /**
     * <code>.gsuite.v1.Subscription.TransferInfo transfer_info = 6;</code>
     */
    private $transfer_info = null;

    public function __construct() {
        \GPBMetadata\Gsuite\V1\Api::initOnce();
        parent::__construct();
    }

    /**
     * <code>string sku_id = 1;</code>
     */
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * <code>string sku_id = 1;</code>
     */
    public function setSkuId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku_id = $var;
    }

    /**
     * <code>string sku_name = 2;</code>
     */
    public function getSkuName()
    {
        return $this->sku_name;
    }

    /**
     * <code>string sku_name = 2;</code>
     */
    public function setSkuName($var)
    {
        GPBUtil::checkString($var, True);
        $this->sku_name = $var;
    }

    /**
     * <code>string subscription_id = 3;</code>
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }

    /**
     * <code>string subscription_id = 3;</code>
     */
    public function setSubscriptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription_id = $var;
    }

    /**
     * <code>.gsuite.v1.Subscription.Plan plan = 4;</code>
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * <code>.gsuite.v1.Subscription.Plan plan = 4;</code>
     */
    public function setPlan(&$var)
    {
        GPBUtil::checkMessage($var, \Gsuite\V1\Subscription_Plan::class);
        $this->plan = $var;
    }

    /**
     * <code>.gsuite.v1.Seats seats = 5;</code>
     */
    public function getSeats()
    {
        return $this->seats;
    }

    /**
     * <code>.gsuite.v1.Seats seats = 5;</code>
     */
    public function setSeats(&$var)
    {
        GPBUtil::checkMessage($var, \Gsuite\V1\Seats::class);
        $this->seats = $var;
    }

    /**
     * <code>.gsuite.v1.Subscription.TransferInfo transfer_info = 6;</code>
     */
    public function getTransferInfo()
    {
        return $this->transfer_info;
    }

    /**
     * <code>.gsuite.v1.Subscription.TransferInfo transfer_info = 6;</code>
     */
    public function setTransferInfo(&$var)
    {
        GPBUtil::checkMessage($var, \Gsuite\V1\Subscription_TransferInfo::class);
        $this->transfer_info = $var;
    }

}

