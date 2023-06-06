<?php
require_once('Connect.php');

class User
{
    private $id_user;
    private $name;
    private $firstname;
    private $email;
    private $password;
    private $token;
    private $active;
    private $id_role;
    private $job_title;
    private $description;
    private $fb;
    private $twitter;
    private $linkedin;

    public function __construct()
    {

    }

    // Getters and setters
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFirstName(): string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getIdRole(): int
    {
        return $this->id_role;
    }

    public function setIdRole(int $id_role): void
    {
        $this->id_role = $id_role;
    }

    public function getToken(): string
    {
        return $this->token;
    }

    public function setToken(string $token): void
    {
        $this->token = $token;
    }

    public function getActive(): int
    {
        return $this->active;
    }

    public function setActive(int $active): void
    {
        $this->active = $active;
    }

    public function getIdUser(): int
    {
        return $this->id_user;
    }

    public function setIdUser(int $id_user): void
    {
        $this->id_user = $id_user;
    }

    public function getJobTitle(): string
    {
        return $this->job_title;
    }

    public function setJobTitle(string $job_title): void
    {
        $this->job_title = $job_title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getFb(): string
    {
        return $this->fb;
    }

    public function setFb(string $fb): void
    {
        $this->fb = $fb;
    }

    public function getTwitter(): string
    {
        return $this->twitter;
    }

    public function setTwitter(string $twitter): void
    {
        $this->twitter = $twitter;
    }

    public function getLinkedin(): string
    {
        return $this->linkedin;
    }

    public function setLinkedin(string $linkedin): void
    {
        $this->linkedin = $linkedin;
    }



}

class UserRepository extends Connect
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getUserByEmail($email)
    {
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE email = ?');
        $req->execute([$email]);
        $data = $req->fetch();

        if ($data !== false) {
            $user = new User();
            $user->setName($data['name']);
            $user->setFirstName($data['firstname']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setIdRole($data['id_role']);

            return $user;
        }

        return null;
    }

    public function Signin(User $user)
    {
        // if (!isset($_POST['email']) || $_POST['email'] === '') {
        //     return false;
        // }

        // if (!isset($_POST['password']) || strlen($_POST['password']) < 4) {
        //     return false;
        // }

        $req = $this->getDb()->prepare('SELECT * FROM users WHERE email =?');
        $req->execute([$user->getEmail()]);
        $data = $req->fetch(PDO::FETCH_ASSOC);
        var_dump($data);
        die();
        if ($data && password_verify($_POST['password'], $user->getPassword())) {
           echo 'connexion ok';
        } else {
            echo "connexion echouée";
        }
    }

   



    public function insertUser(User $user)
    {

        $req = $this->getDb()->prepare("INSERT INTO users (name, firstname, email, password, token, active, id_role, job_title, description, fb, twitter, linkedin)
    VALUES (?,?,?,?,?,?,?,?,?,?,?,?)");

        $req->execute([
            $user->getName(),
            $user->getFirstName(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getToken(),
            $user->getActive(),
            $user->getIdRole(),
            $user->getJobTitle(),
            $user->getDescription(),
            $user->getFb(),
            $user->getTwitter(),
            $user->getLinkedin()
        ]);
    }
}
?>