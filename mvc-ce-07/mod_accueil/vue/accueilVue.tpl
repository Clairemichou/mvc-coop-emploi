<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{$titre|upper}</title>

    <link rel="icon" type="image/png" href="public/images/plogo.PNG"/>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
    <div class="row">

        {include file='public/menu.tpl'}
        <div class="col-md-12">
            <h2 class="space">
                <img src="public/images/logo.PNG"> Une coopérative d'activités et d'emploi
            </h2>
            <p>
                Les CAE constituent un concept original permettant à un porteur de projet de tester son activité en
                toute sécurité.
            <p>
                <a class="btn" href="https://www.afecreation.fr/pid14974/cooperative-activite-emploi-cae.html"
                   target="_blank">Plus de détails sur le site : afecreation</a>
            </p>
        </div>
    </div>

</div>


{include file='public/piedPage.tpl'}

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/scripts.js"></script>
</body>
</html>
