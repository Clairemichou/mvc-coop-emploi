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
                        <a href="index.php?gestion=accueil"><img src="public/images/plogo.PNG"></a>
                    </div>
                    <div class="col-md-6 space">
                        <h3>{$titreGestion}</h3>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1 ">

                    </div>

                    <div class="row">
                        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                            <p {if ReunionTable::getMessageSucces() neq ''} class="alert alert-success" {/if}>
                                {ReunionTable::getMessageSucces()}
                            </p>

                            <div class="col-md-1 ">

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
                                                STATUT DE PUBLICATION
                                            </th>
                                            <th>
                                                VOIR LES INSCRITS
                                            </th>
                                            <th>
                                                ACTION
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {foreach from=$listeReunions item=reunion}
                                            <tr>
                                                <td>
                                                    {$reunion.reu_ide}
                                                </td>
                                                <td>
                                                    {$reunion.reu_dat|date_format:"%d %m %Y"}
                                                </td>
                                                <td>
                                                    {$reunion.lie_nom}
                                                </td>
                                                <td>
                                                    {$reunion.acc_prenom|upper} {$reunion.acc_nom}
                                                </td>
                                                <td>
                                                    {$reunion.reu_pub}
                                                </td>
                                                <td>
                                                    {if {$reunion.nb} > 0}
                                                        <a href="index.php?gestion=reunion&action=inscription&reu_ide={$reunion.reu_ide}&statut=0">
                                                            {$reunion.nb}
                                                        </a>
                                                    {else}
                                                        {$reunion.nb}
                                                    {/if}
                                                </td>
                                                <td>
                                                    <form action='index.php' method='post'>
                                                        <input type='hidden' name='reu_ide' value='{$reunion.reu_ide}'>
                                                        <input type='hidden' name='gestion' value='reunion'>
                                                        <input type='hidden' name='action' value='form_consulter'>

                                                        <input type="submit" class="btn btn-warning btn-sm" name="consulter"
                                                               value="Consulter">
                                                    </form>
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
                                                <p>INFORMATIONS : {count($listeReunions)} </p>
                                            </td>
                                        </tr>

                                    </tfoot>
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
