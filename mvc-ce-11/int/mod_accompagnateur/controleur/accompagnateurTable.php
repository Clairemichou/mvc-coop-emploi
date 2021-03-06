<?php

/**
 * Description of accompagnateurTable
 *
 * @author tvosgiens
 */
class AccompagnateurTable {

	// 1 déclarer les propriétés (attributs)
	private $acc_ide = "";
	private $acc_nom = "";
	private $acc_pre = "";
	private $acc_tel = "";
	private $acc_mai = "";
	private $acc_spe = "";
	private $acc_log = "";
	private $acc_mpa = 'sowhat';
	private $autorisationBD = true;
	private static $messageErreur = "";
	private static $messageSucces = "";

	// 2 importer la méthode hydrater !
	public function hydrater(array $row) {
			
		foreach ($row as $k => $v) {
			// Concaténation : nom de la méthode setter à appeler
			$setter = 'set' . ucfirst($k);
			// fonction prend 2 paramètres : l'objet en cours et le nom de la méthode
			if (method_exists($this, $setter)) {
				// Invoquer la méthode
				$this->$setter($v);
			}
		}
	}

	// 3 puis  le constructeur !
	public function __construct($data = null) {

		//var_dump($this->data);

		if ($data != null) {

			$this->hydrater($data);
		}
	}

	// 4 ALT + INSER pour générer setter et getter !
	public function getAcc_ide() {
		return $this->acc_ide;
	}

	public function getAcc_nom() {
		return $this->acc_nom;
	}

	public function getAcc_pre() {
		return $this->acc_pre;
	}

	public function getAcc_tel() {
		return $this->acc_tel;
	}

	public function getAcc_mai() {
		return $this->acc_mai;
	}

	public function getAcc_spe() {
		return $this->acc_spe;
	}

	public function getAcc_log() {
		return $this->acc_log;
	}

	public function getAcc_mpa() {
		return $this->acc_mpa;
	}

	public function setAcc_ide($acc_ide) {

		$this->acc_ide = $acc_ide;
	}

	public function setAcc_nom($acc_nom) {

		if (!is_string($acc_nom) || ctype_space($acc_nom) || empty($acc_nom)) {

			self::setMessageErreur("Le nom est invalide. <br>");
			$this->setAutorisationBD(false);
		}
		$this->acc_nom = $acc_nom;
	}

	public function setAcc_pre($acc_pre) {

		if (!is_string($acc_pre) || ctype_space($acc_pre) || empty($acc_pre)) {

			self::setMessageErreur("Le prénom est invalide. <br>");
			$this->setAutorisationBD(false);
		}
		$this->acc_pre = $acc_pre;
	}

	public function setAcc_tel($acc_tel) {
		
		if (ctype_space($acc_tel) || empty($acc_tel)) {

			self::setMessageErreur("Le téléphine est invalide. <br>");
			$this->setAutorisationBD(false);
		}

		$this->acc_tel = $acc_tel;
	}

	public function setAcc_mai($acc_mai) {
		if (!is_string($acc_mai) || ctype_space($acc_mai) || empty($acc_mai)) {

			self::setMessageErreur("L'adresse mail semble invalide. <br>");
			$this->setAutorisationBD(false);
		}

		$this->acc_mai = $acc_mai;
	}

	public function setAcc_spe($acc_spe) {

		$this->acc_spe = $acc_spe;
	}

	public function setAcc_log($acc_log) {

		if (ctype_space($acc_log) || empty($acc_log)) {

			self::setMessageErreur("Le login  est invalide. <br>");
			$this->setAutorisationBD(false);
		}

		$this->acc_log = $acc_log;
	}

	public function setAcc_mpa() {
		
		$pw = $this->acc_mpa;
		//salage
		$gauche = "ar30&y%";
		$droite = "tk!@";
		$this->acc_mpa = hash('ripemd128', "$gauche$pw$droite");
		
	}

	public function getAutorisationBD() {

		return $this->autorisationBD;
	}

	public function setAutorisationBD($a) {

		$this->autorisationBD = $a;
	}

	/* ======= Traitement des propriétés static ======= */

	public static function setMessageErreur($msg) {

		self::$messageErreur = self::$messageErreur . $msg;
	}

	public static function getMessageErreur() {

		return self::$messageErreur;
	}

	public static function setMessageSucces($msg) {

		self::$messageSucces = self::$messageSucces . $msg;
	}

	public static function getMessageSucces() {

		return self::$messageSucces;
	}

}
