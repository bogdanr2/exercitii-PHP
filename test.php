<?php

namespace Adoreme\Test;

class ConfigSingleton
{

    protected static $instance = null;
    private $legs = 0;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setLegs($legs)
    {
        $this->legs = $legs;
        return $this;
    }

    public function getLegs()
    {
        return $this->legs;
    }

}
$k = '2.1';
var_dump($k);
var_dump((int) $k);
var_dump((float) $k);

$l = 4;
var_dump($l);
var_dump((string) $l);
