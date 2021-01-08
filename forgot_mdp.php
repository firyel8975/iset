<?php
session_start();
include_once('connect.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head> <style> .c{color:black;} span{color:red;} </style>
<body>
<div class="main">
<!-- Sign up form -->
<section class="signup">
    <div class="container">
        <div class="signup-content">
            <div class="signup-form">
                <h2 class="form-title">changer mot de passe</h2>
                <form method="POST" class="register-form" id="register-form">
                <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="forminscription" id="signup" class="form-submit" value="changer"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                <a href="sign.php" class="signup-image-link">I am already member</a>
                    <?php      
               if(isset($_POST["email"])){
                 $email=$_POST['email'];
                 $stmt = $dbh->prepare("SELECT pseudo FROM membres WHERE mail='$email'");
                 $stmt->execute();
                 $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                 $pseudo=$stmt->fetchColumn();
                 if ($pseudo=="")
                 echo "<span>aucune compte correspond a cette adresse mail</span>";
                 else{              
                $password=uniqid();//mdp aleatoire qui sera envoyer par mail
                $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
                $message="Bonjour , voila le code de sécuritie :$password";
                $headres='Content-type:text/plain; charset="utf-8"'."";//gerer les accents
                if(mail($_POST['email'],'mot de passe oublié' ,$message,$headres)){//The mail() function allows you to send emails directly from a script.
                $sql="UPDATE membres SET motdepasse=? WHERE mail=? ";//mail(to,subject,message,headers,parameters);
                $stmt=$dbh->prepare($sql);
                $stmt->execute([$hashedpassword,$_POST['email']]);
                 $_SESSION["motdepasse"] =$hashedpassword;
                 $_SESSION["mail"] =$email;
                 header('Location:changemdp.php');
                }
        }
    } 
   ?>
         
