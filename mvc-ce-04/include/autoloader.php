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
            'mod_lieu/vue/'
        );

        foreach($directorys as $directory){
            if(file_exists($directory.$maClasse.'.php')){
                require_once($directory.$maClasse.'.php');
                return;
            }
        }

    }
}