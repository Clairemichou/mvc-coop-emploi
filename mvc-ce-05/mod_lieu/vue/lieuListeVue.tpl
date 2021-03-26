<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{$titre|upper}</title>

    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="public/images/logo.PNG"/>
</head>
<body>

<div class="container-fluid">
    {include file='public/menu.tpl'}
    <div class="row">
        <div class="col-md-4 space">
            <img src="public/images/plogo.PNG">
        </div>
        <div class="col-md-6 space">
            {$titreGestion|upper}
        </div>
        <div class="col-md-2 space">
            <form action="index.php" method="post">

                <input type="hidden" name="gestion" value="lieu">
                <input type="hidden" name="action" value="form_ajouter">

                Ajouter un lieu :
                <input type="submit" class="btn btn-warning btn-sm" name="ajouter" value="Ajouter">
            </form>
        </div>

        <div class="row">
            <div class="col-md-9 ml-auto mr-auto">
                <p {if LieuTable::getMessageSucces() neq ''}
                    class="alert-success"
                        {/if}>
                    {LieuTable::getMessageSucces()}
                </p>
            </div>
        </div>

        <div class="col-md-9 ml-auto mr-auto">
            <!-- CREER LE TABLEAU AVEC LA LISTE table > thead > tbody > tfoot
            Id - Nom de la salle - La Ville - Contact  et son téléphone - Actions (modifier/consulter/supprimer)-->
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Nom de la salle
                    </th>
                    <th>
                        Ville
                    </th>
                    <th>
                        Contact
                    </th>
                    <th>
                        Telephone
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                {foreach from= $listeLieux item = lieu}
                    <tr>
                        <td>
                            {$lieu.lie_ide}

                        </td>
                        <td>
                            {$lieu.lie_nom}

                        </td>
                        <td>
                            {$lieu.lie_vil}

                        </td>
                        <td>
                            {$lieu.lie_con}

                        </td>
                        <td>
                            {$lieu.lie_tco}

                        </td>

                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_consulter">

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_modifier">

                                <input type="submit" class="btn btn-warning btn-sm" name="modifier" value="Modifier">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_supprimer">

                                <input type="submit" class="btn btn-warning btn-sm" name="supprimer" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>

{include file="public/piedPage.tpl"}
</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/scripts.js"></script>
</body>
</html>
