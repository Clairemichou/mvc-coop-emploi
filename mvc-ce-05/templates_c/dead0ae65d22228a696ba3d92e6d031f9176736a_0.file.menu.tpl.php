<?php
/* Smarty version 3.1.29, created on 2020-10-14 12:21:57
  from "C:\wamp64\www\mvc-coopemploi\mvc-ce-05\public\menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5f86ed65ae7d54_60388137',
  'file_dependency' => 
  array (
    'dead0ae65d22228a696ba3d92e6d031f9176736a' => 
    array (
      0 => 'C:\\wamp64\\www\\mvc-coopemploi\\mvc-ce-05\\public\\menu.tpl',
      1 => 1602677559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f86ed65ae7d54_60388137 ($_smarty_tpl) {
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
    <!-- ICI LA LISE DES LIEUX --><?php }
}
