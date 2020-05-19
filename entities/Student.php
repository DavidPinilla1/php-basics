<?php
namespace entities;
class Student extends Person{
  function __construct($name,$age){
    parent::__construct($name,$age);//super()
  }
  public function getName()
  {
    return 'Student '.$this->name;
  }
}