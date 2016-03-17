<?php

require __DIR__ . '\modul\database.php';

if (!empty($_GET['id'])) {
    $fullNew = getNew($_GET['id']);
}


include __DIR__ . '\view\fullNews.php';

?>