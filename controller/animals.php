<?php
require('./model/animals.php');

function animal(){
    if (isset($_GET['id']) && $_GET['id'] > 0) {
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
    $current_date = new DateTime('now');
    $view = [];
    foreach ($animals as $key => $animal) {
        $date_created = new DateTime($animal['date']);
        $interval = $date_created->diff($current_date)->days;
        $view[] = $interval < 30 ? $animal : null;
    }

    require('./view/listLastAnimalsView.php');
}

function addAnimal(){
    if(!empty($_POST['name']) &&
        !empty($_POST['race']) &&
        !empty($_POST['color']) &&
        !empty($_POST['postal_code'])
     ){
        $name = htmlspecialchars($_POST['name']);
        $age = isset($_POST['age']) ? htmlspecialchars($_POST['age']): null;
        $race = htmlspecialchars($_POST['race']);
        $color = htmlspecialchars($_POST['color']);
        $description = isset($_POST['description'])?htmlspecialchars($_POST['description']):null;
        if(isset($_FILES['image'])){
            move_uploaded_file($_FILES['image']['tmp_name'],'./img/'.$_FILES['image']['name']);
            $image = $_FILES['image']['name'];
        }else{
            $image = null;
        }
        $postal_code = (int)($_POST['postal_code']);
        createAnimal(array($name,$age,$race,$color,$description,$image,$postal_code));
        header("Location: ./view/adminView.php");
    }
    require('./view/addAnimalView.php');
}

?>