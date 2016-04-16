<?php

class Database {

    public function getListNews() {
        $query = 'SELECT * FROM `news` ORDER BY `date` DESC';
        return $this->getQuery($query);
    }

    public function putNew($title, $new, $date) {
        $query = "INSERT INTO `news` (`title`, `new`, `date`) VALUES ('" . $title . "', '" . $new . "', '" . $date . "')";
        return $this->putQuery($query);
    }

    public function getNew($id) {
        $query = "SELECT * FROM `news` WHERE id=" . $id;
        $res = $this->getQuery($query);
        return $res[0];
    }

    private function connectSQL() {
        $table = 'news';
        $host = 'localhost';
        $user = 'root';
        $password = '637239';

        mysql_connect($host, $user, $password);
        mysql_select_db($table);
    }

    private function closeSQL() {
        mysql_close();
    }

    private function query($query) {
        return mysql_query($query);
    }

    private function getResultQuery($res) {
        $result = [];
        while($r = mysql_fetch_assoc($res)) {
            $result[] = $r;
        }
        return $result;
    }

    private function getQuery($sql) {
        $this->connectSQL();
        $res = $this->query($sql);
        $result = $this->getResultQuery($res);
        $this->closeSQL();
        return $result;
    }

    private function putQuery($sql) {
        $this->connectSQL();
        $result = $this->query($sql);
        $this->closeSQL();
        return $result;
    }

    public function __construct() {

    }
}
