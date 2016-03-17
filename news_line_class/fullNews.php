<?php

require __DIR__ . '\modul\database.php';

if (!empty($_GET['id'])) {
    $data = new Database();
    $fullNew = $data->getNew($_GET['id']);
}


include __DIR__ . '\view\fullNews.php';

?>