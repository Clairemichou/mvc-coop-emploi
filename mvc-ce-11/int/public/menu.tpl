<div class="row">
	<div class="col-md-12">

		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand nav-color" href="index.php?gestion=accueil">Accueil </a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav mr-auto">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Réunions <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?gestion=reunion&statut=1">Réunions en cours</a>
								</li>

								<li class="divider"> </li>

								<li>
									<a href="index.php?gestion=reunion&statut=0">Réunions passées</a>
								</li>
							</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Porteurs de projet <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
{*								Le menu propose de rechercher les pdp par type. Ici il est écrit en dur.*}
{*								On pourrait imaginer faire une lecture dynamique pour charger notre menu*}
								<li>
									<a href="index.php?gestion=porteur&type=1">Non acceptés</a>
								</li>

								<li class="divider"> </li>

								<li>
									<a href="index.php?gestion=porteur&type=2">Candidats Inscrits (présents à une réunion)</a>
								</li>

								<li class="divider"> </li>

								<li>
									<a href="index.php?gestion=porteur&type=4">Sortie Réorientation (accompagnement / formation)</a>
								</li>

								<li class="divider"> </li>

								<li>
									<a href="index.php?gestion=porteur&type=5">Sortie Extérieure (emploi différent)</a>
								</li>

								<li class="divider"> </li>

								<li>
									<a href="index.php?gestion=porteur&type=6">Sortie Création</a>
								</li>
							</ul>
					</li>


					<li class="dropdown">
						<a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Entrepreneurs<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							{*								Le menu propose de rechercher les pdp par type. Ici il est écrit en dur.*}
							{*								On pourrait imaginer faire une lecture dynamique pour charger notre menu*}
							<li>
								<a href="index.php?gestion=porteur&type=3">Tous secteurs confondus </a>
							</li>
							<li>
								<a href="index.php?gestion=porteur&type=3&secteur=1">Services</a>
							</li>
							<li>
								<a href="index.php?gestion=porteur&type=3&secteur=2">Artisanat</a>
							</li>
							<li>
								<a href="index.php?gestion=porteur&type=3&secteur=3">Commerce</a>
							</li>
							<li>
								<a href="index.php?gestion=porteur&type=3&secteur=4">Artistique et culturel</a>
							</li>
							<li>
								<a href="index.php?gestion=porteur&type=3&secteur=5">Divers</a>
							</li>

						</ul>
					</li>

					<li class="divider"> </li>
					<li>
						<a class="nav-color" href="#">Entretiens</a>
					</li>

					<li>
						<a class="nav-color" href="index.php?gestion=accompagnateur">Accompagnateurs</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Paramètres<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="index.php?gestion=lieu">Lieux</a>
							</li>

							<li class="divider"> </li>

							<li>
								<a href="#">Secteurs d'activité</a>
							</li>

							<li class="divider"> </li>

							<li>
								<a href="#">Types</a>
							</li>

							<li class="divider"> </li>

							<li>
								<a href="#">Statuts</a>
							</li>

						</ul>
					</li>


					<form class="form-inline fa-align-center" action="index.php" methode="post">
							<input type="hidden" name="gestion" value="porteur">
							<input type="hidden" name="type" value="0">
						<input class="form-control" type="search" placeholder="Prénom OU Nom du porteur de projet"
							    name="valeurRecherchee" value="" size="40%">
						<button class="btn btn-warning" type="submit">Rechercher</button>

					</form>




				</ul>

				<ul class="nav navbar-nav navbar-right">

					<li>
						<a class="nav-color" href="#">Plan du site</a>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle nav-color" data-toggle="dropdown">Espace personnel<strong class="caret"></strong></a>
						<ul class="dropdown-menu">
							<li>
								<a href="index.php?gestion=authentification&action=deconnexion">{$deconnexion}</a>
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

