<?php


// On vérifie que la méthode utilisée est correcte
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    require_once 'include/parametre.php';
    require_once 'include/modele.php';

    $mod = new Modele();

    // On récupère les informations envoyées
    $data = json_decode(file_get_contents("php://input"));


    if (!empty($data->pdp_nom) && !empty($data->pdp_pre) &&
        !empty($data->pdp_cpo) && !empty($data->pdp_vil) &&
        (!empty($data->pdp_tel) || !empty($data->pdp_por) || !empty($data->pdp_mai))
        && !empty($data->pdp_ric)) {
        //conversion chaine vers entier de l'id de la réunion
        $ric = intval($data->pdp_ric);
        //Date du jour de l'inscription
        $dateInscription = date("Y-m-d");
        // Type de porteur de projet à l'inscription : Candidat inscrit <=> Id = 2
        $typ = 2;
        // Requete attendue insertion PDP
        $sql = "INSERT INTO " . P . "porteur_de_projet "
            . "(pdp_nom, pdp_pre, pdp_cpo, pdp_vil, pdp_tel, pdp_por, pdp_mai, pdp_typ, pdp_din, pdp_ric)"
            . " VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $IdRequete = $mod->executeRequete($sql, array(
            $data->pdp_nom,
            $data->pdp_pre,
            $data->pdp_cpo,
            $data->pdp_vil,
            $data->pdp_tel,
            $data->pdp_por,
            $data->pdp_mai,
            $typ,
            $dateInscription,
            $ric
        ));

        if ($IdRequete) {
            // Création de l'enregistrement
            // On envoie un code 201
            http_response_code(201);
            echo json_encode(["message" => "Votre inscription a bien été prise en compte. Nous vous remercions."]);
        } else {
            // Erreur survenue
            // On envoie un code 503
            http_response_code(503);
            echo json_encode(["message" => "Un problème est survenu lors de l'ajout"]);
        }

    }else {

        echo json_encode(["message" => "Certaines données du formulaire sont absentes"]);
    }

} else {
    // On gère l'erreur
    http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}

