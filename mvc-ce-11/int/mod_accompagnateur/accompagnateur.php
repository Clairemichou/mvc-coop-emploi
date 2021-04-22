<?php

/**
 * Description of Accompagnateur
 * Router Accompagnateur
 *
 * @author tvosgiens
 */
class Accompagnateur {

	private $parametre = array();
	private $oControleur; // objet

	public function __construct($parametre) {

		//Récupération des paramètres
		$this->parametre = $parametre;

		//Création instance de la classe controleur métier
		$ctrlMetier = $parametre['gestion'] . 'Controleur';
		$this->oControleur = new $ctrlMetier($this->parametre);
	}

	public function choixAction() {

		if (isset($this->parametre['action'])) {
			
			switch ($this->parametre['action']) {
				
				case 'form_consulter':
					
					$this->oControleur->form_consulter();
					break;
				
				case 'form_ajouter':
					
					$this->oControleur->form_ajouter();
					break;
				
				case 'form_modifier':
					
					$this->oControleur->form_modifier();
					break;
				
				case 'form_supprimer':
					
					$this->oControleur->form_supprimer();
					break;
				
				case 'ajouter':
					
					$this->oControleur->ajouter();
					break;
				
				case 'modifier':
					
					$this->oControleur->modifier();
					break;
				
				case 'supprimer':
					
					$this->oControleur->supprimer();
					break;
				
			}
			
		} else {
			
			$this->oControleur->liste();
			
		}
	}

}
