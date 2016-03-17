<?php

require __DIR__ . '\..\function\sql.php';

function getListNews() {
    $query = 'SELECT * FROM `news` ORDER BY `date` DESC';
    connectSQL();
    $res = query($query);
    $result = getResultQuery($res);
    closeSQL();
    return $result;
}

function putNew($title, $new, $date) {
    $query = "INSERT INTO `news` (`title`, `new`, `date`) VALUES ('" . $title . "', '" . $new . "', '" . $date . "')";
    //echo $query; die;
    connectSQL();
    $result = query($query);
    closeSQL();
    return $result;
}