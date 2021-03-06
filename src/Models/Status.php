<?php
/*
 * ZeroTierCentralAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ZeroTierCentralAPILib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class Status implements JsonSerializable
{
    /**
     * Always true
     * @var bool|null $online public property
     */
    public $online;

    /**
     * Current server-side system clock (ms since epoch)
     * @var double|null $clock public property
     */
    public $clock;

    /**
     * ZeroTier Central version
     * @var string|null $version public property
     */
    public $version;

    /**
     * ZeroTier Central API version
     * @var double|null $apiVersion public property
     */
    public $apiVersion;

    /**
     * This host's uptime in milliseconds
     * @var double|null $uptime public property
     */
    public $uptime;

    /**
     * Current user if authenticated, otherwise null
     * @var object|null $user public property
     */
    public $user;

    /**
     * Publishable key for Stripe payment processor or null if not configured
     * @var string|null $stripePublishableKey public property
     */
    public $stripePublishableKey;

    /**
     * Available paid plans (if configured)
     * @var object|null $paidPlans public property
     */
    public $paidPlans;

    /**
     * True if SMS messaging is available
     * @var bool|null $smsEnabled public property
     */
    public $smsEnabled;

    /**
     * Name of current cluster node servicing this request
     * @var string|null $clusterNode public property
     */
    public $clusterNode;

    /**
     * Object containing login methods and whether they are available
     * @var object|null $loginMethods public property
     */
    public $loginMethods;

    /**
     * Recaptcha site key or null if not configured
     * @var string|null $recaptchaSiteKey public property
     */
    public $recaptchaSiteKey;

    /**
     * Bounce destination if using Central as third party auth source (used for ZeroTier support login)
     * @maps return_to
     * @var string|null $returnTo public property
     */
    public $returnTo;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $online               Initialization value for $this->online
     * @param double $clock                Initialization value for $this->clock
     * @param string $version              Initialization value for $this->version
     * @param double $apiVersion           Initialization value for $this->apiVersion
     * @param double $uptime               Initialization value for $this->uptime
     * @param object $user                 Initialization value for $this->user
     * @param string $stripePublishableKey Initialization value for $this->stripePublishableKey
     * @param object $paidPlans            Initialization value for $this->paidPlans
     * @param bool   $smsEnabled           Initialization value for $this->smsEnabled
     * @param string $clusterNode          Initialization value for $this->clusterNode
     * @param object $loginMethods         Initialization value for $this->loginMethods
     * @param string $recaptchaSiteKey     Initialization value for $this->recaptchaSiteKey
     * @param string $returnTo             Initialization value for $this->returnTo
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->online               = func_get_arg(0);
            $this->clock                = func_get_arg(1);
            $this->version              = func_get_arg(2);
            $this->apiVersion           = func_get_arg(3);
            $this->uptime               = func_get_arg(4);
            $this->user                 = func_get_arg(5);
            $this->stripePublishableKey = func_get_arg(6);
            $this->paidPlans            = func_get_arg(7);
            $this->smsEnabled           = func_get_arg(8);
            $this->clusterNode          = func_get_arg(9);
            $this->loginMethods         = func_get_arg(10);
            $this->recaptchaSiteKey     = func_get_arg(11);
            $this->returnTo             = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['online']               = $this->online;
        $json['clock']                = $this->clock;
        $json['version']              = $this->version;
        $json['apiVersion']           = $this->apiVersion;
        $json['uptime']               = $this->uptime;
        $json['user']                 = $this->user;
        $json['stripePublishableKey'] = $this->stripePublishableKey;
        $json['paidPlans']            = $this->paidPlans;
        $json['smsEnabled']           = $this->smsEnabled;
        $json['clusterNode']          = $this->clusterNode;
        $json['loginMethods']         = $this->loginMethods;
        $json['recaptchaSiteKey']     = $this->recaptchaSiteKey;
        $json['return_to']            = $this->returnTo;

        return $json;
    }
}
