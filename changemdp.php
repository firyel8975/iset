<?php
include_once('connect.inc.php');
session_start();
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
                <h2 class="form-title">mot de passe</h2>
                <form method="POST" class="register-form" id="register-form">
                        <div class="form-group">
                        <label for="code"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="code" id="code" placeholder="code"/>
                       </div>
                    <div class="form-group">
                        <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" name="pass" id="pass" placeholder="Password"/>
                    </div>
                    <div class="form-group">
                        <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                        <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                    </div>
                    <div class="form-group form-button">
                        <input type="submit" name="forminscription" id="signup" class="form-submit" value="Changer"/>
                    </div>
                </form>
            </div>
            <div class="signup-image">
                <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                <a href="sign.php" class="signup-image-link">I am already member</a>
           
<?php
if(isset($_POST['forminscription'])) {
    @$mdp =password_hash($_POST['pass'], PASSWORD_DEFAULT);
    @$mdp2 =$_POST['re_pass'];
    @$code=$_POST['code'];
    $r=false;
   if (password_verify($code,@$_SESSION["motdepasse"]))  
   {
    if (password_verify($mdp2,$mdp)){
    $sql="UPDATE membres SET motdepasse=? WHERE mail=? ";
    $stmt=$dbh->prepare($sql);
    $stmt->execute([$mdp,$_SESSION["mail"]]);
    echo "<span class='ss'> modification reussi <a href='login.php'>connectez</a></span>";
    header('Location:sign.php');

    }
   else{
     echo "<span class='ss'>mots de passes non identiques!</span>";
    }
   }
    else{
     echo "Code de sécurity incorrecte!";
    }
   }
     
?>
 </div>
        </div>
    </div>
</section>
</body>
