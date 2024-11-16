<?php
require_once "Classe/Personne.php";

class Realisateur extends Personne {
    public string $filmsRealises;
    protected int $age;

    public function __construct($filmsRealises) {
        $this->filmsRealises = $filmsRealises;
    }

    public function getFilmsRealises() {
        return $this->filmsRealises;
    }

    public function setProp($property, $value) {
        $this->$property = $value;
    }
    public function getAge(): string{
        $dateDuJour = new DateTime();
        $age = $dateDuJour->diff($this->dateNaissance);
        return $age->format('%y ans');
    }
}
?>
 