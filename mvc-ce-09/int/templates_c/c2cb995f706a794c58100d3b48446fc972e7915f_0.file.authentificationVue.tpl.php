<?php
/* Smarty version 3.1.29, created on 2021-01-11 16:41:19
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-09\int\mod_authentification\vue\authentificationVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ffc719fee9786_24057660',
  'file_dependency' => 
  array (
    'c2cb995f706a794c58100d3b48446fc972e7915f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\int\\mod_authentification\\vue\\authentificationVue.tpl',
      1 => 1607432375,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ffc719fee9786_24057660 ($_smarty_tpl) {
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
            <div class="row">l
                <div class="col-md-12">

                    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                        <div class="navbar-header">

                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                                    class="icon-bar"></span><span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand nav-color" href="#">Accueil </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 space">
                    <h2><img src="public/images/plogo.PNG"> Une coopérative d'activités et d'emploi</h2>
                </div>
            </div>
            <div class="col-md-6 space">
                <h3><?php echo $_smarty_tpl->tpl_vars['titreGestion']->value;?>
</h3>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p <?php if ($_smarty_tpl->tpl_vars['message']->value != '') {?> class="alert alert-danger"<?php }?>>
                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                    </p>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                <form method="post" action="index.php" novalidate>
                    <input type="hidden" name="gestion" value="authentification">
                    <input type="hidden" name="action" value="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
                    <div class="form-group">
                        Login :
                        <input class="form-control" name="f_login" type="text"
                               value="<?php echo $_smarty_tpl->tpl_vars['authentification']->value->getF_login();?>
" required>

                    </div>
                    <div class="form-group">
                        Mot de Passe :
                        <input class="form-control" name="f_motdepasse" type="password" autocomplete="off"
                               value="" required>

                    </div>
                    <div class="form-group">
                        <div class="col-md-1">
                            <input type="submit" class="btn btn-warning btn-sm" name="valider" value="Connexion">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <!-- ICI UN PIED DE PAGE --> <?php echo $_smarty_tpl->tpl_vars['piedPage']->value;?>

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
</html>
<?php }
}
