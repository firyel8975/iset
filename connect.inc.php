<?php
$user = 'root';
$pass = '';
$dsn = 'mysql:host=localhost;dbname=iset';
$dbh = new PDO($dsn, $user, $pass);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>