<?php
/* Smarty version 3.1.29, created on 2020-11-10 10:41:21
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-06\mod_lieu\vue\lieuFicheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa6041326e59_15087587',
  'file_dependency' => 
  array (
    '2d3f2ce7aba563c211993e5e4acfa514ae20e1b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-06\\mod_lieu\\vue\\lieuFicheVue.tpl',
      1 => 1605000673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5faa6041326e59_15087587 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-06\\include\\libs\\plugins\\modifier.capitalize.php';
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

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


    <div class="row">
        <div class="col-md-4 space">
            <a href="index.php?gestion=lieu"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
        </div>
        <div class="col-md-2 space">


        </div>
    </div>

    <div class="row">
        <div class="col-md-offset-2 col-md-8 col-md-offset-2">
            <p <?php if ($_smarty_tpl->tpl_vars['leLieu']->value->getMessageErreur() != '') {?> class="alert alert-danger" <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getMessageErreur();?>

            </p>
        </div>
    </div>


    <div class="row">
        <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
            <form action="index.php" method="post" novalidate="">

                <input type="hidden" name="gestion" value="lieu">
                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                    <div class="form-group">
                        Identifiant :
                        <input class="form-control" id="lie_ide" name="lie_ide" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ide();?>
"
                               readonly>
                    </div>
                <?php }?>
                <div class="form-group">
                    Nom <sup>(*)</sup> :
                    <strong>
                        <input class="form-control" id="nom" name="lie_nom" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>

                <div class="form-group">
                    Service, N°de bureau ou d'étage :
                    <input class="form-control" id="lie_ad1" name="lie_ad1" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad1();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>

                <div class="form-group">
                    Résidence, Immeuble, Bâtiment, ZI :
                    <input class="form-control" id="ad2" name="lie_ad2" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad2();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                </div>
                <div class="form-group">
                    Numéro voie, type, nom de la voie :
                    <input class="form-control" id="ad3" name="lie_ad3" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad3();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                </div>
                <div class="form-group">
                    Mention de distribution, lieu-dit :
                    <input class="form-control" id="ad4" name="lie_ad4" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad4();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                </div>
                <div class="form-group">

                    Code postal <sup>(*)</sup> :
                    <input class="form-control" id="cpo" name="lie_cpo" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_cpo();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>
                <div class="form-group">

                    localité de destination cedex <sup>(*)</sup> :
                    <input class="form-control" id="vil" name="lie_vil" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_vil();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>
                <div class="form-group">

                    Téléphone de l'établissement :
                    <input class="form-control" id="tel" name="lie_tel" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_tel();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>
                <div class="form-group">

                    Nom du contact <sup>(*)</sup> :
                    <input class="form-control" id="con" name="lie_con" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_con();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>
                <div class="form-group">

                    Téléphone du contact <sup>(*)</sup> :
                    <input class="form-control" id="tco" name="lie_tco" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_tco();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>

                <div class="form-group">

                    Capacité d'accueil de la salle <sup>(*)</sup> :
                    <input class="form-control" id="cap" name="lie_cap" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_cap();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>

                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=lieu"' value="Retour">
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['action']->value != 'consulter') {?>
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning btn-sm"
                                   value="<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['action']->value);?>
">
                        </div>
                    <?php }?>
                </div>

            </form>

        </div>
    </div>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/piedPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
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
