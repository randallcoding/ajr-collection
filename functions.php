<?php

function createDB(): PDO
{
    $db = new PDO('mysql:host=db; dbname=ajr-rally-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

function getAllCars(PDO $db): array {
    $stmnt = $db->prepare('SELECT `name`, `bhp`, `drivetrain`, `year`, `img_url` FROM `cars`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}

function displayCars(array $cars): string
{
    $result = '';
    foreach ($cars as $car) {
        $result .= '<div class="car"><h1>' . $car['name'] . '</h1> : ' . $car['bhp'] . ' : ' . $car['drivetrain'] . ' : ' . $car['year'] . '<img src="' . $car['img_url'] . '" /></div>';
    }
    return $result;
}