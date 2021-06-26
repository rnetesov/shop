<?php

//db connection params
const DB = [
    'username' => 'root',
    'password' => '1234',
    'dsn' => 'mysql:host=localhost;dbname=shop',
    'params' => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
];

$pdo = new PDO(DB['dsn'], DB['username'], DB['password'], DB['params']);

return $pdo;

