<?php

abstract class Article {
    public $title;
    public $new;
    public $date;
}

class News extends Article {
    public $id;
    public function __construct($resQuery) {
        $this->id = $resQuery['id'];
        $this->title = $resQuery['title'];
        $this->new = $resQuery['new'];
        $this->date = $resQuery['date'];
    }
}