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

        <div class="row">
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                <p {if $leLieu->getMessageErreur() neq ''} class="alert alert-danger" {/if}>
                    {$leLieu->getMessageErreur()}
                </p>
            </div>
        </div>

        <div class="row col-md-12">
            <div class="col-md-offset-1 col-md-4">
                <form method="post" action="index.php">
                    <input type="hidden" name="gestion" value="lieu">
                    <input type="hidden" name="action" value="{$action}">

                    {if $action neq 'ajouter'}
                        <div class="form-group">
                            <b>Identifiant :</b>
                            <input type="text" class="form-control" id="lie_ide"
                                   value="{$leLieu->getLie_ide()}" {$comportement}>
                        </div>
                    {/if}

                    <div class="form-group">
                        <b>Nom de la salle:</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_nom"
                               value="{$leLieu->getLie_nom()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Adresse de la salle :</b>
                        <div class="form_group">
                            <i>Service, N° de bureau ou d'étage</i>
                            <input type="text" class="form-control" id="lie_ad1"
                                   value="{$leLieu->getLie_ad1()}" {$comportement}>
                        </div>

                        <div class="form_group">
                            <i>Nom de résidence, d'immeuble, de bâtiment, ZI</i>
                            <input type="text" class="form-control" id="lie_ad2"
                                   value="{$leLieu->getLie_ad2()}" {$comportement}>
                        </div>

                        <div class="form_group">
                            <i>N° de la voie, le type, nom de la voie </i>
                            <input type="text" class="form-control" id="lie_ad3"
                                   value="{$leLieu->getLie_ad3()}" {$comportement}>
                        </div>

                        <div class="form_group">
                            <i>Mention de distribution, lieu-dit</i>
                            <input type="text" class="form-control" id="lie_ad4"
                                   value="{$leLieu->getLie_ad4()}" {$comportement}>
                        </div>
                    </div>

                    <div class="form_group">
                        <b>Code Postal :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_cpo"
                               value="{$leLieu->getLie_cpo()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Ville :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_vil"
                               value="{$leLieu->getLie_vil()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Téléphone de la salle :</b>
                        <input type="text" class="form-control" id="lie_tel"
                               value="{$leLieu->getLie_tel()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Contact de la salle :</b>
                        <input type="text" class="form-control" id="lie_con"
                               value="{$leLieu->getLie_con()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Téléphone du contact :</b>
                        <input type="text" class="form-control" id="lie_tco"
                               value="{$leLieu->getLie_tco()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <b>Capacité d'accueil de la salle :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_cap"
                               value="{$leLieu->getLie_cap()}" {$comportement}>
                    </div>

                    <div class="form_group">
                        <div class="col-md-11">
                            <input type="button" class="btn btn-warning btn-sm"
                                   onclick='location.href="index.php?gestion=lieu"' value="Retour">
                        </div>
                    </div>
                    {if $action neq 'consulter'}
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
                        </div>
                    {/if}
            </div>

            </form>
        </div>

        {include file="public/piedPage.tpl"}
    </div>

    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/scripts.js"></script>
</body>
</html>
