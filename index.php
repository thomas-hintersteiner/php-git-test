<?php
    // names that should be displayed
    $names = ['Susi Musterfrau', 'Max Mustermann', 'Jane Doe', 'John Doe'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Testprojekt</title>
</head>
<body>
    <?php foreach($names as $name): ?>
        <p><?= $name ?></p>
    <?php endforeach; ?>
</body>
</html>
