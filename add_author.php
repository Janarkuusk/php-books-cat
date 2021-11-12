<?php
    require_once "connection.php";

    if ( isset($_POST['save'])) {
        $stmt = $pdo->prepare('INSERT INTO authors(first_name, last_name) VALUES (:first_name, :last_name);');
        $stmt->execute(['first_name' => $_POST["first_name"] , 'last_name' => $_POST["last_name"]]);
    }
    $stmt = $pdo->query('SELECT * FROM authors order by id desc');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lisa autor</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>
<body>
<form action="add.php" method="post">
        <input type="text" name="first_name" value="Eesnimi">
        <input type="text" name="last_name" value="Perekonnanimi">
        <input type="submit" name="save" value="salvesta">
    </form>
    <h1>autorid</h1>
    <ul>
        <?php while( $authors = $stmt->fetch()): ?>
        <li><?=$authors['first_name'];?>
            <?=$authors['last_name'];?>
        </li>
        <?php endwhile; ?>
    </ul>
</body>
</html>