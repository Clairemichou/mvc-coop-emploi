<?php
/* Smarty version 3.1.29, created on 2020-11-17 11:23:08
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-07\mod_accueil\vue\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5fb3a48cd35a79_61408009',
  'file_dependency' => 
  array (
    '7d5afd863e78d164efcc4fb38068cad278f44bb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-07\\mod_accueil\\vue\\accueilVue.tpl',
      1 => 1605608573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_5fb3a48cd35a79_61408009 ($_smarty_tpl) {
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
            <h2 class="space">
                <img src="public/images/logo.PNG"> Une coopérative d'activités et d'emploi
            </h2>
            <p>
                Les CAE constituent un concept original permettant à un porteur de projet de tester son activité en
                toute sécurité.
            <p>
                <a class="btn" href="https://www.afecreation.fr/pid14974/cooperative-activite-emploi-cae.html"
                   target="_blank">Plus de détails sur le site : afecreation</a>
            </p>
        </div>
    </div>

</div>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:public/piedPage.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
