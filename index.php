<?php
session_start();
$_SESSION['user'] = 'rachid';

include_once('src/connexion.php');

$stmt = $pdo->query('SELECT * FROM book');
$books = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Librairie virtuelle</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div class="container">
        <h1>Nos livres disponibles</h1>
        <a href="view/admin/admin.php" class="btn">Admin</a>
        <div class="book-wrapper">
            <?php
            foreach($books as $row) {
            ?>
            <div class="card">
                <h2><?= $row['title']; ?></h2>
                <p><?= $row['summary']; ?></p>
                <a href="view/front/detail.php?id=<?= $row['book_id']  ?>" class="btn">en savoir plus</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>