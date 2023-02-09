<?php

require_once 'functions.php';

$db = createDB();
$carsHtml = displayCars(getAllCars($db));

?>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="collectionstyles.css" />
</head>
<body>
<main>
    <?= $carsHtml;?>
</main>
</body>
</html>


