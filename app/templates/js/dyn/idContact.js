//------------------------------------------------------------------------------------------------------------------------------------------------------------
// Initialisation des entrees dans la page contact
//------------------------------------------------------------------------------------------------------------------------------------------------------------
function initIdContact(typeAuth) {
	if((typeof(PortPub) == 'undefined') || PortPub.length==0)PortPub="https://www.impots.gouv.fr";
	if((typeof(PathCFP)=='undefined') || PathCFP.length==0)PathCFP="/portail/contacts";
	cfp['default']='<a class="CFP" target="_blank" rel="noopener" title="Nouvelle fenêtre" href="'+PortPub+PathCFP+'NOID'+'">centre des Finances publiques <span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fenêtre">.</a>';
	cfp['PERTENUM']='<a class="CFP" target="_blank" rel="noopener" title="Nouvelle fenêtre" href="'+PortPub+PathCFP+'NOID'+'">centre des Finances publiques <span class="dgfipicon dgfipicon-sortie-page" title="Nouvelle fenêtre">.</a>';
	idContact={};
	switch(typeAuth) {
		//----------------------------------------------------------------------------------------------------------
		//Les messages pour les DAC SSO et la voie PayFip
		//----------------------------------------------------------------------------------------------------------
		case 'payfip' :
				//inconnu
				idContact['INCONNU']=776;
				//N
				idContact['NOINFO']=777;
				//NONUM	
				idContact['NONUM']=778;
				idContact['PERTENUM']=174;
				idContact['default']='';
				idContact['5501']=776;

				break;
		case 'idp' :
		case 'sso' :
				//inconnu
				idContact['INCONNU']=776;
				//N
				idContact['NOINFO']=777;
				//NONUM	
				idContact['NONUM']=778;
				idContact['PERTENUM']=174;
				idContact['default']='';

				break;
			
	}
	for (cas in idContact) {
		if (cfp[cas] !== undefined ) {
			cfp[cas]=cfp[cas].replace('NOID',idContact[cas] ? '?'+idContact[cas] : idContact[cas] );
		}
		else { 
			cfp[cas]=cfp['default'].replace('NOID',idContact[cas] ? '?'+idContact[cas] : idContact[cas] );
		}
	}
}	
