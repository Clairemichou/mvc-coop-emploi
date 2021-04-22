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
            <a href="index.php?gestion=porteur&type={$type}&secteur={$secteur}"><img
                        src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3>{$titreGestion}</h3>
        </div>
        <div class="col-md-2 space">


        </div>
    </div>

    <div class="row">
        {if $action neq 'consulter'}
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">

                <p {if $lePorteur->getMessageErreur() neq ''} class="alert alert-danger" {/if}>
                    {$lePorteur->getMessageErreur()}
                </p>
            </div>
        {/if}
    </div>


    <div class="row">
        <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
            <form action="index.php" method="POST" novalidate>

                <input type="hidden" name="gestion" value="porteur">
                <input type="hidden" name="action" value="{$action}">
                <input type="hidden" name="type" value="{$type}">
                <input type="hidden" name="secteur" value="{$secteur}">
                {if $type == 0}
                    <input type="hidden" name="valeurRecherchee" value="{$lePorteur->getPdp_nom()}">
                {/if}

                <div class="form-group col-md-3 mg">
                    {*                    penser conserver id de la réunion *}
                    Inscrit(e) le : <strong>{$lePorteur->getPdp_din()|date_format:"%A %d %m %Y"|capitalize}</strong>
                </div>
                <div class="form-group col-md-offset-1  col-md-4 mg">
                    {*                    penser conserver id de la réunion *}
                    Réunion du  <strong>{$lePorteur->getReu_dat()|date_format:"%A %d %m %Y"|capitalize}</strong>
                </div>
                <div class="form-group col-md-offset-1 col-md-3 mg">
                    Présence réunion :

                    OUI : <input class="" id="pdp_prr" name="pdp_prr" type="radio"
                                 value="OUI" {$comportement} {if $lePorteur->getPdp_prr() == 'OUI'} checked {/if}> &nbsp;

                    NON : <input class="" id="pdp_prr" name="pdp_prr" type="radio"
                                 value="NON" {$comportement} {if $lePorteur->getPdp_prr() == 'NON'} checked {/if}>
                </div>

                <div class="form-group">
                    Type de porteur de projet :
                    <select id="pdp_typ" name="pdp_typ" class="form-control" {$comportement} >
                        <option value="">--- Choix ---
                            {foreach from=$types item=type}
                        <option {if $type.typ_ide == $lePorteur->getPdp_typ()} selected {/if}
                                value="{$type.typ_ide}">{$type.typ_lib}
                            {/foreach}
                    </select>

                </div>

                <div class="form-group col-md-2 mg">
                    Identifiant :
                    <input class="form-control" id="pdp_ide" name="pdp_ide" type="text"
                           value="{$lePorteur->getPdp_ide()}" readonly>
                </div>

                <div class="form-group col-md-offset-1 col-md-4 mg">
                    Prénom<sup>(*)</sup> :
                    <strong>
                        <input class="form-control av" id="pdp_pre" name="pdp_pre" type="text"
                               value="{$lePorteur->getPdp_pre()}" {$comportement} required="required">
                    </strong>
                </div>

                <div class="form-group col-md-offset-1 col-md-4 mg">
                    Nom<sup>(*)</sup> :
                    <strong>
                        <input class="form-control av" id="pdp_nom" name="pdp_nom" type="text"
                               value="{$lePorteur->getPdp_nom()}" {$comportement} required="required">
                    </strong>
                </div>


                <div class="form-group">
                    1 - Service, N°de bureau ou d'étage :

                    <input class="form-control av" id="pdp_ad1" name="pdp_ad1" type="text"
                           value="{$lePorteur->getPdp_ad1()}" {$comportement} >

                </div>

                <div class="form-group">
                    2 - Résidence, Immeuble, Bâtiment, ZI :

                    <input class="form-control av" id="pdp_ad2" name="pdp_ad2" type="text"
                           value="{$lePorteur->getPdp_ad2()}" {$comportement}>

                </div>

                <div class="form-group">
                    3 - Numéro voie, type, nom de la voie :

                    <input class="form-control av" id="pdp_ad3" name="pdp_ad3" type="text"
                           value="{$lePorteur->getPdp_ad3()}" {$comportement}>

                </div>

                <div class="form-group">
                    4 - Mention de distribution (BP,...), Lieu-dit :

                    <input class="form-control av" id="pdp_ad4" name="pdp_ad4" type="text"
                           value="{$lePorteur->getPdp_ad4()}" {$comportement}>

                </div>

                <div class="form-group col-md-3 mg">

                    Code Postal<sup>(*)</sup> :

                    <input class="form-control av" id="pdp_cpo" name="pdp_cpo" type="text"
                           value="{$lePorteur->getPdp_cpo()}" {$comportement} required="required">

                </div>

                <div class="form-group col-md-offset-1 col-md-8 mg">
                    Ville<sup>(*)</sup> :
                    <input class="form-control av" id="pdp_vil" name="pdp_vil" type="text"
                           value="{$lePorteur->getPdp_vil()}" {$comportement} required="required">
                </div>


                <div class="form-group">
                    Adresse mail :

                    <input class="form-control av" id="pdp_mai" name="pdp_mai" type="email"
                           value="{$lePorteur->getPdp_mai()}" {$comportement} >
                </div>


                <div class="form-group  col-md-5 mg">
                    Téléphone Portable :

                    <input class="form-control av" id="pdp_por" name="pdp_por" type="tel"
                           value="{$lePorteur->getPdp_por()}" {$comportement} >
                </div>

                <div class="form-group col-md-offset-2 col-md-5 mg">
                    Téléphone Fixe :

                    <input class="form-control av" id="pdp_tel" name="pdp_tel" type="tel"
                           value="{$lePorteur->getPdp_tel()}" {$comportement} >
                </div>


                <div class="form-group col-md-3 mg">
                    Date de naissance :

                    <input class="form-control av" id="pdp_dna" name="pdp_dna" type="date"
                           value="{$lePorteur->getPdp_dna()}" {$comportement} >
                </div>


                <div class="form-group col-md-offset-1 col-md-8 mg">
                    Statut :
                    <select id="pdp_sta" name="pdp_sta" class="form-control" {$comportement} >
                        <option value=''>--- Choix ---
                            {foreach from=$statuts item=statut}
                        <option {if $statut.sta_ide == $lePorteur->getPdp_sta()} selected {/if}
                                value="{$statut.sta_ide}">{$statut.sta_lib}
                            {/foreach}
                    </select>

                </div>

                <div class="form-group ">
                    Secteur d'activité :
                    <select id="pdp_sea" name="pdp_sea" class="form-control" {$comportement} >
                        <option value=''>--- Choix ---
                            {foreach from=$secteurs item=secteur}
                        <option {if $secteur.sea_ide == $lePorteur->getPdp_sea()} selected {/if}
                                value="{$secteur.sea_ide}">{$secteur.sea_lib}
                            {/foreach}
                    </select>

                </div>

                <div class="form-group ">
                    Descriptif du projet :
                    <textarea id="pdp_dpr" name="pdp_dpr" class="form-control" {$comportement} >{$lePorteur->getPdp_dpr()}</textarea>

                </div>

                <div class="form-group ">
                    Autres renseignements  :
                    <textarea id="pdp_aur" name="pdp_aur" class="form-control" {$comportement} >{$lePorteur->getPdp_aur()}</textarea>

                </div>

                <div class="form-group ">
                    Observations :
                    <textarea id="pdp_obs" name="pdp_obs" class="form-control" {$comportement} >{$lePorteur->getPdp_obs()}</textarea>

                </div>
                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=porteur&type={$type}&secteur={$secteur}&valeurRecherchee={$lePorteur->getPdp_nom()}"' value="Retour">
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
