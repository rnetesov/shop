<?php

function getAllCategories()
{
    $rows = dbGetAll('SELECT * FROM categories');
    $result = [];
    foreach ($rows as $row) {
        $result[$row['id']] = $row;
    }
    return $result;
}

function getTreeCategories()
{
    $dataset = getAllCategories();
    $tree = array();
    foreach ($dataset as $id => &$node) {
        if (!$node['parent']) {
            $tree[$id] = &$node;
        } else {
            $dataset[$node['parent']]['children'][$id] = &$node;
        }
    }
    return $tree;
}

function getChildCategories(int $id): array
{
    $sql = 'SELECT * FROM categories WHERE ';

    if ($id == 0) {
        $sql .= 'parent is NULL';
        $rows = dbGetAll($sql);
    } else {
        $sql .= 'parent=?';
        $rows = dbGetAll($sql, [$id]);
    }

    return $rows;
}

function getCategoryId()
{
    $id = $_GET['id'] ?? null;

    if (empty($id)|| !is_numeric($id) ) {
        $id = 0;
    }
    return $id;
}

function getCategoryById($id)
{
    $sql = 'SELECT * FROM categories WHERE id = ?';
    return dbGetOne($sql, [$id]);
}
