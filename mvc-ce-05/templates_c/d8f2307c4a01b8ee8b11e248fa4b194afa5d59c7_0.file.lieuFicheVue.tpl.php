<?php
/* Smarty version 3.1.29, created on 2020-10-14 14:52:25
  from "C:\wamp64\www\mvc-coopemploi\mvc-ce-05\mod_lieu\vue\lieuFicheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f8710a9b78fc8_13152576',
  'file_dependency' => 
  array (
    'd8f2307c4a01b8ee8b11e248fa4b194afa5d59c7' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi\\mvc-ce-05\\mod_lieu\\vue\\lieuFicheVue.tpl',
      1 => 1602687140,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5f8710a9b78fc8_13152576 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

    <link rel="icon" type="image/png" href="public/images/logo.PNG"/>
</head>
<body>

<div class="container-fluid">
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="row">
        <div class="col-md-4 space">
            <img src="public/images/plogo.PNG">
        </div>
        <div class="col-md-6 space">
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titreGestion']->value, 'UTF-8');?>

        </div>

        <div class="row col-md-12">
            <div class="col-md-offset-1 col-md-4">
                <form method="post" action="index.php">
                    <div class="form-group">
                        <b>Identifiant :</b>
                        <input type="text" class="form-control" id="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ide();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form-group">
                        <b>Nom de la salle:</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_nom" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Adresse de la salle :</b>
                        <div class="form_group">
                            <i>Service, N° de bureau ou d'étage</i>
                            <input type="text" class="form-control" id="lie_ad1" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad1();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                        </div>

                        <div class="form_group">
                            <i>Nom de résidence, d'immeuble, de bâtiment, ZI</i>
                            <input type="text" class="form-control" id="lie_ad2" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad2();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                        </div>

                        <div class="form_group">
                            <i>N° de la voie, le type, nom de la voie </i>
                            <input type="text" class="form-control" id="lie_ad3" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad3();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                        </div>

                        <div class="form_group">
                            <i>Mention de distribution, lieu-dit</i>
                            <input type="text" class="form-control" id="lie_ad4" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_ad4();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                        </div>
                    </div>

                    <div class="form_group">
                        <b>Code Postal :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_cpo" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_cpo();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Ville :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_vil" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_vil();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Téléphone de la salle :</b>
                        <input type="text" class="form-control" id="lie_tel" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_tel();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Contact de la salle :</b>
                        <input type="text" class="form-control" id="lie_con" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_con();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Téléphone du contact :</b>
                        <input type="text" class="form-control" id="lie_tco" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_tco();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <b>Capacité d'accueil de la salle :</b> <sup>(*)</sup>
                        <input type="text" class="form-control" id="lie_cap" value="<?php echo $_smarty_tpl->tpl_vars['leLieu']->value->getLie_cap();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                    </div>

                    <div class="form_group">
                        <div class="col-md-11">
                            <input type="button" class="btn btn-warning btn-sm"
                                   onclick='location.href="index.php?gestion=lieu"' value="Retour">
                        </div>
                    </div>

            </div>

            </form>
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
