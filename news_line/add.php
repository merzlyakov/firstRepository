<?php
require __DIR__ . '\modul\database.php';
if (isset($_POST['title']) && isset($_POST['new']) && isset($_POST['date'])) {
    $res = putNew($_POST['title'], $_POST['new'], $_POST['date']);
}

include __DIR__ . '\view\add.php';




?>