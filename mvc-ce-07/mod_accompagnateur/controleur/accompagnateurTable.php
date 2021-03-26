<?php


class AccompagnateurTable
{
    private $acc_ide = "";
    private $acc_nom = "";
    private $acc_prenom = "";
    private $acc_tel = "";
    private $acc_mail = "";
    private $acc_spe = "";
    private $acc_log = "";
    private $acc_mpa = "coopemploi";

    private $autorisationBD = true;
    private static $messageErreur = "";
    private static $messageSucces = "";

    // 2 La méthode Hydrater
    public function hydrater(array $row)
    {
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
    public function __construct($data = null)
    {

        if ($data != null) {

            $this->hydrater($data);
        }

    }


    /*-------------------------------------*/
    /*                                     */
    /*-----------  LES SETTERS   ----------*/
    /*                                     */
    /*-------------------------------------*/

    /**
     * @param string $acc_ide
     */
    public function setAcc_ide($acc_ide)
    {
        $this->acc_ide = $acc_ide;
    }

    /**
     * @param string $acc_nom
     */
    public function setAcc_nom($acc_nom)
    {
        if (!is_string($acc_nom) || ctype_space($acc_nom) || empty($acc_nom)) {
            self::setMessageErreur("Le nom est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->acc_nom = $acc_nom;
    }

    /**
     * @param string $acc_prenom
     */
    public function setAcc_prenom($acc_prenom)
    {
        if (!is_string($acc_prenom) || ctype_space($acc_prenom) || empty($acc_prenom)) {
            self::setMessageErreur("Le prénom est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->acc_prenom = $acc_prenom;
    }

    /**
     * @param string $acc_tel
     */
    public function setAcc_tel($acc_tel)
    {
        if (!is_numeric($acc_tel) || ctype_space($acc_tel) || empty($acc_tel)) {
            self::setMessageErreur("Le téléphone est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->acc_tel = $acc_tel;
    }

    /**
     * @param string $acc_mail
     */
    public function setAcc_mail($acc_mail)
    {
        if (!is_string($acc_mail) || ctype_space($acc_mail) || empty($acc_mail)) {
            self::setMessageErreur("Le mail est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->acc_mail = $acc_mail;
    }

    /**
     * @param string $acc_spe
     */
    public function setAcc_spe($acc_spe)
    {
        $this->acc_spe = $acc_spe;
    }

    /**
     * @param string $acc_log
     */
    public function setAcc_log($acc_log)
    {
        //Vérifié l'unicité du login
        if (!is_string($acc_log) || ctype_space($acc_log) || empty($acc_log)) {
            self::setMessageErreur("Le login est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->acc_log = $acc_log;
    }

    /**
     * @param string $acc_mpa
     */
    public function setAcc_mpa($acc_mpa)
    {
        $pw = $this->acc_mpa;
        //Salage
        $gauche = "ar30&y%";
        $droite = "tk!@";

        $this->acc_mpa = hash('ripemd128', "$gauche$pw$droite");
    }


    /*-------------------------------------*/
    /*                                     */
    /*-----------  LES GETTERS   ----------*/
    /*                                     */
    /*-------------------------------------*/

    /**
     * @return string
     */
    public function getAcc_ide()
    {
        return $this->acc_ide;
    }

    /**
     * @return string
     */
    public function getAcc_nom()
    {
        return $this->acc_nom;
    }

    /**
     * @return string
     */
    public function getAcc_prenom()
    {
        return $this->acc_prenom;
    }

    /**
     * @return string
     */
    public function getAcc_tel()
    {
        return $this->acc_tel;
    }

    /**
     * @return string
     */
    public function getAcc_mail()
    {
        return $this->acc_mail;
    }

    /**
     * @return string
     */
    public function getAcc_spe()
    {
        return $this->acc_spe;
    }

    /**
     * @return string
     */
    public function getAcc_log()
    {
        return $this->acc_log;
    }

    /**
     * @return string
     */
    public function getAcc_mpa()
    {
        return $this->acc_mpa;
    }


    /*********************************/
    public function getAutorisationBD()
    {

        return $this->autorisationBD;
    }

    public function setAutorisationBD($a)
    {

        $this->autorisationBD = $a;
    }

    /*************Traitement des propriétés statiques**************/

    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    public static function setMessageErreur($msg)
    {
        self::$messageErreur = self::$messageErreur . $msg;
    }

    public static function getMessageSucces()
    {
        return self::$messageSucces;
    }

    public static function setMessageSucces($msg)
    {
        self::$messageSucces = self::$messageSucces . $msg;
    }

}