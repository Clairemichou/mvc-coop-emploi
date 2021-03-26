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
                    </nav>
                </div>
            </div>
            <div class="col-md-12">
                <div class="col-md-4 space">
                    <h2><img src="public/images/plogo.PNG"> Une coopérative d'activités et d'emploi</h2>
                </div>
            </div>
            <div class="col-md-6 space">
                <h3>{$titreGestion}</h3>
            </div>
            <div class="row">
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">
                    <p {if $message neq ''} class="alert alert-danger"{/if}>
                        {$message}
                    </p>
                </div>
            </div>
            <div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
                <form method="post" action="index.php" novalidate>
                    <input type="hidden" name="gestion" value="authentification">
                    <input type="hidden" name="action" value="{$action}">
                    <div class="form-group">
                        Login :
                        <input class="form-control" name="f_login" type="text"
                               value="{$authentification->getF_login()}" required>

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
