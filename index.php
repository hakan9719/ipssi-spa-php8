<?php

require('./controller/animals.php');
require('./controller/users.php');

require('config.php');

session_start();

include('head.php');

// Routeur
if (isset($_GET['action'])) {

    match ($_GET['action']) {
        'listAnimals' => listAnimals(),
        'animal' => animal(),
        'home' => listAnimalsLast(),
        'login' => login(),
        'admin' => admin(),
        'listUsers' => users(),
        'addAdmin' => addAdmin(),
        'addAnimal' => addAnimal(),
        default => listAnimalsLast(),
    };
}
else {
    listAnimalsLast();
}

include('footer.php')
?>