<?php
    // names that should be displayed
    $names = ['Hansi Hinterseer', 'Susi Musterfrau', 'Max Mustermann', 'Jane Doe', 'John Doe'];

    $lastNames = ['Maier', 'Müller', 'Mutz'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Testprojekt</title>
</head>
<body>
    <h1>PHP Testprojekt</h1>

    <h2>Names</h2>
    <?php foreach($names as $name): ?>
        <p><?= $name ?></p>
    <?php endforeach; ?>

    <h2>Lastnames</h2>
    <?php foreach($lastNames as $lastName): ?>
        <p><?= $lastName ?></p>
    <?php endforeach; ?>
</body>
</html>
