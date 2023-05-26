<?php

require_once 'src/model/config.php';
// Inclut le fichier de configuration

class User extends Connect
{
    private $pseudo;
    private $nom;
    private $prenom;
    private $password;
    private $code;

    // Définit les propriétés de la classe User

    public function __construct($pseudo, $nom, $prenom, $password, $code)
    {
        $this->pseudo = $pseudo;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->password = $password;
        $this->code = $code;
    }
    // Définit le constructeur de la classe User qui prend en paramètre les informations nécessaires pour créer un utilisateur

    public function register()
    {
        // $db = $this->getDb();
        $db = parent::getDb();
        // Obtient la connexion à la base de données à partir de l'objet Connect

        // Valider les champs du formulaire
        if (!$this->validateFields()) {
            return false;
        }
        // Valide les champs du formulaire en utilisant la méthode validateFields() et retourne false si la validation échoue

        // Vérifier si le pseudo est déjà utilisé
        if ($this->isPseudoTaken($db)) {
            return false;
        }
        // Vérifie si le pseudo est déjà utilisé en utilisant la méthode isPseudoTaken() et retourne false si le pseudo est pris

        // Hasher le mot de passe
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
        // Hash le mot de passe en utilisant la fonction password_hash() avec l'algorithme PASSWORD_DEFAULT

        // Insérer l'utilisateur dans la base de données
        $stmt = $db->prepare("INSERT INTO utilisateurs (pseudo, nom, prenom, mot_de_passe, code_admin) VALUES (:pseudo, :nom, :prenom, :password, :code)");
        $stmt->bindValue(':pseudo', $this->pseudo);
        $stmt->bindValue(':nom', $this->nom);
        $stmt->bindValue(':prenom', $this->prenom);
        $stmt->bindValue(':password', $hashedPassword);
        $stmt->bindValue(':code', $this->code);
        $stmt->execute();
        // Prépare et exécute une requête d'insertion pour insérer l'utilisateur dans la base de données

        return true; // L'inscription est réussie
    }

    private function validateFields()
    {
        // Valider que tous les champs du formulaire sont renseignés
        if (empty($this->pseudo) || empty($this->nom) || empty($this->prenom) || empty($this->password) || empty($this->code)) {
            return false;
        }
        // Vérifie si tous les champs du formulaire sont renseignés et retourne false si l'un des champs est vide

        // Valider le mot de passe
        if ($this->password !== $_POST["verifmdp"]) {
            return false;
        }
        // Vérifie si le mot de passe correspond à sa vérification en comparant les valeurs et retourne false si elles ne correspondent pas

        // Autres validations si nécessaire

        return true;
    }

    private function isPseudoTaken($db)
    {
        $stmt = $db->prepare("SELECT COUNT(*) as count FROM utilisateurs WHERE pseudo = :pseudo");
        $stmt->bindValue(':pseudo', $this->pseudo);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Prépare et exécute une requête pour compter le nombre d'utilisateurs avec le même pseudo

        if ($result['count'] > 0) {
            return true; // Le pseudo est déjà utilisé
        }

        return false; // Le pseudo est disponible
    }

    public function authenticate()
    {
        $db = parent::getDb();
        // Obtient la connexion à la base de données à partir de l'objet Connect

        // Valider les champs du formulaire
        if (!$this->validateFields()) {
            return false;
        }
        // Valide les champs du formulaire en utilisant la méthode validateFields() et retourne false si la validation échoue

        // Requête préparée pour rechercher l'utilisateur
        $stmt = $db->prepare("SELECT mot_de_passe FROM utilisateurs WHERE pseudo = :pseudo");
        $stmt->bindValue(':pseudo', $this->pseudo);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        // Prépare et exécute une requête pour obtenir le mot de passe de l'utilisateur correspondant au pseudo

        if (!$result || !password_verify($this->password, $result['mot_de_passe'])) {
            return false; // L'authentification a échoué
        }
        // Vérifie si le résultat de la requête est vide ou si le mot de passe ne correspond pas au mot de passe haché en utilisant password_verify()

        return true; // L'utilisateur est authentifié
    }
}

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $pseudo = isset($_POST["pseudo"]) ? trim($_POST["pseudo"]) : '';
    $nom = isset($_POST["nom"]) ? trim($_POST["nom"]) : '';
    $prenom = isset($_POST["prenom"]) ? trim($_POST["prenom"]) : '';
    $password = isset($_POST["mdp"]) ? $_POST["mdp"] : '';
    $verifmdp = isset($_POST["verifmdp"]) ? $_POST["verifmdp"] : '';
    $code = isset($_POST["code"]) ? trim($_POST["code"]) : '';
    // Récupère les valeurs des champs du formulaire soumis en utilisant isset() et trim() pour nettoyer les espaces

    $user = new User($pseudo, $nom, $prenom, $password, $code);
    // Crée une nouvelle instance de la classe User en passant les valeurs récupérées du formulaire

    if ($user->register()) {
        echo "Inscription réussie!";
    } else {
        echo "Échec de l'inscription. Veuillez vérifier les informations fournies.";
    }
    // Appelle la méthode register() de l'objet User et affiche un message en fonction du résultat
}

// Vérifier si le formulaire d'authentification a été soumis
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $pseudo = isset($_POST["pseudo"]) ? $_POST["pseudo"] : '';
    $password = isset($_POST["mdp"]) ? $_POST["mdp"] : '';
    // Récupère les valeurs des champs du formulaire soumis en utilisant isset()

    $user = new User($pseudo, '', '', $password, '');
    // Crée une nouvelle instance de la classe User en passant les valeurs récupérées du formulaire

    if ($user->authenticate()) {
        echo "Authentification réussie!";
    } else {
        echo "Échec de l'authentification!";
    }
    // Appelle la méthode authenticate() de l'objet User et affiche un message en fonction du résultat
}
