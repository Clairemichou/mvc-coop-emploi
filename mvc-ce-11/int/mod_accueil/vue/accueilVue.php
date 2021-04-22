<?php

class AccueilVue {
	
	private $tpl; // Object

	public function __construct() {
		
		$this->tpl = new Smarty();
		
	}
	
	private function chargementValeurs(){
		
		$this->tpl->assign('titre','Gestion coop\'emploi');
		$this->tpl->assign('deconnexion', 'Déconnexion');
		$this->tpl->assign('piedPage', 'Exercice PHP MVC réalisé avec un moteur de template.');
	}

	public function genererAffichage() {
		
		$this->chargementValeurs();
		
		$this->tpl->display('mod_accueil/vue/accueilVue.tpl');
		
	}

}