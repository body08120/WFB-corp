<?php
session_start();
require_once('src/controller/accueil.php');
require_once('src/controller/presentation.php');

if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch ($_GET['action']) {
        case 'presentation':
            presentationVue();
            break;
        // génère la home si aucun des cases n'est trouvé
        default:
            homepage();
            break;
    }
} else {
    // Génère la home
    homepage();
}
?>