<?php

/**
 * Description of ReunionModel
 *    Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class ReunionModele extends Modele
{

    private $parametre;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListeReunions()
    {

        if ($this->parametre['statut'] == 0) {
            $reqDate = 'reu_dat < CURDATE()';
        } else {
            $reqDate = 'reu_dat >= CURDATE()';
        }

        $sql = "SELECT count(pdp_ric) AS nb, reu_ide, reu_dat, reu_heu,acc_pre, acc_nom, lie_nom, lie_vil, reu_pub "
            . " FROM " . P . "reunion "
            . " LEFT OUTER JOIN " . P . "porteur_de_projet ON " . P . "reunion.reu_ide = " . P . "porteur_de_projet.pdp_ric"
            . " INNER JOIN " . P . "accompagnateur ON " . P . "reunion.reu_acc = " . P . "accompagnateur.acc_ide"
            . " INNER JOIN " . P . "lieu ON " . P . "reunion.reu_lie = " . P . "lieu.lie_ide"
            . " WHERE " . $reqDate . " GROUP BY reu_ide ORDER BY reu_dat DESC ";


        $this->result = $this->executeRequete($sql); // Requête simple

        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

    public function getUneReunion()
    {

        // Requete attendue type SELECT (une réunion)
        $sql = "SELECT * FROM " . P . "reunion WHERE reu_ide = ?";

        $this->result = $this->executeRequete($sql, array($this->parametre['reu_ide']));

        //var_dump($this->result->fetch(PDO::FETCH_ASSOC));
        $reunion = new ReunionTable($this->result->fetch(PDO::FETCH_ASSOC));

        return $reunion;
    }

    public function addReunion(ReunionTable $valeurs)
    {

        // Requete attendue type INSERT
        $sql = "INSERT INTO " . P . "reunion (reu_dat, reu_heu, reu_dur, reu_lie, "
            . " reu_cap,reu_pre, reu_acc, reu_pub)"
            . " VALUES( ?, ?, ?, ?, ?, ?, ?, ?)";


        $result = $this->executeRequete($sql, array(
            $valeurs->getReu_dat(),
            $valeurs->getReu_heu(),
            $valeurs->getReu_dur(),
            $valeurs->getReu_lie(),
            $valeurs->getReu_cap(),
            $valeurs->getReu_pre(),
            $valeurs->getReu_acc(),
            $valeurs->getReu_pub()
        ));

        if ($result) {

            reunionTable::setMessageSucces("Ajout effectué avec succès.");
        }
    }

    public function editReunion(ReunionTable $valeurs)
    {
        //var_dump($valeurs);
        // Requete attendue type UPDATE
        $sql = 'UPDATE ' . P . 'reunion SET reu_dat = ?, reu_heu= ?, '
            . ' reu_dur = ?, reu_lie = ?, reu_cap = ?,reu_pre = ?,'
            . ' reu_acc = ?, reu_pub = ? WHERE reu_ide = ? ';

        $result = $this->executeRequete($sql, array(
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


        if ($result) {

            reunionTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function deleteReunion()
    {
        //Attention : ce contrôle est écrit après avoir créé la table porteur de projet !
        $controle = "SELECT pdp_ric FROM " . P . "porteur_de_projet WHERE pdp_ric = ?";

        $result = $this->executeRequete($controle, array($this->parametre['reu_ide']));

        if ($result->rowCount() > 0) {

            reunionTable::setMessageErreur("Suppression impossible.
             Des candidats sont inscrits à cette réunion");

        } else {
            // Requete préparée attendue type DELETE (une réunion)
            $sql = "DELETE FROM " . P . "reunion WHERE reu_ide = ? ";

            $result = $this->executeRequete($sql, array($this->parametre['reu_ide']));

            if ($result) {

                reunionTable::setMessageSucces("Suppression effectuée avec succès.");
            }
        }
    }


    public function getListeInscrits()
    {

        $sql = "SELECT pdp_ide,pdp_pre, pdp_nom, pdp_cpo, pdp_vil,pdp_tel, pdp_por, pdp_mai, pdp_ric, pdp_prr, reu_dat, reu_ide, lie_nom, lie_cpo, lie_vil
                FROM " . P . "porteur_de_projet," . P . "reunion, " . P . "lieu 
                WHERE reu_lie = lie_ide AND reu_ide = pdp_ric AND pdp_ric = ? ORDER BY pdp_nom ASC";

        $this->result = $this->executeRequete($sql, array($this->parametre['reu_ide']));


        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

    public function editEtatPresence()
    {

        if ($this->parametre['valeur'] != NULL) {
            if ($this->parametre['valeur'] == 'OUI') {

                $sql = 'UPDATE ' . P . 'porteur_de_projet SET pdp_prr = ? WHERE pdp_ide = ? ';

                $this->result = $this->executeRequete(
                    $sql, array($this->parametre['valeur'], $this->parametre['pdp_ide'])
                );
            } else {

                $sql = 'UPDATE ' . P . 'porteur_de_projet SET pdp_prr = ?, pdp_typ = ? WHERE pdp_ide = ? ';

                $this->result = $this->executeRequete(
                    $sql, array($this->parametre['valeur'], 1, $this->parametre['pdp_ide'])
                );
            }


        }
    }

}
