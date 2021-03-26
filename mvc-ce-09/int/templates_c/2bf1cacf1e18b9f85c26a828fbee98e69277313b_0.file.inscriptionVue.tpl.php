<?php
/* Smarty version 3.1.29, created on 2021-02-24 16:59:04
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-09\int\mod_reunion\vue\inscriptionVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_603677c81ec1d5_09918221',
  'file_dependency' => 
  array (
    '2bf1cacf1e18b9f85c26a828fbee98e69277313b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\mod_reunion\\vue\\inscriptionVue.tpl',
      1 => 1614182342,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_603677c81ec1d5_09918221 ($_smarty_tpl) {
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
                <a href="../../../index.php?gestion=accueil"><img src="public/images/plogo.PNG"></a>
            </div>
            <div class="col-md-6 space">
                <h3>Liste des inscriptions</h3>
                <p>Réunion du <?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value['reu_dat'],"%A %e %B %Y"));?>
</p>
                <p><?php echo $_smarty_tpl->tpl_vars['reunion']->value['lie_nom'];?>
 à <?php echo $_smarty_tpl->tpl_vars['reunion']->value['lie_vil'];?>
</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-1 ">

            </div>

            <div class="row">
                <div class="col-md-3">
                    <p class="alert alert-info">
                        Nombre de participants : <?php echo count($_smarty_tpl->tpl_vars['reunion']->value);?>

                    </p>

                </div>

                <div class="row">
                    <!-- ICI LES DONNES  -->

                    <div class="col-md-offset-1 col-md-10 col-md-offset-1">

                        <form method="post" action="index.php">
                            <input type="hidden" name="gestion" value="reunion">
                            <input type="hidden" name="action" value="PDF">
                            <table class="table">
                                <thead class="">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        NOM
                                    </th>
                                    <th>
                                        DOMICILIATION
                                    </th>
                                    <th>
                                        TELEPHONE
                                    </th>
                                    <th>
                                        MAIL
                                    </th>
                                    <th>
                                        ETAT DE PRESENCE
                                    </th>

                                </tr>
                                </thead>
                                <tbody>
                                <?php
$_from = $_smarty_tpl->tpl_vars['listeInscriptions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_inscription_0_saved_item = isset($_smarty_tpl->tpl_vars['inscription']) ? $_smarty_tpl->tpl_vars['inscription'] : false;
$_smarty_tpl->tpl_vars['inscription'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['inscription']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['inscription']->value) {
$_smarty_tpl->tpl_vars['inscription']->_loop = true;
$__foreach_inscription_0_saved_local_item = $_smarty_tpl->tpl_vars['inscription'];
?>
                                    <tr>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_ide'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_pre'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_vil'];?>
 <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_cpo'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_port'];?>

                                        </td>
                                        <td>
                                            <?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_mai'];?>

                                        </td>
                                        <td>
                                            <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['inscription']->value['pdp_ric'];?>
">
                                            <?php if ($_smarty_tpl->tpl_vars['statut']->value == 0) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['inscription']->value['pdp_prr'] == null) {?>
                                                    <input type="submit" class="btn btn-success btn-sm" name="inscrire"
                                                           value="Présent">
                                                    <input type="submit" class="btn btn-danger btn-sm" name="absent"
                                                           value="Absent">
                                                <?php } elseif ($_smarty_tpl->tpl_vars['inscription']->value['pdp_prr'] == 1) {?>
                                                    <input type="submit" class="btn btn-success btn-sm" name=""
                                                           value="Présent">
                                                <?php } else { ?>
                                                    <input type="submit" class="btn btn-danger btn-sm" name=""
                                                           value="Absent">
                                                <?php }?>
                                            <?php } else { ?>
                                                <input type="submit" class="btn btn-warning btn-sm" name="consulter"
                                                       value="A venir">
                                            <?php }?>

                                        </td>
                                    </tr>
                                    <?php
$_smarty_tpl->tpl_vars['inscription'] = $__foreach_inscription_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['inscription']->_loop) {
?>
                                    <tr>
                                        <td colspan='6'>Aucun enregistrement de trouvé.</td>
                                    </tr>
                                <?php
}
if ($__foreach_inscription_0_saved_item) {
$_smarty_tpl->tpl_vars['inscription'] = $__foreach_inscription_0_saved_item;
}
?>

                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="6">
                                        <div class="col-md-6">
                                            <input type="button" class="btn btn-warning btn-sm"
                                                   onclick='location.href = "index.php?gestion=reunion&statut=<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"'
                                                   value="Retour">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="submit" class="btn btn-warning btn-sm"
                                                   name="PDF"
                                                   value="Editer la feuille d'émargement">
                                        </div>
                                    </td>
                                </tr>

                                </tfoot>
                            </table>
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
