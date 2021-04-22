<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>COOP'EMPLOI Une Coopérative d'Activités et d'Emploi</title>

    <link rel="shortcut icon" href="public/images/gt_favicon.png">

    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/font-awesome.min.css">

    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="public/css/bootstrap-theme.css" media="screen" >
    <link rel="stylesheet" href="public/css/main.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="public/js/html5shiv.js"></script>
    <script src="public/js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="home">
<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
        <div class="navbar-header">
            <!-- Button for smallest screens -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="index.php">Coop'Emploi <!--<img src="public/images/logo.png" alt="Progressus HTML5 template">--></a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li class="active"><a href="index.php">Accueil</a></li>
                <li><a href="#">La coopérative</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Nos projets <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Découverte des métiers pour les moins de 18 ans</a></li>
                        <li class="active"><a href="#">Création d'un réseau partenaire national</a></li>
                    </ul>
                </li>
                <li><a href="#">Contact</a></li>
                <li><a class="btn" href="int/">Se connecter</a></li>
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
        <li class="active">Inscription</li>
    </ol>

    <div class="row">
        <article class="col-sm-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">S'inscrire</h1>
            </header>

            {if $message neq ""}
                <div class="alert alert-info" role="alert">
                    <p>{$message}</p>
                </div>
            {/if}

            <form action="inscription.php" method="POST" novalidate>
                <input type="hidden" name="reu_ide" value="{$reu_ide}">
                <input type="hidden" name="rappel" value="{$rappel}">
                <p>
                    {$rappel}
                </p>
                <br>
                <p>Pour vous confirmer votre inscription il est nécessaire de préciser un télephone ou une
                    adresse mail valide. Merci pour votre compréhension.</p>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="pdp_pre" placeholder="Prénom" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="pdp_nom" placeholder="Nom" required>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="pdp_cpo" placeholder="Code postal" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="text" name="pdp_vil" placeholder="Ville" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="tel" name="pdp_tel" placeholder="Téléphone fixe ">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="tel" name="pdp_por"
                               placeholder="Téléphone portable ">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-sm-12">
                        <input class="form-control" type="email" name="pdp_mai" placeholder="Email">
                    </div>
                </div>

                <div class="col-sm-12">
                    <br><br>
                </div>
                {if $action == 0}
                    <div class="row">
                        <div class="col-sm-6 text-right">
                            <input class="btn btn-action" type="submit" name="inscription" value="Valider">
                        </div>
                    </div>
                {/if}
            </form>


            <!-- Sidebar -->
            {*        <aside class="col-md-4 sidebar sidebar-right">*}


            {*            <div class="row widget">*}
            {*                <div class="col-xs-12">*}
            {*                    <h4>Lorem ipsum dolor sit</h4>*}
            {*                    <p><img src="public/images/1.jpg" alt=""></p>*}
            {*                </div>*}
            {*            </div>*}
            {*            <div class="row widget">*}
            {*                <div class="col-xs-12">*}
            {*                    <h4>Lorem ipsum dolor sit</h4>*}
            {*                    <p><img src="public/images/2.jpg" alt=""></p>*}
            {*                    <p>Qui, debitis, ad, neque reprehenderit laborum soluta dolor voluptate eligendi enim consequuntur*}
            {*                        eveniet recusandae rerum? Atque eos corporis provident tenetur.</p>*}
            {*                </div>*}
            {*            </div>*}

            {*        </aside>*}
            <!-- /Sidebar -->

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
                            1025 ancienne route d’Annecy 74600 SEYNOD
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
                    <h3 class="widget-title">Un espace de texte à disposition</h3>
                    <div class="widget-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
                        <p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
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
                            <a href="">A Propos</a> |
                            <a href="">La Coopérative</a> |
                            <a href="">Nous Contacter</a> |
                            <b><a href="int/">Connexion</a></b>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 widget">
                    <div class="widget-body">
                        <p class="text-right">
                            Copyright &copy; 2020, Coop'Emploi Modifié par <a href="https://www.campus-centre.fr/" rel="designer">Section Informatique Campus Centre</C></a>
                        </p>
                    </div>
                </div>

            </div> <!-- /row of widgets -->
        </div>
    </div>

</footer>





<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="public/js/headroom.min.js"></script>
<script src="public/js/jQuery.headroom.min.js"></script>
<script src="public/js/template.js"></script>
</body>
</html>