<?php

class ReunionTable {

    // 1 Déclarer les propriétés
    private $reu_ide = "";
    private $reu_dat = "";
    private $reu_heu = "";
    private $reu_dur = "";
    private $reu_lie = "";
    private $reu_cap = "";
    private $reu_pre = "";
    private $reu_acc = "";
    private $reu_pub = 0;
    
    private $reu_comboAcc = array();
    private $reu_comboLie = array();
    
    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    // 2 La méthode Hydrater
    public function hydrater(array $row) {
        foreach ($row as $k => $v) {
            //Concaténation de la méthode setter à appeler
            $setter = 'set' . ucfirst($k);
            // method_exists() attend 2 paramètres : l'objet en cours et la méthode (Cf php.net)
            if (method_exists($this, $setter)) {
                $this->$setter($v);
            }
        }
    }

    // 3 ... puis le constructeur
    public function __construct($data = null) {
        if ($data != null) {

            $this->hydrater($data);
        }
        
       //Charger la liste des accompagnateurs 
        $this->setReu_comboAcc();
       //Charger la liste des lieux 
        $this->setReu_comboLie();
    }
    
    // Combos lieux et accompagnateurs
    
    public function setReu_comboAcc(){
        $this->oComboAcc = new AccompagnateurModele(array());
        $this->reu_comboAcc = $this->oComboAcc->getComboAcc();
    }
    
    public function getReu_comboAcc(){
        return $this->reu_comboAcc;
    }
    public function setReu_comboLie(){
        $this->oComboLie = new LieuModele(array());
        $this->reu_comboLie = $this->oComboLie->getComboLie();
    }
    
    public function getReu_comboLie(){
        return $this->reu_comboLie;
    }

    /* ------------------------------------- */
    /*                                     */
    /* -----------  LES SETTERS   ---------- */
    /*                                     */
    /* ------------------------------------- */

    /**
     * @param string $reu_ide
     */
    public function setReu_ide($reu_ide) {
        $this->reu_ide = $reu_ide;
    }

    /**
     * @param string $reu_dat
     */
    public function setReu_dat($reu_dat) {
        if (ctype_space($reu_dat) || empty($reu_dat) || $reu_dat < date('d-m-Y')) {
            self::setMessageErreur("La date est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->reu_dat = $reu_dat;
    }

    /**
     * @param string $reu_heu
     */
    public function setReu_heu($reu_heu) {
        $heureDebut = new DateTime();
        $heureFin = new DateTime($reu_heu);
        
        $diff = $heureFin->getTimestamp() - $heureDebut->getTimestamp();

        if (ctype_space($reu_heu) || empty($reu_heu)) {
            self::setMessageErreur("Veuillee saisir une heure.<br>");
            $this->setAutorisationBD(false);
        }elseif ($diff <=0 || $diff > 43200) {
            self::setMessageErreur("L'heure doit être comprise entre 8:00 et 20:00.<br>");
            $this->setAutorisationBD(false);
       }//elseif ($diff % 1800 != 0) {
//            self::setMessageErreur("L'heure doit être saisie par tranche de 30 min.<br>");
//            $this->setAutorisationBD(false);
//        }
        $this->reu_heu = $reu_heu;
    }

    /**
     * @param string $reu_dur
     */
    public function setReu_dur($reu_dur) {
        $this->reu_dur = $reu_dur;
    }

    /**
     * @param string $reu_lie
     */
    public function setReu_lie($reu_lie) {
        if (!is_string($reu_lie) || ctype_space($reu_lie) || empty($reu_lie)) {
            self::setMessageErreur("Le lieu est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->reu_lie = $reu_lie;
    }

    /**
     * @param string $reu_cap
     */
    public function setReu_cap($reu_cap) {
        if (!is_numeric($reu_cap) || ctype_space($reu_cap) || empty($reu_cap)) {
            self::setMessageErreur("Le capacité est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->reu_cap = $reu_cap;
    }

    /**
     * @param string $reu_pre
     */
    public function setReu_pre($reu_pre) {
        $this->reu_pre = $reu_pre;
    }

    /**
     * @param string $reu_acc
     */
    public function setReu_acc($reu_acc) {
        if (ctype_space($reu_acc) || empty($reu_acc)) {
            self::setMessageErreur("L'accompagnateur est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->reu_acc = $reu_acc;
    }

    /**
     * @param string $reu_pub
     */
    public function setReu_pub($reu_pub) {
//        if (ctype_space($reu_pub) || empty($reu_pub)) {
//            self::setMessageErreur("La publication est invalide.<br>");
//            $this->setAutorisationBD(false);
//        }
        $this->reu_pub = $reu_pub;
    }

    /**
     * @param bool $autorisationBD
     */
    public function setAutorisationBD($autorisationBD) {
        $this->autorisationBD = $autorisationBD;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur($messageErreur) {
        self::$messageErreur = $messageErreur;
    }

    /**
     * @param string $messageSucces
     */
    public static function setMessageSucces($messageSucces) {
        self::$messageSucces = $messageSucces;
    }

    /* ------------------------------------- */
    /*                                     */
    /* -----------  LES GETTERS   ---------- */
    /*                                     */
    /* ------------------------------------- */

    /**
     * @return string
     */
    public function getReu_ide() {
        return $this->reu_ide;
    }

    /**
     * @return string
     */
    public function getReu_dat() {
        return $this->reu_dat;
    }

    /**
     * @return string
     */
    public function getReu_heu() {
        return $this->reu_heu;
    }

    /**
     * @return string
     */
    public function getReu_dur() {
        return $this->reu_dur;
    }

    /**
     * @return string
     */
    public function getReu_lie() {
        return $this->reu_lie;
    }

    /**
     * @return string
     */
    public function getReu_cap() {
        return $this->reu_cap;
    }

    /**
     * @return string
     */
    public function getReu_pre() {
        return $this->reu_pre;
    }

    /**
     * @return string
     */
    public function getReu_acc() {
        return $this->reu_acc;
    }

    /**
     * @return string
     */
    public function getReu_pub() {
        return $this->reu_pub;
    }

    /**
     * @return bool
     */
    public function getAutorisationBD() {
        return $this->autorisationBD;
    }

    /**
     * @return string
     */
    public static function getMessageErreur() {
        return self::$messageErreur;
    }

    /**
     * @return string
     */
    public static function getMessageSucces() {
        return self::$messageSucces;
    }

}
