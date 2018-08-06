<?php
require_once 'connect.php';

function getNews($limit, $id)
{
    global $db;
    connectDB();
    $where = $id ? "WHERE `id` = " . $id : "";
    $result = $db->query("SELECT * FROM news $where ORDER BY id DESC LIMIT $limit");

    closeDB();
    if (!$id)
        return resultToArray($result);
    else
        return $result->fetchArray();
}

function resultToArray($result)
{
    $array = array();
    while ($row = $result->fetchArray())
        $array[] = $row;
    return $array;
}
