<?php
require_once('./entities/interfaces/iPerson.php');
require_once('./entities/Person.php');
require_once('./controllers/Person.php');
require_once('./entities/Student.php');

use entities\Student as Student;

$nombre = 'Fulanito';
$nombre .= ' y Venganito';
$numbers = [1, 2, 3];
$numbers[] = 4;
array_push($numbers, 5);
//numbers.push(4)
foreach ($numbers as $number) {
  echo $number . '</br>';
}
#esto es un comment
// nombre.split().join('-')
// echo '<h1>Hola ' . join('-',str_split ($nombre)) . '</h1>';
echo strlen($nombre);

echo '<br/><br/>';
$rafa = new Student('Rafa', 25);
$conrado = new Student('Conrado', 25);
$jeimy = new Student('Jeimy', 25);
echo 'Usuarios:' . Student::$users;
echo '<br/>';
echo $rafa->getName();
echo '<br/>';
echo $rafa->getAge();
echo '<br/>';
echo $rafa->id . '<br/>';
echo $conrado->id . '<br/>';
echo $jeimy->id . '<br/>';
