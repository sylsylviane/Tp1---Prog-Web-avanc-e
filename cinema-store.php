<?php

if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('location:cinema-index.php');
    exit;
}
require_once('Classe/CRUD.php');

$crud = new CRUD;
$insert = $crud->insert('Film', $_POST);

if ($insert) {
    header("location:cinema-show.php?id=$insert");
} else {
    echo 'error';
}
