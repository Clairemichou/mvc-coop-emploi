<?php
/* Smarty version 3.1.29, created on 2020-11-10 09:00:04
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-06\public\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5faa4884472612_79101531',
  'file_dependency' => 
  array (
    'acd4cf80672ee190094a77a78bb593dca016a411' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-06\\public\\menu.tpl',
      1 => 1604930735,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5faa4884472612_79101531 ($_smarty_tpl) {
?>
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
                        <a class="nav-color" href="index.php?gestion=accompagnateur">Accompagnateurs</a>
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
    <!-- ICI LA LISE DES LIEUX --><?php }
}
