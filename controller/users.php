<?php
require('./model/users.php');

function users(){
    $users = getUsers();
    require('./view/listUsersView.php');
}

function login(){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $user = getUser($_POST['username']);
        if(!empty($user) && password_verify(htmlspecialchars($_POST['password']), $user['password'])){
            $_SESSION['user_id']=$user['id'];
            header("Location: ./view/adminView.php");
        }else{
            print_r('Error utilisateur pas connu ou mot de passe incorrect');
        }
    }
    require('./view/loginView.php');
}

function admin(){
    require('./view/adminView.php');
}

function addAdmin(){
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = htmlspecialchars($_POST['username']);
        $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        createAdmin(array($username,$hashpassword));
        header("Location: ./view/adminView.php");
    }
    require('./view/addAdminView.php');

}

?>