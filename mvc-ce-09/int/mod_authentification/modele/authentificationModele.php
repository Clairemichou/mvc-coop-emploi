<?php


class AuthentificationModele extends Modele
{
    private $parametre;

    public function __construct($parametre)
    {
        $this->parametre = $parametre;
    }

    public function rechercheUtilisateur(AuthentificationTable $authEnCours)
    {
        //requête préparée attendue recherche login
        $sql = "SELECT* FROM " . P . "accompagnateur WHERE acc_log = ?";
        $idRequete = $this->executeRequete($sql, array(
            $authEnCours->getF_login()
        ));
        $authExistant = $idRequete->fetch(PDO::FETCH_ASSOC);

        if ($authEnCours->getF_login() == $authExistant['acc_log'] && $authEnCours->getF_motdepasse() == $authExistant['acc_mpa']) {
            $_SESSION['login'] = $authEnCours->getF_login();
            $_SESSION['prenomNom'] = $authExistant['acc_prenom'] . " " . $authExistant['acc_nom'];

            return true;
        }

        AuthentificationTable::setMessageErreur("Authentification Invalide");
        return false;
    }
}