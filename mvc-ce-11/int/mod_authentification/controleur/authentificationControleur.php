<?php
class AuthentificationControleur {

	private $oVue; //Object

	public function __construct($parametre) {

		//Récupération des paramètres
		$this->parametre = $parametre;
		// Création d'un objet modèle. 
		$this->oModele = new AuthentificationModele($this->parametre);
		// Création d'un objet vue. 
		$this->oVue = new AuthentificationVue($this->parametre);
	}

	public function form_authentification() {

		$prepareAuthentification = new authentificationTable($this->parametre);

		$this->oVue->genererAffichageFiche($prepareAuthentification);
	}

	public function authentification() {

		$controleAuthentification = new AuthentificationTable($this->parametre);

		// ici vrai ou faux sur login absent ou pas ou Login et/ou pw inexistant dans la base
		if ($controleAuthentification->getAutorisationSession() == false || $this->oModele->rechercheUtilisateur($controleAuthentification) == false) {

			$this->oVue->genererAffichageFiche($controleAuthentification);
		} else {

			header('Location:index.php');
		}
	}

	public function deconnexion() {

		session_destroy();
		$_SESSION = array();
		header('Location:index.php');
	}

}
