<?php
/**
 * Description of AuthentificationTable
 *
 * @author tvosgiens
 */
class AuthentificationTable {

	// 1 Déclaration des propriétés
	private $f_login = "";
	private $f_motdepasse = "";
	private $autorisationSession = true;
	private static $messageErreur = "";

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

	public function getF_login() {

		return $this->f_login;
	}

	public function getF_motdepasse() {

		return $this->f_motdepasse;
	}

	public function setF_login($f_login) {

		if (ctype_space($f_login) || empty($f_login)) {

			self::setMessageErreur("Identification invalide. <br>");
			$this->setAutorisationSession(false);
		}

		$this->f_login = $f_login;
	}

	public function setF_motdepasse($f_motdepasse) {
		
		//salage
		if (!ctype_space($f_motdepasse) && !empty($f_motdepasse)) {
			
			$gauche = "ar30&y%";
			$droite = "tk!@";
			$this->f_motdepasse = hash('ripemd128', "$gauche$f_motdepasse$droite");
			
		}else{
			
			$this->f_motdepasse = '';
		}
		
		
	}

	/*	 * ************************************************** */

	public function getAutorisationSession() {

		return $this->autorisationSession;
	}

	public function setAutorisationSession($bool) {

		$this->autorisationSession = $bool;
	}

	/*	 * ******************************************************* */

	public static function getMessageErreur() {

		return self::$messageErreur;
	}

	public static function setMessageErreur($messageErreur) {

		self::$messageErreur = $messageErreur;
	}

}
