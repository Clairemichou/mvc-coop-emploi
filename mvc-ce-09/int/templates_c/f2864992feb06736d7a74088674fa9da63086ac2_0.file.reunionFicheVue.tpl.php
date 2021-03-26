<?php
/* Smarty version 3.1.29, created on 2021-01-11 16:44:44
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-09\int\mod_reunion\vue\reunionFicheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ffc726c8925b4_33661349',
  'file_dependency' => 
  array (
    'f2864992feb06736d7a74088674fa9da63086ac2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\mod_reunion\\vue\\reunionFicheVue.tpl',
      1 => 1608114322,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5ffc726c8925b4_33661349 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\include\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\include\\libs\\plugins\\modifier.capitalize.php';
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


            <div class="col-md-12">
                <div class="col-md-4 space">
                    <a href="index.php?gestion=reunion"><img src="public/images/plogo.PNG"></a>
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
                    <p <?php if ($_smarty_tpl->tpl_vars['laReunion']->value->getMessageErreur() != '') {?> class="alert alert-danger" <?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getMessageErreur();?>

                    </p>
                </div>
            </div>


            <div class="row">
                <!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
                <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                    <form action="index.php" method="post" novalidate="">

                        <input type="hidden" name="gestion" value="reunion">
                        <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                        <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?>
                            <i><sup>(*) Champs obligatoires </sup></i>
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                            <div class="form-group">
                                <b>Identifiant :</b>
                                <input class="form-control" id="reu_ide" name="reu_ide" type="text"
                                       value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_ide();?>
"
                                       readonly>
                            </div>
                        <?php }?>
                        <div class="form-group">
                            <b>Date de la réunion <sup>(*)</sup> :</b>
                            <strong>
                                <input class="form-control" id="date" name="reu_dat" type="date"
                                       value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_dat();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                            </strong>
                        </div>

                        <div class="form-group">

                            <b>Heure de la réunion <sup>(*)</sup> :</b>
                            <input class="form-control" id="heu" name="reu_heu" type="time"
                                   value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['laReunion']->value->getReu_heu(),'%H:%M');?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                        </div>
                        <div class="form-group">

                            <b>Durée de la réunion :</b>
                            <input class="form-control" id="dur" name="reu_dur" type="time"
                                   value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['laReunion']->value->getReu_dur(),'%H:%M');?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                        </div>
                        <div class="form-group">

                            <b>Lieu de la réunion</b>
                            <sup>(*)</sup>
                            :
                            <select id="reu_lie" name="reu_lie" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                <option value=""> -- Choix --
                                    <?php
$_from = $_smarty_tpl->tpl_vars['lieux']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lieu_0_saved_item = isset($_smarty_tpl->tpl_vars['lieu']) ? $_smarty_tpl->tpl_vars['lieu'] : false;
$_smarty_tpl->tpl_vars['lieu'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lieu']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lieu']->value) {
$_smarty_tpl->tpl_vars['lieu']->_loop = true;
$__foreach_lieu_0_saved_local_item = $_smarty_tpl->tpl_vars['lieu'];
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['lieu']->value['lie_ide'] == $_smarty_tpl->tpl_vars['laReunion']->value->getReu_lie()) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
"><?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_nv'];?>

                                    <?php
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_local_item;
}
if ($__foreach_lieu_0_saved_item) {
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_item;
}
?>
                            </select>
                        </div>
                        <div class="form-group">
                            <b>Capacité d'accueil <sup>(*)</sup> :</b>
                            <input class="form-control" id="cap" name="reu_cap" type="number"
                                   value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_cap();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                        </div>
                        <div class="form-group">
                            <label for="reu_pre">Description de la réunion:</label>
                            <textarea class="form-control" id="reu_pre" rows="3" cols="20" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
><?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_pre();?>
</textarea>
                        </div>
                        <div class="form-group">

                            <b>Accompagnateur</b>
                            <sup>(*)</sup>
                            :
                            <select id="reu_acc" name="reu_acc" class="form-control" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                                <option value=""> -- Choix --
                                    <?php
$_from = $_smarty_tpl->tpl_vars['accompagnateurs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_accompagnateur_1_saved_item = isset($_smarty_tpl->tpl_vars['accompagnateur']) ? $_smarty_tpl->tpl_vars['accompagnateur'] : false;
$_smarty_tpl->tpl_vars['accompagnateur'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['accompagnateur']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['accompagnateur']->value) {
$_smarty_tpl->tpl_vars['accompagnateur']->_loop = true;
$__foreach_accompagnateur_1_saved_local_item = $_smarty_tpl->tpl_vars['accompagnateur'];
?>
                                    <option <?php if ($_smarty_tpl->tpl_vars['accompagnateur']->value['acc_ide'] == $_smarty_tpl->tpl_vars['laReunion']->value->getReu_acc()) {?>selected<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['accompagnateur']->value['acc_ide'];?>
"><?php echo $_smarty_tpl->tpl_vars['accompagnateur']->value['acc_pn'];?>

                                    <?php
$_smarty_tpl->tpl_vars['accompagnateur'] = $__foreach_accompagnateur_1_saved_local_item;
}
if ($__foreach_accompagnateur_1_saved_item) {
$_smarty_tpl->tpl_vars['accompagnateur'] = $__foreach_accompagnateur_1_saved_item;
}
?>
                            </select>
                        </div>

                        <div class="form-group">
                            <b>Statut de Publication <sup>(*)</sup> :</b>
                            <div class="custom-control custom-radio">
                                OUI <input type="radio" class="custom-control-input" id="reu_pub" name="reu_pub" value="1" <?php if ($_smarty_tpl->tpl_vars['laReunion']->value->getReu_pub() == 1) {?>checked<?php }?> <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                                NON <input type="radio" class="custom-control-input" id="reu_pub" name="reu_pub" value="0" <?php if ($_smarty_tpl->tpl_vars['laReunion']->value->getReu_pub() == 0) {?>checked<?php }?> <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
>
                            </div>
                        </div>


                        <div class="form-group">

                            <div class="col-md-11">
                                <input type="button" class="btn btn-warning btn-sm"
                                       onclick='location.href = "index.php?gestion=reunion&statut=<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"' value="Retour">
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
