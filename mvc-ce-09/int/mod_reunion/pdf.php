<?php

class PDF extends FPDF
{
    // En-tête
    function Header()
    {
        // Logo
        $this->Image('public/images/logo.png', 10, 6, 30);
        // Police Arial gras 15
        $this->SetFont('Arial', 'B', 15);
        // Décalage à droite
        $this->Cell(80);
        // Titre
        $this->Cell(30, 10, 'Liste des participants', 1, 0, 'C');
        // Saut de ligne
        $this->Ln(20);
    }



// Tableau coloré
    function FancyTable($header, $data)
    {
        // Couleurs, épaisseur du trait et police grasse
        $this->SetFillColor(240, 173, 78);
        $this->SetTextColor(255);
        $this->SetDrawColor(0, 0, 0);
        $this->SetLineWidth(.3);
        $this->SetFont('', 'B');

        // En-tête
        $w = array(40, 35, 45, 40);
        for ($i = 0; $i < count($header); $i++)
            $this->Cell($w[$i], 7, $header[$i], 1, 0, 'C', true);
        $this->Ln();
        // Restauration des couleurs et de la police
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0, 0, 0);
        $this->SetFont('');
        // Données
        $fill = false;
        foreach ($data as $row) {
            $this->Cell($w[0], 15, $row[0], 'LR', 0, 'C', 1);
            $this->Cell($w[1], 15, $row[1], 'LR', 0, 'C', 1);
            $this->Cell($w[2], 15, $row[2], 'LR', 0, 'C', 1);
            $this->Cell($w[3], 15, "", 'LR', 0, 'C', 1);
            $this->Ln();
        }
        // Trait de terminaison
        $this->Cell(array_sum($w), 0, "", 'T');
    }


}