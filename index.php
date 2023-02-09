<?php

require_once 'functions.php';

$db = createDB();
$carsHtml = displayCars(getAllCars($db));

?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="normalize.css" />
    <link type="text/css" rel="stylesheet" href="collectionstyles.css" />
</head>
<body>
<main>
    <?= $carsHtml;?>
</main>
</body>
</html>


