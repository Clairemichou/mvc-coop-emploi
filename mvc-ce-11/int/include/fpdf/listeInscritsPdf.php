<?php


// Création de la class PDF
class Pdf extends FPDF {
    // Header
    function Header() {
        // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
        $this->Image('public/images/pLogo.PNG',8,2);
        // Saut de ligne 20 mm
        $this->Ln(20);


        //Titre
        $this->SetFont('Helvetica', 'B', 16);
        $this->SetY(10);
        // position du coin supérieur gauche par rapport à la marge gauche (mm)
        $this->SetX(70);
        $this->Cell(500, 20, utf8_decode('Liste des participants'));

        // Saut de ligne 10 mm
        $this->Ln(10);
    }

    // Footer
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Helvetica','I',9);
        // Numéro de page, centré (C)
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }



}


