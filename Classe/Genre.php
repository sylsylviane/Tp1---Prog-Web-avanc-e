<?php
//cinema Paradiso
class Genre {
    private string $nom;

    public function __construct($nom)
    {
        $this->nom = $nom;
    }

    public function getNom(){
        return $this->nom;
    }
}

?>