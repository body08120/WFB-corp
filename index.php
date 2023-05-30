<?php
session_start();
require_once('src/controller/homeController.php');
require_once('src/controller/adminController.php');



if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch ($_GET['action']) {
        case 'presentation':
            vuePresentation();
            break;
        case 'articles':
            vueArticles();
            break;
        case 'article':
            vueArticle();
            break;
        case 'login':
            vueLogin();
            break;
        case 'realisations':
            vueRealisations();
            break;
        // génère la home si aucun des cases n'est trouvé
    }
} elseif (isset($_GET['admin']) && $_GET['admin'] !== '') {
    //role rentrer en dur pour acceder panel admin
    $_SESSION['role_user'] = 2;
    if (isset($_SESSION['role_user'])) {
        switch ($_GET['admin']) {
            case 'administration':
                panelAdmin();
                break;
        }
    } else {
        homepage();
    }
} else {
    if (!empty($_POST['contact'])) {
        require_once('src/model/classes/Contact.php');
    } elseif (!empty($_POST['login'])) {
        require_once('src/model/classes/User.php');
    } elseif (!empty($_POST['signup'])) {
        require_once('src/model/classes/User.php');
    } else {
        homepage();
    }
}
?>