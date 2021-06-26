<?php

$pdo = require_once __DIR__ . '/../config/pdo.php';

function dbGetAll($sql, array $params = []) : array
{
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll();
}

function dbGetOne($sql, array $params = [])
{
    global $pdo;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch();
}