<?php
/* Smarty version 3.1.29, created on 2020-10-14 09:21:53
  from "C:\wamp64\www\mvc-coopemploi\mvc-ce-04\mod_accueil\vue\accueilVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f86c33102ae18_12839286',
  'file_dependency' => 
  array (
    'd4ac8bc124eedc298e753e1ef1900ae5e6db6dad' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi\\mvc-ce-04\\mod_accueil\\vue\\accueilVue.tpl',
      1 => 1602667296,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86c33102ae18_12839286 ($_smarty_tpl) {
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

    <link rel="icon" type="image/png" href="public/images/logo.PNG" />
</head>
<body>

<div class="container-fluid">
    <div class="row">l
        <div class="col-md-12">

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                    </button> <a class="navbar-brand nav-color" href="#">Accueil </a>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="nav-color" href="#">Réunions</a>
                        </li>
                        <li>
                            <a class="nav-color" href="#">Entretiens</a>
                        </li>
                        <li>
                            <a class="nav-color" href="#">Porteurs de projet</a>
                        </li>
                        <li>
                            <a class="nav-color" href="#">Accompagnateurs</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Paramètres<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?gestion=lieu">Lieux</a>
                                </li>

                                <li class="divider"> </li>

                                <li>
                                    <a href="#">Activités</a>
                                </li>

                                <li class="divider"> </li>

                                <li>
                                    <a href="#">Types</a>
                                </li>

                                <li class="divider"> </li>

                                <li>
                                    <a href="#">Etc ...</a>
                                </li>

                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a class="nav-color" href="#">Plan du site</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Espace personnel<strong class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#"><!-- ICI VERS LA DECONNEXION --><?php echo $_smarty_tpl->tpl_vars['deconnexion']->value;?>
</a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">Profil</a>

                                </li>

                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>
    </div>
    <div class="row">
        <!-- ICI LE TABLEAU DE BORD -->
        <div class="col-md-12">
            <h2 class="space">
                <img src="public/images/logo.PNG" > Une coopérative d'activités et d'emploi
            </h2>
            <p>
                Les CAE constituent un concept original permettant à un porteur de projet de tester son activité en toute sécurité.
            <p>
                <a class="btn" href="https://www.afecreation.fr/pid14974/cooperative-activite-emploi-cae.html" target="_blank">Plus de détails sur le site : afecreation</a>
            </p>
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
