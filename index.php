<?php

require('./controller/animals.php');
require('./controller/users.php');

require('config.php');

session_start();

include('head.php');

// Routeur
if (isset($_GET['action']))
{
    match ($_GET['action']) 
    {
        'listAnimals' => listAnimals(),
        'animalView' => animalView(),
        'home' => listAnimalsLast(),
        'login' => login(),
        'admin' => admin(),
        'listUsers' => listUsers(),
        'addAdmin' => addAdmin(),
        'addAnimal' => addAnimal(),
        default => listAnimalsLast(),
    };
}
else 
{
    listAnimalsLast();
}

include('footer.php')
?>