<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    require_once 'include/modele.php';
    require_once 'include/parametre.php';

    $obMod = new Modele();

    //On récupère les informations envoyées
    $data = json_decode(file_get_contents("php://input"));

    if (!empty($data->pdp_nom) && !empty($data->pdp_pre) && !empty($data->pdp_cpo)
        && !empty($data->pdp_vil) && (!empty($data->pdp_tel) || !empty($data->pdp_port) || !empty($data->pdp_mai))
        && !empty($data->pdp_ric)) {

        //conversion pdp_ric de chaine vers entier
        $ric = intval($data->pdp_ric);
        $dateInscription = date("Y-m-d");

        $typ = 2;

        $sql = "INSERT INTO " . P . "porteur_de_projet "
            . "(pdp_nom, pdp_pre, pdp_cpo, pdp_vil, pdp_tel, pdp_port, pdp_mai, pdp_typ, pdp_din, pdp_ric)"
            . " VALUE(?,?,?,?,?,?,?,?,?,?)";

        $idRequete = $obMod->executeRequete($sql, array(
            $data->pdp_nom,
            $data->pdp_pre,
            $data->pdp_cpo,
            $data->pdp_vil,
            $data->pdp_tel,
            $data->pdp_port,
            $data->pdp_mai,
            $typ,
            $dateInscription,
            $ric
        ));

        if ($idRequete) {
            http_response_code(201);
            echo json_encode(["message" => "Votre inscription a bien été prise en compte. Nous vous remercions."]);
        } else {
            http_response_code(503);
            echo json_encode(["message" => "Un problème est survenu lors de votre inscription. Veuillez contactez Coop'emploi."]);
        }
    } else {
        echo json_encode(["message" => "Certaines données de votre formulaire sont absentes"]);
    }
} else {
    http_response_code(405);
    //Gestion de l'erreur
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);

}