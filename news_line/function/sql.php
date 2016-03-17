<?php
function connectSQL() {
    $table = 'news';
    $host = 'localhost';
    $user = 'root';
    $password = '637239';

    mysql_connect($host, $user, $password);
    mysql_select_db($table);
}

function closeSQL() {
    mysql_close();
}

function query($query) {
    return mysql_query($query);
}

function getResultQuery($res) {
    $result = [];
    while($r = mysql_fetch_assoc($res)) {
        $result[] = $r;
    }
    return $result;
}