<?php

/**
 * database function that fetches the SQL connection
 *
 * @return PDO the db
 */
function createDB(): PDO
{
    $db = new PDO('mysql:host=db; dbname=ajr-rally-collection', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}


/**
 * Selects the cars table and fetches the content
 *
 * @param PDO $db
 *
 * @return array of cars
 */
function getAllCars(PDO $db): array {
    $stmnt = $db->prepare('SELECT `name`, `bhp`, `drivetrain`, `year`, `img_url` FROM `cars`;');
    $stmnt->execute();
    return $stmnt->fetchAll();
}


/**
 * Displays the array of cars as a string, additional HTML to further integrate it into the page
 *
 * @param array $cars
 *
 * @return string the html
 */
function displayCars(array $cars): string
{
    $result = '';
    foreach ($cars as $car) {
        if(
            array_key_exists('name', $car) &&
            array_key_exists('bhp', $car) &&
            array_key_exists('drivetrain', $car) &&
            array_key_exists('year', $car) &&
            array_key_exists('img_url', $car)
        ) {
            $result .= '<div class="car"><h1>' . $car['name'] . '</h1>  ' . $car['bhp'] . ' : ' . $car['drivetrain'] . ' : ' . $car['year'] . '<img src="' . $car['img_url'] . '" /></div>';
        }
    }
    return $result;
}