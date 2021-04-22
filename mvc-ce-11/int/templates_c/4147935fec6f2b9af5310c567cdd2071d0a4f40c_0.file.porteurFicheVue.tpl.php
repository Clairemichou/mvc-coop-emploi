<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-24 14:44:35
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_porteur\vue\porteurFicheVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_603666533afd08_89855571',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4147935fec6f2b9af5310c567cdd2071d0a4f40c' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_porteur\\vue\\porteurFicheVue.tpl',
      1 => 1609347674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_603666533afd08_89855571 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\include\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),1=>array('file'=>'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\include\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

    <link rel="icon" type="image/png" href="public/images/plogo.PNG"/>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">

    <?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col-md-4 space">
            <a href="index.php?gestion=porteur&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&secteur=<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
"><img
                        src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
        </div>
        <div class="col-md-2 space">


        </div>
    </div>

    <div class="row">
        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
            <div class="col-md-offset-2 col-md-8 col-md-offset-2">

                <p <?php if ($_smarty_tpl->tpl_vars['lePorteur']->value->getMessageErreur() != '') {?> class="alert alert-danger" <?php }?>>
                    <?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getMessageErreur();?>

                </p>
            </div>
        <?php }?>
    </div>


    <div class="row">
        <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
            <form action="index.php" method="POST" novalidate>

                <input type="hidden" name="gestion" value="porteur">
                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
                <input type="hidden" name="secteur" value="<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['type']->value == 0) {?>
                    <input type="hidden" name="valeurRecherchee" value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_nom();?>
">
                <?php }?>

                <div class="form-group col-md-3 mg">
                                        Inscrit(e) le : <strong><?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_din(),"%A %d %m %Y"));?>
</strong>
                </div>
                <div class="form-group col-md-offset-1  col-md-4 mg">
                                        Réunion du  <strong><?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['lePorteur']->value->getReu_dat(),"%A %d %m %Y"));?>
</strong>
                </div>
                <div class="form-group col-md-offset-1 col-md-3 mg">
                    Présence réunion :

                    OUI : <input class="" id="pdp_prr" name="pdp_prr" type="radio"
                                 value="OUI" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_prr() == 'OUI') {?> checked <?php }?>> &nbsp;

                    NON : <input class="" id="pdp_prr" name="pdp_prr" type="radio"
                                 value="NON" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_prr() == 'NON') {?> checked <?php }?>>
                </div>

                <div class="form-group">
                    Type de porteur de projet :
                    <select id="pdp_typ" name="pdp_typ" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                        <option value="">--- Choix ---
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['types']->value, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['type']->value['typ_ide'] == $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_typ()) {?> selected <?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['type']->value['typ_ide'];?>
"><?php echo $_smarty_tpl->tpl_vars['type']->value['typ_lib'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                </div>

                <div class="form-group col-md-2 mg">
                    Identifiant :
                    <input class="form-control" id="pdp_ide" name="pdp_ide" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_ide();?>
" readonly>
                </div>

                <div class="form-group col-md-offset-1 col-md-4 mg">
                    Prénom<sup>(*)</sup> :
                    <strong>
                        <input class="form-control av" id="pdp_pre" name="pdp_pre" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_pre();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>

                <div class="form-group col-md-offset-1 col-md-4 mg">
                    Nom<sup>(*)</sup> :
                    <strong>
                        <input class="form-control av" id="pdp_nom" name="pdp_nom" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>


                <div class="form-group">
                    1 - Service, N°de bureau ou d'étage :

                    <input class="form-control av" id="pdp_ad1" name="pdp_ad1" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_ad1();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >

                </div>

                <div class="form-group">
                    2 - Résidence, Immeuble, Bâtiment, ZI :

                    <input class="form-control av" id="pdp_ad2" name="pdp_ad2" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_ad2();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>

                </div>

                <div class="form-group">
                    3 - Numéro voie, type, nom de la voie :

                    <input class="form-control av" id="pdp_ad3" name="pdp_ad3" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_ad3();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>

                </div>

                <div class="form-group">
                    4 - Mention de distribution (BP,...), Lieu-dit :

                    <input class="form-control av" id="pdp_ad4" name="pdp_ad4" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_ad4();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>

                </div>

                <div class="form-group col-md-3 mg">

                    Code Postal<sup>(*)</sup> :

                    <input class="form-control av" id="pdp_cpo" name="pdp_cpo" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_cpo();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">

                </div>

                <div class="form-group col-md-offset-1 col-md-8 mg">
                    Ville<sup>(*)</sup> :
                    <input class="form-control av" id="pdp_vil" name="pdp_vil" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_vil();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>


                <div class="form-group">
                    Adresse mail :

                    <input class="form-control av" id="pdp_mai" name="pdp_mai" type="email"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_mai();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>


                <div class="form-group  col-md-5 mg">
                    Téléphone Portable :

                    <input class="form-control av" id="pdp_por" name="pdp_por" type="tel"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_por();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>

                <div class="form-group col-md-offset-2 col-md-5 mg">
                    Téléphone Fixe :

                    <input class="form-control av" id="pdp_tel" name="pdp_tel" type="tel"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_tel();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>


                <div class="form-group col-md-3 mg">
                    Date de naissance :

                    <input class="form-control av" id="pdp_dna" name="pdp_dna" type="date"
                           value="<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_dna();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>


                <div class="form-group col-md-offset-1 col-md-8 mg">
                    Statut :
                    <select id="pdp_sta" name="pdp_sta" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                        <option value=''>--- Choix ---
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['statuts']->value, 'statut');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['statut']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['statut']->value['sta_ide'] == $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_sta()) {?> selected <?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['statut']->value['sta_ide'];?>
"><?php echo $_smarty_tpl->tpl_vars['statut']->value['sta_lib'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                </div>

                <div class="form-group ">
                    Secteur d'activité :
                    <select id="pdp_sea" name="pdp_sea" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                        <option value=''>--- Choix ---
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secteurs']->value, 'secteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['secteur']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['secteur']->value['sea_ide'] == $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_sea()) {?> selected <?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['secteur']->value['sea_ide'];?>
"><?php echo $_smarty_tpl->tpl_vars['secteur']->value['sea_lib'];?>

                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                </div>

                <div class="form-group ">
                    Descriptif du projet :
                    <textarea id="pdp_dpr" name="pdp_dpr" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_dpr();?>
</textarea>

                </div>

                <div class="form-group ">
                    Autres renseignements  :
                    <textarea id="pdp_aur" name="pdp_aur" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_aur();?>
</textarea>

                </div>

                <div class="form-group ">
                    Observations :
                    <textarea id="pdp_obs" name="pdp_obs" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 ><?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_obs();?>
</textarea>

                </div>
                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=porteur&type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
&secteur=<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
&valeurRecherchee=<?php echo $_smarty_tpl->tpl_vars['lePorteur']->value->getPdp_nom();?>
"' value="Retour">
                    </div>

                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning btn-sm" value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                        </div>
                    <?php }?>

                </div>

            </form>

        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender('file:public/piedPage.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<?php echo '<script'; ?>
 src="public/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/scripts.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
