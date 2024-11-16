<?php
class CRUD extends PDO {

    public function __construct() {
        parent::__construct('mysql:host=localhost; dbname=cinema; port=3306; charset=utf8', 'root', '');
    }

    public function select($table, $champ='id', $ordre='ASC'){
        $sql= "SELECT * FROM $table ORDER BY $champ $ordre";
        $stmt = $this->query($sql);
        return $stmt->fetchAll();
    }

    public function selectId($table, $valeur, $champ="id"){
        $sql = "SELECT * FROM $table WHERE $champ = :$champ";
        $stmt = $this->prepare($sql);
        $stmt->bindValue(":$champ", $valeur);
        $stmt->execute();

        $count = $stmt->rowCount();
        if($count == 1){
            return $stmt->fetch();
        }else{
            header("location:cinema-index.php");
        }
    }

    public function insert($table, $donnee){
        $nomChamp = implode(", ", array_keys($donnee));
        $valeurChamp = ":".implode(", :", array_keys($donnee));
        $sql = "INSERT INTO $table ($nomChamp) VALUES ($valeurChamp)";
        $stmt = $this->prepare($sql);

        foreach($donnee as $cle=>$valeur){
            $stmt->bindValue(":$cle", $valeur);
        }
        $stmt->execute();

        return $this->lastInsertId();
    }

    public function update($table, $donnee, $champ = "id"){

        $fieldName = null;
        foreach($donnee as $key=>$value){
            $fieldName .= "$key = :$key, ";
        }
        $fieldName = rtrim($fieldName, ', ');

        $sql = "UPDATE $table SET $fieldName WHERE $champ = :$champ";
        $stmt = $this->prepare($sql);
        foreach($donnee as $cle=>$valeur){
            $stmt->bindValue(":$cle", $valeur);
        }
        if($stmt->execute()){
            header("location:cinema-index.php");
        }else{
             print_r($stmt->errorInfo());
        }
    }


    public function delete($table, $value, $field="id"){
        $sql = "DELETE FROM $table WHERE $field = :$field";
        $stmt = $this->prepare($sql);
        $stmt->bindValue("$field", $value);
        if($stmt->execute()){
            header("location:cinema-index.php");
        }else{
             print_r($stmt->errorInfo());
        }
    }

}
?>

