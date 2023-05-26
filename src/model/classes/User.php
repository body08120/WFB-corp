<?php

require_once 'src/model/config.php';
// Inclut le fichier de configuration


class User extends Connect
{
    private $firstname;
    private $name;
    private $email;
    private $password;
    private $code;

    // Définit les propriétés de la classe User
    public function __construct($firstname, $name, $email, $password, $code)
    {
        $this->firstname = $firstname;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->code = $code;
    }
    // Définit le constructeur de la classe User qui prend en paramètre les informations nécessaires pour créer un utilisateur

    public function register()
    {
        $db = parent::getDb(); // Equivaut à $db = $this->getDb();

        // Valider les champs du formulaire en utilisant la méthode validateFields() et retourne false si la validation échoue
        if (!$this->validateFields()) {
            return false;
        }

        // Vérifier si l'email est déjà utilisé en utilisant la méthode isEmailTaken() et retourne false si le firstname est pris
        if ($this->isEmailTaken($db)) {
            return false;
        }

        // Hasher le mot de passe en utilisant la fonction password_hash() avec l'algorithme PASSWORD_DEFAULT
        $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);

        // Insérer l'utilisateur dans la base de données : Prépare et exécute une requête d'insertion pour insérer l'utilisateur dans la base de données
        $stmt = $db->prepare("INSERT INTO users (firstname, name, email, password, code_admin) VALUES (:firstname, :name, :email, :password, :code)");
        $stmt->bindParam(':firstname', $this->firstname);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':password', $hashedPassword);
        $stmt->bindParam(':code', $this->code);

        if (!$stmt->execute()) {
            return false;
        }

        return true; // L'inscription est réussie
    }

    private function validateFields()
    {
        // Valider que tous les champs du formulaire sont renseignés
        if (empty($this->firstname) || empty($this->name) || empty($this->email) || empty($this->password) || empty($this->code)) {
            return false;
        }

        // Vérifie si tous les champs du formulaire sont renseignés et retourne false si l'un des champs est vide
        if ($this->password !== $_POST["verifmdp"]) {
            return false; // Vérification que si le mot de passe et la confirmation du mot de passe n'est pas strictement égal retournera false
        }

        // Vérifier si l'email est valide 
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }

    // Véfifier que l'email n'est pas existant dans la base de données
    private function isEmailTaken($db)
    {
        $stmt = $db->prepare("SELECT COUNT(*) as count FROM users WHERE email = :email");
        $stmt->bindParam(':email', $this->email);

        if (!$stmt->execute()) {
            return true; // Si la réquête échoue , nous supposerons que l'email est pris 
        }

        //on va fetcher sur la bdd et si on compte plus de 0 même emails donc true: l'email est déjà utilisé
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result['count'] > 0) {
            return true;
        }

        return false; // l'email n'existe pas dans le bdd
    }

    public function authenticate()
    {
        // Connexion à la base de données à partir de l'objet Connect (qui est parent)
        $db = parent::getDb();

        // Valider les champs du formulaire en utilisant la méthode validateFields() et retourne false si la validation échoue
        if (!$this->validateFields()) {
            return false;
        }

        // Requête préparée pour rechercher l'utilisateur : Prépare et exécute une requête pour obtenir le mot de passe de l'utilisateur correspondant au email

        $stmt = $db->prepare("SELECT password FROM users WHERE email = :email");
        $stmt->bindParam(':email', $this->email);

        if (!$stmt->execute()) {
            return false; // L'authentification a échoué si l'exécution échoue
        }

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$result || !password_verify($this->password, $result['password'])) {
            return false; // si il n'y a pas de résultat OU si les deux mots de passes ne correspondent pas alors --> L'authentification a échouée
        }

        return true; // L'utilisateur est authentifié
    }
}

// Vérifier si le formulaire d'inscription a été soumis : Récupère les valeurs des champs du formulaire soumis en utilisant isset() et trim() pour nettoyer les espaces
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $firstname = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : '';
    $name = isset($_POST["name"]) ? trim($_POST["name"]) : '';
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    $password = isset($_POST["mdp"]) ? $_POST["mdp"] : '';
    $verifmdp = isset($_POST["verifmdp"]) ? $_POST["verifmdp"] : '';
    $code = isset($_POST["code"]) ? trim($_POST["code"]) : '';

    // Crée une nouvelle instance de la classe User en passant les valeurs récupérées du formulaire
    $user = new User($firstname, $name, $email, $password, $code);
    $registrationStatus = $user->register(); // Appelle la méthode register() de l'objet User et affiche un message en fonction du résultat

    if ($registrationStatus) {
        echo "Inscription réussie !";
    } else {
        echo "Échec de l'inscription. Veuillez vérifier les informations fournies.";
    }
}

// Vérifier si le formulaire d'authentification a été soumis : Récupère les valeurs des champs du formulaire soumis en utilisant isset()
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["login"])) {
    $email = isset($_POST["email"]) ? trim($_POST["email"]) : '';
    $password = isset($_POST["mdp"]) ? $_POST["mdp"] : '';

    // Crée une nouvelle instance de la classe User en passant les valeurs récupérées du formulaire
    $user = new User('', '', $email, $password, '');
    $authenticationStatus = $user->authenticate();

    if ($authenticationStatus) {
        echo "Authentification réussie.";
    } else {
        echo "Identifiants incorrects.";
    }
}
?>
