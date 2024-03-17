//------------------------------------------------------------------------------------------------------------------------------------------------------------
// Initialisation des messages et adaptation selon la voie
//------------------------------------------------------------------------------------------------------------------------------------------------------------
function initMessages(typeAuth) {
	messageContenu[4005]='Votre mot de passe est incorrect, r&eacute;essayez ou cliquez sur &laquo;Vous avez oubli&eacute; votre mot de passe &raquo;';
	messageContenu[4004]='Le num�ro fiscal renseign� n\'est pas connu de nos services.&nbsp; Veuillez v�rifier votre saisie.<br>';
	messageContenu[4004]+='Si votre identifiant fiscal ne comporte pas d\'erreur, nous vous invitons � contacter votre '+cfp['INCONNU'];
	messageContenu[4020]='Votre acc�s est suspendu pendant ';
	messageContenu['infoBlocage']='Attention, vous devez veiller � respecter les minuscules et les majuscules lors de la saisie de votre identifiant et de votre mot de passe. Si vous avez perdu votre mot de passe, vous pouvez le renouveler en quelques clics.';
	messageContenu['infoSaisie3S']='Vous devez cr�er votre espace en saisissant votre num�ro d\'acc�s en ligne et votre revenu fiscal de r�f�rence.';
	messageContenu['4005_debut']='Il vous reste ';
	messageContenu['4005_fin']=' pour vous identifier par mot de passe.';
	messageContenu['badFormatPwd']='Le format de votre mot de passe est incorrect. Il doit comporter 8 &agrave; 128 caract&egrave;res dont une lettre et un chiffre.<br>Il peut aussi contenir les caract&egrave;res sp&eacute;ciaux suivants&nbsp;:&nbsp;! # $ % & * + - / = ? ^ _ \' . { | }.';
	messageContenu['badFormatSpi']='Votre num�ro fiscal comporte 13 chiffres&nbsp;;&nbsp;veuillez v�rifier votre saisie.';
	messageContenu['badFormatDate']='Le format de la date saisie est incorrect (exemple de format attendu 01/03/1980).';
	messageContenu['enCours1']='Vous avez d&eacute;j&agrave; initi&eacute; la proc&eacute;dure de cr&eacute;ation de votre espace particulier. Vous devez cliquer sur le lien';
	messageContenu['enCours2']=' qui vous a &eacute;t&eacute; adress&eacute; par courriel.';
	messageContenu['enCours3']='<br>Si vous le souhaitez, vous pouvez � nouveau initier la cr�ation de votre espace en saisissant le\(s\) champ\(s\) ci-apr�s.';

	messageContenu['visuMdpON']='Afficher le mot de passe';
	messageContenu['visuMdpOFF']='Cacher le mot de passe';

	messageContenu['titreFenetreCTX']='Particuliers | authentification';
	messageContenu['titreFenetreLMDP']='Particuliers | authentification';
	messageContenu['titreFenetreCreation']='Particuliers | cr�ation de votre espace particulier';
	messageContenu['titreFenetre3S']=messageContenu['titreFenetreCreation'];
	messageContenu['titreFenetrePAS']=messageContenu['titreFenetreCreation'];
	messageContenu['CTXtitre_authent']='Connexion ou cr&eacute;ation de votre espace';
	messageContenu['LMDPtitre_authent']='Connexion &agrave; votre espace particulier&nbsp;';
	messageContenu['3Stitre_authent']='Cr&eacute;ation de votre espace particulier';
	messageContenu['PAStitre_authent']=messageContenu['3Stitre_authent'];
	messageContenu['titreModalenumFiscal']='R�ception par courriel de votre num�ro fiscal';
	messageContenu['titreModalepassPerdu']='Renouvellement de votre mot de passe';
	messageContenu['infoSMSpassPerdu']='Pour recevoir le lien de renouvellement de votre mot de passe';
	messageContenu['infoSMSnumFiscal']='Pour recevoir votre num�ro fiscal par courriel';
	messageContenu['boutonSMSpassPerdu']='Recevoir le lien de renouvellement';
	messageContenu['boutonSMSnumFiscal']='Recevoir mon num�ro fiscal';
	messageContenu['ctx_EXISTEPAS']=messageContenu[4004];
	messageContenu['ctx_EXISTEPAS']=messageContenu[4004];
	messageContenu['ctx_NOINFO']='Pour cr�er votre espace particulier, vous devez pr�alablement fournir � votre '+cfp['NOINFO']+' des �l�ments permettant de prouver votre identit�.';
	messageContenu['ctx_DOUBLON_L']='Pour acc�der � votre espace particulier, vous devez saisir votre nouvel identifiant fiscal qui se trouve sur vos derniers documents fiscaux et qui vous a �t� envoy� par courriel.';
	messageContenu['ctx_DOUBLON_nonL']='Pour des raisons techniques votre num�ro fiscal est d�sormais le suivant : __ACTIF__. Veuillez l\'utiliser pour cr�er votre espace particulier.';
	messageContenu['CAT1']="La saisie des caract&egrave;res de l'image ou de l'extrait sonore est incorrecte. Veuillez recommencer.";
	messageContenu['CAT2']="Cette proc&eacute;dure est r&eacute;serv&eacute;e aux personnes ayant d&eacute;j&agrave; cr&eacute;&eacute; un espace particulier.";
	messageContenu['CAT3']="La saisie de l'ensemble des champs est obligatoire.";
	messageContenu['CAT4']= "Vous ne pouvez pas acc&eacute;der &agrave; votre espace particulier et utiliser les services en ligne.&nbsp;"
	messageContenu['CAT4']+="Veuillez nous en excuser.&nbsp;"
	messageContenu['CAT4']+="Nous vous invitons &agrave; contacter votre " + cfp['default'];
	messageContenu['ctx_AMALGAME']=messageContenu['CAT4'];
	messageContenu['CAT5']="Le format de votre adresse &eacute;lectronique est incorrect. Veuillez le v&eacute;rifier (par exemple : abcd24@fai.fr).";
	messageContenu['CAT6']="Votre num&eacute;ro fiscal ne permet pas d'acc&eacute;der &agrave; cette fonctionnalit&eacute;. Nous vous prions de bien vouloir nous en excuser. Veuillez contacter votre " + cfp['default'] ;
	messageContenu['CAT7']='Les donn�es saisies sont incorrectes. V�rifiez la saisie de vos identifiants.';
	messageContenu['CAT8']="L'application est momentan&eacutement indisponible. Veuillez r&eacuteessayer ult&eacuterieurement.";
	messageContenu['CAT9']="Le num&eacute;ro fiscal saisi est incorrect&nbsp;; veuillez recommencer.";
	messageContenu['CAT10']="Vous ne pouvez pas acc&eacute;der &agrave; votre espace particulier et utiliser les services en ligne.&nbsp;";
	messageContenu['CAT10']+="Veuillez nous en excuser.&nbsp;";
	messageContenu['CAT10']+="Nous vous invitons &agrave; contacter votre " + cfp['default'];
	messageContenu['CAT11']="Cette proc&eacute;dure est r&eacute;serv&eacute;e aux personnes ayant d&eacute;j&agrave; cr&eacute;&eacute; un espace particulier.";
	messageContenu['CAT12']="Une anomalie li�e � votre date de naissance emp�che l\'utilisation de cette fonction�; veuillez contacter votre " + cfp['PERTENUM'];
	messageContenu['SMSKOMAXTRY']="Veuillez solliciter l\'envoi d\'un nouveau code en appuyant sur le lien &laquo;Je n\'ai pas re&ccedil;u le code&raquo;"
	messageContenu['SMSKO']="Le code saisi est incorrect&nbsp;; veuillez v�rifier votre saisie.";
	messageContenu['SMSNEEDSECURE']='Pour renforcer la s&eacute;curit&eacute; de votre espace, pensez &agrave; valider votre num&eacute;ro de t&eacute;l&eacute;phone portable dans la rubrique &laquo;&nbsp;Mon profil&nbsp;&raquo;.';
	messageContenu['SMSRENEWOK']='Un nouveau code de validation vous a &eacute;t&eacute; adress&eacute; par SMS';
	messageContenu['SMSRENEWLAST']='Attention&nbsp;: Vous ne pourrez pas solliciter l\'envoi d\'un nouveau code de validation avant une dur&eacute;e de __N__';
	messageContenu['SMSBADFORMAT']='Le code doit comporter six chiffres&nbsp; veuillez v&eacute;rifier votre saisie';
	messageContenu['SMSSENDOK']=', veuillez saisir le code qui vous a &eacute;t&eacute; adress&eacute; au (__INDICATIF__) __NUMTEL__';
	messageContenu['SMSITX']='Le code SMS envoy&eacute; est : __CODE__';
	messageContenu['SMSKOMAXTRYWAIT']=' (apr�s la fin du d�lai indiqu�)';

	switch(typeAuth) {
		//----------------------------------------------------------------------------------------------------------
		//Les messages pour les DAC SSO et la voie PayFip
		//----------------------------------------------------------------------------------------------------------
		case 'payfip' :
			messageContenu[4005]='Les donn�es saisies sont incorrectes. V�rifiez la saisie de vos identifiants.';
			messageContenu[5500]='Pour acc&eacute;der au service, vous devez saisir votre nouvel identifiant fiscal qui vous a &eacute;t&eacute; envoy&eacute; par courriel&nbsp;.';
			messageContenu[6500]=messageContenu[5500];
			messageContenu[5501]='Vous ne pouvez pas acc&eacute;der au service&nbsp;;&nbsp;veuillez nous en excuser.&nbsp;Nous vous invitons &agrave; contacter votre '+cfp[5501];
			messageContenu[5502]='Le num&eacute;ro fiscal renseign&eacute; n\'est pas connu de nos services.&nbsp;Veuillez v&eacute;rifier votre saisie.&nbsp;Si votre identifiant fiscal ne comporte pas d\'erreur, nous vous invitons &agrave; contacter votre '+cfp['INCONNU'];
			messageContenu['badFormatSpi']='Le format de votre num�ro fiscal est incorrect. Seuls sont autoris�s 13 caract�res num�riques.'
			messageContenu[5600]='Vous n\'avez pas encore cr&eacute;&eacute; un acc&egrave;s &agrave; votre espace particulier.&nbsp;Veuillez cliquer sur le bouton &laquo;Cr&eacute;er mon espace particulier&raquo;.';
			messageContenu[5601]=messageContenu[5600];
			messageContenu[5602]=messageContenu[5600];
			messageContenu[5603]=messageContenu[5600];
			messageContenu[5700]='Vous avez d&eacute;j&agrave; initi&eacute; la proc&eacute;dure de cr&eacute;ation de votre espace particulier. Vous devez cliquer sur le lien qui vous a &eacute;t&eacute; adress&eacute; par courriel.';
			messageContenu['titreFenetreLMDP']='Authentification PayFip';
			break;
			//----------------------------------------------------------------------------------------------------------
			//Les messages pour les DAC FI
			//----------------------------------------------------------------------------------------------------------
		case 'idp' :
			lien='<a href="'+fqdnCFSPart+'/"> impots.gouv.fr </a>';
			messageContenu['ctx_noLV']='Vous n\'avez pas encore activ� votre espace particulier. Nous vous invitons � vous rendre sur '+lien+' pour effectuer cette d�marche.';
			messageContenu['enCours3']='<br>Vous pourrez ensuite vous connecter avec votre mot de passe.';
			messageContenu['ctx_DOUBLON_nonL']='Pour des raisons techniques votre num�ro fiscal est d�sormais le suivant : __ACTIF__. Vous pouvez � partir de ce num�ro fiscal cr�er votre espace particulier sur ' + lien + ' et acc�der ainsi aux services en ligne.';
			messageContenu['CTXtitre_authent']='Je me connecte avec mon compte impots.gouv.fr &nbsp;';
			messageContenu['LMDPtitre_authent']=messageContenu['CTXtitre_authent'];
			break;
			default :
				break;
	}	
}	
