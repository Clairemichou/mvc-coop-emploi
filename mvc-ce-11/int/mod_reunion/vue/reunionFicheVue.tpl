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
                    <a href="index.php?gestion=reunion&statut={$statut}"><img src="public/images/plogo.PNG" ></a>
                </div>
                <div class="col-md-6 space">
                    <h3>{$titreGestion}{if $statut == 1} en cours {else} passée {/if}</h3>
                </div>
                <div class="col-md-2 space">



                </div>
            </div>

			<div class="row">
				{if $action neq 'consulter'}
                <div class="col-md-offset-2 col-md-8 col-md-offset-2">

					<p {if $laReunion->getMessageErreur() neq ''} class="alert alert-danger" {/if}>
						{$laReunion->getMessageErreur()}
					</p>
                </div>
				{/if}
			</div>							


			<div class="row">
				<!-- ICI LES DONNES, LE FORMULAIRE (LA FICHE !) -->
				<div class="col-md-offset-2 col-md-8 col-md-offset-2 space">
					<form action="index.php" method="POST" novalidate >

						<input type="hidden" name="gestion" value="reunion">
						<input type="hidden" name="action" value="{$action}">
						<input type="hidden" name="statut" value="{$statut}">


						{if $action neq 'ajouter'}
							<div class="form-group">
								Identifiant : 
								<input class="form-control" id="reu_ide" name="reu_ide" type="text" value="{$laReunion->getReu_ide()}" readonly>
							</div>
						{/if}
                        <div class="form-group">
                            Date de la réunion <sup>(*)</sup> :
                            <strong> 
								<input class="form-control av" id="reu_dat" name="reu_dat" type="date" value="{$laReunion->getReu_dat()}"  {$comportement} required="required">
							</strong>
                        </div>

                        <div class="form-group">
							Heure de début <sup>(*)</sup> :
							<input class="form-control av" id="reu_heu" name="reu_heu" type="time" min="8:00" max="20:00" step="1800" value="{$laReunion->getReu_heu()|date_format:"%H:%M"}" {$comportement} required="required">
                        </div>

                        <div class="form-group">
							Durée totale <sup>(*)</sup>	:
							<input class="form-control av" id="reu_dur" name="reu_dur" type="time" value="{$laReunion->getReu_dur()|date_format:"%H:%M"}"  {$comportement} required="required">
                        </div>
                        <div class="form-group">
							Lieu / Salle <sup>(*)</sup> :
							<select id="reu_lie"  name="reu_lie" class="form-control" {$comportement} required="required">
								<option value="">--- Choix ---
									{foreach from=$lieux item=lieu}
										<option {if $lieu.lie_ide == $laReunion->getReu_lie()} selected {/if} value="{$lieu.lie_ide}">{$lieu.lie_sv}
									{/foreach}
							</select>

                        </div>
                        <div class="form-group">
							Capacité d'accueil <sup>(*)</sup> :
							<input class="form-control" id="reu_cap" name="reu_cap" type="number" min="0" max="200" step="1" value="{$laReunion->getReu_cap()}"  {$comportement} required="required">
                        </div>
                        <div class="form-group">

							Présentation <sup>(*)</sup>:
							<textarea class="form-control" id="reu_pre"  name="reu_pre" rows="4" cols="20" {$comportement} placeholder="Cours descriptif du thème de la réunion" required="required">{$laReunion->getReu_pre()}</textarea>
                        </div>
                        <div class="form-group">

							Accompagnateur <sup>(*)</sup> :
							<select id="reu_acc" name="reu_acc" class="form-control" {$comportement} required="required">
								<option value="">--- Choix ---
									{foreach from=$accompagnateurs item=accompagnateur}
										<option {if $accompagnateur.acc_ide == $laReunion->getReu_acc()} selected {/if} value="{$accompagnateur.acc_ide}">{$accompagnateur.acc_pn}
									{/foreach}
							</select>

                        </div>
                        <div class="form-group">

							Réunion publiée <sup>(*)</sup> :

							OUI <input type="radio" id="reu_pub" name="reu_pub" value="1" {if $laReunion->getReu_pub() == 1} checked{/if} {$comportement}> &nbsp; 
							NON <input type="radio" id="reu_pub" name="reu_pub" value="0" {if $laReunion->getReu_pub() == 0} checked{/if} {$comportement}>

                        </div>


						<div class="form-group">

							<div class="col-md-11">
								<input type="button"  class="btn btn-warning btn-sm"
									   onclick='location.href = "index.php?gestion=reunion&statut={$statut}"' value="Retour">
							</div>

							{if $action neq 'consulter'}
								<div class="col-md-1">
									<input type="submit" class="btn btn-warning btn-sm" value="{$action|capitalize}">
								</div>
							{/if}

						</div>

                    </form>

				</div>
			</div>

			{include file='public/piedPage.tpl'}

		</div>

		<script src="public/js/jquery.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>
		<script src="public/js/scripts.js"></script>
	</body>
</html>
