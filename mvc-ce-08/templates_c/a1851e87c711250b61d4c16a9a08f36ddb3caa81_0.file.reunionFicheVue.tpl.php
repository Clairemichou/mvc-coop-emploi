<?php
/* Smarty version 3.1.29, created on 2020-11-17 16:29:53
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-08\mod_reunion\vue\reunionFicheVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb3ec71d48c55_12555037',
  'file_dependency' => 
  array (
    'a1851e87c711250b61d4c16a9a08f36ddb3caa81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-08\\mod_reunion\\vue\\reunionFicheVue.tpl',
      1 => 1605626939,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5fb3ec71d48c55_12555037 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-08\\include\\libs\\plugins\\modifier.capitalize.php';
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

                <?php if ($_smarty_tpl->tpl_vars['action']->value != 'ajouter') {?>
                    <div class="form-group">
                        Identifiant :
                        <input class="form-control" id="reu_ide" name="reu_ide" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_ide();?>
"
                               readonly>
                    </div>
                <?php }?>
                <div class="form-group">
                    Date de la réunion <sup>(*)</sup> :
                    <strong>
                        <input class="form-control" id="date" name="reu_dat" type="date"
                               value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_dat;?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    </strong>
                </div>

                <div class="form-group">

                    Heure de la réunion <sup>(*)</sup> :
                    <input class="form-control" id="heu" name="reu_heu" type="time"
                           value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_heu();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>
                <div class="form-group">

                    Durée de la réunion :
                    <input class="form-control" id="dur" name="reu_dur" type="time"
                           value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_dur();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 >
                </div>
                <div class="form-group">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?>
                        <label for="reu_lie">Lieu de la Réunion <sup>(*)</sup>:</label>
                        <select class="form-control" id="reu_lie">
                            <?php
$_from = $_smarty_tpl->tpl_vars['listeLieuxReunion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_lieuReunion_0_saved_item = isset($_smarty_tpl->tpl_vars['lieuReunion']) ? $_smarty_tpl->tpl_vars['lieuReunion'] : false;
$_smarty_tpl->tpl_vars['lieuReunion'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['lieuReunion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['lieuReunion']->value) {
$_smarty_tpl->tpl_vars['lieuReunion']->_loop = true;
$__foreach_lieuReunion_0_saved_local_item = $_smarty_tpl->tpl_vars['lieuReunion'];
?>
                                <input type="hidden" name="reu_lie" value="<?php echo $_smarty_tpl->tpl_vars['lieuReunion']->value->getLie_ide();?>
">
                                <option><?php echo $_smarty_tpl->tpl_vars['lieuReunion']->value->getLie_nom();?>
 - <?php echo $_smarty_tpl->tpl_vars['lieuReunion']->value->getLie_vil();?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['lieuReunion'] = $__foreach_lieuReunion_0_saved_local_item;
}
if ($__foreach_lieuReunion_0_saved_item) {
$_smarty_tpl->tpl_vars['lieuReunion'] = $__foreach_lieuReunion_0_saved_item;
}
?>
                        </select>
                    <?php } else { ?>
                        Lieu de la réunion
                        <sup>(*)</sup>
                        :
                        <input class="form-control" id="lie" name="reu_lie" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_lie;?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    <?php }?>
                </div>
                <div class="form-group">
                    Capacité d'accueil <sup>(*)</sup> :
                    <input class="form-control" id="cap" name="reu_cap" type="text"
                           value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_cap();?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                </div>
                <div class="form-group">
                    <label for="pre">Description de la réunion:</label>
                    <textarea class="form-control" id="pre" rows="3" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
><?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_pre;?>
</textarea>
                </div>
                <div class="form-group">
                    <?php if ($_smarty_tpl->tpl_vars['action']->value == 'ajouter') {?>
                        <label for="acc_lie">Accompagnateur <sup>(*)</sup>:</label>
                        <select class="form-control" id="acc_lie">
                            <?php
$_from = $_smarty_tpl->tpl_vars['listeAccompagnateursReunion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_accompagnateurReunion_1_saved_item = isset($_smarty_tpl->tpl_vars['accompagnateurReunion']) ? $_smarty_tpl->tpl_vars['accompagnateurReunion'] : false;
$_smarty_tpl->tpl_vars['accompagnateurReunion'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['accompagnateurReunion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['accompagnateurReunion']->value) {
$_smarty_tpl->tpl_vars['accompagnateurReunion']->_loop = true;
$__foreach_accompagnateurReunion_1_saved_local_item = $_smarty_tpl->tpl_vars['accompagnateurReunion'];
?>
                                <input type="hidden" name="acc_lie" value="<?php echo $_smarty_tpl->tpl_vars['accompagnateurReunion']->value->getAcc_ide();?>
">
                                <option><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['accompagnateurReunion']->value->getAcc_nom());?>

                                    - <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['accompagnateurReunion']->value->getAcc_prenom(), 'UTF-8');?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['accompagnateurReunion'] = $__foreach_accompagnateurReunion_1_saved_local_item;
}
if ($__foreach_accompagnateurReunion_1_saved_item) {
$_smarty_tpl->tpl_vars['accompagnateurReunion'] = $__foreach_accompagnateurReunion_1_saved_item;
}
?>
                        </select>
                    <?php } else { ?>
                        Accompagnateur
                        <sup>(*)</sup>
                        :
                        <input class="form-control" id="acc" name="reu_acc" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['laReunion']->value->getReu_acc;?>
" <?php echo $_smarty_tpl->tpl_vars['comportement']->value;?>
 required="required">
                    <?php }?>
                </div>
                Statut de Publication <sup>(*)</sup> :
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="pub" name="reu_pub" checked>
                        <label class="custom-control-label" for="pub">Non</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" id="pub1" name="reu_pub">
                        <label class="custom-control-label" for="pub1">Oui</label>
                    </div>
                </div>


                <div class="form-group">

                    <div class="col-md-11">
                        <input type="button" class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=reunion"' value="Retour">
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
