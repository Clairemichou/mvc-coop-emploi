<?php

require_once 'public/configuration.php';

if(isset($_POST['form_inscription'])){


    $tpl->assign('rappel', $_POST['rappel']);
    $tpl->assign('reu_ide', $_POST['reu_ide']);
    $tpl->assign('message', "");
    $tpl->assign('action', 0);
    $tpl->display('inscription.tpl');


}elseif(isset($_POST['inscription'])){

    //cURL envoyer les données du formulaire
    $curl = curl_init();

    if ($_SERVER['SERVER_ADDR'] == '94.247.180.77') {

        $url = 'http://94.247.180.77/plesk-site-preview/thierry-cours.fr/https/94.247.180.77/mvc-coopemploi-oriente-objet/mvc-ce-11/api/inscription.php';

    } elseif ($_SERVER['SERVER_ADDR'] == '::1' || $_SERVER['SERVER_ADDR'] == '127.0.0.1') {

        $url = 'http://localhost:'.$_SERVER['SERVER_PORT'].'/mvc-coopemploi-oriente-objet/mvc-ce-11/api/inscription.php';

    }


    $postfields = json_encode([
        'pdp_nom' => $_POST['pdp_nom'],
        'pdp_pre' => $_POST['pdp_pre'],
        'pdp_cpo' => $_POST['pdp_cpo'],
        'pdp_vil' => $_POST['pdp_vil'],
        'pdp_tel' => $_POST['pdp_tel'],
        'pdp_por' => $_POST['pdp_por'],
        'pdp_mai' => $_POST['pdp_mai'],
        'pdp_ric' => $_POST['reu_ide']
    ]);


    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => ['content-type:application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postfields
    ];

    curl_setopt_array($curl, $options);


    $reponse = curl_exec($curl);


    if ($reponse === false) {

        var_dump('LA REPONSE EST  : <br>' . curl_error($curl));

    } else {

        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) === 201) {

            $tpl->assign('action', 1);

        }else{

            $tpl->assign('action', 0);

        }

        $a = json_decode($reponse);

        $tpl->assign('message', $a->message);
        $tpl->assign('rappel', $_POST['rappel']);
        $tpl->assign('reu_ide', $_POST['reu_ide']);

        $tpl->display('inscription.tpl');
    }


    curl_close($curl);
}
