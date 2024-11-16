<?php
//cinema Paradiso
class Salle {
    private string $nom;
    private string $nbr_place;

    public function __construct($nom, $nbr_place)
    {
        $this->nom = $nom;
        $this->nbr_place = $nbr_place;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getNbrPlace(){
        return $this->nbr_place;
    }
}

?>