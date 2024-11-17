<?php

if (!isset($_GET["id"]) || $_GET["id"] == null) {
    header('location:cinema-index.php');
    exit;
}
$id = $_GET['id'];

require_once("Classe/CRUD.php");
$crud = new CRUD;
$genre = $crud->select('Genre', 'nom', 'ASC');
$selectId = $crud->selectId('Film', $id);
if ($selectId) {
    extract($selectId);
} else {
    header('location:cinema-index.php');
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Paradiso</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <a href="cinema-index.php"><i class="ri-close-line"></i></a>
        <header>
            <h1>Modifier un film</h1>
        </header>
        <form action="cinema-update.php" method="post" class="formulaire">

            <input type="hidden" name="id" value="<?= $id; ?>">
            <label>Titre
                <input type="text" name="titre" value="<?= $titre; ?>">
            </label>
            <label>Synopsis
                <input type="text" name="synopsis" value="<?= $synopsis; ?>">
            </label>
            <label>Année de parution
                <input type="date" name="date_sortie" value="<?= $date_sortie; ?>">
            </label>
            <label>Durée
                <input type="text" name="duree" value="<?= $duree; ?>">
            </label>
            <label>Genre
                <select name="genre_id">
                    <?php
                    foreach ($genre  as $row) {
                    ?>
                        <option value="<?= $row['id']; ?>"><?= $row['nom']; ?></option>
                    <?php
                    }
                    ?>
                </select>
            </label>
            <input type="submit" class="btn" value="Sauvegarder">
        </form>
    </div>
</body>

</html>