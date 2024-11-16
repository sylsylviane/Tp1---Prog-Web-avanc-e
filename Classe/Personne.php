<?php
abstract class Personne {
    protected string $nom;
    protected string $pays;
    protected DateTime $dateNaissance;


    public function __construct($nom, $pays, $dateNaissance) {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->dateNaissance = $dateNaissance;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPays($pays){
        $this->pays = $pays;
    }
    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
    }

    public function getNom(){
        return $this->nom;
    }
    public function getPays(){
        return $this->pays;
    }
    public function getDateNaissance(){
        return $this->dateNaissance;
    }

    
}


