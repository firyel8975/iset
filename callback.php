<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up </title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head> <style> .c{color:black;} </style>
<body>
<div class="main">
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">Sign up</h2>
                <form method="POST" class="register-form" id="register-form">
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group">
                   <input type="radio" id="rol1" name="rol" value=1>
                   <label for="rol"><span class="c" >enseignant </span></label>
                   </div>
                   <div class="form-group">
                   <input type="radio" id="rol2" name="rol" value=2>
                   <label for="rol">technicien</label>
                   </div>
                    <div class="form-group form-button">
                        <input type="submit" name="forminscription" id="signup" class="form-submit" value="Register"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                <a href="sign.php" class="signup-image-link">I am already member</a>
<?php
require_once("confg.php");
include_once('connect.inc.php');
if(isset($_POST['forminscription'])) {
if(isset( $_SESSION['accessToken'])){
    $client->setAccessToken($_SESSION['accessToken']);
}
else if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['accessToken']=$token;
}
else{
    header("location:sign.php");
}
 $oAtuth=new Google_Service_Oauth2($client);
 $user=$oAtuth->userinfo->get();
echo "<pre>";
$mail=$user['email'];
$name=$user['name'];
$rol="aucun";
if(!empty($_POST['rol']))
     {
         if($_POST['rol'] == 1)
         $rol = "enseignant";
          else
         $rol = "technicien";
         $_SESSION["rol"]=$rol;
     } 
@$mdp=password_hash($_POST['pass'], PASSWORD_DEFAULT); 
@$mdp2=$_POST['re_pass']; 
           if (password_verify($mdp2,$mdp)) {
                $insertmbr = $dbh->prepare("INSERT INTO membres(pseudo, mail,motdepasse,code,rol) VALUES(?, ?, ?,?,?)");
                $insertmbr->execute(array($name, $mail,$mdp,rand(),$rol));
                @$_SESSION["mail"] =$mail;
                @$_SESSION["mdp"]=$mdp;
                header('Location:sign.php');
            }  
        }      
?>
</form>