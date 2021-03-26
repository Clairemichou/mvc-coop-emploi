<?php

abstract class Modele {

	private $db; // Object

	protected function executeRequete($sql, $parameter = NULL) {
		
		if ($parameter == NULL) {
			
			$resultat = $this->getBD()->query($sql); //Requête simple
			
		} else {

			$resultat = $this->getBD()->prepare($sql); // requête préparée
			
			$resultat->execute($parameter);
		}

		return $resultat;
	}

	private function getBD() {

		if ($this->db == NULL) {

			$this->db = new PDO('mysql:host=' . SERVEUR . ';dbname=' . BASE, NOM, PASSE, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
			
		}
		
		return $this->db;
	}

}
