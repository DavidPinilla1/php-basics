<?php

namespace entities;

// use entities\interfaces\AbsPerson as AbsPerson;
use entities\interfaces\iPerson as iPerson;

class Person implements iPerson
{
  protected $name;
  protected $age;
  public $id;
  static public $users = 0;
  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
    $this->id = ++$this::$users;
  }
  public function getName()
  {
    return $this->name;
  }
  public function getAge()
  {
    return $this->age;
  }
  public function setAge($age) //override
  {
    $this->age = $age;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
}
