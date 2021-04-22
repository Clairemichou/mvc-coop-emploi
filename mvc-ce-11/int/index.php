<?php
session_start();

require_once('include/configuration.php');

/**
 * Classe statique Autoloader. Exécute la méthode inscrire()
 */
Autoloader::inscrire();


if (!isset($_SESSION['login'])) {
    
    $_REQUEST['gestion'] = 'authentification';
    
}elseif (!isset($_REQUEST['gestion'])) {

	$_REQUEST['gestion'] = "accueil";
}

 //var_dump($_REQUEST);

$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();

