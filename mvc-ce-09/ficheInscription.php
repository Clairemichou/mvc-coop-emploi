<?php
require_once 'public/configuration.php';

$tpl = new Smarty();

if (isset($_POST['form_inscription'])) {
    //Récupération des données du bouton "s'inscrire" listeReunion.tpl
    $tpl->assign('rappel', $_POST['rappel']);
    $tpl->assign('reu_ide', $_POST['reu_ide']);
    $tpl->assign('message', "");
    $tpl->assign('action', 0);

    //Génaration de ficheInscription.tpl
    $tpl->display('ficheInscription.tpl');

} elseif (isset($_POST['inscription'])) {
    //Accès a l'API

    //Initialisation d'une nouvelle resource cURL
    $curl = curl_init();

    if ($_SERVER['SERVER_ADDR'] == '94.247.180.77') {
        // l'URL du fichier inscription.php sur le VPS
    } else {
        $url = 'http://localhost:8080/mvc-coop-emploi/mvc-ce-09/api/inscription.php';
    }

    $postFields = json_encode([
        'pdp_pre' => $_POST['pdp_pre'],
        'pdp_nom' => $_POST['pdp_nom'],
        'pdp_cpo' => $_POST['pdp_cpo'],
        'pdp_vil' => $_POST['pdp_vil'],
        'pdp_tel' => $_POST['pdp_tel'],
        'pdp_port' => $_POST['pdp_port'],
        'pdp_mai' => $_POST['pdp_mai'],
        'pdp_ric' => $_POST['reu_ide']
    ]);

    $options = [
        CURLOPT_URL => $url,
        CURLOPT_HTTPHEADER => ['content-type:application/json'],
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => $postFields
    ];

    curl_setopt_array($curl, $options);

    $reponse = curl_exec($curl);

    if ($reponse === false) {
        var_dump('LA REPONSE EST : <br>' . curl_error($curl));
    } else {
        if (curl_getinfo($curl, CURLINFO_HTTP_CODE === 201)) {
            $tpl->assign('action', 1);
        } else {
            $tpl->assign('action', 0);
        }

        $a = json_decode($reponse);

        $tpl->assign('message', $a->message);
        $tpl->assign('rappel', $_POST['rappel']);
        $tpl->assign('reu_ide', $_POST['reu_ide']);

        $tpl->display('ficheInscription.tpl');
    }

    curl_close($curl);
}