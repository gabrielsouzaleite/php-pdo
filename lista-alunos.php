<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query('SELECT * FROM students;');

// while ($studentData = $statement->fetch(PDO::FETCH_ASSOC)){
//     $student = new Student(
//         $studentData['id'],
//         $studentData['name'],
//         new DateTimeImmutable($studentData['birth_date'])
//     );

//     echo $student->name() . PHP_EOL;
// }

// exit();

$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

var_dump($studentDataList); exit();

foreach ($studentDataList as $studentData){
    $studentList[] = new Student(
        $studentData['id'],
        $studentData['name'],
        new DateTimeImmutable($studentData['birth_date'])
    );
}



var_dump($studentList);