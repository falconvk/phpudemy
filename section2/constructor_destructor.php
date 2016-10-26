<?php

/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 26.10.16.
 * Time: 03:19
 */
class Cars {

  public $wheel_count = 4;
  static $door_count = 4;

  function __construct() {
    echo self::$door_count++;
  }
}

$bmw = new Cars();
$mercedes = new Cars();
$mercedes_2 = new Cars();