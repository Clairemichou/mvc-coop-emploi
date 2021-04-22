<?php

/**
 * Description of LieuModel
 * 	Classe héritée de la classe abstraite Modele (modele.php)
 * @author tvosgiens
 */
class LieuModele extends Modele {

	private $parametre;

	public function __construct($parametre) {

		$this->parametre = $parametre;
	}

	public function getListeLieux() {

		// Requete attendue type SELECT (liste des lieux) 
		$sql = "SELECT * FROM " . P . "lieu";

		$this->result = $this->executeRequete($sql); // Requête simple

		return $this->result->fetchall(PDO::FETCH_ASSOC);
	}
	
	public function getComboLieux() {

		// Requete attendue type SELECT (liste des Accompagnateurs) 
		$sql = "SELECT lie_ide, CONCAT(lie_nom, CONCAT(' - ', lie_vil)) AS lie_sv FROM " . P . "lieu";

		$this->result = $this->executeRequete($sql); // Requête simple

		return $this->result->fetchall(PDO::FETCH_ASSOC);
	}

	public function getUnLieu() {

		// Requete attendue type SELECT (un lieu) 
		$sql = "SELECT * FROM " . P . "lieu WHERE lie_ide = ?";

		$this->result = $this->executeRequete($sql, array($this->parametre['lie_ide']));

		//var_dump($this->result->fetch(PDO::FETCH_ASSOC));
		$lieu = new LieuTable($this->result->fetch(PDO::FETCH_ASSOC));

		return $lieu;
	}

	public function addLieu(LieuTable $valeurs) {

		// Requete attendue type INSERT
		$sql = "INSERT INTO " . P . "lieu (lie_nom, lie_ad1, lie_ad2, lie_ad3, "
				. " lie_ad4,lie_cpo, lie_vil, lie_tel, lie_con, lie_tco, lie_cap)"
				. " VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";


		$result = $this->executeRequete($sql, array(
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

		if ($result) {

			lieuTable::setMessageSucces("Ajout effectué avec succès.");
		}
	}
	
	public function editLieu(LieuTable $valeurs) {
		//var_dump($valeurs);
		// Requete attendue type UPDATE
		$sql = 'UPDATE ' . P . 'lieu SET lie_nom = ?, lie_ad1 = ?, lie_ad2 = ?,'
				. 'lie_ad3 = ?, lie_ad4 = ?,lie_cpo = ?, lie_vil = ?, lie_tel = ?, '
				. 'lie_con = ?, lie_tco = ?, lie_cap = ? WHERE lie_ide = ? ';
		$result = $this->executeRequete($sql,array(
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
		
		if($result){
			
			lieuTable::setMessageSucces("Modification effectuée avec succès.");
		}
	}
	
	public function deleteLieu(){
		
		// Requete préparée attendue type DELETE (un lieu) 
		$sql = "DELETE FROM " . P . "lieu WHERE lie_ide = ? ";

		$result = $this->executeRequete($sql, array($this->parametre['lie_ide']));
		
		if($result){
			
			lieuTable::setMessageSucces("Suppression effectuée avec succès.");
		}
	
	}

}
