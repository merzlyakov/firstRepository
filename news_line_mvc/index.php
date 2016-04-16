<?php

require_once __DIR__ . '/autoload.php';

$contr = (isset($_GET['contr'])) ? $_GET['contr'] : 'News';
$act = (isset($_GET['act'])) ? $_GET['act'] : 'All';

$NameController = 'controller' . $contr;

$controller = new $NameController;

$method = 'action' . $act;

$controller->$method();
