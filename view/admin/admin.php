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
    <header>
        <h1>Nos livres disponibles</h1>
    </header>
    <main>
        <section>
            <div class="container">
                <h2>Admin</h2>
                <a href="add-book.php" class="btn">Ajouter un nouveau livre</a>
            </div>
        </section>
    </main>
    <footer></footer>
</body>

</html>