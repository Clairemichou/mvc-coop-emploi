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
            <div class="col-md-4 space">
                <a href="../../../index.php?gestion=accueil"><img src="public/images/plogo.PNG"></a>
            </div>
            <div class="col-md-6 space">
                <h3>Liste des inscriptions</h3>
                <p>Réunion du {$reunion.reu_dat|date_format:"%A %e %B %Y"|capitalize}</p>
                <p>{$reunion.lie_nom} à {$reunion.lie_vil}</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-1 ">

            </div>

            <div class="row">
                <div class="col-md-3">
                    <p class="alert alert-info">
                        Nombre de participants : {$reunion|count}
                    </p>

                </div>

                <div class="row">
                    <!-- ICI LES DONNES  -->

                    <div class="col-md-offset-1 col-md-10 col-md-offset-1">

                        <form method="post" action="index.php">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="PDF">
                            <table class="table">
                                <thead class="">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        NOM
                                    </th>
                                    <th>
                                        DOMICILIATION
                                    </th>
                                    <th>
                                        TELEPHONE
                                    </th>
                                    <th>
                                        MAIL
                                    </th>
                                    <th>
                                        ETAT DE PRESENCE
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                {foreach from=$listeInscriptions item=inscription}
                                    <tr>
                                        <td>
                                            {$inscription.pdp_ide}
                                        </td>
                                        <td>
                                            {$inscription.pdp_nom} {$inscription.pdp_pre}
                                        </td>
                                        <td>
                                            {$inscription.pdp_vil} {$inscription.pdp_cpo}
                                        </td>
                                        <td>
                                            {$inscription.pdp_port}
                                        </td>
                                        <td>
                                            {$inscription.pdp_mai}
                                        </td>
                                        <td>
                                            <input type="hidden" name="reu_ide" value="{$inscription.pdp_ric}">
                                            {if $statut eq 0}
                                                {if $inscription.pdp_prr eq null}
                                                    <input type="submit" class="btn btn-success btn-sm" name="inscrire"
                                                           value="Présent">
                                                    <input type="submit" class="btn btn-danger btn-sm" name="absent"
                                                           value="Absent">
                                                {elseif $inscription.pdp_prr eq 1}
                                                    <input type="submit" class="btn btn-success btn-sm" name=""
                                                           value="Présent">
                                                {else}
                                                    <input type="submit" class="btn btn-danger btn-sm" name=""
                                                           value="Absent">
                                                {/if}
                                            {else}
                                                <input type="submit" class="btn btn-warning btn-sm" name="consulter"
                                                       value="A venir">
                                            {/if}

                                        </td>
                                    </tr>
                                    {foreachelse}
                                    <tr>
                                        <td colspan='6'>Aucun enregistrement de trouvé.</td>
                                    </tr>
                                {/foreach}

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="col-md-6">
                                            <input type="button" class="btn btn-warning btn-sm"
                                                   onclick='location.href = "index.php?gestion=reunion&statut={$statut}"'
                                                   value="Retour">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-warning btn-sm"
                                                   name="PDF"
                                                   value="Editer la feuille d'émargement">
                                        </div>
                                    </td>
                                </tr>

                                </tfoot>
                            </table>
                        </form>
                    </div>

                </div>

                {include file='public/piedPage.tpl'}
            </div>

            <script src="public/js/jquery.min.js"></script>
            <script src="public/js/bootstrap.min.js"></script>
            <script src="public/js/scripts.js"></script>
</body>
</html>
