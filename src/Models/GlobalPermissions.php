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
class GlobalPermissions implements JsonSerializable
{
    /**
     * Read
     * @var bool|null $r public property
     */
    public $r;

    /**
     * Modify
     * @var bool|null $m public property
     */
    public $m;

    /**
     * Delete
     * @var bool|null $d public property
     */
    public $d;

    /**
     * Authorize
     * @var bool|null $a public property
     */
    public $a;

    /**
     * Owner
     * @var bool|null $o public property
     */
    public $o;

    /**
     * Constructor to set initial or default values of member properties
     * @param bool $r Initialization value for $this->r
     * @param bool $m Initialization value for $this->m
     * @param bool $d Initialization value for $this->d
     * @param bool $a Initialization value for $this->a
     * @param bool $o Initialization value for $this->o
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->r = func_get_arg(0);
            $this->m = func_get_arg(1);
            $this->d = func_get_arg(2);
            $this->a = func_get_arg(3);
            $this->o = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['r'] = $this->r;
        $json['m'] = $this->m;
        $json['d'] = $this->d;
        $json['a'] = $this->a;
        $json['o'] = $this->o;

        return $json;
    }
}
