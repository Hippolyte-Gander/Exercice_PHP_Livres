<?php

class Auteur {
    private string $prenom;
    private string $nom;
    private int $idNat;
    private array $livres;

    public function __construct(string $prenom, string $nom, int $idNat) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->idNat = $idNat;
        $this->livres = [];
    }
    
    //renvoie "Prénom Nom" d'un auteur
    public function __toString() {
        return "$this->prenom $this->nom";
    }
    
    //ajoute un livre à l'array "livres"
    public function ajoutlivre(Livre $livres) {
        $this->livres[] = $livres;
        //array_push($this->livres, $livre);    vieille méthode
    }

    // fonction pour afficher la bibliographie d'un auteur
    public function bibliographie() {
        $result = "<h1>Livres de $this</h1><br>";
        foreach ($this->livres as $livre) {
            $result .= $livre . " : ". $livre->getInfos() . "<br>";
        }
        ;
        return $result;
    }



    // Début des Getter and Setter
public function getLivres()
{
    return $this->livres;
}

public function setLivres($livres)
{
    $this->livres = $livres;

    return $this;
}

public function getPrenom(): string
{
    return $this->prenom;
}


public function setPrenom($prenom)
{
    $this->prenom = $prenom;
    
    return $this;
}


public function getNom(): string
{
    return $this->nom;
}


public function setNom($nom)
{
    $this->nom = $nom;
    
    return $this;
}

public function getidNat(): int
{
    return $this->idNat;
}


public function setidNat($idNat)
{
    $this->idNat = $idNat;
    
    return $this;
}
// Fin des Getter and Setter

}

?>