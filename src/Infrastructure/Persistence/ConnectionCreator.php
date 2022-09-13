<?php

namespace Alura\Pdo\Infrastructure\Persistence;

use PDO;

class ConnectionCreator
{
    public static function createConnection(): PDO
    {
        $dns = 'mysql:host=localhost;dbname=students';
        $user = 'administrador';
        $password = 'mYVbI)ZiUShCF0]f';

        return new PDO($dns, $user, $password);      
    }
}
