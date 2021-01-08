<?php
include_once('connect.inc.php'); 
session_start();
if(isset($_SESSION["name"])&& $_SESSION["rol"]==='technicien'){

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head><style> 
.dropdown-content a:hover {background-color: black;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: blue;}
.dropbtn {
  background-color: #2980b9;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color:grey;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
span{color:red;}
 </style>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
        <div class="dropdown">
  <button class="dropbtn"><?php echo  $_SESSION["name"] ?></button>
  <div class="dropdown-content">
    <a href="changerpsswd.php"><span class="i">Sécurity</span></a>
    <a href="deco.php"><span class="i">Déconnexion</span></a>
  </div>
</div>
			<h3> <?php echo  $_SESSION["rol"] ?></h3>
			<span>departement:INFORMATIQUE</a></span>
		</div>
		<div id="menu">
			<ul>
				<li ><a href="espaceTECH.php" accesskey="1" title="">Mon espace</a></li>
				<li><a href="trouverTECH.php" accesskey="3" title="">trouver technicien</a></li>
				<li><a href="trouverENS.php" accesskey="4" title="">trouver enseignant</a></li>
				<li><a href="messagest.php" accesskey="5" title="">Messages</a></li>
			</ul>
		</div>
	   </div>
	   <div id="main">
		<div id="welcome">
			<div class="title">
            
			</div>	
		</div>
		<div id="featured">
			<div class="title">
            <form method="POST" class="register-form" id="register-form">
                       <div class="form-group">
                       <label for="hardware"><i ></i></label>
                        <input type="text" name="hardware" id="name" placeholder="hardware"/>
                       </div>
                    <div class="form-group">
                        <label for="software"><i ></i></label>
                        <input type="text" name="software" id="software" placeholder="software"/>
                    </div> 
                    <div class="form-group">
                    <input type="radio" id="done" name="rad" value="1" >
               probleme résolu </br>
                <input type="radio" id="err" name="rad" value="2">
                probleme non resolu</td><td>
                <div class="form-group">
                       <label for="explication"><i ></i></label>
                       <textarea name="explication" id="explication" placeholder="explication" rows="10" cols="90"></textarea>
                       </div>
                    <div class="form-group form-button">
                             <input type="submit" name="reclamation" id="signin" class="form-submit" value="envoyer reclamation"/>
                            </div>             
<?php           
                @$mail=$_SESSION['mail'];
                @$mail=$_SESSION['mail'];
                @$dest=$_GET["sonemail"];
                if(!empty($_POST['rad']))
                {
                    if($_POST['rad'] == 1)
                     $radd = "probleme resolu";
                     else
                    $radd = "probléme non resolu"; 
                }
                $hard=$_POST['hardware'];
                        $soft=$_POST['software'];
                        $exp=$_POST['explication'];
                        $date=date("Y-m-d h:i:sa");
                        $date2=date("Y-m-d");
                if(isset($_POST["reclamation"])){
                    if(!empty($_POST["rad"])){
                      $insertmbr = $dbh->prepare("INSERT INTO formulaire_technicien(id,nom,monemail,destinataire,hardware,software_exp, resultat_final, explication,datet,datec) VALUES(?,?,?,?,?,?, ?,?, ?,?)");
                      $insertmbr->execute(array(uniqid(),$_SESSION["name"],$_SESSION["mail"],$_SESSION["sonemail"],$hard,$soft, $radd,$exp,$date2,$date));
                      echo "<span>votre reponse a été envoyer</span>";
                                             }
                    else if (empty($_POST["rad"])){
                    echo "<span>choisir parmit les deux choix </span></br>";
                    }
                    }
    if ($_SESSION['mail'] !='') 
{
  $pseudo = $_SESSION['mail'];
  $lastquerytime = time(); 
  $sql = "UPDATE  membres SET lastquerytime='$lastquerytime' WHERE mail='$pseudo'";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
}
}
else 
{
header('Location:sign.php');
}
?>
</form>
	            	</div>
		<div id="copyright">
		</div>
	</div>
</div>
</body>
</html>
