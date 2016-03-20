<?php

class NewsArcticle extends Article
{
    public $id;
    public $title;
    public $new;
    public $date;

    public static $database = 'news';
    public static $table = 'news';
    public static $class = 'NewsArticle';
}