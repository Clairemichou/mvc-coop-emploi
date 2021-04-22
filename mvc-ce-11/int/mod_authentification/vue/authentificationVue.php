<?php
/*
 * Description of Authentification
 * Vue Authentification
 *
 * @author tvosgiens
 */
class AuthentificationVue {

	private $tpl; // Object
	private $valeurs; // Object
	private $parametre; // array

	public function __construct($parametre) {

		$this->parametre = $parametre;

		$this->tpl = new Smarty();
	}

	private function chargementValeurs() {

		$this->tpl->assign('titre', 'Gestion coop\'emploi');
		$this->tpl->assign('titreGestion', 'Authentification');
		$this->tpl->assign('message', AuthentificationTable::getMessageErreur());
		$this->tpl->assign('deconnexion', 'Déconnexion');
		$this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec un moteur de template.');
	}


	public function genererAffichageFiche($valeurs = null) {
		
		$this->valeurs = $valeurs;
		
		$this->chargementValeurs();

		$this->tpl->assign('authentification', $this->valeurs);
		
		$this->tpl->assign('action', 'creer');

		$this->tpl->display('mod_authentification/vue/authentificationVue.tpl');
	}

}
