<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{$titre|upper}</title>

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
                                    <a href="#"><!-- ICI VERS LA DECONNEXION -->{$deconnexion}</a>
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
            {$titreGestion|upper}
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
                {foreach from= $listeLieux item = lieu}
                    <tr>
                        <td>
                            {$lieu.lie_ide}

                        </td>
                        <td>
                            {$lieu.lie_nom}

                        </td>
                        <td>
                            {$lieu.lie_vil}

                        </td>
                        <td>
                            {$lieu.lie_con}

                        </td>
                        <td>
                            {$lieu.lie_tco}

                        </td>

                        <td>
                            <form action="index.php" method="post">
                                <input type="hidden" name="identifiant" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_consulter">

                                <input type="submit" class="btn btn-warning btn-sm" name="consulter" value="Consulter">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="identifiant" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_modifier">

                                <input type="submit" class="btn btn-warning btn-sm" name="modifier" value="Modifier">
                            </form>
                            <form action="index.php" method="post">
                                <input type="hidden" name="identifiant" value="{$lieu.lie_ide}">
                                <input type="hidden" name="gestion" value="lieu">
                                <input type="hidden" name="action" value="form_supprimer">

                                <input type="submit" class="btn btn-warning btn-sm" name="supprimer" value="Supprimer">
                            </form>
                        </td>
                    </tr>
                {/foreach}
                </tbody>

        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <!-- ICI UN PIED DE PAGE --> {$piedPage}
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.min.js"></script>
<script src="public/js/scripts.js"></script>
</body>
</html>
