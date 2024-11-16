<?php
if(!isset($_GET["id"]) || $_GET["id"] == null){
    header("location:cinema-index.php");
    exit;
}
require_once("Classe/CRUD.php");
$id = $_GET["id"];
$crud = new CRUD;
$selectId = $crud->selectId("Film", $id);


if($selectId){
    extract($selectId);

    $genre = $crud->selectId("Genre", $Genre_id);
    $genreNom = $genre["nom"];
}else{
    header("location:cinema-index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma Paradiso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1> </h1>
        <p><strong>Titre : </strong><?= $titre;?></p>
        <p><strong>Synopsis : </strong><?= $synopsis;?></p>
        <p><strong>Date de sortie : </strong><?= $date_sortie;?></p>
        <p><strong>Durée : </strong><?= $duree;?></p>
        <p><strong>Genre : </strong><?= $genreNom;?></p>
        <a href="cinema-edit.php?id=<?= $id;?>" class="btn">Modifier</a>
        <a href="cinema-index.php?id=<?= $id;?>" class="btn">Retour</a>
        <form action="cinema-delete.php" method="post">
        <input type="hidden" name="id" value="<?= $id; ?>">
            <button type="submit" class="btn red">Supprimer</button>
        </form>
    </div>
</body>
</html>