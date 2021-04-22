<?php
/* Smarty version 3.1.34-dev-7, created on 2021-01-28 15:11:06
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_porteur\vue\porteurListeVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_6012d40a645711_15699850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9b46cf6f04ee82ae1bd5c87f96ae3b9c6d570e2' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_porteur\\vue\\porteurListeVue.tpl',
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
function content_6012d40a645711_15699850 (Smarty_Internal_Template $_smarty_tpl) {
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

		<link rel="icon" type="image/png" href="public/images/plogo.PNG" />
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet">

	</head>
	<body>

		<div class="container-fluid">

			<?php $_smarty_tpl->_subTemplateRender('file:public/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<div class="row">
                <div class="col-md-4 space">
                    <a href="index.php?gestion=accueil"><img src="public/images/plogo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
                </div>
                <div class="col-md-2 space">

                </div>
            </div>



			<div class="row">

				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class="alert alert-success" <?php }?>>
						<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

					</p>

                </div>

			</div>

			<div class="row">

				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<p class="alert alert-info">
						Nombre de porteurs de projet : <?php echo count($_smarty_tpl->tpl_vars['listePorteurs']->value);?>

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
									PRENOM NOM
								</th>
								<th>
									DOMICILIATION
								</th>
								<th>
									DATE D'INSCRIPTION
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listePorteurs']->value, 'porteur');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['porteur']->value) {
?>
								<tr>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_ide'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_pre'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_nom'];?>

									</td>
									<td>
										<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_cpo'];?>
 &nbsp; <?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_vil'];?>

									</td>
									<td>
										<?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['porteur']->value['pdp_din'],"%A %d %m %Y"));?>

									</td>

									<td>
										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_ide'];?>
'>
											<input type='hidden' name='type' value='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'>
											<input type='hidden' name='secteur' value='<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_consulter'>


											<input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
										</form>

										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_ide'];?>
'>
											<input type='hidden' name='type' value='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'>
											<input type='hidden' name='secteur' value='<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_modifier'>

											<input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
										</form>

										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='<?php echo $_smarty_tpl->tpl_vars['porteur']->value['pdp_ide'];?>
'>
											<input type='hidden' name='type' value='<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
'>
											<input type='hidden' name='secteur' value='<?php echo $_smarty_tpl->tpl_vars['secteur']->value;?>
'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_supprimer'>

											<input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
										</form>

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
