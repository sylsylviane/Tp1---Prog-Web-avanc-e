<?php
//cinema Paradiso
class Cinema {
    private string $nom;
    private string $adresse;
    private string $telephone;
    private string $courriel;

    public function __construct($nom, $adresse, $telephone, $courriel)
    {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->telephone = $telephone;
        $this->courriel = $courriel;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function getCourriel(){
        return $this->courriel;
    }
}

?>