<?php
require __DIR__ . '\modul\database.php';

$listNews = getListNews();

include __DIR__ . '\view\index.php';






?>