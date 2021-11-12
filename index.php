<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Raamatud</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet">
</head>

<body>
<a href="add_book.php">Lisa raamat</a>
<a href="add_author.php">Lisa autor</a>
    <h1>
        Raamatud:
    </h1>
</body>

<?php

require_once 'connection.php';

$stmt = $pdo->query('SELECT * FROM books');
while ( $row = $stmt->fetch() ) {
    echo '<a href="book.php?id=' . $row['id'] . '">' . $row['title'] . '</a>' . '<br>';
}