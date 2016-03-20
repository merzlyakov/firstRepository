<?php

abstract class Article
{
    protected static $database;
    protected static $table;
    protected static $class;

    public static function getAllNews () {
        $db = new DB(static::$database);
        $query = "SELECT * FROM `" . static::$table . "` ORDER BY `date` DESC";
        return $db->getQuery($query, static::class);
    }

    public static function getOneNew ($id) {
        $db = new DB(static::$database);
        $query = "SELECT * FROM " . static::$table . " WHERE id=" . $id;
        return $db->getQuery($query, static::class)[0];
    }

    public static function putNew($title, $new, $date) {
        $db = new DB(static::$database);
        $query = "INSERT INTO " . static::$table . " (`title`, `new`, `date`) VALUES ('" . $title . "', '" . $new . "', '" . $date . "')";
        return $db->putQuery($query);
    }
}