<?php
require_once 'public/configuration.php';

// Initialisation une nouvelle ressource cURL
$curl = curl_init();

if ($_SERVER['SERVER_ADDR'] == '94.247.180.77') {

    $url = 'http://94.247.180.77/plesk-site-preview/thierry-cours.fr/https/94.247.180.77/mvc-coopemploi-oriente-objet/mvc-ce-11/api/reunion.php';

} elseif ($_SERVER['SERVER_ADDR'] == '::1' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {

    $url = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/mvc-coopemploi-oriente-objet/mvc-ce-11/api/reunion.php';
}

//fonctionne en localhost ... !
//$protocole = strtolower(current(explode('/',$_SERVER['SERVER_PROTOCOL'])));
//$url = $protocole.'://'.$_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['PHP_SELF']).'/api/reunion.php';


$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($curl, $options);



$reponse = curl_exec($curl);


if ($reponse === false) {

    var_dump('LA REPONSE EST  : <br>' . curl_error($curl));

} else {

    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {

        $ric = json_decode($reponse);

        if(isset($ric->message)){
            $tpl->assign('affichage', 0);
            $tpl->assign('message', $ric->message);
        }else{
            $tpl->assign('affichage', 1);
            $tpl->assign('message', "");
            $tpl->assign('listeReunion', $ric);
        }

        $tpl->display('listeReunion.tpl');
    }

}

curl_close($curl);

