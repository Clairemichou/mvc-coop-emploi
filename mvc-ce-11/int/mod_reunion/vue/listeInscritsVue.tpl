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

    {include file ='public/menu.tpl'}

    <div class="row">
        <div class="col-md-4 space">
            <a href="index.php?gestion=reunion&statut=1"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space ">
            <h2>{$titreGestion}</h2>
            <h4>Réunion du {$date|date_format:"%A %d %m %Y"|capitalize}</h4>
            <h4>{$lieu} à {$ville} </h4>
        </div>

    </div>

    <div class="row">

        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

            <p class="alert alert-info">
                Nombre de participants : {count($listeInscrits)}
            </p>

        </div>

    </div>


    <div class="row">
        <!-- ICI LES DONNES  -->
        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

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
                {foreach from=$listeInscrits item=inscrit}
                    <tr>
                        <td>
                            {$inscrit.pdp_ide}
                        </td>
                        <td>
                            {$inscrit.pdp_nom} &nbsp; {$inscrit.pdp_pre}
                        </td>
                        <td>
                            {$inscrit.pdp_cpo} &nbsp; {$inscrit.pdp_vil}
                        </td>
                        <td>
                            {if $inscrit.pdp_tel neq ""}
                                {$inscrit.pdp_tel} &nbsp; {$inscrit.pdp_por}
                            {else}
                                {$inscrit.pdp_por}
                            {/if}
                        </td>
                        <td>
                            {$inscrit.pdp_mai}
                        </td>
                        <td>
                            {if $inscrit.pdp_prr == NULL && $dateDuJour >= $date}
                                <form action="index.php" method="post">
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='etatPresence'>
                                    <input type='hidden' name='pdp_ide' value='{$inscrit.pdp_ide}'>
                                    <input type='hidden' name='valeur' value='OUI'>
                                    <input type='hidden' name='statut' value='{$statut}'>
                                    {* identifiant réunion nécessaire pour le retour à la liste*}
                                    <input type='hidden' name='reu_ide' value='{$inscrit.reu_ide}'>
                                    <input type="submit" class="btn btn-success btn-sm" value="Pre">
                                </form>
                                &nbsp;
                                <form action="index.php" method="post">
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='etatPresence'>
                                    <input type='hidden' name='pdp_ide' value='{$inscrit.pdp_ide}'>
                                    <input type='hidden' name='valeur' value='NON'>
                                    <input type='hidden' name='statut' value='{$statut}'>
                                    {* identifiant réunion nécessaire pour le retour à la liste*}
                                    <input type='hidden' name='reu_ide' value='{$inscrit.reu_ide}'>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Abs">
                                </form>
                            {elseif $inscrit.pdp_prr == 'OUI'}
                                <input type="submit" class="btn btn-success btn-sm" value="Présent(e)">
                            {elseif $inscrit.pdp_prr == 'NON'}
                                <input type="submit" class="btn btn-danger btn-sm" value="Absent(e)&nbsp;">
                            {else}
                                <input type="submit" class="btn btn-info btn-sm" value="A venir">
                            {/if}
                        </td>
                    </tr>
                {/foreach}
                <tfoot>

                <tr>
                    <td colspan="5">
                        <input type="button"  class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=reunion&statut={$statut}"' value="Retour">
                    </td>
                    <td colspan="1">
                        <p>
                            {if $statut == 1}
                        <form action="index.php" method="post">
                            {*  $inscrit.pdp_ric est commun à l'ensemeble des porteurs de projet  *}
                            <input type='hidden' name='reu_ide' value='{$inscrit.pdp_ric}'>
                            <input type='hidden' name='gestion' value='reunion'>
                            <input type='hidden' name='action' value='listeInscritsPdf'>
                            <input type='hidden' name='statut' value='{$statut}'>
                            <input type="submit" class="btn btn-warning btn-sm" name=""
                                   value="Editer la feuille d'émargement">
                        </form>
                        {/if}
                        </p>
                    </td>
                </tr>

                </tfoot>
                </tbody>
            </table>
        </div>
    </div>

    {include file='public/piedPage.tpl'}

</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/scripts.js"></script>
</body>
</html>
