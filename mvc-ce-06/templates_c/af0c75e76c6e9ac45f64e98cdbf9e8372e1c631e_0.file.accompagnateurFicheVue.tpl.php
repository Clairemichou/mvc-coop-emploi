<?php
/* Smarty version 3.1.29, created on 2020-11-10 10:49:04
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-06\mod_accompagnateur\vue\accompagnateurFicheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa6210d0c7d7_17947597',
  'file_dependency' => 
  array (
    'af0c75e76c6e9ac45f64e98cdbf9e8372e1c631e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-06\\mod_accompagnateur\\vue\\accompagnateurFicheVue.tpl',
      1 => 1605001737,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5faa6210d0c7d7_17947597 ($_smarty_tpl) {
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
            <a href="index.php?gestion=accompagnateur"><img src="public/images/plogo.PNG"></a>
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
            <p <?php if ($_smarty_tpl->tpl_vars['unAccompagnateur']->value->getMessageErreur() != '') {?> class="alert alert-danger"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getMessageErreur();?>

            </p>
        </div>
    </div>


    <div class="row">
        <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
        <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
            <form action="index.php" method="post" novalidate="">

                <input type="hidden" name="gestion" value="accompagnateur">
                <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">

                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                    <div class="form-group">
                        Identifiant :
                        <input class="form-control" id="acc_ide" name="acc_ide" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_ide();?>
"
                               readonly>
                    </div>
                <?php }?>


                <div class="form-group">
                    Nom <sup>(*)</sup> :
                    <strong>
                        <input class="form-control" id="pre" name="acc_nom" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_nom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>

                <div class="form-group">
                    Prénom <sup>(*)</sup> :
                    <strong>
                        <input class="form-control" id="nom" name="acc_prenom" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_prenom();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>


                <div class="form-group">

                    Téléphone <sup>(*)</sup>:
                    <input class="form-control" id="tel" name="acc_tel" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_tel();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>


                <div class="form-group">

                    Email : <sup>(*)</sup> :
                    <input class="form-control" id="mai" name="acc_mail" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_mail();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>


                <div class="form-group">

                    Spécialisation  :
                    <input class="form-control" id="spe" name="acc_spe" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_spe();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                </div>


                <div class="form-group">

                    Login <sup>(*)</sup> :
                    <input class="form-control" id="log" name="acc_log" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['unAccompagnateur']->value->getAcc_log();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required" autocomplete="off">
                </div>

                <input class="form-control" id="mpa" name="acc_mpa" type="hidden" value="">

                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=accompagnateur"' value="Retour">
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
