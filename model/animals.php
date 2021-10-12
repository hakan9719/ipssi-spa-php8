<?php

function getAnimals(): array{
    $db = dbConnect();
    $sql = "SELECT * FROM animals WHERE `status` != 0";
    $animals = $db -> prepare($sql);
    $animals -> execute();
    $animals = $animals -> fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}

function getAnimalsAvailable(): array{
    $db = dbConnect();
    $sql = "SELECT * FROM animals WHERE `status` = 1";
    $animals = $db -> prepare($sql);
    $animals -> execute();
    $animals = $animals -> fetchAll(PDO::FETCH_ASSOC);
    return $animals;
}

function createAnimal($values){
    $db = dbConnect();
    $sql = "INSERT INTO animals (name,age,race,color,description,image,postal_code) VALUES (?,?,?,?,?,?,?)";
    $res = $db -> prepare($sql);
    var_dump($sql);
    var_dump($values);
    $res = $res -> execute($values);
    return $res;
}

function getAnimal($id): array{
    $db = dbConnect();
    $sql = "SELECT * FROM animals WHERE `status` != 0 AND `id` = $id";
    $animal = $db -> prepare($sql);
    $animal -> execute();
    $animal = $animal -> fetchAll(PDO::FETCH_ASSOC);
    return $animal[0];
}

?>