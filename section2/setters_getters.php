<?php

/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 26.10.16.
 * Time: 03:19
 */
class Cars {

  Private $door_count = 4;

  function get_values() {
    echo $this->door_count;
  }

  function set_values() {
    $this->door_count = 10;
  }
}

$bmw = new Cars();

$bmw->get_values();

