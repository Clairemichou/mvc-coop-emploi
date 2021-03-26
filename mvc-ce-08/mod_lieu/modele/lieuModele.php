<?php

/**
 * Class LieuModele
 */
class LieuModele extends Modele {

    private $parametre = array();

    public function __construct($parametre) {

        $this->parametre = $parametre;
    }

    public function getListeLieux() {

        $sql = 'SELECT * FROM ' . P . 'lieu';
        $resultat = $this->executeRequete($sql); // Requête simple
        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }

    public function getComboLie() {

        $sql = 'SELECT lie_ide, CONCAT(lie_nom, CONCAT(" - ", lie_vil)) AS lie_nv FROM ' . P . 'lieu';
        $resultat = $this->executeRequete($sql); // Requête simple
        return $resultat->fetchall(PDO::FETCH_ASSOC);
    }

    public function getUnLieu() {

        $sql = 'SELECT * FROM ' . P . 'lieu WHERE lie_ide = ?';
        $resultat = $this->executeRequete($sql, array($this->parametre['lie_ide'])); // Requête préparée

        $lieu = new LieuTable($resultat->fetch(PDO::FETCH_ASSOC));
        return $lieu;
    }

    public function addLieu(LieuTable $valeurs) {

        //requête attendue de type INSERT
        $sql = "INSERT INTO " . P . "lieu(lie_nom, lie_ad1, lie_ad2, lie_ad3, lie_ad4, "
                . " lie_cpo, lie_vil, lie_tel, lie_con, lie_tco, lie_cap)"
                . " VALUES(?,?,?,?,?,?,?,?,?,?,?)";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getLie_nom(),
            $valeurs->getLie_ad1(),
            $valeurs->getLie_ad2(),
            $valeurs->getLie_ad3(),
            $valeurs->getLie_ad4(),
            $valeurs->getLie_cpo(),
            $valeurs->getLie_vil(),
            $valeurs->getLie_tel(),
            $valeurs->getLie_con(),
            $valeurs->getLie_tco(),
            $valeurs->getLie_cap()
        ));
        if ($resultat) {
            LieuTable::setMessageSucces("Lieu ajouté avec succès");
        }
    }

    public function editLieu(LieuTable $valeurs) {
        //requête attendue de type UPDATE
        $sql = "UPDATE " . P . "lieu SET lie_nom = ?, lie_ad1 =?, lie_ad2= ?, lie_ad3 = ?, lie_ad4 = ?, "
                . " lie_cpo = ?, lie_vil = ?, lie_tel = ?, lie_con = ?, lie_tco = ?, lie_cap= ? WHERE lie_ide = ?";

        $resultat = $this->executeRequete($sql, array(
            $valeurs->getLie_nom(),
            $valeurs->getLie_ad1(),
            $valeurs->getLie_ad2(),
            $valeurs->getLie_ad3(),
            $valeurs->getLie_ad4(),
            $valeurs->getLie_cpo(),
            $valeurs->getLie_vil(),
            $valeurs->getLie_tel(),
            $valeurs->getLie_con(),
            $valeurs->getLie_tco(),
            $valeurs->getLie_cap(),
            $valeurs->getLie_ide()
        ));
        if ($resultat) {
            LieuTable::setMessageSucces("Lieu modifié avec succès");
        }
    }

    public function deleteLieu() {
        //Requête attendue de type DELETE
        $sql = "DELETE FROM " . P . "lieu WHERE lie_ide=?";
        $resultat = $this->executeRequete($sql, array($this->parametre['lie_ide']));

        if ($resultat) {
            LieuTable::setMessageSucces("Lieu supprimer avec succès");
        }
    }

}
