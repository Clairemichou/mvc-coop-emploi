<?php
/* Smarty version 3.1.29, created on 2020-11-10 10:41:19
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-06\mod_lieu\vue\lieuListeVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa603f2bab44_23707806',
  'file_dependency' => 
  array (
    '8fa79059a2a16ba931b68f6729eba8c6b2c96931' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-06\\mod_lieu\\vue\\lieuListeVue.tpl',
      1 => 1605000726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5faa603f2bab44_23707806 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

    <link rel="icon" type="image/png" href="public/images/plogo.PNG" />
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">

</head>
<body>

<div class="container-fluid">
    <div class="row">

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


        <div class="row">
            <div class="col-md-4 space">
                <a href="index.php?gestion=lieu"><img src="public/images/plogo.PNG" ></a>
            </div>
            <div class="col-md-6 space">
                <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
            </div>
            <div class="col-md-2 space">

                <form action='index.php' method='post'>
                    <input type='hidden' name='gestion' value='lieu'>
                    <input type='hidden' name='action' value='form_ajouter'>

                    Ajouter un lieu :
                    <input type="submit"  class="btn btn-warning btn-sm"  name="ajouter" value="Ajouter">
                </form>

            </div>
        </div>

        <div class="row">
            <div class="col-md-1 ">

            </div>

            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p <?php if (LieuTable::getMessageSucces() != '') {?> class="alert alert-success" <?php }?>>
                        <?php echo LieuTable::getMessageSucces();?>

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
                                    NOM
                                </th>
                                <th>
                                    VILLE
                                </th>
                                <th>
                                    CONTACT
                                </th>
                                <th>
                                    TELEPHONE
                                </th>
                                <th>
                                    ACTION
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
                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='lie_ide' value='<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='lieu'>
                                            <input type='hidden' name='action' value='form_consulter'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
                                        </form>

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='lie_ide' value='<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='lieu'>
                                            <input type='hidden' name='action' value='form_modifier'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
                                        </form>

                                        <form action='index.php' method='post'>
                                            <input type='hidden' name='lie_ide' value='<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
'>
                                            <input type='hidden' name='gestion' value='lieu'>
                                            <input type='hidden' name='action' value='form_supprimer'>

                                            <input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
                                        </form>
                                    </td>
                                </tr>
                                <?php
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['lieu']->_loop) {
?>
                                <tr>
                                    <td colspan='6'>Aucun enregistrement de trouvé.</td>
                                </tr>
                            <?php
}
if ($__foreach_lieu_0_saved_item) {
$_smarty_tpl->tpl_vars['lieu'] = $__foreach_lieu_0_saved_item;
}
?>

                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="6">
                                    <p>INFORMATIONS : ... </p>
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
