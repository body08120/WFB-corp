<?php
session_start();
require_once('src/controller/accueil.php');
require_once('src/controller/presentation.php');
require_once('src/controller/articles.php');
require_once('src/controller/article.php');


if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch ($_GET['action']) {
        case 'presentation':
            presentationVue();
            break;
        case 'articles':
            articlesVue();
            break;
        case 'article':
            articleVue();
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