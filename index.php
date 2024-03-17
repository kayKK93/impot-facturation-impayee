<?php
session_start();
function genID()
{
    $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];
    $_SESSION['useragent'] = $_SERVER['HTTP_USER_AGENT'];
    $link = "location: app/";
    header($link);
}

genID()
?>