<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>{$titre|upper}</title>

		<link rel="icon" type="image/png" href="public/images/plogo.PNG" />
		<link href="public/css/bootstrap.min.css" rel="stylesheet">
		<link href="public/css/style.css" rel="stylesheet">

	</head>
	<body>

		<div class="container-fluid">

			{include file ='public/menu.tpl'}

			<div class="row">
                <div class="col-md-4 space">
                    <a href="index.php?gestion=accueil"><img src="public/images/plogo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3>{$titreGestion}</h3>
                </div>
                <div class="col-md-2 space">
{*					Un porteur de projet doit passer par une réunion d'info coll donc par une inscription.*}
{*					C'est le seul moyen de créer un nouveau pdp !*}
{*                    <form action='index.php' method='post'>*}
{*                        <input type='hidden' name='gestion' value='porteur'>*}
{*                        <input type='hidden' name='action' value='form_ajouter'>*}
{*						*}
{*						Ajouter un porteur :*}
{*						<input type="submit"  class="btn btn-warning btn-sm"  name="ajouter" value="Ajouter">*}
{*                    </form>*}

                </div>
            </div>



			<div class="row">

				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<p {if $message neq ''} class="alert alert-success" {/if}>
						{$message}
					</p>

                </div>

			</div>

			<div class="row">

				<div class="col-md-offset-1 col-md-10 col-md-offset-1">

					<p class="alert alert-info">
						Nombre de porteurs de projet : {count($listePorteurs)}
					</p>

				</div>

			</div>

			<div class="row">
				<!-- ICI LES DONNES  -->
				<div class="col-md-offset-1 col-md-10 col-md-offset-1">


					<table class="table">
						<thead class="">
							<tr>
								<th>
									ID
								</th>
								<th>
									PRENOM NOM
								</th>
								<th>
									DOMICILIATION
								</th>
								<th>
									DATE D'INSCRIPTION
								</th>
								<th>
									ACTION
								</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<td colspan="6">
									<p>INFORMATIONS : ... </p>
								</td>
							</tr>

						</tfoot>
						<tbody>
							{foreach from=$listePorteurs item=porteur}
								<tr>
									<td>
										{$porteur.pdp_ide}
									</td>
									<td>
										{$porteur.pdp_pre} &nbsp; {$porteur.pdp_nom}
									</td>
									<td>
										{$porteur.pdp_cpo} &nbsp; {$porteur.pdp_vil}
									</td>
									<td>
										{$porteur.pdp_din|date_format:"%A %d %m %Y"|capitalize}
									</td>

									<td>
										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='{$porteur.pdp_ide}'>
											<input type='hidden' name='type' value='{$type}'>
											<input type='hidden' name='secteur' value='{$secteur}'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_consulter'>


											<input type="submit"  class="btn btn-warning btn-sm"   name="consulter" value="Consulter">
										</form>

										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='{$porteur.pdp_ide}'>
											<input type='hidden' name='type' value='{$type}'>
											<input type='hidden' name='secteur' value='{$secteur}'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_modifier'>

											<input type="submit"  class="btn btn-warning btn-sm"   name="modifier" value="Modifier">
										</form>

										<form action='index.php' method='post'>
											<input type='hidden' name='pdp_ide' value='{$porteur.pdp_ide}'>
											<input type='hidden' name='type' value='{$type}'>
											<input type='hidden' name='secteur' value='{$secteur}'>
											<input type='hidden' name='gestion' value='porteur'>
											<input type='hidden' name='action' value='form_supprimer'>

											<input type="submit"  class="btn btn-warning btn-sm"   name="supprimer" value="Supprimer">
										</form>

									</td>
								</tr>
							{foreachelse}
								<tr>
									<td colspan='6'>Aucun enregistrement trouvé.</td>
								</tr>
							{/foreach}

						</tbody>
					</table>
				</div>
			</div>

			{include file='public/piedPage.tpl'}

		</div>

		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/scripts.js"></script>
	</body>
</html>
