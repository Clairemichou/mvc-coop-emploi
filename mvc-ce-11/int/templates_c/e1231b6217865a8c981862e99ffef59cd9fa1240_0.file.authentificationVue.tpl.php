<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-24 13:58:17
  from 'C:\wamp64\www\mvc-coopemploi-oriente-objet\mvc-ce-11\int\mod_authentification\vue\authentificationVue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60365b7987c348_30042298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1231b6217865a8c981862e99ffef59cd9fa1240' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi-oriente-objet\\mvc-ce-11\\int\\mod_authentification\\vue\\authentificationVue.tpl',
      1 => 1609347673,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60365b7987c348_30042298 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
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
			
			<div class="row">
                <div class="col-md-4 space">
                    <a href="index.php"><img src="public/images/plogo.PNG" ></a>
                </div>
				
                <div class="col-md-6 space">
					<h4> <?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
 </h4>
                </div>
				
                <div class="col-md-2 space">


                </div>
            </div>
				<div class="row">

				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class="alert alert-danger" <?php }?>>
						<?php echo $_smarty_tpl->tpl_vars['message']->value;?>

					</p>

                </div>

			</div>	
				
			<div class="row">

				<div class="col-md-4">
				</div>
				<div class="col-md-4">

					<br>
					<form role="form" action="index.php" method="POST" >
						<input type="hidden" name="gestion" value="authentification">
						<input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
						<div class="form-group">
							<label for="login">
								Login : 
							</label>

							<input class="form-control" type="text" name="f_login" maxlength="255" value="<?php echo $_smarty_tpl->tpl_vars['authentification']->value->getF_login();?>
">
						</div>



						<div class="form-group">
							<label for="pw">
								Mot de passe : 
							</label>

							<input autocomplete="off" class="form-control" type="password" name="f_motdepasse"  maxlength="255" value="">
						</div>



						<div class="form-group">
							<label for="valider">

							</label>
							<input type="submit"  class="btn btn-warning btn-sm"   name="valider" value="Connexion"> 

						</div>

				</form> 
				</div>
				<div class="col-md-4">
				</div>


			</div>
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
</html><?php }
}
