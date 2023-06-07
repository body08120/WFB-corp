<?php
require_once('src/model/classes/User.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Instancier le UserRepository
    $userRepository = new UserRepository();

    // Vérifier si l'utilisateur existe
    $existingUser = $userRepository->getUserByEmail($email);
    if ($existingUser) {
        // Vérifier si le mot de passe est correct
        if ($userRepository->signin($email, $password)) {
            // L'utilisateur est connecté
            $_SESSION['user'] = $existingUser;

            // Rediriger vers une page de succès
            header('Location: ../../');
            exit();
        } else {
            // Mot de passe incorrect
            echo "Mot de passe incorrect.";
            exit();
        }
    } else {
        // Vérifier si les champs requis sont vides
        if (empty($email) || empty($password)) {
            echo "Veuillez remplir tous les champs.";
            exit();
        }

        // Vérifier si les mots de passe correspondent
        $name = $_POST['name'];
        $firstname = $_POST['firstname'];
        $confirmPassword = $_POST['verifmdp'];

        if ($password !== $confirmPassword) {
            echo "Les mots de passe ne correspondent pas.";
            exit();
        }

        // Vérifier si l'email est déjà utilisé
        $existingEmail = $userRepository->getUserByEmail($email);
        if ($existingEmail) {
            echo "Cet email est déjà utilisé par un autre utilisateur.";
            exit();
        }

        // Créer un nouvel utilisateur
        $user = new User();
        $user->setEmail($email);
        $user->setName($name);
        $user->setFirstName($firstname);
        $user->setPassword($password);

        // Inscrire l'utilisateur
        $userRepository->inscription($user);

        // Afficher un message de succès
        echo "Utilisateur enregistré avec succès : " . $user->getEmail();
    }
}
?>