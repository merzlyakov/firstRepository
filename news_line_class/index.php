<?php
require __DIR__ . '\modul\database.php';
$data = new Database();
$listNews = $data->getListNews();

include __DIR__ . '\view\index.php';






?>