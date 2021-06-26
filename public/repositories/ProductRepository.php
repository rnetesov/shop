<?php


function getAllProducts()
{
    $sql = 'SELECT id, title, category_id, price, old_price, img, status FROM products';
    return dbGetAll($sql);
}

function getLastAddedProducts($limit = null): array
{
    $sql = 'SELECT * FROM products ORDER BY id DESC ';

    if (!empty($limit)) {
        $sql .= 'LIMIT ' . $limit;
    }

    return dbGetAll($sql);
}

function getProductsByCategory(int $id)
{
    $sql = 'SELECT * FROM products WHERE category_id = ?';
    $rows = dbGetAll($sql, [$id]);

    return $rows;
}

function getProductById($id)
{
    $sql = 'SELECT * FROM products WHERE id = ?';
    return dbGetOne($sql, [$id]);
}

function getProductId()
{
    $id = $_GET['id'] ?? null;
    if (empty($id) || !is_numeric($id)) {
        return 0;
    }
    return $id;
}