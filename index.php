<?php
require_once('./entities/interfaces/iPerson.php');
require_once('./entities/Person.php');
require_once('./controllers/Person.php');
require_once('./entities/Student.php');

// use entities\Student as Student;

// $nombre = 'Fulanito';
// $nombre .= ' y Venganito';
#esto es un comment
// nombre.split().join('-')
// echo '<h1>Hola ' . join('-',str_split ($nombre)) . '</h1>';
// echo strlen($nombre);

// echo '<br/><br/>';
// $rafa = new Student('Rafa', 25);
// $conrado = new Student('Conrado', 25);
// $jeimy = new Student('Jeimy', 25);
// echo 'Usuarios:' . Student::$users;
// echo '<br/>';
// echo $rafa->getName();
// echo '<br/>';
// echo $rafa->getAge();
// echo '<br/>';
// echo $rafa->id . '<br/>';
// echo $conrado->id . '<br/>';
// echo $jeimy->id . '<br/>';

// $numbers = [1, 2, 3];
// $numbers[] = 4;
// array_push($numbers, 5);
// // numbers.push(4)
// $numbers = array_reverse($numbers);
// // numbers=numbers.reverse()
// array_unshift($numbers, 0);
// // numbers.unshift(0)
// // $numbers = array_filter($numbers,function ($number)//versiones anteriores a la 7.4
// // {
// //   return $number % 2 === 0;
// // });
// $numbers2 = [100, 200, 300];
// $numbers = array_filter($numbers, fn ($number) => $number % 2 !== 0);
// $numbers = [...$numbers, ...$numbers2];
// foreach ($numbers as $number) {
//     echo $number . '</br>';
// }
