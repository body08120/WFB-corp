<?php
require_once('Connect.php');
class User
{
    private $id_user;
    private string $name;
    private string $firstname;
    private string $email;
    private string $password;
    private string $token;
    private int $active;
    private int $id_role;
    private string $job_title;
    private string $description;
    private string $fb;
    private string $twitter;
    private string $linkedin;

    public function __construct(){
        
    }

    public function createToSignin(array $userForm):bool
    {
        if(!isset($userForm['name']) OR $userForm['name'] == ''){
            
            return false;
        }
        if(!isset($userForm['firstname']) OR $userForm['firstname'] == ''){
     
            return false;
        }
        if(!isset($userForm['email']) OR $userForm['email'] == ''){

            return false;
        }
        if(isset($userForm['password']) OR strlen($userForm['password'])>=4 && $userForm['verfifmdp'] == $userForm['password']){

            $this->password = $userForm['password'];
        }else{

            return false;
        }

        $this->name = $userForm['name'];
        $this->firstname = $userForm['firstname'];
        $this->email = $userForm['email'];

        return true;
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
    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->firstname;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getIdRole(): string
    {
        return $this->id_role;
    }

    public function setIdRole(int $id_role): void
    {
        $this->id_role = $id_role;
    }

}

class UserRepository extends Connect 
{
    public function __construct(){
        parent::__construct();
    }


    public function getUserByEmail($email){
        $req = $this->getDb()->prepare('SELECT * FROM users WHERE email = ?');
        $req->execute([$email]);
        $data = $req->fetch();
        if ($data !== false) {
            $user = new User();
            $user->setName($data['name']);
            $user->setFirstname($data['firstname']);
            $user->setEmail($data['email']);
            $user->setPassword($data['password']);
            $user->setIdRole($data['id_role']);

            return $user;
        } else {
            return [];
        }
    }

    public function insertUser(User $user){
        $req = $this->db->prepare("INSERT INTO users (name, firstname, email, password, id_role)
        VALUES (?,?,?,?,?)");
        $req->execute([
            $user->getName(),
            $user->getFirstname(),
            $user->getEmail(),
            $user->getPassword(),
            2
        ]);
    } 
}


?>