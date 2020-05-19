<?php
namespace entities\interfaces;
interface  iPerson {
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}
// abstract class  AbsPerson {
//     abstract public function getName();
//     abstract public function setName($name);
//     abstract public function getAge();
//     public function setAge($age){
//         $this->age=$age;
//     }
// }