<?php

/**
 * Class LieuTable
 */
class LieuTable
{
    // 1 Déclarer les propriétés
    private $lie_ide = "";
    private $lie_nom = "";
    private $lie_ad1 = "";
    private $lie_ad2 = "";
    private $lie_ad3 = "";
    private $lie_ad4 = "";
    private $lie_cpo = "";
    private $lie_vil = "";
    private $lie_tel = "";
    private $lie_con = "";
    private $lie_tco = "";
    private $lie_cap = "";

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
    public function __construct( $data = null){

        if($data != null){

            $this->hydrater($data);
        }

    }



    /*-------------------------------------*/
    /*                                     */
    /*-----------  LES SETTERS   ----------*/
    /*                                     */
    /*-------------------------------------*/

    /**
     * @param string $lie_ide
     */
    public function setLie_ide($lie_ide)
    {
        $this->lie_ide = $lie_ide;
    }

    /**
     * @param string $lie_nom
     */
    public function setLie_nom($lie_nom)
    {
        if(!is_string($lie_nom) || ctype_space($lie_nom) || empty($lie_nom)){
            self::setMessageErreur ( "Le nom est invalide.<br>");
            $this->setAutorisationBD(false);
        }

        $this->lie_nom = $lie_nom;
    }

    /**
     * @param string $lie_ad1
     */
    public function setLie_ad1($lie_ad1)
    {
        $this->lie_ad1 = $lie_ad1;
    }

    /**
     * @param string $lie_ad2
     */
    public function setLie_ad2($lie_ad2)
    {
        $this->lie_ad2 = $lie_ad2;
    }

    /**
     * @param string $lie_ad3
     */
    public function setLie_ad3($lie_ad3)
    {
        $this->lie_ad3 = $lie_ad3;
    }

    /**
     * @param string $lie_ad4
     */
    public function setLie_ad4($lie_ad4)
    {
        $this->lie_ad4 = $lie_ad4;
    }

    /**
     * @param string $lie_cpo
     */
    public function setLie_cpo($lie_cpo)
    {
        if (ctype_space($lie_cpo) || empty($lie_cpo) || strlen($lie_cpo) != 5){
            self::setMessageErreur ( "Le code postal est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->lie_cpo = $lie_cpo;
    }

    /**
     * @param string $lie_vil
     */
    public function setLie_vil($lie_vil)
    {
        if (ctype_space($lie_vil) || empty($lie_vil)) {
            self::setMessageErreur ( "La ville est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->lie_vil = $lie_vil;
    }

    /**
     * @param string $lie_tel
     */
    public function setLie_tel($lie_tel)
    {
        $this->lie_tel = $lie_tel;
    }

    /**
     * @param string $lie_con
     */
    public function setLie_con($lie_con)
    {
        if (ctype_space($lie_con) || empty($lie_con)){
            self::setMessageErreur ( "Le Nom du contact est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->lie_con = $lie_con;
    }

    /**
     * @param string $lie_tco
     */
    public function setLie_tco($lie_tco)
    {

        $this->lie_tco = $lie_tco;
    }

    /**
     * @param string $lie_cap
     */
    public function setLie_cap($lie_cap)
    {
        if (!is_numeric($lie_cap) || ctype_space($lie_cap) || empty($lie_cap)){
            self::setMessageErreur ( "Le capacité est invalide.<br>");
            $this->setAutorisationBD(false);
        }
        $this->lie_cap = $lie_cap;
    }


    /*-------------------------------------*/
    /*                                     */
    /*-----------  LES GETTERS   ----------*/
    /*                                     */
    /*-------------------------------------*/

    /**
     * @return string
     */
    public function getLie_ide()
    {
        return $this->lie_ide;
    }

    /**
     * @return string
     */
    public function getLie_nom()
    {
        return $this->lie_nom;
    }

    /**
     * @return string
     */
    public function getLie_ad1()
    {
        return $this->lie_ad1;
    }

    /**
     * @return string
     */
    public function getLie_ad2()
    {
        return $this->lie_ad2;
    }

    /**
     * @return string
     */
    public function getLie_ad3()
    {
        return $this->lie_ad3;
    }

    /**
     * @return string
     */
    public function getLie_ad4()
    {
        return $this->lie_ad4;
    }

    /**
     * @return string
     */
    public function getLie_cpo()
    {
        return $this->lie_cpo;
    }

    /**
     * @return string
     */
    public function getLie_vil()
    {
        return $this->lie_vil;
    }

    /**
     * @return string
     */
    public function getLie_tel()
    {
        return $this->lie_tel;
    }

    /**
     * @return string
     */
    public function getLie_con()
    {
        return $this->lie_con;
    }

    /**
     * @return string
     */
    public function getLie_tco()
    {
        return $this->lie_tco;
    }

    /**
     * @return string
     */
    public function getLie_cap()
    {
        return $this->lie_cap;
    }

    /*********************************/
    public function getAutorisationBD(){

        return $this->autorisationBD;
    }

    public function setAutorisationBD($a){

        $this->autorisationBD = $a;
    }
    /*************Traitement des propriétés statiques**************/

    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    public static function setMessageErreur($msg)
    {
        self::$messageErreur = self::$messageErreur.$msg;
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