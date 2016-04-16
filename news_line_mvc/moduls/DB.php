<?php

class DB {

    private function connectSQL($table) {
        $host = 'localhost';
        $user = 'root';
        $password = '637239';

        mysql_connect($host, $user, $password);
        mysql_select_db($table);
    }

    public function __construct($table) {
        $this->connectSQL($table);
    }

    public function getQuery($sql, $class = 'stdClass') {
        $res = mysql_query($sql);
        if ($res === false) {
            return false;
        }
        $result = [];
        while($r = mysql_fetch_object($res, $class)) {
            $result[] = $r;
        }
        return $result;
    }

    public function putQuery($sql) {
        $result = mysql_query($sql);
        return $result;
    }
}
