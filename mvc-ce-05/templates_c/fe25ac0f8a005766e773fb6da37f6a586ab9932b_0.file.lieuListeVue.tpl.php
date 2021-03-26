<?php
/* Smarty version 3.1.29, created on 2020-10-14 12:08:32
  from "C:\wamp64\www\mvc-coopemploi\mvc-ce-04\mod_lieu\vue\lieuListeVue.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f86ea40239e46_07344537',
  'file_dependency' => 
  array (
    'fe25ac0f8a005766e773fb6da37f6a586ab9932b' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi\\mvc-ce-04\\mod_lieu\\vue\\lieuListeVue.tpl',
      1 => 1602677309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86ea40239e46_07344537 ($_smarty_tpl) {
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
                            <a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Paramètres<strong
                                        class="caret"></strong></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="index.php?gestion=lieu">Lieux</a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">Activités</a>
                                </li>

                                <li class="divider"></li>

                                <li>
                                    <a href="#">Types</a>
                                </li>

                                <li class="divider"></li>

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
                            <a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Espace personnel<strong
                                        class="caret"></strong></a>
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
        <!-- ICI LA LISE DES LIEUX -->
        <div class="row-md-4 space">
            <img src="public/images/plogo.PNG">
        </div>
        <div class="row-md-6 space">
            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['titreGestion']->value, 'UTF-8');?>

        </div>
        <div class="row-md-2 space">
            <form action="index.php" method="post">

                <input type="hidden" name="gestion" value="lieu">
                <input type="hidden" name="action" value="form_ajouter">

                Ajouter un lieu :
                <input type="submit" class="btn btn-warning btn-sm" name="ajouter" value="Ajouter">
            </form>
        </div>
        <div class="col-md-12">
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
                                <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_consulter">

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_modifier">

                                <input type="submit" class="btn btn-warning btn-sm" name="modifier" value="Modifier">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="identifiant" value="<?php echo $_smarty_tpl->tpl_vars['lieu']->value['lie_ide'];?>
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
