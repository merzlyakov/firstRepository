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

function getQuery($sql) {
    connectSQL();
    $res = query($sql);
    $result = getResultQuery($res);
    closeSQL();
    return $result;
}

function putQuery($sql) {
    connectSQL();
    $result = query($sql);
    closeSQL();
    return $result;
}