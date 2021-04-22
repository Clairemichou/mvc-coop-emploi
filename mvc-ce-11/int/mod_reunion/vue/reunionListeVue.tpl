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
            <a href="index.php?gestion=reunion&statut={$statut}"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3>{$titreGestion} {if $statut == 1} en cours {else} passées {/if}</h3>
        </div>
        <div class="col-md-2 space">
            {if $statut == 1}
                <form action='index.php' method='post'>
                    <input type='hidden' name='gestion' value='reunion'>
                    <input type='hidden' name='action' value='form_ajouter'>
                    <input type='hidden' name='statut' value='{$statut}'>

                    Ajouter une réunion :
                    <input type="submit" class="btn btn-warning btn-sm" name="ajouter" value="Ajouter">
                </form>
            {/if}

        </div>
    </div>

    <div class="row">

        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

            <p {if $message neq ''} class="alert alert-success" {/if}>
                {$message}
           <p/>
            <p {if $messageErreur neq ''} class="alert alert-danger" {/if}>

                {$messageErreur}
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
                        DATE
                    </th>
                    <th>
                        LIEU
                    </th>
                    <th>
                        ACCOMPAGNATEUR
                    </th>
                    <th>
                        PUBLIE O/N
                    </th>
                    <th>
                        VOIR LES INSCRITS
                    </th>
                    <th>
                        ACTION
                    </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <p>INFORMATIONS : ... </p>
                    </td>
                </tr>

                </tfoot>
                <tbody>
                {foreach from=$listeReunions item=reunion}
                    <tr>
                        <td>
                            {$reunion.reu_ide}
                        </td>
                        <td>
                            {$reunion.reu_dat|date_format:"%A %d %m %Y"|capitalize}
                        </td>
                        <td>
                            {$reunion.lie_nom} - {$reunion.lie_vil}
                        </td>
                        <td>
                            {$reunion.acc_pre} {$reunion.acc_nom}
                        </td>
                        <td>
                            {if $reunion.reu_pub == 0} NON {else} OUI {/if}
                        </td>
                        <td>
                            {if $reunion.nb > 0}
                                <a href="index.php?gestion=reunion&action=listeInscrits&reu_ide={$reunion.reu_ide}&statut={$statut}">{$reunion.nb}</a>
                            {else}
                                0
                            {/if}

                        </td>
                        <td>
                            <form action='index.php' method='post'>
                                <input type='hidden' name='reu_ide' value='{$reunion.reu_ide}'>
                                <input type='hidden' name='gestion' value='reunion'>
                                <input type='hidden' name='action' value='form_consulter'>
                                <input type='hidden' name='statut' value='{$statut}'>

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
                            </form>
                            {if $statut == 1}
                                <form action='index.php' method='post'>
                                    <input type='hidden' name='reu_ide' value='{$reunion.reu_ide}'>
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='form_modifier'>
                                    <input type='hidden' name='statut' value='{$statut}'>
                                    <input type="submit" class="btn btn-warning btn-sm" name="modifier"
                                           value="Modifier">
                                </form>
                                <form action='index.php' method='post'>
                                    <input type='hidden' name='reu_ide' value='{$reunion.reu_ide}'>
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='form_supprimer'>
                                    <input type='hidden' name='statut' value='{$statut}'>
                                    <input type="submit" class="btn btn-warning btn-sm" name="supprimer"
                                           value="Supprimer">
                                </form>
                            {/if}
                        </td>
                    </tr>
                    {foreachelse}
                    <tr>
                        <td colspan='6'>Aucun enregistrement trouvé.</td>
                    </tr>
                {/foreach}

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
