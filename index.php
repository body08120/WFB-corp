<?php
session_start();
require_once('src/controller/presentation.php');
if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch($_GET['action']) {
        case 'presentation':
            presentation();
            break;
        default:
            // homepage();
            // break;
    }
}


?>