<?php
require_once('Classe/CRUD.php');
$crud = new CRUD;
$select = $crud->select('Film', 'titre', 'DESC');

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
    <h1>Films à l'affiche</h1>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Synopsis</th>
                <th>Date de sortie</th> 
                <th>Durée</th>
                <th>Genre</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($select  as $row) {
                    $genre = $crud->selectId("genre", $row['Genre_id']);
            ?>
            <tr>
                <td><a href="cinema-show.php?id=<?= $row['id'];?>"><?= $row['titre'] ?></a></td>
                <td><?= $row['synopsis'] ?></td>
                <td><?= $row['date_sortie'] ?></td>
                <td><?= $row['duree'] ?></td> 
                <td><?= $genre['nom'] ?></td> 
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
    <a href="cinema-create.php" class="btn">Nouveau film</a>
</body>
</html>
<!-- /*=========================TEST CLASSES=====================================*/

// require_once "Classe/Personne.php";
// require_once "Classe/Realisateur.php";
// $realisateur1 = new Realisateur("Le prestige");
// $realisateur1->setNom("Christopher Nolan");
// $realisateur1->setPays("USA");
// $realisateur1->setDateNaissance(new DateTime("1970-07-30"));
// $realisateur1->getAge();
// echo $realisateur1->getAge();
// $dateOfBirth = $realisateur1->getDateNaissance();
// $DOB = $dateOfBirth->format('Y-m-d');
// echo $DOB;
// echo "<pre>";
// var_dump($realisateur1);
// echo "</pre>";
/*=========================FIN TEST CLASSES=====================================*/ -->
