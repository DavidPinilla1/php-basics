<?php
namespace entities\interfaces;
interface iPerson {
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}