<?php
include_once('connect.inc.php'); 
session_start();
if(empty($_SESSION["name"])){
?>
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
</head><style> span{color:red;}
</style>
<body>
<!-- Sing in  Form -->
<section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="register.php" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="login-form">
                           <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <a href="forgot_mdp.php">mot de passe oublie? </a></br>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="forminscription" id="signin" class="form-submit" value="Log in"/>
                            </div>
                     
<?php
        if(isset($_POST['forminscription'])) {
            if(isset($_POST['email'],$_POST['pass'])){
                $mail=$_POST['email'];
                $stmt = $dbh->prepare("SELECT motdepasse FROM membres WHERE mail='$mail'");
                $stmt->execute();
                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $pass=$stmt->fetchColumn();
                $st= $dbh->prepare("SELECT mail FROM membres WHERE mail='$mail'");
                $st->execute();
                $r = $st->setFetchMode(PDO::FETCH_ASSOC);
                $email=$st->fetchColumn(); 
                if (password_verify($_POST['pass'],$pass)) {
                    $stm = $dbh->prepare("SELECT pseudo FROM membres WHERE mail='$mail'");
                    $stm->execute();
                    $res= $stm->setFetchMode(PDO::FETCH_ASSOC);
                    $pseudo=$stm->fetchColumn();
                    $st = $dbh->prepare("SELECT rol FROM membres WHERE mail='$mail'");
                    $st->execute();
                    $re= $st->setFetchMode(PDO::FETCH_ASSOC);
                    $rol=$st->fetchColumn();
                     $_SESSION["name"]=$pseudo;
                     $_SESSION["mail"]=$mail;
                     $_SESSION["rol"]=$rol;
                     if($rol=='enseignant')
                     header('Location:espaceENS.php');
                     if($rol=='technicien')
                     header('Location:espaceTECH.php');
                }
                else if($email==''){
                    echo "<span> cet email ne correspond a aucun compte  </a></br>";
                    }
                else echo "<span> Mot de passe incorrecte! </span>";
                    }  
               }
            }
            else 
           {
           echo $rol= $_SESSION["rol"];
            if($rol=='enseignant')
            header('Location:espaceENS.php');
            if($rol=='technicien')
            header('Location:espaceTECH.php');
            }
    ?>
       </form>
                    </div>
                </div>
            </div>
        </section>
    </div>        
</body>