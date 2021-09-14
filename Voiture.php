<?php


class Voiture
{
    private $marque;
    private $couleur;
    private $immatriculation;

    // un getter
    public function getMarque() {
        return $this->marque;
    }

    // un setter
    public function setMarque($m) {
        if ( strlen($m) <=8) {
            $this->marque = $m;
        }

    }

    public function getCouleur()
    {
        return $this->couleur;
    }


    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;
    }

    public function getImmatriculation()
    {
        return $this->immatriculation;
    }


    public function setImmatriculation($immatriculation)
    {
        $this->immatriculation = $immatriculation;
    }

    // un constructeur
    public function __construct($m = NULL, $c = NULL, $i = NULL) {
        if (!is_null($m) && !is_null($c) && !is_null($i)) {
            // Si aucun de $m, $c et $i sont nuls,
            // c'est forcement qu'on les a fournis
            // donc on retombe sur le constructeur à 3 arguments
            $this->marque = $m;
            $this->couleur = $c;
            $this->immatriculation = $i;
        }}

    // une methode d'affichage.
    public function afficher() {
        echo "<li>Voiture $this->immatriculation de marque $this->marque (couleur $this->couleur)";

    }
}
?>