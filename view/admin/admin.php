<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: ../../index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library- Admin</title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>

<body>
    <div class="container">
        <h1>Admin</h1>
        <a href="add-book.php" class="btn">Ajouter un nouveau livre</a>
    </div>
</body>

</html>