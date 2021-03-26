<?php


class AccompagnateurModele extends Modele
{
    private $parametre = array();

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeAccompagnateurs()
    {

        $sql = 'SELECT * FROM ' . P . 'accompagnateur';
        $resultat = $this->executeRequete($sql); // Requête simple
        return $resultat->fetchall(PDO::FETCH_ASSOC);

    }

    public function getUnAccompagnateur()
    {

        $sql = 'SELECT * FROM ' . P . 'accompagnateur WHERE acc_ide = ?';
        $resultat = $this->executeRequete($sql, array($this->parametre['acc_ide'])); // Requête préparée

        $accompagnateur = new AccompagnateurTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $accompagnateur;

    }

    public function addAccompagnateur(AccompagnateurTable $valeurs)
    {

        //requête attendue de type INSERT
        $sql = "INSERT INTO " . P . "accompagnateur(acc_nom, acc_prenom, acc_tel, acc_mail, acc_spe, "
            . " acc_log, acc_mpa)"
            . " VALUES(?,?,?,?,?,?,?)";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getAcc_nom(),
            $valeurs->getAcc_prenom(),
            $valeurs->getAcc_tel(),
            $valeurs->getAcc_mail(),
            $valeurs->getAcc_spe(),
            $valeurs->getAcc_log(),
            $valeurs->getAcc_mpa()
        ));
        if ($resultat) {
            AccompagnateurTable::setMessageSucces("Accompagnateur ajouté avec succès");
        }
    }

    public function editAccompagnateur(AccompagnateurTable $valeurs)
    {
        //requête attendue de type UPDATE
        $sql = "UPDATE " . P . "accompagnateur SET acc_nom = ?, acc_prenom =?, acc_tel= ?, acc_mail = ?, acc_spe = ?, "
            . " acc_log = ? WHERE acc_ide = ?";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getAcc_nom(),
            $valeurs->getAcc_prenom(),
            $valeurs->getAcc_tel(),
            $valeurs->getAcc_mail(),
            $valeurs->getAcc_spe(),
            $valeurs->getAcc_log(),
            $valeurs->getAcc_ide()

        ));
        if ($resultat) {
            AccompagnateurTable::setMessageSucces("Accompagnateur modifié avec succès");
        }
    }

    public function deleteAccompagnateur()
    {
        //Requête attendue de type DELETE
        $sql = "DELETE FROM " . P . "accompagnateur WHERE acc_ide=?";
        $resultat = $this->executeRequete($sql, array($this->parametre['acc_ide']));

        if ($resultat) {
            AccompagnateurTable::setMessageSucces("Accompagnateur supprimer avec succès");
        }
    }
}