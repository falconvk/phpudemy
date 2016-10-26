<?php

/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 26.10.16.
 * Time: 03:19
 */
class Cars {

  static $wheel_count = 4;

  static function car_detail() {
    // accessing static properties
    return self::$wheel_count;
  }
}

class Trucks extends Cars {

  static function display() {
    echo parent::car_detail();
  }
}


Trucks::display();