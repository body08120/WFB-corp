<?php
require_once('../model/classes/User.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $user = new User();
    
    $user->setEmail($email);
    $user->setPassword($password);


    $userRepository = new UserRepository();
    var_dump($userRepository->Signin($user));
}





?>
