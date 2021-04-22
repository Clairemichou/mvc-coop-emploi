<?php

// On vérifie que la méthode utilisée est correcte
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    require_once 'include/parametre.php';
    require_once 'include/modele.php';

    $mod = new Modele();


    // Requete attendue type SELECT (liste des Réunions publiées en cours)
    $sql = "SELECT reu_ide, reu_dat, reu_heu, reu_dur, reu_pre, reu_cap, lie_nom, lie_cpo, lie_vil "
        . " FROM " . P . "reunion AS r, " . P . "lieu AS l "
        . " WHERE r.reu_lie = l.lie_ide "
        . " AND reu_dat >= CURDATE() AND reu_pub = 1"
        . " ORDER BY reu_dat DESC";

    $IdRequete = $mod->executeRequete($sql);


    // On vérifie si on a au moins 1 produit
    if ($IdRequete->rowCount() > 0) {

        $listeReunion = $IdRequete->fetchAll(PDO::FETCH_ASSOC);

        // On encode en json et on envoie
        echo json_encode($listeReunion);

    }else{

        echo json_encode(["message" => "Aucune réunion de planifiée actuellement."]);
    }

} else {
    // On gère l'erreur
    // http_response_code(405);
    echo json_encode(["message" => "La méthode n'est pas autorisée"]);
}

