<?php

/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 26.10.16.
 * Time: 03:19
 */
class Cars {

  public $wheel_count = 4;
  private $door_count = 4;
  protected $seat_count = 2;

  function car_detail() {
    echo $this->wheel_count;
    echo $this->door_count;
    echo $this->seat_count;
  }
}

$bmw = new Cars();

//echo $bmw->seat_count;
//echo $bmw->door_count;
//echo $bmw->wheel_count;

$bmw->car_detail();