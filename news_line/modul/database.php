<?php

require __DIR__ . '\..\function\sql.php';

function getListNews() {
    $query = 'SELECT * FROM `news` ORDER BY `date` DESC';
    return getQuery($query);
}

function putNew($title, $new, $date) {
    $query = "INSERT INTO `news` (`title`, `new`, `date`) VALUES ('" . $title . "', '" . $new . "', '" . $date . "')";
    return putQuery($query);
}

function getNew($id) {
    $query = "SELECT * FROM `news` WHERE id=" . $id;
    $res = getQuery($query);
    return $res[0];
}