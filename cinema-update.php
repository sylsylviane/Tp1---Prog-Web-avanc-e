<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header('location:cinema-index.php');
    exit;
}

require_once("Classe/CRUD.php");

$crud = new CRUD;
$update = $crud->update('Film', $_POST);
