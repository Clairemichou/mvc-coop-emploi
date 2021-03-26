<?php
session_start();

include_once('include/configuration.php');

Autoloader::inscrire();

if (!isset($_SESSION['login'])) {
    $_REQUEST['gestion'] = 'authentification';
} elseif (!isset($_REQUEST['gestion'])) {
    $_REQUEST['gestion'] = 'accueil';
}

//var_dump($_REQUEST);

//require_once('mod_' . $_REQUEST['gestion'] . '/' . $_REQUEST['gestion'] . '.php');

$oRouteur = new $_REQUEST['gestion']($_REQUEST);

$oRouteur->choixAction();