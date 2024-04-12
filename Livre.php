<?php

class Livre {
    private Auteur $auteur;
    private string $titre;
    private int $nombrePages;
    private DateTime $dateParution;
    private int $prix;
    private int $codeLivre;

    public function __construct(Auteur $auteur,string $titre, int $nombrePages, DateTime $dateParution, int $prix, int $codeLivre) {
        $this->auteur = $auteur;
        $this->auteur->ajoutlivre($this);
        $this->titre = $titre;
        $this->nombrePages = $nombrePages;
        $this->dateParution = $dateParution;
        $this->prix = $prix;
        $this->codeLivre = $codeLivre;
    }

    public function __toString() {
        return "$this->titre (". $this->dateParution->format("Y") . ")";
    }
    
    public function getInfos() {
        return $this->nombrePages . " pages / " . $this->prix . "€<br>";
        }
 
    
    

    
     
    
    
    
    # Fin des Getter and Setter----------------------------------
    public function getAuteur(): Auteur
    {
        return $this->auteur;
    }
    
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }
    
    public function getTitre(): string
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    public function getNombrePages(): int
    {
        return $this->nombrePages;
    }

    public function setNombrePages($nombrePages)
    {
        $this->nombrePages = $nombrePages;

        return $this;
    }

    public function getDateParution(): DateTime
    {
        return $this->dateParution;
    }

    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    public function getPrix(): int
    {
        return $this->prix;
    }

    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    public function getCodeLivre(): int
    {
        return $this->codeLivre;
    }

    public function setCodeLivre($codeLivre)
    {
        $this->codeLivre = $codeLivre;

        return $this;
    }
# Fin des Getter and Setter ----------------------------------


}

?>