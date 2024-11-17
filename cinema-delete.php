<?php
if ($_SERVER['REQUEST_METHOD'] != "POST") {
    header('location:cinema-index.php');
    exit;
}
require_once("Classe/CRUD.php");

$crud = new CRUD;
$delete = $crud->delete('Film', $_POST['id']);
if ($delete) {
    header("location:cinema-index.php");
} else {
    echo "error";
}
