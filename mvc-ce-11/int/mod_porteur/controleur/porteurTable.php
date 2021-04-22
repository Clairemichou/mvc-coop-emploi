<?php

/**
 * Description of Porteur_de_projetTable
 *
 * @author tvosgiens
 */
class PorteurTable
{

    // 1 déclarer les propriétés (attributs)
    private $pdp_ide = "";
    private $pdp_nom = "";
    private $pdp_pre = "";
    private $pdp_ad1 = "";
    private $pdp_ad2 = "";
    private $pdp_ad3 = "";
    private $pdp_ad4 = "";
    private $pdp_cpo = "";
    private $pdp_vil = "";
    private $pdp_tel = "";
    private $pdp_por = "";
    private $pdp_mai = "";
    private $pdp_dna = "";
    private $pdp_sta = ""; // Statut sélectionné
    private $pdp_typ = ""; // type de porteur sélectionné
    private $pdp_sea = ""; // secteur d'activité sélectionné
    private $pdp_dpr = "";
    private $pdp_din = "";
    private $pdp_prr = "";
    private $pdp_ric = "";
    private $pdp_aur = "";
    private $pdp_obs = "";
    private $reu_dat = ""; //récupération de la date de réunion
    private $pdp_comboSta = array(); // Liste des statuts
    private $pdp_comboTyp = array(); // Liste des types de porteur
    private $pdp_comboSea = array(); // Liste des secteurs d'activité
    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    // 2 importer la méthode hydrater !
    public function hydrater(array $row)
    {

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
    public function __construct($data = null)
    {

        if ($data != null) {

            $this->hydrater($data);
        }

        // Charger la liste des accompagnateurs
        $this->setPdp_comboSta();
        $this->setPdp_comboTyp();
        $this->setPdp_comboSea();
        $this->controle();
    }

    // 4 ALT + INSER pour générer setter et getter !


    /*----------------------------------------------------------------*/
    /*              Les getters                                      */
    /*----------------------------------------------------------------*/
    /**
     * @return int
     */
    public function getPdp_ide(): int
    {
        return intval($this->pdp_ide);
    }

    /**
     * @return string
     */
    public function getPdp_nom(): string
    {
        return $this->pdp_nom;
    }

    /**
     * @return string
     */
    public function getPdp_pre(): string
    {
        return $this->pdp_pre;
    }

    /**
     * @return string
     */
    public function getPdp_ad1(): string
    {
        return strval($this->pdp_ad1);
    }

    /**
     * @return string
     */
    public function getPdp_ad2(): string
    {
        return strval($this->pdp_ad2);
    }

    /**
     * @return string
     */
    public function getPdp_ad3(): string
    {
        return strval($this->pdp_ad3);
    }

    /**
     * @return string
     */
    public function getPdp_ad4(): string
    {
        return strval($this->pdp_ad4);
    }

    /**
     * @return string
     */
    public function getPdp_cpo(): string
    {
        return $this->pdp_cpo;
    }

    /**
     * @return string
     */
    public function getPdp_vil(): string
    {
        return $this->pdp_vil;
    }

    /**
     * @return string
     */
    public function getPdp_tel(): string
    {
        return strval($this->pdp_tel);
    }

    /**
     * @return string
     */
    public function getPdp_por(): string
    {
        return strval($this->pdp_por);
    }

    /**
     * @return string
     */
    public function getPdp_mai(): string
    {
        return strval($this->pdp_mai);
    }

    /**
     * @return string
     */
    public function getPdp_dna()
    {
        return $this->pdp_dna;
    }

    /**
     * @return int
     */
    public function getPdp_sta(): ?int
    {

        return $this->pdp_sta;
    }

    /**
     * @return int
     */
    public function getPdp_typ(): int
    {

        return intval($this->pdp_typ);
    }

    /**
     * @return int
     */
    public function getPdp_sea(): ?int
    {

        return $this->pdp_sea;
    }

    /**
     * @return string
     */
    public function getPdp_dpr(): string
    {
        return strval($this->pdp_dpr);
    }

    /**
     * @return string
     */
    public function getPdp_din(): string
    {
        return strval($this->pdp_din);
    }

    /**
     * @return string
     */
    public function getPdp_prr(): string
    {
        return strval($this->pdp_prr);
    }

    /**
     * @return int
     */
    public function getPdp_ric(): int
    {
        return intval($this->pdp_ric);
    }

    /**
     * @return string
     */
    public function getPdp_aur(): string
    {
        return strval($this->pdp_aur);
    }

    /**
     * @return string
     */
    public function getPdp_obs(): string
    {
        return strval($this->pdp_obs);
    }

    /**
     * @return string
     */
    public function getReu_dat(): string
    {
        return strval($this->reu_dat);
    }



    /*----------------------------------------------------------------*/
    /*              Les setters                                       */
    /*----------------------------------------------------------------*/

    /**
     * @param $pdp_ide
     */
    public function setPdp_ide($pdp_ide)
    {
        $this->pdp_ide = $pdp_ide;
    }

    /**
     * @param $pdp_nom
     */
    public function setPdp_nom($pdp_nom)
    {
        if (ctype_space($pdp_nom) || empty($pdp_nom)) {
            self::setMessageErreur("Le nom est invalide. <br>");
            $this->setAutorisationBD(false);
        }
        $this->pdp_nom = $pdp_nom;
    }

    /**
     * @param $pdp_pre
     */
    public function setPdp_pre($pdp_pre)
    {
        if (ctype_space($pdp_pre) || empty($pdp_pre)) {
            self::setMessageErreur("Le prénom est invalide. <br>");
            $this->setAutorisationBD(false);
        }
        $this->pdp_pre = $pdp_pre;
    }

    /**
     * @param $pdp_ad1
     */
    public function setPdp_ad1($pdp_ad1)
    {
        $this->pdp_ad1 = $pdp_ad1;
    }

    /**
     * @param $pdp_ad2
     */
    public function setPdp_ad2($pdp_ad2)
    {
        $this->pdp_ad2 = $pdp_ad2;
    }

    /**
     * @param $pdp_ad3
     */
    public function setPdp_ad3($pdp_ad3)
    {
        $this->pdp_ad3 = $pdp_ad3;
    }

    /**
     * @param $pdp_ad4
     */
    public function setPdp_ad4($pdp_ad4)
    {
        $this->pdp_ad4 = $pdp_ad4;
    }

    /**
     * @param $pdp_cpo
     */
    public function setPdp_cpo($pdp_cpo)
    {
        if (ctype_space($pdp_cpo) || empty($pdp_cpo)) {
            self::setMessageErreur("Le code postal est invalide. <br>");
            $this->setAutorisationBD(false);
        }
        $this->pdp_cpo = $pdp_cpo;
    }

    /**
     * @param $pdp_vil
     */
    public function setPdp_vil($pdp_vil)
    {
        if (ctype_space($pdp_vil) || empty($pdp_vil)) {
            self::setMessageErreur("La ville est invalide. <br>");
            $this->setAutorisationBD(false);
        }
        $this->pdp_vil = $pdp_vil;
    }

    /**
     * @param $pdp_tel
     */
    public function setPdp_tel($pdp_tel)
    {

        $this->pdp_tel = $pdp_tel;

    }

    /**
     * @param $pdp_por
     */
    public function setPdp_por($pdp_por)
    {
        $this->pdp_por = $pdp_por;
    }

    /**
     * @param $pdp_mai
     */
    public function setPdp_mai($pdp_mai)
    {
        $this->pdp_mai = $pdp_mai;
    }


    /**
     * @param $pdp_dna
     */
    public function setPdp_dna($pdp_dna)
    {
        // checkdate ( int $month , int $day , int $year ) : bool
        if (!empty($pdp_dna)) {
            if (!checkdate(substr($pdp_dna, 5, 2), substr($pdp_dna, 8, 2), substr($pdp_dna, 0, 4))) {
                self::setMessageErreur("La date est invalide. <br>");
                $this->setAutorisationBD(false);
            }
        }

        $pdp_dna == '' ? $this->pdp_dna = NULL : $this->pdp_dna = $pdp_dna;
        //$this->pdp_dna =  $pdp_dna;

    }


    /**
     * @param $pdp_sta
     */
    public function setPdp_sta($pdp_sta)
    {
        $pdp_sta == '' ? $this->pdp_sta = NULL : $this->pdp_sta = $pdp_sta;

    }

    /**
     * @param $pdp_typ
     */
    public function setPdp_typ($pdp_typ)
    {
        if (ctype_space($pdp_typ) || empty($pdp_typ)) {

            self::setMessageErreur("Le type est obligatoire. <br>");
            $this->setAutorisationBD(false);
        }
        $this->pdp_typ = $pdp_typ;
    }

    /**
     * @param $pdp_sea
     */
    public function setPdp_sea($pdp_sea)
    {
        $pdp_sea == '' ? $this->pdp_sea = NULL : $this->pdp_sea = $pdp_sea;
    }

    /**
     * @param $pdp_dpr
     */
    public function setPdp_dpr($pdp_dpr)
    {
        $this->pdp_dpr = $pdp_dpr;
    }

    /**
     * @param $pdp_din
     */
    public function setPdp_din($pdp_din)
    {
        // checkdate ( int $month , int $day , int $year ) : bool
        if (empty($pdp_din) || !checkdate(substr($pdp_din, 5, 2), substr($pdp_din, 8, 2), substr($pdp_din, 0, 4))) {
            self::setMessageErreur("La date est invalide. <br>");
            $this->setAutorisationBD(false);
        }

        $this->pdp_din = $pdp_din;
    }


    /**
     * @param $pdp_prr
     */
    public function setPdp_prr($pdp_prr)
    {
        // checkdate ( int $month , int $day , int $year ) : bool
        if (!empty($pdp_prr)) {
            if ($pdp_prr != 'OUI' && $pdp_prr != 'NON') {
                self::setMessageErreur("Valeur invalide : OUI ou NON acceptée uniquement. <br>");
                $this->setAutorisationBD(false);
            }
        }
        $this->pdp_prr = $pdp_prr;
    }

    /**
     * @param $pdp_ric
     */
    public function setPdp_ric($pdp_ric)
    {
        $this->pdp_ric = $pdp_ric;
    }

    /**
     * @param $pdp_aur
     */
    public function setPdp_aur($pdp_aur)
    {
        $this->pdp_aur = $pdp_aur;
    }

    /**
     * @param $pdp_obs
     */
    public function setPdp_obs($pdp_obs)
    {
        $this->pdp_obs = $pdp_obs;
    }

    /**
     * @param $reu_dat
     */
    public function setReu_dat($reu_dat)
    {
        $this->reu_dat = $reu_dat;
    }

    /*--------------------- CHARGEMENT COMBOS -----------------*/
    /* POUR LE MOMENT ces 3 entités ne sont pas administrables */
    /* Chargement direct ici ....                              */

    public function setPdp_comboSta()
    {

        $this->oComboSta = new StatutModele(array());
        $this->pdp_comboSta = $this->oComboSta->getComboStatuts();
    }

    public function getPdp_comboSta()
    {

        return $this->pdp_comboSta;
    }

    public function setPdp_comboTyp()
    {
        $this->oComboTyp = new TypeModele(array());
        $this->pdp_comboTyp = $this->oComboTyp->getComboTypes();
    }

    public function getPdp_comboTyp()
    {

        return $this->pdp_comboTyp;
    }

    public function setPdp_comboSea()
    {
        $this->oComboSea = new SecteurModele(array());
        $this->pdp_comboSea = $this->oComboSea->getComboSecteurs();
    }

    public function getPdp_comboSea()
    {

        return $this->pdp_comboSea;
    }

    /* ---------------------------------------------------- */


    private function controle()
    {
        if(empty($this->getPdp_tel()) && empty($this->getPdp_por()) && empty($this->getPdp_mai())){
            self::setMessageErreur("Un téléphone ou une adresse mail est obligatoire. <br>");
            $this->setAutorisationBD(false);
        }

    }

    /* ---------------------------------------------------- */

    public function getAutorisationBD()
    {

        return $this->autorisationBD;
    }


    public function setAutorisationBD($a)
    {

        $this->autorisationBD = $a;
    }

    /* ======= Traitement des propriétés static ======= */


    public static function setMessageErreur($msg)
    {

        self::$messageErreur = self::$messageErreur . $msg;
    }


    public static function getMessageErreur()
    {

        return self::$messageErreur;
    }


    public static function setMessageSucces($msg)
    {

        self::$messageSucces = self::$messageSucces . $msg;
    }


    public static function getMessageSucces()
    {

        return self::$messageSucces;
    }

}
