<?php
session_start();
require_once('src/controller/homeController.php');


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
        default:
            homepage();
            break;
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