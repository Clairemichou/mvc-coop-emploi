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
    <script src="public/js/html5shiv.js"></script>
    <script src="public/js/respond.min.js"></script>
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
        <li class="active">Inscritpions</li>
    </ol>

    {* {if $affichage == 1}*}
    <div class="row">
        <!--Acrticle main content -->
        <article class="col-sm-12 maincontent">
            <header class="page-header">
                <h1 class="page-title">
                    S'inscrire
                </h1>
            </header>
            {if $message neq ""}
                <div class="alert-info" role="alert">
                    <p>{$message}</p>
                </div>
            {/if}

            <form method="post" action="ficheInscription.php" novalidate>

                <input type="hidden" name="reu_ide" value="{$reu_ide}">
                <input type="hidden" name="rappel" value="{$rappel}">
                <p>{$rappel}</p>
                <br>
                <p>Pour pouvoir vous confirmer votre inscription il est nécessaire de précisier un téléphone ou une
                    adresse mail valide.
                    Merci pour votre compréhension</p>

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pdp_pre" id="pdp_pre" placeholder="Votre prénom"
                           required>
                </div>

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pdp_nom" id="pdp_nom" placeholder="Votre nom"
                           required>
                </div>

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pdp_cpo" id="pdp_cpo" placeholder="Un code postal"
                           required>
                </div>

                <div class="col-sm-12">
                    <input type="text" class="form-control" name="pdp_vil" id="pdp_vil" placeholder="Une ville"
                           required>
                </div>

                <div class="col-sm-12">
                    <input type="tel" class="form-control" name="pdp_tel" id="pdp_tel"
                           placeholder="Un numéro de téléphone fixe">
                </div>

                <div class="col-sm-12">
                    <input type="tel" class="form-control" name="pdp_port" id="pdp_port"
                           placeholder="Un numéro de téléphone portable">
                </div>

                <div class="col-sm-12">
                    <input type="email" class="form-control" name="pdp_mai" id="pdp_mai"
                           placeholder="Une adresse mail valide">
                </div>

                {if $action == 0}
                    <div class="col-sm-12 text-right">
                        <input type="submit" class="btn btn-action" name="inscription" value="S'inscrire">
                    </div>
                {/if}
            </form>
        </article>

        {* {/if}*}
        <br>

        <!-- /Article -->

        {*  <!-- Sidebar -->
          <aside class="col-sm-4 sidebar sidebar-right">

              <div class="widget">
                  <h4>Vacancies</h4>
                  <ul class="list-unstyled list-spaces">
                      <li><a href="">Lorem ipsum dolor</a><br><span class="small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, laborum.</span>
                      </li>
                      <li><a href="">Totam, libero, quis</a><br><span class="small text-muted">Suscipit veniam debitis sed ipsam quia magnam eveniet perferendis nisi.</span>
                      </li>
                      <li><a href="">Enim, sequi dignissimos</a><br><span class="small text-muted">Reprehenderit illum quod unde quo vero ab inventore alias veritatis.</span>
                      </li>
                      <li><a href="">Suscipit, consequatur, aut</a><br><span class="small text-muted">Sed, mollitia earum debitis est itaque esse reiciendis amet cupiditate.</span>
                      </li>
                      <li><a href="">Nam, illo, veritatis</a><br><span class="small text-muted">Delectus, sapiente illo provident quo aliquam nihil beatae dignissimos itaque.</span>
                      </li>
                  </ul>
              </div>

          </aside>
          <!-- /Sidebar -->*}

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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="public/js/headroom.min.js"></script>
<script src="public/js/jQuery.headroom.min.js"></script>
<script src="public/js/template.js"></script>
</body>
</html>