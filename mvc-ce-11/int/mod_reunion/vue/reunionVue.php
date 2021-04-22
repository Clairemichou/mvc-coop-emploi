<?php

class ReunionVue
{

    private $tpl; // Object
    private $valeurs; // Object
    private $parametre; // array

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
        $this->tpl = new Smarty();
        $this->pdf = new Pdf('P', 'mm', 'A4');
    }

    private function chargementValeurs()
    {

        $this->tpl->assign('statut', $this->parametre['statut']);

        $this->tpl->assign('titre', 'Gestion coop\'emploi');
        $this->tpl->assign('deconnexion', 'Déconnexion');
        $this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec un moteur de template.');
    }

    public function genererAffichageListe($valeurs = null)
    {

        $this->valeurs = $valeurs;

        //var_dump($this->valeurs);

        $this->chargementValeurs();

        $this->tpl->assign('titreGestion', 'Liste des réunions d\'information collective');

        $this->tpl->assign('message', reunionTable::getMessageSucces());
        $this->tpl->assign('messageErreur', reunionTable::getMessageErreur());

        $this->tpl->assign('listeReunions', $this->valeurs);


        $this->tpl->display('mod_reunion/vue/reunionListeVue.tpl');
    }

    public function genererAffichageListeInscrits($valeurs = null)
    {

        $this->valeurs = $valeurs;
        $this->chargementValeurs();
        $this->tpl->assign('dateDuJour', date('Y-m-d'));

        //Pour l'entête de la liste
        $this->tpl->assign('titreGestion', 'Liste des inscriptions');
        $this->tpl->assign('date', $this->valeurs[0]['reu_dat']);
        $this->tpl->assign('lieu', $this->valeurs[0]['lie_nom']);
        $this->tpl->assign('ville', $this->valeurs[0]['lie_vil']);



        $this->tpl->assign('listeInscrits', $this->valeurs);

        $this->tpl->display('mod_reunion/vue/listeInscritsVue.tpl');
    }

    public function genererAffichageFiche($valeurs = null)
    {

        $this->chargementValeurs();

        switch ($this->parametre['action']) {

            case 'form_consulter':
                $this->valeurs = $valeurs;
                $this->tpl->assign('titreGestion', 'Consultation d\'une réunion d\'information collective');
                $this->tpl->assign('comportement', 'disabled');
                $this->tpl->assign('action', 'consulter');
                $this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
                $this->tpl->assign('lieux', $valeurs->getReu_comboLie());

                $this->tpl->assign('laReunion', $this->valeurs);
                break;

            case 'form_modifier':
            case 'modifier':
                $this->valeurs = $valeurs;
                $this->tpl->assign('titreGestion', 'Modification d\'une réunion d\'information collective');
                $this->tpl->assign('comportement', '');
                $this->tpl->assign('action', 'modifier');
                $this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
                $this->tpl->assign('lieux', $valeurs->getReu_comboLie());
                $this->tpl->assign('laReunion', $this->valeurs);
                break;

            case 'form_ajouter':
            case 'ajouter':
                $this->tpl->assign('titreGestion', 'Ajouter une réunion d\'information collective');
                $this->tpl->assign('comportement', '');
                $this->tpl->assign('action', 'ajouter');
                $this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
                $this->tpl->assign('lieux', $valeurs->getReu_comboLie());
                $this->tpl->assign('laReunion', $valeurs);
                break;


            case 'form_supprimer':
                $this->valeurs = $valeurs;
                $this->tpl->assign('titreGestion', 'Suppression d\'une réunion d\'information collective ');
                $this->tpl->assign('comportement', 'disabled');
                $this->tpl->assign('action', 'supprimer');
                $this->tpl->assign('accompagnateurs', $valeurs->getReu_comboAcc());
                $this->tpl->assign('lieux', $valeurs->getReu_comboLie());
                $this->tpl->assign('laReunion', $this->valeurs);
                break;
        }

        $this->tpl->display('mod_reunion/vue/reunionFicheVue.tpl');
    }


    /************************ PDF *************************************/

    public function genererAffichageListeInscritsPdf($valeurs = null)
    {

        $this->valeurs = $valeurs;

        // Nouvelle page PDF
        $this->pdf->AddPage();

        // Compteur de pages {nb} par défaut
        $this->pdf->AliasNbPages();

        $this->entete();

        // Couleur par défaut : noir
        $this->pdf->SetTextColor(0);
        $this->pdf->SetFont('Helvetica', '', 11);
        $position = 70;

        $i = 0;
        while ($i < count($this->valeurs)) {
            $this->pdf->SetY($position);
            $this->pdf->SetX(10);
            $this->pdf->Cell(10, 20, $i + 1, 1, 0, 'C');
            // position de la colonne 2 (20 = 10+10)
            $this->pdf->SetX(20);
            $this->pdf->Cell(60, 20, utf8_decode($this->valeurs[$i]['pdp_pre']), 1, 0, 'C');
            // position de la colonne 3 (80 = 20+60)
            $this->pdf->SetX(80);
            $this->pdf->Cell(60, 20, utf8_decode($this->valeurs[$i]['pdp_nom']), 1, 0, 'C');
            // position de la colonne 4 (140 = 80+60)
            $this->pdf->SetX(140);
            $this->pdf->Cell(60, 20, '', 1, 0, 'C');

            $position += 20;

            // Saut de page
            if($position == 270){
                $this->pdf->AddPage();
                $this->entete();
                $this->pdf->SetFont('Helvetica', '', 11);
                $this->pdf->SetTextColor(0);
                $position = 70;
            }
            $i++;
        }

        $this->pdf->Output('emargement.pdf', 'I');
    }

    private function entete()
    {
        $this->pdf->setFillColor(248, 172, 48);
        //Sous titre (date et lieu)
        $this->pdf->SetFont('Helvetica', 'B', 12);
        $this->pdf->SetTextColor(0);
        $this->pdf->SetY(30);
        $this->pdf->SetX(10);
        $this->pdf->Cell(500, 10, utf8_decode('Réunion du  : ') . date('d / m / Y', strtotime($this->valeurs[0]['reu_dat'])));
        $this->pdf->SetY(40);
        $this->pdf->SetX(10);
        $this->pdf->Cell(500, 10, utf8_decode($this->valeurs[0]['lie_nom'] . " à " . $this->valeurs[0]['lie_vil'] . " - " . $this->valeurs[0]['lie_cpo']));


        // Polices par défaut : Helvetica taille 9
        $this->pdf->SetFont('Helvetica', 'B', 11);
        $this->pdf->SetTextColor(255,255,255);
        $this->pdf->SetY(60);
        // position de colonne 1 (10mm à gauche)
        $this->pdf->SetX(10);
        $this->pdf->Cell(10, 10, utf8_decode('N°'), 1, 0, 'C', 1);
        // position de la colonne 2 (20 = 10+10)
        $this->pdf->SetX(20);
        $this->pdf->Cell(60, 10, utf8_decode('Prénom'), 1, 0, 'C', 1);  // 60 >largeur colonne, 8 >hauteur colonne
        // position de la colonne 3 (80 = 20+60)
        $this->pdf->SetX(80);
        $this->pdf->Cell(60, 10, 'Nom', 1, 0, 'C', 1);
        // position de la colonne 4 (140 = 80+60)
        $this->pdf->SetX(140);
        $this->pdf->Cell(60, 10, 'Emargement', 1, 0, 'C', 1);
    }

}
