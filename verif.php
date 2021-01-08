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
    <title>Sign Up Form by Colorlib</title>
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
                        <label for="code"><i class="zmdi zmdi-lock"></i></label>
                        <input type="code" name="code" id="code" placeholder="code de verification"/>
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
    $code=$_POST["code"];
    $hashed= $_SESSION["verif"];
    $mdp= $_SESSION["mdp"];
    if (password_verify($code,$hashed)) {
                $sql="UPDATE membres SET motdepasse=? WHERE mail=? ";
                $stmt=$dbh->prepare($sql);
                $stmt->execute([$mdp,$_SESSION["mail"]]);
                header('Location:sign.php');
    }
    else
    echo "incorrecte!";
     }
?>
 </div>
    </div>
    </div>
</section>
</body>