<?php
require('./model/users.php');

function listUsers(){
    $users = getUsers();
    require('./view/listUsersView.php');
}

function login(){
    // Vérfie si déjà connecter et le redirige vers l'admin
    if(isset($_SESSION['user_id']))
    {
        require('./view/adminView.php');
    } elseif (!empty($_POST['username']) && !empty($_POST['password']))
    {
        // Vérfie si l'utilisateur existe et que le mot de passe correspond 
        $user = getUser($_POST['username']);
        if(!empty($user) && password_verify(htmlspecialchars($_POST['password']), $user['password']))
        {
            // ajout a la session l'id de l'utilisateur
            $_SESSION['user_id']=$user['id'];
            require('./view/adminView.php');
        }else
        {
            print_r('Error utilisateur pas connu ou mot de passe incorrect');
        }
    }else
    {
        require('./view/loginView.php');
    }
}

function admin(){
    require('./view/adminView.php');
}

function addAdmin(){
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        $username = htmlspecialchars($_POST['username']);
        $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
        createAdmin(array($username,$hashpassword));
        require('./view/adminView.php');
    }else
    {
        require('./view/addAdminView.php');
    }

}

?>