<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 15:10:47
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_accueil\vue\accueilVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6012d3f76aa300_66522703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1caa339037c27972b3446ac43702f7970b7ab306' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_accueil\\vue\\accueilVue.tpl',
      1 => 1609347673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/menu.tpl' => 1,
    'file:public/piedPage.tpl' => 1,
  ),
),false)) {
function content_6012d3f76aa300_66522703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titre']->value, 'UTF-8');?>
</title>

		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet">

		<link rel="icon" type="image/png" href="public/images/logo.PNG" />
	</head>
	<body>

		<div class="container-fluid">

			<?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="row">
				<!-- ICI LE TABLEAU DE BORD -->
				<div class="col-md-12">
					<h2 class="space">
						<img src="public/images/logo.png" > Une coopérative d'activités et d'emploi
					</h2>
					<p>
						Les CAE constituent un concept original permettant à un porteur de projet de tester son activité en toute sécurité.
					<p>
						<a class="btn" href="https://www.afecreation.fr/pid14974/cooperative-activite-emploi-cae.html" target="_blank">Plus de détails sur le site : afecreation</a>
					</p>
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
