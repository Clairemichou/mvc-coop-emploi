<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-24 13:58:27
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_reunion\vue\reunionListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60365b83c93f14_67507938',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b072351241e5a0996c990addd8429fadb62a440' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_reunion\\vue\\reunionListeVue.tpl',
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
function content_60365b83c93f14_67507938 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="index.php?gestion=reunion&statut=<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space">
            <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
 <?php if ($_smarty_tpl->tpl_vars['statut']->value == 1) {?> en cours <?php } else { ?> passées <?php }?></h3>
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

        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

            <p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class="alert alert-success" <?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

           <p/>
            <p <?php if ($_smarty_tpl->tpl_vars['messageErreur']->value != '') {?> class="alert alert-danger" <?php }?>>

                <?php echo $_smarty_tpl->tpl_vars['messageErreur']->value;?>

            </p>

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
                        PUBLIE O/N
                    </th>
                    <th>
                        VOIR LES INSCRITS
                    </th>
                    <th>
                        ACTION
                    </th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <td colspan="6">
                        <p>INFORMATIONS : ... </p>
                    </td>
                </tr>

                </tfoot>
                <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeReunions']->value, 'reunion');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reunion']->value) {
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>

                        </td>
                        <td>
                            <?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value['reu_dat'],"%A %d %m %Y"));?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['reunion']->value['lie_nom'];?>
 - <?php echo $_smarty_tpl->tpl_vars['reunion']->value['lie_vil'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['reunion']->value['acc_pre'];?>
 <?php echo $_smarty_tpl->tpl_vars['reunion']->value['acc_nom'];?>

                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['reunion']->value['reu_pub'] == 0) {?> NON <?php } else { ?> OUI <?php }?>
                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['reunion']->value['nb'] > 0) {?>
                                <a href="index.php?gestion=reunion&action=listeInscrits&reu_ide=<?php echo $_smarty_tpl->tpl_vars['reunion']->value['reu_ide'];?>
&statut=<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['reunion']->value['nb'];?>
</a>
                            <?php } else { ?>
                                0
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

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
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
}
} else {
?>
                    <tr>
                        <td colspan='6'>Aucun enregistrement trouvé.</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                </tbody>
            </table>
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
