<?php
session_start();

include_once('../../src/connexion.php');
$stmt = $pdo->prepare('SELECT * FROM book WHERE book_id= ?');
$stmt->execute([$_GET['id']]);
$book = $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBRAIRIE - <?= strtoupper($book['title'])?></title>
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<body>
    <header>
        <?= 'bonjour ' . $_SESSION['user']; ?>
        <h1>Nos livres disponibles</h1>
    </header>
    <main>
        <section>
            <div class="container">
                <h2> Découvrez cet ouvrage</h2>
                <div class="book-detail">
                    <h2><?= $book['title'] ?></h2>
                    <p><?= $book['summary'] ?></p>
                    <p>Date de parution <?= $book['date'] ?></p>
                </div>
            </div>
        </section>
    </main>
    <footer></footer>
</body>
</html>