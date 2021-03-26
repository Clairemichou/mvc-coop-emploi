<?php

require_once 'public/configuration.php';

$tpl = new Smarty();

//Initialisation d'une nouvelle resource cURL
$curl = curl_init();

if ($_SERVER['SERVER_ADDR'] == '94.247.180.77') {
    $url = 'http://94.247.180.77/plesk-site-preview/cmichel.fr/https/94.247.180.77/mvc-coop-emploi/mvc-ce-09/api/reunion.php';
} else {
    $url = 'http://localhost:8080/mvc-coop-emploi/mvc-ce-09/api/reunion.php';
}

$options = [
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true
];

curl_setopt_array($curl, $options);

$reponse = curl_exec($curl);

if ($reponse === false) {
    
} else {
    if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 200) {
        $ric = json_decode($reponse);
        if (isset($ric->message)) {
            $tpl->assign('message', $ric->message);
            $tpl->assign('affichage', 0);
        } else {
            $tpl->assign('message', "");
            $tpl->assign('affichage', 1);
            $tpl->assign('listeReunion', $ric);
        }
        $tpl->display('listeReunion.tpl');
    }
}

curl_close($curl);
