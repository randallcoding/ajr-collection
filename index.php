<?php

require_once 'functions.php';

$db = createDB();
$cars = getAllCars($db);
$carsHtml = displayCars($cars);

?>
<html>
<head>

</head>
<body>
<main>
    <?php echo $carsHtml; ?>
</main>
</body>
</html>


