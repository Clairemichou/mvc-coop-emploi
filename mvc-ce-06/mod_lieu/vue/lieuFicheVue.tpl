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
            <a href="index.php?gestion=lieu"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3>{$titreGestion}</h3>
        </div>
        <div class="col-md-2 space">


        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
            <p {if $leLieu->getMessageErreur() neq ''} class="alert alert-danger" {/if}>
                {$leLieu->getMessageErreur()}
            </p>
        </div>
    </div>


    <div class="row">
        <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
            <form action="index.php" method="post" novalidate="">

                <input type="hidden" name="gestion" value="lieu">
                <input type="hidden" name="action" value="{$action}">

                {if $action neq 'ajouter'}
                    <div class="form-group">
                        Identifiant :
                        <input class="form-control" id="lie_ide" name="lie_ide" type="text"
                               value="{$leLieu->getLie_ide()}"
                               readonly>
                    </div>
                {/if}
                <div class="form-group">
                    Nom <sup>(*)</sup> :
                    <strong>
                        <input class="form-control" id="nom" name="lie_nom" type="text"
                               value="{$leLieu->getLie_nom()}" {$comportement} required="required">
                    </strong>
                </div>

                <div class="form-group">
                    Service, N??de bureau ou d'??tage :
                    <input class="form-control" id="lie_ad1" name="lie_ad1" type="text"
                           value="{$leLieu->getLie_ad1()}" {$comportement} >
                </div>

                <div class="form-group">
                    R??sidence, Immeuble, B??timent, ZI :
                    <input class="form-control" id="ad2" name="lie_ad2" type="text"
                           value="{$leLieu->getLie_ad2()}" {$comportement}>
                </div>
                <div class="form-group">
                    Num??ro voie, type, nom de la voie :
                    <input class="form-control" id="ad3" name="lie_ad3" type="text"
                           value="{$leLieu->getLie_ad3()}" {$comportement}>
                </div>
                <div class="form-group">
                    Mention de distribution, lieu-dit :
                    <input class="form-control" id="ad4" name="lie_ad4" type="text"
                           value="{$leLieu->getLie_ad4()}" {$comportement}>
                </div>
                <div class="form-group">

                    Code postal <sup>(*)</sup> :
                    <input class="form-control" id="cpo" name="lie_cpo" type="text"
                           value="{$leLieu->getLie_cpo()}" {$comportement} required="required">
                </div>
                <div class="form-group">

                    localit?? de destination cedex <sup>(*)</sup> :
                    <input class="form-control" id="vil" name="lie_vil" type="text"
                           value="{$leLieu->getLie_vil()}" {$comportement} required="required">
                </div>
                <div class="form-group">

                    T??l??phone de l'??tablissement :
                    <input class="form-control" id="tel" name="lie_tel" type="text"
                           value="{$leLieu->getLie_tel()}" {$comportement} >
                </div>
                <div class="form-group">

                    Nom du contact <sup>(*)</sup> :
                    <input class="form-control" id="con" name="lie_con" type="text"
                           value="{$leLieu->getLie_con()}" {$comportement} required="required">
                </div>
                <div class="form-group">

                    T??l??phone du contact <sup>(*)</sup> :
                    <input class="form-control" id="tco" name="lie_tco" type="text"
                           value="{$leLieu->getLie_tco()}" {$comportement} required="required">
                </div>

                <div class="form-group">

                    Capacit?? d'accueil de la salle <sup>(*)</sup> :
                    <input class="form-control" id="cap" name="lie_cap" type="text"
                           value="{$leLieu->getLie_cap()}" {$comportement} required="required">
                </div>

                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=lieu"' value="Retour">
                    </div>
                    {if $action neq 'consulter'}
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning btn-sm"
                                   value="{$action|capitalize}">
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
