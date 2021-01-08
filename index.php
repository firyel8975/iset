<?php
require_once("confg.php");
$authUrl=$client->createAuthUrl();
header("location:$authUrl");

?>