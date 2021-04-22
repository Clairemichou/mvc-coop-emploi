<?php


class Autoloader
{
    public static function inscrire()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    public static function autoload($maClasse)
    {
        $maClasse = lcfirst($maClasse);

        $directorys = array(
            'mod_accueil/',
            'mod_accueil/controleur/',
            'mod_accueil/modele/',
            'mod_accueil/vue/',
            'mod_lieu/',
            'mod_lieu/controleur/',
            'mod_lieu/modele/',
            'mod_lieu/vue/',
            'mod_accompagnateur/',
            'mod_accompagnateur/controleur/',
            'mod_accompagnateur/modele/',
            'mod_accompagnateur/vue/',
            'mod_authentification/',
            'mod_authentification/controleur/',
            'mod_authentification/modele/',
            'mod_authentification/vue/',
            'mod_reunion/',
            'mod_reunion/controleur/',
            'mod_reunion/modele/',
            'mod_reunion/vue/',
            'mod_inscription/',
            'mod_inscription/controleur/',
            'mod_inscription/modele/',
            'mod_inscription/vue/'
        );

        foreach ($directorys as $directory) {
            if (file_exists($directory . $maClasse . '.php')) {
                require_once($directory . $maClasse . '.php');
                return;
            }
        }

    }
}