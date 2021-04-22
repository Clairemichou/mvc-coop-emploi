<?php
/**
 * Description of AccompagnateurModel
 * Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class AuthentificationModele extends Modele {

	private $parametre;

	public function __construct($parametre) {

		$this->parametre = $parametre;
	}

	public function rechercheUtilisateur(AuthentificationTable $authEnCours) {

		// Requete préparée attendue type SELECT (un login) 
		$sql = "SELECT * FROM " . P . "accompagnateur WHERE acc_log = ? ";

		$this->idRequete = $this->executeRequete($sql, array($authEnCours->getF_login()));

		$authExistant = $this->idRequete->fetch(PDO::FETCH_ASSOC);


		if ($authEnCours->getF_login() == $authExistant['acc_log'] && $authEnCours->getF_motdepasse() == $authExistant['acc_mpa']) {
			
			$_SESSION['login'] = $authEnCours->getF_login();
			$_SESSION['prenomNom'] = $authExistant['acc_pre'] . " " . $authExistant['acc_nom'];
			return true;
		}

		AuthentificationTable::setMessageErreur('Authentification Invalide !');
		return false;
	}

}

//	echo 'FO : ' . $authEnCours->getF_motdepasse() . "<br>";
		//	echo 'BD : ' . $authExistant['acc_mpa'] . "<br>";