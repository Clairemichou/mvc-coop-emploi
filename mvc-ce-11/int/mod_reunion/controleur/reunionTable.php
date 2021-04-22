<?php

/**
 * Description of reuuTable
 *
 * @author tvosgiens
 */
class ReunionTable {

	// 1 déclarer les propriétés (attributs)
	private $reu_ide = "";
	private $reu_dat = "";
	private $reu_heu = "";
	private $reu_dur = "";
	private $reu_lie = ""; // Lieu sélectionné
	private $reu_cap = "";
	private $reu_pre = "";
	private $reu_acc = ""; // Accompagnateur sélectionné
	private $reu_pub = 0;
	private $reu_comboLie = array(); // Liste des lieux
	private $reu_comboAcc = array(); // Liste des accompagnateurs
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

		if ($data != null) {

			$this->hydrater($data);
		}

		// Charger la liste des accompagnateurs
		$this->setReu_comboAcc();
		$this->setReu_comboLie();
	}

	// 4 ALT + INSER pour générer setter et getter !
	public function getReu_ide() {
		return $this->reu_ide;
	}

	public function getReu_dat() {
		return $this->reu_dat;
	}

	public function getReu_heu() {
		return $this->reu_heu;
	}

	public function getReu_dur() {
		return $this->reu_dur;
	}

	public function getReu_lie() {
		return $this->reu_lie;
	}

	public function getReu_cap() {
		return $this->reu_cap;
	}

	public function getReu_pre() {
		return $this->reu_pre;
	}

	public function getReu_acc() {
		return $this->reu_acc;
	}

	public function getReu_pub() {
		return $this->reu_pub;
	}
	

	/*	 * ****COMBOS...Lieux et Accompagnateurs
	 * 
	 */

	public function setReu_comboAcc() {

		$this->oComboAcc = new AccompagnateurModele(array());
		$this->reu_comboAcc = $this->oComboAcc->getComboAccompagnateurs();
		
	}

	public function getReu_comboAcc() {

		return $this->reu_comboAcc;
	}

	public function setReu_comboLie() {

		$this->oComboLie = new LieuModele(array());
		$this->reu_comboLie = $this->oComboLie->getComboLieux();
		
	}

	public function getReu_comboLie() {

		return $this->reu_comboLie;
	}

	/* ============ Fin Combos ================== */
	
	

	public function setReu_ide($reu_ide) {

		$this->reu_ide = $reu_ide;
	}

	public function setReu_dat($reu_dat) {

		if ((ctype_space($reu_dat) || empty($reu_dat)) || $reu_dat < date("Y-m-d")){
			// Il faudrait controler le format de la date également
			self::setMessageErreur("La date doit être supérieure ou égale à la date du jour. <br>");
			$this->setAutorisationBD(false);
		}
		$this->reu_dat = $reu_dat;
	}

    public function setReu_heu($reu_heu) {

        $heureDebut = new DateTime(HD);
        $heureFin = new DateTime($reu_heu);

        $diff = $heureFin->getTimestamp() - $heureDebut->getTimestamp();

        if (ctype_space($reu_heu) || empty($reu_heu)) {
            self::setMessageErreur("Veuillez saisir l'heure <br>");
            $this->setAutorisationBD(false);
        }elseif ($diff <= 0 || $diff > 43200){
            self::setMessageErreur("L'heure doit être comprise entre 8:00 et 20:00  <br>");
            $this->setAutorisationBD(false);
        }elseif($diff % 1800 != 0 ){
            self::setMessageErreur("Par tranche de 30 minutes a-t-on dit !!");
            $this->setAutorisationBD(false);
        }

        $this->reu_heu = $reu_heu;
    }

	public function setReu_dur($reu_dur) {

        if (ctype_space($reu_dur) || empty($reu_dur)) {
            // Il faudrait controler le format de l'heure également
            self::setMessageErreur("La durée de la réunion est invalide. <br>");
            $this->setAutorisationBD(false);
        }
		
		$this->reu_dur = $reu_dur;
	}

	public function setReu_lie($reu_lie) {

		if (ctype_space($reu_lie) || empty($reu_lie)) {

			self::setMessageErreur("Le lieu est obligatoire. <br>");
			$this->setAutorisationBD(false);
		}
		$this->reu_lie = $reu_lie;
	}

	public function setReu_cap($reu_cap) {

		if (!is_numeric($reu_cap) || ($reu_cap < 1 || $reu_cap > 200) || ctype_space($reu_cap) || empty($reu_cap)) {

			self::setMessageErreur("La capacité est obligatoire (entre 1 et 200). <br>");
			$this->setAutorisationBD(false);
		}

		$this->reu_cap = $reu_cap;
	}

	public function setReu_pre($reu_pre) {

        if (ctype_space($reu_pre) || empty($reu_pre)) {

            self::setMessageErreur("Le thème de la réunion est obligatoire. <br>");
            $this->setAutorisationBD(false);
        }
		
		$this->reu_pre = $reu_pre;
	}

	public function setReu_acc($reu_acc) {

		if (ctype_space($reu_acc) || empty($reu_acc)) {

			self::setMessageErreur("L'accompagnateur est obligatoire. <br>");
			$this->setAutorisationBD(false);
		}

		$this->reu_acc = $reu_acc;
	}

	public function setReu_pub($reu_pub) {

		$this->reu_pub = $reu_pub;
	}

	/* ---------------------------------------------------- */

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
