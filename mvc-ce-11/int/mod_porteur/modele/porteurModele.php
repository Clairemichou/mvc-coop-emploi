<?php

/**
 * Description of Porteur_de_projetModel
 *    Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class PorteurModele extends Modele
{

    private $parametre;

    public function __construct($parametre)
    {

        $this->parametre = $parametre;
    }

    public function getListePorteurs()
    {

        //var_dump($this->parametre);
        switch ($this->parametre['type']) {

            // Recherche un porteur
            // Attention sont exclus ceux qui n'ont pas encore parcticipé à une réunion d'info
            case 0 :

                $sql = "SELECT * "
                    . " FROM " . P . "porteur_de_projet"
                    . " WHERE (pdp_nom LIKE CONCAT('%', ?, '%') OR pdp_pre LIKE CONCAT('%', ?, '%')) "
                    . " AND pdp_prr = 'OUI'";

                $this->result = $this->executeRequete($sql, array($this->parametre['valeurRecherchee'], $this->parametre['valeurRecherchee']));
                break;

            case 2 : // Candidats inscrits

                $sql = "SELECT * "
                    . " FROM " . P . "porteur_de_projet"
                    . " WHERE pdp_typ = ? AND pdp_prr = 'OUI'"
                    . " ORDER BY pdp_din DESC";

                $this->result = $this->executeRequete($sql, array($this->parametre['type']));
                break;

            case 1 : // Non acceptés
            case 4 : // Sortie Réorientation (accompagnement / formation)
            case 5 : // Sortie Extérieure (emploi différent)
            case 6 : // Sortie Création poursuite de l'activité
                $sql = "SELECT * "
                    . " FROM " . P . "porteur_de_projet"
                    . " WHERE pdp_typ = ? "
                    . " ORDER BY pdp_din DESC";

                $this->result = $this->executeRequete($sql, array($this->parametre['type']));
                break;

            case 3 : // Les entrepreneurs
                if (isset($this->parametre['secteur']) && $this->parametre['secteur'] != null) {

                    $sql = "SELECT * "
                        . " FROM " . P . "porteur_de_projet"
                        . " WHERE pdp_typ = ? AND pdp_sea = ? "
                        . " ORDER BY pdp_din DESC";

                    $this->result = $this->executeRequete($sql, array($this->parametre['type'], $this->parametre['secteur']));

                } else {

                    $sql = "SELECT * "
                        . " FROM " . P . "porteur_de_projet"
                        . " WHERE pdp_typ = ? "
                        . " ORDER BY pdp_din DESC";

                    $this->result = $this->executeRequete($sql, array($this->parametre['type']));
                    break;
                }

        }

        return $this->result->fetchall(PDO::FETCH_ASSOC);
    }

    public function getUnPorteur()
    {

        // Requete attendue type SELECT (un porteur)
        $sql = "SELECT * "
            . " FROM " . P . "porteur_de_projet as p"
            . " LEFT OUTER JOIN " . P . "statut as s ON p.pdp_sta = s.sta_ide"
            . " LEFT OUTER JOIN " . P . "secteur_activite as se on p.pdp_sea = se.sea_ide"
            . " INNER JOIN " . P . "type_pdp as t ON p.pdp_typ = t.typ_ide"
            . " INNER JOIN " . P . "reunion as r ON p.pdp_ric = r.reu_ide"
            . " INNER JOIN " . P . "lieu as l ON r.reu_lie = l.lie_ide"
            . " WHERE pdp_ide = ?";


        $this->result = $this->executeRequete($sql, array($this->parametre['pdp_ide']));

        //var_dump($this->result->fetch(PDO::FETCH_ASSOC));
        $porteur = new PorteurTable($this->result->fetch(PDO::FETCH_ASSOC));

        return $porteur;
    }

    public function addPorteur(PorteurTable $valeurs)
    {
        //L'ajout ne passe que par l'inscription

    }

    public function editPorteur(PorteurTable $valeurs)
    {

        // Requete attendue type UPDATE
        // Date d'inscription et id de la réunion non modifiable !
        $sql = 'UPDATE ' . P . 'porteur_de_projet SET pdp_nom = ?, pdp_pre = ?, '
            . ' pdp_ad1 = ?, pdp_ad2 = ?, pdp_ad3 = ?, pdp_ad4= ?, pdp_cpo= ?, pdp_vil= ?,'
            . ' pdp_tel = ?, pdp_por = ?, pdp_mai = ?, pdp_dna = ?, pdp_sta = ?, pdp_typ = ?, '
            . ' pdp_sea = ?, pdp_dpr = ?, pdp_prr = ?, pdp_aur = ?, pdp_obs = ? '
            . ' WHERE pdp_ide = ? ';

        $result = $this->executeRequete($sql, array(
            $valeurs->getPdp_nom(),
            $valeurs->getPdp_pre(),
            $valeurs->getPdp_ad1(),
            $valeurs->getPdp_ad2(),
            $valeurs->getPdp_ad3(),
            $valeurs->getPdp_ad4(),
            $valeurs->getPdp_cpo(),
            $valeurs->getPdp_vil(),
            $valeurs->getPdp_tel(),
            $valeurs->getPdp_por(),
            $valeurs->getPdp_mai(),
            $valeurs->getPdp_dna(),
            $valeurs->getPdp_sta(),
            $valeurs->getPdp_typ(),
            $valeurs->getPdp_sea(),
            $valeurs->getPdp_dpr(),
            $valeurs->getPdp_prr(),
            $valeurs->getPdp_aur(),
            $valeurs->getPdp_obs(),
            $valeurs->getPdp_ide()
        ));

        if ($result) {

            PorteurTable::setMessageSucces("Modification effectuée avec succès.");
        }
    }

    public function deletePorteur()
    {

        // Requete préparée attendue type DELETE (une réunion)
        $sql = "DELETE FROM " . P . "reunion WHERE reu_ide = ? ";

        $result = $this->executeRequete($sql, array($this->parametre['reu_ide']));

        if ($result) {

            PorteurTable::setMessageSucces("Suppression effectuée avec succès.");
        }

    }

}
