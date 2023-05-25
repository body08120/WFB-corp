<?php 

//////////  Traitement Formulaire de contact /////////////////////////

// Démarrer la session

// Générer un jeton CSRF et le stocker dans la variable de session
// if (!isset($_SESSION['csrf_token'])) {
//     $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
// }

// // Vérifier si la requête est de type POST
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Vérifier si le jeton CSRF est présent et correspond à celui stocké dans la variable de session
//     if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
//         // Jeton CSRF invalide, traitement de l'erreur (redirection, message d'erreur, etc.)
//         die("Erreur de sécurité : Jeton CSRF invalide.");
//     }

//     // Le jeton CSRF est valide, vous pouvez continuer à traiter les données du formulaire
//     // ...

//     // Réinitialiser le jeton CSRF pour empêcher les attaques ultérieures
//     unset($_SESSION['csrf_token']);
// }

if(!empty($_POST))
{
    // On récupère les données du formulaire, avec TRIM qui supprime les espaces vide etc.

    $nom = trim($_POST['nom-user']);
    $mail = trim($_POST['mail-user']);
    $motif = trim($_POST['motif']);
    $message = trim($_POST['message']);
}

// ____________________

/*Vérifie si l'adresse mail est au bon format */
$regex_mail = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
/*Verifie qu il n y est pas d en tête dans les données*/
$regex_head = '/[nr]/';

/*Vérifie qu il n y est pas d erreur dans adresse mail*/
if (!preg_match($regex_mail, $mail)) {
    $alert = sprintf("L'adresse %s n'est pas valide", $mail);
} else {
    $courriel = 1;
}
/* On affiche l'erreur s'il y en a une */
if (!empty($alert)) {
    $courriel = 0;
    // echo $alert;
}


// // On vérifie qu'il n'y ai pas de header dans les champs
// if (
//     preg_match($regex_head, $nom)
//     || preg_match($regex_head, $mail)
//     || preg_match($regex_head, $motif)
//     || preg_match($regex_head, $message)
// ) {
//     $alert = 'En-têtes interdites dans les champs du formulaire';
// } else {
//     $header = 1;
// }
// /* On affiche l'erreur s'il y en a une */
// if (!empty($alert)) {
//     $header = 0;
// }

// var_dump($header);
// die();

if (
    empty($nom)
    || empty($mail)
    || empty($message)
) {
    $alert = 'Tous les champs doivent être renseignés';
} else {
    $renseigne = 1;
}
/* On affiche l'erreur s'il y en a une */
if (!empty($alert)) {
    $renseigne = 0;
}

/* Si les variables sont bonne */
if ($renseigne == 1 and $courriel == 1) {
    /*Envoi du mail*/

    /*Le destinataire*/
    $to = "nataeel08120@gmail.com";

    /*Le sujet du message qui apparaitra*/
    $sujet = "Message depuis le site";
    $msg = '';

    /*Le message en lui-même*/
    /*$msg = 'Mail envoyé depuis le site'."\r\n\r\n";*/
    $msg .= 'Nom : ' . $nom . "\r\n\r\n";
    $msg .= 'Mail : ' . $mail . "\r\n\r\n";
    $msg .= 'Motif : ' . $motif . "\r\n\r\n";
    $msg .= 'Message : ' . $message . "\r\n\r\n";


    /*Les en-têtes du mail*/
    $headers = sprintf('From: MESSAGE DU SITE WFB-CORP <nataeel08120@gmail.com>%s%s', "\r\n", "\r\n");
    // $headers .= "rn";

    /*L'envoi du mail - Et page de redirection*/
    mail($to, $sujet, $msg, $headers);
    // echo "succes";
    header('Location:http://www.localhost/WFB-CORP/index.php');
} else {
    echo "error";
    // header('Location:http://www.localhost/WFB-CORP/index.php');
}
?>


