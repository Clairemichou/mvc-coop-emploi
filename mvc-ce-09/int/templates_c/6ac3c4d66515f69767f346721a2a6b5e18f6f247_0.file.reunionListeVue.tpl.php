<?php
/* Smarty version 3.1.29, created on 2021-02-24 09:43:48
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-09\int\mod_reunion\vue\reunionListeVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_603611c4ba9442_86246904',
  'file_dependency' => 
  array (
    '6ac3c4d66515f69767f346721a2a6b5e18f6f247' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\mod_reunion\\vue\\reunionListeVue.tpl',
      1 => 1614156228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_603611c4ba9442_86246904 ($_smarty_tpl) {
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
    <div class="row">

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="col-md-12">
            <div class="col-md-4 space">
                <a href="index.php?gestion=accueil"><img src="public/images/plogo.PNG"></a>
            </div>
            <div class="col-md-6 space">
                <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;
if ($_smarty_tpl->tpl_vars['statut']->value == 1) {?> En Cours <?php } else { ?> Passées <?php }?></h3>
            </div>
            <div class="col-md-2 space">
                <?php if ($_smarty_tpl->tpl_vars['statut']->value == 1) {?>
                    <form action='index.php' method='post'>
                        <input type='hidden' name='gestion' value='reunion'>
                        <input type='hidden' name='action' value='form_ajouter'>
                        <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>

                        Ajouter une réunion :
                        <input type="submit" class="btn btn-warning btn-sm" name="ajouter" value="Ajouter">


                    </form>
                <?php }?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-1 ">

            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p <?php if (ReunionTable::getMessageSucces() != '') {?> class="alert alert-success" <?php }?>>
                        <?php echo ReunionTable::getMessageSucces();?>

                    </p>

                    <div class="col-md-1 ">

                    </div>

                </div>


                <div class="row">
                    <!-- ICI LES DONNES  -->

                    <div class="col-md-offset-1 col-md-10 col-md-offset-1">


                        <table class="table">
                            <thead class="">
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    DATE
                                </th>
                                <th>
                                    LIEU
                                </th>
                                <th>
                                    ACCOMPAGNATEUR
                                </th>
                                <th>
                                    STATUT DE PUBLICATION
                                </th>
                                <th>
                                    INSCRIPTION
                                </th>
                                <th>
                                    ACTION
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
$_from = $_smarty_tpl->tpl_vars['listeReunions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_reunion_0_saved_item = isset($_smarty_tpl->tpl_vars['reunion']) ? $_smarty_tpl->tpl_vars['reunion'] : false;
$_smarty_tpl->tpl_vars['reunion'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['reunion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reunion']->value) {
$_smarty_tpl->tpl_vars['reunion']->_loop = true;
$__foreach_reunion_0_saved_local_item = $_smarty_tpl->tpl_vars['reunion'];
?>
                                <tr>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>

                                    </td>
                                    <td>
                                        <?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value['reu_dat'],"%A %e %B %Y"));?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['reunion']->value['lie_nom'];?>

                                    </td>
                                    <td>
                                        <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['reunion']->value['acc_prenom'], 'UTF-8');?>
 <?php echo $_smarty_tpl->tpl_vars['reunion']->value['acc_nom'];?>

                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_pub'];?>

                                    </td>
                                    <td>
                                        <?php ob_start();
echo $_smarty_tpl->tpl_vars['reunion']->value['nb'];
$_tmp1=ob_get_clean();
if ($_tmp1 > 0) {?>
                                            <a href="index.php?gestion=reunion&action=inscription&reu_ide=<?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>
&statut=1">
                                                <?php echo $_smarty_tpl->tpl_vars['reunion']->value['nb'];?>

                                            </a>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['reunion']->value['nb'];?>

                                        <?php }?>
                                    </td>
                                    <td>
                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='reunion'>
                                            <input type='hidden' name='action' value='form_consulter'>
                                            <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>

                                            <input type="submit" class="btn btn-warning btn-sm" name="consulter"
                                                   value="Consulter">
                                        </form>
                                        <?php if ($_smarty_tpl->tpl_vars['statut']->value == 1) {?>
                                            <form action='index.php' method='post'>
                                                <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>
'>
                                                <input type='hidden' name='gestion' value='reunion'>
                                                <input type='hidden' name='action' value='form_modifier'>
                                                <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>


                                                <input type="submit" class="btn btn-warning btn-sm" name="modifier"
                                                       value="Modifier">
                                            </form>
                                            <form action='index.php' method='post'>
                                                <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>
'>
                                                <input type='hidden' name='gestion' value='reunion'>
                                                <input type='hidden' name='action' value='form_supprimer'>
                                                <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>


                                                <input type="submit" class="btn btn-warning btn-sm" name="supprimer"
                                                       value="Supprimer">
                                            </form>
                                        <?php }?>
                                    </td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['reunion'] = $__foreach_reunion_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['reunion']->_loop) {
?>
                                <tr>
                                    <td colspan='6'>Aucun enregistrement de trouvé.</td>
                                </tr>
                            <?php
}
if ($__foreach_reunion_0_saved_item) {
$_smarty_tpl->tpl_vars['reunion'] = $__foreach_reunion_0_saved_item;
}
?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <p>INFORMATIONS : <?php echo count($_smarty_tpl->tpl_vars['listeReunions']->value);?>
 </p>
                                </td>
                            </tr>

                            </tfoot>
                        </table>
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
