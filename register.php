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
                        <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Your Email"/>
                    </div>
                    <div class="form-group">
                        <label for="num"><i></i></label>
                        <input type="text" name="num" id="num" placeholder="téléphone (facultative)"/>
                    </div>
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
                    <div class="form-group">
                    <div class="social-login">
                            <span class="social-label">remplir a partir: </span>
                            <ul class="socials">
                                <li><a href="callback.php"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div>
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
if(isset($_POST['forminscription'])) {
    $name=htmlspecialchars($_POST['name']);
    if(!empty($_POST['rol']))
         {
             if($_POST['rol'] == 1)
             $rol = "enseignant";
              else
             $rol = "technicien";
             $_SESSION["rol"]=$rol;
         } 
    $mail = htmlspecialchars($_POST['email']);
    $mdp =password_hash($_POST['pass'], PASSWORD_DEFAULT); 
    $mdp2=$_POST['re_pass']; 
    if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['rol']) AND !empty($_POST['pass'])) {
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $reqmail = $dbh->prepare("SELECT * FROM membres WHERE mail = ?");
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount();
            if($mailexist == 0) {
               if (password_verify($mdp2,$mdp)) {
                $password=uniqid();//mdp aleatoire qui sera envoyer par mail
                $hashedpassword=password_hash($password,PASSWORD_DEFAULT);
                $message="Bonjour , voila le code de vérification:$password";
                $headres='Content-type:text/plain; charset="utf-8"'."";//gerer les accents
                if(mail($_POST['email'],'mot de passe oublié' ,$message,$headres)){//The mail() function allows you to send emails directly from a script.
                    $insertmbr = $dbh->prepare("INSERT INTO membres(pseudo, mail,motdepasse,code,rol,num) VALUES(?,?,?, ?,?,?)");
                    $insertmbr->execute(array($name, $mail,$hashedpassword,$hashedpassword,$rol,@$_POST["num"]));
                    $_SESSION["verif"] =$hashedpassword;
                    $_SESSION["mail"] =$mail;
                    $_SESSION["mdp"]=$mdp;
                    header('Location:verif.php');
                }
               }
                else {
                  $erreur = "Vos mots de passes ne correspondent pas !";
               }
            } else {
               $erreur = "Adresse mail déjà utilisée !";
            }
         } else {
            $erreur = "Votre adresse mail n'est pas valide !";
         }
        }
        else {
            $erreur = "Tous les champs doivent être complétés !";
         }
    }
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
     }
    }
    else 
   {
    if($rol=='enseignant')
    header('Location:espaceENS.php');
    if($rol=='technicien')
    header('Location:espaceTECH.php');
    }
?>
 </div>
        </div>
    </div>
</section>
</body>