<?php

/**
 * Description of AccompagnateurModel
 * Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class AccompagnateurModele extends Modele {
	
	private $parametre;

	public function __construct($parametre) {

		$this->parametre = $parametre;
	}

	public function getListeAccompagnateurs() {

		// Requete attendue type SELECT (liste des Accompagnateurs) 
		$sql = "SELECT * FROM " . P . "accompagnateur";

		$this->result = $this->executeRequete($sql); // Requête simple

		return $this->result->fetchall(PDO::FETCH_ASSOC);
	}
	
	public function getComboAccompagnateurs() {

		// Requete attendue type SELECT (liste des Accompagnateurs) 
		$sql = "SELECT acc_ide, CONCAT(acc_pre, CONCAT(' ', acc_nom)) AS acc_pn FROM " . P . "accompagnateur";

		$this->result = $this->executeRequete($sql); // Requête simple

		return $this->result->fetchall(PDO::FETCH_ASSOC);
	}

	public function getUnAccompagnateur() {

		// Requete préparée attendue type SELECT (un accompagnateur) 
		$sql = "SELECT * FROM " . P . "accompagnateur WHERE acc_ide = ? ";

		$this->result = $this->executeRequete($sql, array($this->parametre['identifiant']));

		$l = new AccompagnateurTable($this->result->fetch(PDO::FETCH_ASSOC));

		return $l;
	}

	public function addAccompagnateur(AccompagnateurTable $valeurs) {

		// Requete attendue type INSERT
		$sql = "INSERT INTO " . P . "accompagnateur (acc_nom, acc_pre, acc_tel, acc_mai, "
				. " acc_spe, acc_log, acc_mpa)"
				. " VALUES( ?, ?, ?, ?, ?, ?, ?)";
		
		
		$result = $this->executeRequete($sql,array(
			$valeurs->getAcc_nom(),
			$valeurs->getAcc_pre(),
			$valeurs->getAcc_tel(),
			$valeurs->getAcc_mai(),
			$valeurs->getAcc_spe(),
			$valeurs->getAcc_log(),
			$valeurs->getAcc_mpa()
		));
		
		if($result){
			
			AccompagnateurTable::setMessageSucces("Ajout effectué avec succès.");
		}
	}

	public function editAccompagnateur(AccompagnateurTable $valeurs) {
		
		// Requete attendue type UPDATE
		$sql = 'UPDATE ' . P . 'accompagnateur SET acc_nom = ?, acc_pre = ?, acc_tel = ?,'
				. 'acc_mai = ?, acc_spe = ?,acc_log = ? WHERE acc_ide = ? ';
		$result = $this->executeRequete($sql,array(
			$valeurs->getAcc_nom(),
			$valeurs->getAcc_pre(),
			$valeurs->getAcc_tel(),
			$valeurs->getAcc_mai(),
			$valeurs->getAcc_spe(),
			$valeurs->getAcc_log(),
			$valeurs->getAcc_ide()
		));
		
		if($result){
			
			AccompagnateurTable::setMessageSucces("Modification effectuée avec succès.");
		}
	}
	
	public function deleteAccompagnateur(){
		
		// Requete préparée attendue type DELETE (un accu) 
		$sql = "DELETE FROM " . P . "accompagnateur WHERE acc_ide = ? ";

		$result = $this->executeRequete($sql, array($this->parametre['acc_ide']));
		
		if($result){
			
			AccompagnateurTable::setMessageSucces("Suppression effectuée avec succès.");
		}
	
	}
}
