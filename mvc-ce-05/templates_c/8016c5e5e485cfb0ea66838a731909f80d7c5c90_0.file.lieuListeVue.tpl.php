<?php
/* Smarty version 3.1.29, created on 2020-11-09 11:08:10
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-05\mod_lieu\vue\lieuListeVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fa9150a0b9246_83307344',
  'file_dependency' => 
  array (
    '8016c5e5e485cfb0ea66838a731909f80d7c5c90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-05\\mod_lieu\\vue\\lieuListeVue.tpl',
      1 => 1604916464,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5fa9150a0b9246_83307344 ($_smarty_tpl) {
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
        <div class="col-md-2 space">
            <form action="index.php" method="post">

                <input type="hidden" name="gestion" value="lieu">
                <input type="hidden" name="action" value="form_ajouter">

                Ajouter un lieu :
                <input type="submit" class="btn btn-warning btn-sm" name="ajouter" value="Ajouter">
            </form>
        </div>

        <div class="row">
            <div class="col-md-9 ml-auto mr-auto">
                <p <?php if (LieuTable::getMessageSucces() != '') {?>
                    class="alert-success"
                        <?php }?>>
                    <?php echo LieuTable::getMessageSucces();?>

                </p>
            </div>
        </div>

        <div class="col-md-9 ml-auto mr-auto">
            <!-- CREER LE TABLEAU AVEC LA LISTE table > thead > tbody > tfoot
            Id - Nom de la salle - La Ville - Contact  et son téléphone - Actions (modifier/consulter/supprimer)-->
            <table class="table">
                <thead>
                <tr>
                    <th>
                        Id
                    </th>
                    <th>
                        Nom de la salle
                    </th>
                    <th>
                        Ville
                    </th>
                    <th>
                        Contact
                    </th>
                    <th>
                        Telephone
                    </th>
                    <th>
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php
$_from = $_smarty_tpl->tpl_vars['listeLieux']->value;
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
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>


                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_nom'];?>


                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_vil'];?>


                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_con'];?>


                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_tco'];?>


                        </td>

                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_consulter">

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_modifier">

                                <input type="submit" class="btn btn-warning btn-sm" name="modifier" value="Modifier">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="lie_ide" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_supprimer">

                                <input type="submit" class="btn btn-warning btn-sm" name="supprimer" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_local_item;
}
if ($__foreach_lieu_0_saved_item) {
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_item;
}
?>
                </tbody>
            </table>
        </div>
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
