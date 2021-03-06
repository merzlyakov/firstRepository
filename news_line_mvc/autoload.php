<?php

function __autoload ($class) {
    if (file_exists(__DIR__ . '/views/' . $class . '.php')) {
        require_once __DIR__ . '/views/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/moduls/' . $class . '.php')) {
        require_once __DIR__ . '/moduls/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/controllers/' . $class . '.php')) {
        require_once __DIR__ . '/controllers/' . $class . '.php';
    }
    if (file_exists(__DIR__ . '/classes/' . $class . '.php')) {
        require_once __DIR__ . '/classes/' . $class . '.php';
    }
}