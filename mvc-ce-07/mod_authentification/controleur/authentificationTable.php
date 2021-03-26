<?php


class AuthentificationTable
{
    private $f_login = "";
    private $f_motdepasse = "";
    private $autorisationSession = true;
    private static $messageErreur = "";

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

    /**
     * @return bool
     */
    public function getAutorisationSession()
    {
        return $this->autorisationSession;
    }

    /**
     * @param bool $autorisationSession
     */
    public function setAutorisationSession($bool)
    {
        $this->autorisationSession = $bool;
    }

    /**
     * @return string
     */
    public static function getMessageErreur()
    {
        return self::$messageErreur;
    }

    /**
     * @param string $messageErreur
     */
    public static function setMessageErreur($messageErreur)
    {
        self::$messageErreur = $messageErreur;
    }

    /**
     * @return string
     */
    public function getF_login()
    {
        return $this->f_login;
    }

    /**
     * @param string $f_login
     */
    public function setF_login($f_login)
    {
        if (ctype_space($f_login) || empty($f_login)) {
            self::setMessageErreur("Identification invalide. <br>");
            $this->autorisationSession(false);

        }
        $this->f_login = $f_login;
    }

    /**
     * @return string
     */
    public function getF_motdepasse()
    {
        return $this->f_motdepasse;
    }

    /**
     * @param string $f_motdepasse
     */
    public function setF_motdepasse($f_motdepasse)
    {
        if (!ctype_space($f_motdepasse) && !empty($f_motdepasse)) {
            //Salage

            $gauche = "ar30&y%";
            $droite = "tk!@";

            $this->f_motdepasse = hash('ripemd128', "$gauche$f_motdepasse$droite");
        } else {
            $this->f_motdepasse = '';
        }

    }


}