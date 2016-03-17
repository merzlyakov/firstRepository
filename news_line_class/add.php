<?php
require __DIR__ . '\modul\database.php';
if (isset($_POST['title']) && isset($_POST['new']) && isset($_POST['date'])) {
    $data = new Database();
    $res = $data->putNew($_POST['title'], $_POST['new'], $_POST['date']);
}

include __DIR__ . '\view\add.php';




?>