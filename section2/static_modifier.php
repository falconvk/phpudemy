<?php

/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 26.10.16.
 * Time: 03:19
 */
class Cars {

  static $wheel_count = 4;
  static $door_count = 4;
  static $seat_count = 2;

  static function car_detail() {
    // accessing static properties
    echo Cars::$wheel_count;
    echo Cars::$door_count;
    echo Cars::$seat_count;
  }
}

// calling static methods
Cars::car_detail();