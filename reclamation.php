<?php
include_once('connect.inc.php'); 
session_start();
if(isset($_SESSION["name"])&& $_SESSION["rol"]==='enseignant'){

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
				<li ><a href="espaceENS.php" accesskey="1" title="">Mon espace</a></li>
                <li class="current_page_item"><a href="reclamation.php" accesskey="2" title="">Reclamation</a></li>
				<li><a href="trouverTECH.php" accesskey="3" title="">trouver technicien</a></li>
				<li><a href="Message.php" accesskey="5" title="">Messages</a></li>
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
                        <label for="email"><i class="zmdi zmdi-email"></i></label>
                        <input type="email" name="email" id="email" placeholder="Destinataire"/>
                       </div>
                    <div class="form-group">
                        <label for="name"><i ></i></label>
                        <input type="number" name="numlabo" id="name" placeholder="numero labo"/>
                    </div>
                    <div class="form-group">
                        <label for="numposte"><i ></i></label>
                        <input type="number" name="numposte" id="numposte" placeholder="numeros des postes"/>
                    </div>
                    <div class="form-group">
                        <label for="problem"><i ></i></label>
                        <textarea name="prblm" id="problem" placeholder="probléme" rows="10" cols="90"></textarea>
                    </div>
                    <div class="form-group form-button">
                             <input type="submit" name="reclamation" id="signin" class="form-submit" value="envoyer reclamation"/>
                            </div>             
<?php           
                @$dest =$_POST["email"];
                @$numl =$_POST['numlabo'];
                @$nump =$_POST['numposte'];
                @$prblm=$_POST['prblm'];
                $_SESSION["num"]=$numl;
                $date=date("Y-m-d h:i:sa");
                $date2=date("Y-m-d");
               if(isset($_POST["reclamation"])){
           if(!empty($_POST["numlabo"])&&!empty($_POST["numposte"])&&!empty($_POST["email"])){
                $insertmbr = $dbh->prepare("INSERT INTO formulaire_enseignant(id,nom,monemail,destinataire,numlabo,numposte,probleme,daten,datet) VALUES(?,?,?,?,?,?,?, ?,?)");
                $insertmbr->execute(array(uniqid(),$_SESSION["name"],$_SESSION["mail"],$dest,$numl,$nump,$prblm,$date,$date2));
             echo " <span>votre reclamation a été envoyer</span>";
                                               }
      else
      echo "<span>tous les champs doit etre remplis</span>";
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
