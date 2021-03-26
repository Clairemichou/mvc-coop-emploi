<?php
/* Smarty version 3.1.29, created on 2021-01-19 10:06:49
  from "C:\xampp\htdocs\mvc-coop-emploi\mvc-ce-09\listeReunion.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_6006a1295f0a17_48432247',
  'file_dependency' => 
  array (
    '9dade08a1c610e84294e7a87df1bf50b51a6f506' => 
    array (
      0 => 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\listeReunion.tpl',
      1 => 1611045517,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6006a1295f0a17_48432247 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\public\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_capitalize')) require_once 'C:\\xampp\\htdocs\\mvc-coop-emploi\\mvc-ce-09\\public\\libs\\plugins\\modifier.capitalize.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>COOP'EMPLOI Une Coopérative d'Activité et d'Emploi</title>

    <link rel="shortcut icon" href="public/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="public/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="public/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="public/js/html5shiv.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="public/js/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
</head>

<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom">
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="index.html">Coop'Emploi</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="#">Accueil</a></li>
                <li><a href="about.html">La coopérative</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos projets <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="sidebar-left.html">Découverte de métier pour les moins de 18 ans</a></li>
                        <li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>
                    </ul>
                </li>
                <li><a href="contact.html">Contact</a></li>
                <li><a class="btn" href="int/index.php">Se connecter</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>
<!-- /.navbar -->

<header id="head" class="secondary"></header>

<!-- container -->
<div class="container">

    <ol class="breadcrumb">
        <li><a href="index.php">Accueil</a></li>
        <li class="active">Liste des réunions</li>
    </ol>

    <?php if ($_smarty_tpl->tpl_vars['affichage']->value == 1) {?>
    <div class="row">
        <?php
$_from = $_smarty_tpl->tpl_vars['listeReunion']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_reunion_0_saved_item = isset($_smarty_tpl->tpl_vars['reunion']) ? $_smarty_tpl->tpl_vars['reunion'] : false;
$_smarty_tpl->tpl_vars['reunion'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['reunion']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['reunion']->value) {
$_smarty_tpl->tpl_vars['reunion']->_loop = true;
$__foreach_reunion_0_saved_local_item = $_smarty_tpl->tpl_vars['reunion'];
?>
            <article class="col-sm-12 maincontent">
                <header class="page-header">
                    <h4 class="page-title">
                        <?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value->reu_dat,"%A %d %m %Y"));?>
<br>
                        <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_nom;?>
 - <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_cpo;?>
 <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_vil;?>

                    </h4>
                </header>
                <p><?php echo $_smarty_tpl->tpl_vars['reunion']->value->reu_pre;?>
</p>
                <p>La réunion débutera à <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value->reu_heu,"%Hh%M");?>
 pour une durée de
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value->reu_dur,"%Hh%M");?>
 environ</p>
                <form method="post" action="ficheInscription.php">
                    <input type="hidden" name="reu_ide" value="<?php echo $_smarty_tpl->tpl_vars['reunion']->value->reu_ide;?>
">
                    <input type="hidden" name="rappel"
                           value="<?php echo smarty_modifier_capitalize(smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value->reu_dat,"%A %d %m %Y"));?>
 à <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['reunion']->value->reu_heu,"%Hh%M");?>

                    <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_nom;?>
 - <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_cpo;?>
 <?php echo $_smarty_tpl->tpl_vars['reunion']->value->lie_vil;?>
">
                    <input type="submit" class="btn btn-action" name="form_inscription" value="S'inscrire">
                </form>
            </article>
        <?php
$_smarty_tpl->tpl_vars['reunion'] = $__foreach_reunion_0_saved_local_item;
}
if ($__foreach_reunion_0_saved_item) {
$_smarty_tpl->tpl_vars['reunion'] = $__foreach_reunion_0_saved_item;
}
?>

        <?php }?>
        <br>
        <p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p>
        <!-- /Article -->

        

    </div>
</div>    <!-- /container -->

<footer id="footer" class="top-space">

    <div class="footer1">
        <div class="container">
            <div class="row">

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Contact</h3>
                    <div class="widget-body">
                        <p>04 50 44 44 44<br>
                            <a href="mailto:#">contact@coopemploi.com</a><br>
                            <br>
                            1025 ancienne route dAnnecy 74600 SEYNOD
                        </p>
                    </div>
                </div>

                <div class="col-md-3 widget">
                    <h3 class="widget-title">Nous suivre</h3>
                    <div class="widget-body">
                        <p class="follow-me-icons">
                            <a href=""><i class="fa fa-twitter fa-2"></i></a>
                            <a href=""><i class="fa fa-dribbble fa-2"></i></a>
                            <a href=""><i class="fa fa-github fa-2"></i></a>
                            <a href=""><i class="fa fa-facebook fa-2"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <h3 class="widget-title">Un espace de texte à dispositon</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam
                            architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque
                            voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id
                            expedita cupiditate repellendus possimus unde?</p>
                        <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat
                            provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci
                            nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit
                            architecto sint libero illo et hic.</p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="simplenav">
                            <a href="#">Accueil</a> |
                            <a href="about.html">A Propos</a> |
                            <a href="sidebar-right.html">La Coopérative</a> |
                            <a href="contact.html">Nous Contacter</a> |
                            <b><a href="signup.html">Connexion</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2020, Coop'Emploi. Modifié par <a href="http://gettemplate.com/"
                                                                               rel="designer">Séction informatique
                                Campus Centre</a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/headroom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/jQuery.headroom.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="public/js/template.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
