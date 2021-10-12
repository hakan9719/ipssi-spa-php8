<?php
require('./model/animals.php');

function animalView(){
    if (isset($_GET['id']) && $_GET['id'] > 0)
    {
        $animal = getAnimal($_GET['id']);
        require('./view/animalView.php');
    }
}

function listAnimals(){
    $animals = getAnimalsAvailable();
    require('./view/listAnimalsView.php');
}

function listAnimalsLast(){
    $animals = getAnimals();

    // Ajoute les animaux qui ont été ajouter il y a plus de 30 jours
    $current_date = new DateTime('now');
    $view = [];
    foreach ($animals as $key => $animal)
    {
        $date_created = new DateTime($animal['date']);
        $interval = $date_created->diff($current_date)->days;
        $view[] = $interval < 30 ? $animal : null;
    }

    require('./view/listLastAnimalsView.php');
}

function addAnimal(){
    if(!empty($_POST['name']) && !empty($_POST['race']) && !empty($_POST['color']) && !empty($_POST['postal_code']))
    {
        // Un peu de sécurité
        $name = htmlspecialchars($_POST['name']);
        $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']): null;
        $race = htmlspecialchars($_POST['race']);
        $color = htmlspecialchars($_POST['color']);
        $description = isset($_POST['description'])?htmlspecialchars($_POST['description']):null;
        $postal_code = (int)($_POST['postal_code']);
        
        // Upload image de l'animal
        if(isset($_FILES['image']))
        {
            move_uploaded_file($_FILES['image']['tmp_name'],'./img/'.$_FILES['image']['name']);
            $image = $_FILES['image']['name'];
        }else
        {
            $image = null;
        }

        createAnimal(array($name,$age,$race,$color,$description,$image,$postal_code));
        require('./view/adminView.php');
        
    } else
    {
        require('./view/addAnimalView.php');
    }
}

?>