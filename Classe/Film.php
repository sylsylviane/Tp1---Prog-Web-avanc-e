<?php
//cinema Paradiso
class Film {
    private string $titre;
    private string $synopsis;
    private DateTime $annee_parution;
    private string $duree;

    public function __construct($titre, $synopsis, $annee_parution, $duree)
    {
        $this->titre = $titre;
        $this->synopsis = $synopsis;
        $this->annee_parution = $annee_parution;
        $this->duree = $duree;
    }

    public function getTitre(){
        return $this->titre;
    }

    public function getsynsynopsis(){
        return $this->synopsis;
    }

    public function getAnnee_parution(){
        return $this->annee_parution;
    }

    public function getduree(){
        return $this->duree;
    }
}

?>