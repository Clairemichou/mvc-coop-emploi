<?php
/**
 * Class Lieu
 * Routeur Lieu
 * @author cmichel
 */

class Lieu
{
    private $parametre = array();
    private $oControleur; //objet

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
        $this->oControleur = new LieuControleur($this->parametre);
    }

    public function choixAction()
    {
        //Switch avec les différentes actions. Par défaut on affiche la liste

        $this->oControleur->liste();
    }

}