<?php
session_start();


if (isset($_GET['action']) && $_GET['action'] !== '') {
    switch ($_GET['action']) {
        case 'presentation':
            require_once('src/controller/presentation.php');
            require_once('view/presentation.php');
            break;
        case 'articles':
            require_once('src/controller/articles.php');
            require_once('view/articles.php');
            break;
        case 'article':
            require_once('src/controller/article.php');
            require_once('view/article.php');
            break;
        case 'realisations':
            require_once('src/controller/realisations.php');
            require_once('view/realisations.php');
            break;
        // génère la home si aucun des cases n'est trouvé
        default:
            require_once('view/accueil.php');
            break;
    }
} else {
    if(!empty($_POST))
    {
        require_once('src/controller/contact_ttt.php');
    }
    else
    {
        require_once('view/accueil.php');
    }
}
?>