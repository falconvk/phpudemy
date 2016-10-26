<?php
/**
 * Created by PhpStorm.
 * User: nikola
 * Date: 25.10.16.
 * Time: 21:42
 */

class Car {

  function greeting(){

  }

  function greeting2() {

  }

}

$method_list = get_class_methods('Car');

foreach ($method_list as $method) {
  echo $method . '<br>';
}