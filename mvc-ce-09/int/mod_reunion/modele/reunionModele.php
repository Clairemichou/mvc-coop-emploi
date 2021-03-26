<?php

class ReunionModele extends Modele
{

    private $parametre = array();

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeReunions()
    {
        if ($this->parametre['statut'] == 0) {
            $requetDate = 'reu_dat < CURDATE()';
        } else {
            $requetDate = 'reu_dat >= CURDATE()';
        }
        $sql = 'SELECT COUNT(pdp_ric) AS nb, reu_ide, reu_dat, acc_prenom, acc_nom, lie_nom, lie_vil, reu_pub '
            . 'FROM ' . P . 'reunion '
            . 'LEFT OUTER JOIN ' . P . 'porteur_de_projet ON ' . P . 'reunion.reu_ide = ' . P . 'porteur_de_projet.pdp_ric'
            . ' INNER JOIN ' . P . 'accompagnateur ON ' . P . 'reunion.reu_acc = ' . P . 'accompagnateur.acc_ide'
            . ' INNER JOIN ' . P . 'lieu ON ' . P . 'reunion.reu_lie = ' . P . 'lieu.lie_ide '
            . ' WHERE ' . $requetDate . ' GROUP BY reu_ide ORDER BY reu_dat DESC';

        $resultat = $this->executeRequete($sql);
        // Requête simple
        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }

    public function getUneReunion()
    {

        $sql = 'SELECT *  FROM ' . P . 'reunion WHERE reu_ide = ?';
        $resultat = $this->executeRequete($sql, array($this->parametre['reu_ide'])); // Requête préparée

        $reunion = new ReunionTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $reunion;
    }

    public function addReunion(ReunionTable $valeurs)
    {

        //requête attendue de type INSERT
        $sql = "INSERT INTO " . P . "reunion(reu_dat, reu_heu, reu_dur, reu_lie, reu_cap, "
            . " reu_pre, reu_acc, reu_pub)"
            . " VALUES(?,?,?,?,?,?,?,?)";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getReu_dat(),
            $valeurs->getReu_heu(),
            $valeurs->getReu_dur(),
            $valeurs->getReu_lie(),
            $valeurs->getReu_cap(),
            $valeurs->getReu_pre(),
            $valeurs->getReu_acc(),
            $valeurs->getReu_pub()
        ));
        if ($resultat) {
            ReunionTable::setMessageSucces("Réunion ajoutée avec succès");
        }
    }

    public function editReunion(ReunionTable $valeurs)
    {
        //requête attendue de type UPDATE
        $sql = "UPDATE " . P . "reunion SET reu_dat = ?, reu_dat =?, reu_heu= ?, reu_dur = ?, reu_lie = ?, "
            . " reu_cap = ?, reu_pre = ?, reu_acc = ?, reu_pub = ? WHERE reu_ide = ?";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getReu_dat(),
            $valeurs->getReu_heu(),
            $valeurs->getReu_dur(),
            $valeurs->getReu_lie(),
            $valeurs->getReu_cap(),
            $valeurs->getReu_pre(),
            $valeurs->getReu_acc(),
            $valeurs->getReu_pub(),
            $valeurs->getReu_ide()
        ));
        if ($resultat) {
            LieuTable::setMessageSucces("Réunion modifiée avec succès");
        }
    }

    public function deleteReunion()
    {
        //Requête attendue de type DELETE
        $sql = "DELETE FROM " . P . "reunion WHERE reu_ide=?";
        $resultat = $this->executeRequete($sql, array($this->parametre['reu_ide']));

        if ($resultat) {
            ReunionTable::setMessageSucces("Réunion supprimer avec succès");
        }
    }

    public function listeLieReu()
    {
        $sql = "SELECT lie_nom, lie_vil, lie_ide FROM  " . P . "lieu";
        $resultat = $this->executeRequete($sql); // Requête simple
        return $resultat;
    }

    public function listeAccReu()
    {
        $sql = "SELECT acc_nom, acc_prenom, acc_ide FROM  " . P . "accompagnateur";
        $resultat = $this->executeRequete($sql); // Requête simple
        return $resultat;
    }

    public function getListIscription()
    {
        $sql = "SELECT  reu_dat, lie_nom, lie_cpo, lie_vil, pdp_ide, pdp_nom, pdp_pre, pdp_vil, pdp_cpo, pdp_port, pdp_mai, pdp_prr, pdp_ric FROM " . P . "porteur_de_projet, 
         " . P . "reunion, ".P."lieu WHERE reu_ide = pdp_ric AND pdp_ric = ? AND reu_lie = lie_ide ";
        $resultat = $this->executeRequete($sql, array($this->parametre['reu_ide']));
        return $resultat;
    }

    public function setPresent()
    {
        $sql = "UPDATE " . P . "reunion SET pdp_prr = 1, pdp_typ = 2 WHERE pdp_ide = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['pdp_ide']));
        return $resultat;
    }

    public function setAbsent()
    {
        $sql = "UPDATE " . P . "reunion SET pdp_prr = 0, pdp_typ = 1 WHERE pdp_ide = ?";
        $resultat = $this->executeRequete($sql, array($this->parametre['pdp_ide']));
        return $resultat;
    }

}
