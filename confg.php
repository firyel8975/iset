<?php
require_once('google-api/vendor/autoload.php');
session_start();
$client = new Google_Client();
$client->setAuthConfig('client_credentials.json');
$client->addScope(Google_Service_Oauth2::PLUS_LOGIN); //ce qu on va faire 
$client->setRedirectUri("http://localhost/projet/callback.php");
$client->addScope('email');
$client->addScope('profile');
$client->addScope(Google_Service_Oauth2::USERINFO_EMAIL); //ce qu on va faire 
$client->addScope('https://www.googleapis.com/auth/userinfo.email');
$client->addScope('https://www.googleapis.com/auth/userinfo.profile');
?>