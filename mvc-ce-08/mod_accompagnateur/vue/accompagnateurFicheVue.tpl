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

            <div class="col-md-12">
                <div class="col-md-4 space">
                    <a href="index.php?gestion=accompagnateur"><img src="public/images/plogo.PNG"></a>
                </div>
                <div class="col-md-6 space">
                    <h3>{$titreGestion}</h3>
                </div>
                <div class="col-md-2 space">


                </div>
            </div>

            <div class="row">

                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p {if $unAccompagnateur->getMessageErreur() neq ''} class="alert alert-danger"{/if}>
                        {$unAccompagnateur->getMessageErreur()}
                    </p>
                </div>
            </div>


            <div class="row">
                <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                    <form action="index.php" method="post" novalidate="">

                        <input type="hidden" name="gestion" value="accompagnateur">
                        <input type="hidden" name="action" value="{$action}">

                        {if $action eq 'ajouter'}
                            <i><sup>(*) Champs obligatoires </sup></i>
                        {/if}

                        {if $action neq 'ajouter'}
                            <div class="form-group">
                                Identifiant :
                                <input class="form-control" id="acc_ide" name="acc_ide" type="text"
                                       value="{$unAccompagnateur->getAcc_ide()}"
                                       readonly>
                            </div>
                        {/if}


                        <div class="form-group">
                            Nom <sup>(*)</sup> :
                            <strong>
                                <input class="form-control" id="pre" name="acc_nom" type="text"
                                       value="{$unAccompagnateur->getAcc_nom()}" {$comportement} required="required">
                            </strong>
                        </div>

                        <div class="form-group">
                            Prénom <sup>(*)</sup> :
                            <strong>
                                <input class="form-control" id="nom" name="acc_prenom" type="text"
                                       value="{$unAccompagnateur->getAcc_prenom()}" {$comportement} required="required">
                            </strong>
                        </div>


                        <div class="form-group">

                            Téléphone <sup>(*)</sup>:
                            <input class="form-control" id="tel" name="acc_tel" type="text"
                                   value="{$unAccompagnateur->getAcc_tel()}" {$comportement} required="required">
                        </div>


                        <div class="form-group">

                            Email : <sup>(*)</sup> :
                            <input class="form-control" id="mai" name="acc_mail" type="text"
                                   value="{$unAccompagnateur->getAcc_mail()}" {$comportement} required="required">
                        </div>


                        <div class="form-group">

                            Spécialisation  :
                            <input class="form-control" id="spe" name="acc_spe" type="text"
                                   value="{$unAccompagnateur->getAcc_spe()}" {$comportement}>
                        </div>


                        <div class="form-group">

                            Login <sup>(*)</sup> :
                            <input class="form-control" id="log" name="acc_log" type="text"
                                   value="{$unAccompagnateur->getAcc_log()}" {$comportement} required="required" autocomplete="off">
                        </div>

                        <input class="form-control" id="mpa" name="acc_mpa" type="hidden" value="">

                        <div class="form-group">

                            <div class="col-md-11">
                                <input type="button" class="btn btn-warning btn-sm"
                                       onclick='location.href = "index.php?gestion=accompagnateur"' value="Retour">
                            </div>

                            {if $action neq 'consulter'}
                                <div class="col-md-1">
                                    <input type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
                                </div>
                            {/if}

                        </div>

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
