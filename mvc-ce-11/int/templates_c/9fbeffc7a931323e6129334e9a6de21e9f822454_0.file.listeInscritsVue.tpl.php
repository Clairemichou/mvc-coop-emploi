<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-24 14:06:42
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_reunion\vue\listeInscritsVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60365d7230a2b0_50547604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fbeffc7a931323e6129334e9a6de21e9f822454' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_reunion\\vue\\listeInscritsVue.tpl',
      1 => 1614175561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_60365d7230a2b0_50547604 (Smarty_Internal_Template $_smarty_tpl) {
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
            <a href="index.php?gestion=reunion&statut=1"><img src="public/images/plogo.PNG"></a>
        </div>
        <div class="col-md-6 space ">
            <h2><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h2>
            <h4>Réunion du <?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['date']->value,"%A %d %m %Y"));?>
</h4>
            <h4><?php echo $_smarty_tpl->tpl_vars['lieu']->value;?>
 à <?php echo $_smarty_tpl->tpl_vars['ville']->value;?>
 </h4>
        </div>

    </div>

    <div class="row">

        <div class="col-md-offset-1 col-md-10 col-md-offset-1">

            <p class="alert alert-info">
                Nombre de participants : <?php echo count($_smarty_tpl->tpl_vars['listeInscrits']->value);?>

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listeInscrits']->value, 'inscrit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inscrit']->value) {
?>
                    <tr>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_ide'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_nom'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_pre'];?>

                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_cpo'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_vil'];?>

                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['inscrit']->value['pdp_tel'] != '') {?>
                                <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_tel'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_por'];?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_por'];?>

                            <?php }?>
                        </td>
                        <td>
                            <?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_mai'];?>

                        </td>
                        <td>
                            <?php if ($_smarty_tpl->tpl_vars['inscrit']->value['pdp_prr'] == NULL && $_smarty_tpl->tpl_vars['dateDuJour']->value >= $_smarty_tpl->tpl_vars['date']->value) {?>
                                <form action="index.php" method="post">
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='etatPresence'>
                                    <input type='hidden' name='pdp_ide' value='<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_ide'];?>
'>
                                    <input type='hidden' name='valeur' value='OUI'>
                                    <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>
                                                                        <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['reu_ide'];?>
'>
                                    <input type="submit" class="btn btn-success btn-sm" value="Pre">
                                </form>
                                &nbsp;
                                <form action="index.php" method="post">
                                    <input type='hidden' name='gestion' value='reunion'>
                                    <input type='hidden' name='action' value='etatPresence'>
                                    <input type='hidden' name='pdp_ide' value='<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_ide'];?>
'>
                                    <input type='hidden' name='valeur' value='NON'>
                                    <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>
                                                                        <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['reu_ide'];?>
'>
                                    <input type="submit" class="btn btn-danger btn-sm" value="Abs">
                                </form>
                            <?php } elseif ($_smarty_tpl->tpl_vars['inscrit']->value['pdp_prr'] == 'OUI') {?>
                                <input type="submit" class="btn btn-success btn-sm" value="Présent(e)">
                            <?php } elseif ($_smarty_tpl->tpl_vars['inscrit']->value['pdp_prr'] == 'NON') {?>
                                <input type="submit" class="btn btn-danger btn-sm" value="Absent(e)&nbsp;">
                            <?php } else { ?>
                                <input type="submit" class="btn btn-info btn-sm" value="A venir">
                            <?php }?>
                        </td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tfoot>

                <tr>
                    <td colspan="5">
                        <input type="button"  class="btn btn-warning btn-sm"
                               onclick='location.href = "index.php?gestion=reunion&statut=<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
"' value="Retour">
                    </td>
                    <td colspan="1">
                        <p>
                            <?php if ($_smarty_tpl->tpl_vars['statut']->value == 1) {?>
                        <form action="index.php" method="post">
                                                        <input type='hidden' name='reu_ide' value='<?php echo $_smarty_tpl->tpl_vars['inscrit']->value['pdp_ric'];?>
'>
                            <input type='hidden' name='gestion' value='reunion'>
                            <input type='hidden' name='action' value='listeInscritsPdf'>
                            <input type='hidden' name='statut' value='<?php echo $_smarty_tpl->tpl_vars['statut']->value;?>
'>
                            <input type="submit" class="btn btn-warning btn-sm" name=""
                                   value="Editer la feuille d'émargement">
                        </form>
                        <?php }?>
                        </p>
                    </td>
                </tr>

                </tfoot>
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
