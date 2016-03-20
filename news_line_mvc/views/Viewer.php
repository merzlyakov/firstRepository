<?php


class Viewer
{
    protected $data = [];

    public function display($path) {
        foreach($this->data as $key => $value) {
            $$key = $value;
        }
        include __DIR__ . '\News\\' . $path;
    }

    public function __set($key, $value) {
        $this->data[$key] = $value;
    }

    public function __get($key)
    {
        return $this->data[$key];
    }
}