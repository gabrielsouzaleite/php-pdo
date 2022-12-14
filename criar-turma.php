<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\Persistence\ConnectionCreator;
use Alura\Pdo\Infrastructure\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

$connection->beginTransaction();
try {
  $aStudent = new Student(
    null,
    'Thigozzo Nakara',
    new DateTimeImmutable('2022-05-05')
  );

  $studentRepository->save($aStudent);

  $bStudent = new Student(
    null,
    'Teuku Myadora',
    new DateTimeImmutable('2022-09-14')
  );

  $studentRepository->save($bStudent);

  $connection->commit();
} catch (RuntimeException $e) {
  echo $e->getMessage();
  $connection->commit();
}
