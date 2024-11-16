<?php
require_once ('Classe/CRUD.php');
$crud = new CRUD;
$genre = $crud->select('Genre', 'nom', 'ASC');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Paradiso</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <form action="cinema-store.php" method="post">
            <h2>Nouveau film</h2>
            <label>Titre
                <input type="text" name="titre">
            </label>
            <label>Synopsis
                <input type="text" name="synopsis">
            </label>
            <label>Année de parution
                <input type="date" name="date_sortie">
            </label>
            <label>Durée
                <input type="text" name="duree">
            </label>

                <label>Genre
                <select name="genre_id" >
                <?php
                foreach($genre  as $row) {
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