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
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
</head><style> 
.button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 11px 35px;
    border: 0px solid #a12727;
    border-radius: 87px;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
    background: -moz-linear-gradient(top, #ffffff, #ffffff);
    background: linear-gradient(to bottom, #ffffff, #ffffff);
    font: normal normal bold 20px arial;
    color: #ffffff;
    text-decoration: none;
}
.button:hover,
.button:focus {
    color: #ffffff;
    text-decoration: none;
}
.button:active {
    background: #999999;
    background: -webkit-gradient(linear, left top, left bottom, from(#999999), to(#ffffff));
    background: -moz-linear-gradient(top, #999999, #ffffff);
    background: linear-gradient(to bottom, #999999, #ffffff);
}
.button:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAACP0lEQVRIibWVvWtUQRTFf2d4pAlEEVkUQ0T/ALExf0CiTWyEmChiYaOFmGIX0tsH9iFiCsEvJAELwVJELGwFCxELG1EUxMJCtlAM71js7nvzPnZXUS8M77yZM/fOPTN3RkDgP1oy+GYjAhX9axkknEKCnzziuuqcBpxUnDEg1HGifcADbEh0APgylj/AqnRWSdDxDOYy8hnMUQSYl0hbwE266jVkntswQLO1fQTxEDg8gvEGvEw3vJ0UIE4LIKPtOeAFuNVnCmxqGH0EjpHqc4OvrLr6LCfIae4cIocVjGeRNyZlULaOW8CnxrFm28HsJ9XX6kB8pIrVm3nswZijFUfYJZwA8xVf0CBRnyD2FE7oASeAaeAJ6CJmF9JJoFfsC3ubUgvRt2h2fyP7bZs0POMH37HWSXWbVD26eoy0nfPyjHM/EBVauQ6Gp0QCmAEybigAryInGbA7z5RSZeecUdfDwAx4lY5XS/0rhrbPY5+OJKouNIslKsuUr16AAnCfjs8CgRUHZn0OuIMUIonqUo++i1QE6U+cQrpHxwGTgG6BE0zEUaj7IYsDFIFECw8lyuWawmzV2IVErd+T6KoDZjGXaChBjJsaLHLJNYlCKWLb8M1LyAsjCmocXmCaJdqOZYqu63UHdvwOmMtDKlIpxuPtA4kOsaFsOG14pgMdX8A+OEg5roU/we/p6m4csVoL1X35K9z0otWt7SvANXB0FLVGqs2x8yge/Wr0qm0Cz4Hj/V89JfHrCXNGOv6nEv0CVVf1zArX/eYAAAAASUVORK5CYII=") no-repeat left center transparent;
    background-size: 100% 100%;
}
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
  color:red;
}
.buttonn {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 1px 2px;
    border: 0px solid #a12727;
    border-radius: 100px;
    background: #ffffff;
    background: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#ffffff));
    background: -moz-linear-gradient(top, #ffffff, #ffffff);
    background: linear-gradient(to bottom, #ffffff, #ffffff);
    -webkit-box-shadow: #ff5959 0px 0px 40px 0px;
    -moz-box-shadow: #ff5959 0px 0px 40px 0px;
    box-shadow: #ff5959 0px 0px 40px 0px;
    text-shadow: #591717 1px 1px 1px;
    font: normal normal bold 22px arial;
    color: #ffffff;
    text-decoration: none;
}
.buttonn:hover,
.buttonn:focus {
    color: #ffffff;
    text-decoration: none;
}
.buttonn:active {
    background: #999999;
    background: -webkit-gradient(linear, left top, left bottom, from(#999999), to(#ffffff));
    background: -moz-linear-gradient(top, #999999, #ffffff);
    background: linear-gradient(to bottom, #999999, #ffffff);
}
.buttonn:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAADKElEQVRIib2VX2gUVxTGf3d23KzZdRJjTNbUxlRi1NTGEqkW2wpFiFBEBEul4kPBf9RiW9A3kSIoVgTBQltaoUV88qFSSilS2wctWNSYRIxUUZuarNnNsrvJ7s7ObPbPvT5kN07WTVo06YHDnPnmnvPd89175wpAYwatWFxO8l1OR1zagTbd8VQEz23iGQquBjqAvxmT4TcgMlVCaVtTtbwWSAHK4UGgbZLxT4H/Zr+XFC/69akmp/1HN4Dh+nlGdF61L7pgfvWQALWwviZYIGkpl6cXSJzbS3O8O+NqTQjjh1Mff/vK0kUxK53l5t2HRiAY8+08dHo7T9ZhQm45eSTQAJwFbgOPgE+B0Iv+mp4VzQtNl8slDe9s+Vb7spEtHa8FFjXUfgXEymmqOZ5OPwZsB5YVyE4Ajfs/2LBVyrxUSqFQUqGkrruy57/45FiZWkwmkQ5sfrN9yR0rncVfWzXSey/Q1B+Mrt23fDBiDVxeZ9at6XV7PIlcJlPpC11pbR8NXwMulJNXlIAA1NXMOXfrx6ODlV6vKYTg+OmfWuviPc0frV/QBgJz5d7Y1bg/8XrVoMd782s/gFDyM2T+iNjdOaFWuTOgnTmy4+As3ZVDKQD2vFHt2bHa1ybSKUTaxBPuqnk46+WmitAN/xiWglH7sMrJ90rldhJIQH5z50N9YH1215+zA+8k44mmUDrx6o0W0ZEw3CjbRNkm+v2LDASG0O//CgVM2SYinTyqzmzUHYpI3UHAl7d3acls9HsE2yx3nKV981v/ebuSe3aKvlWL2fpHN/XDcVJWjktpN0nbYo6WYuyPo1CIxejBFUBXkcRJoEUy/evsfGJbEXjgztM9nGSEKAA/t1Sx81KQB6oRObeWv4ZfYI3WM15AAWF7qAEYB50EMmz3bxhV5jhQEfGR6L9LpH5sLWJejXeV+/xLdm9uU/BzozXTbVnkM6rCSGSy2b6omNu19xfrcmH2WqlEmjmUu6iMXFNeZBpdml436I67LS2fs0ftER1PWGXofD/UfPzCd50WnOTAeGrxEMefunCc23TGrs7//UabVpuwBjNFMqMSPQYefVEqD0WUBwAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}
.i{color:red;}
.dropdown-content a {
  color: red;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
span{color:green;}
 </style>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="logo">
        <div class="dropdown">
  <button class="dropbtn"><?php echo $_SESSION["name"]?> </button>
  <div class="dropdown-content">
    <a href="changerpsswd.php">Sécurity</a>
    <a href="deco.php">Déconnexion</a>
  </div>
</div>
			<h3> <?php echo "<span>" . $_SESSION["rol"] ."</span>"?></h3>
			<span>departement:INFORMATIQUE</a></span>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="espaceTECH.php" accesskey="1" title="">Mon espace</a></li>
				<li><a href="trouverENS.php" accesskey="4" title="">trouver enseignant</a></li>
				<li><a href="messagest.php" accesskey="5" title="">Messages</a></li>
			</ul>
		</div>
	</div>
	<div id="main">

		<div id="welcome">
			<div class="title">
            <div class="dropdown">
            <a class="button" href="#"></a>
            <div class="dropdown-content">
            <?php
                @$mail=$_SESSION['mail'];
                $sql = "SELECT  nom,monemail FROM formulaire_enseignant  WHERE  destinataire='$mail'";
                  $stmt = $dbh->query($sql);
                  $result = $stmt->setFetchMode(PDO::FETCH_NUM);
                  while ($row = $stmt->fetch()) {
                    $_SESSION["sonemail"]=$row[1];
                    print "<tr class='trait_dessus'><td><a href='messaget.php'>"."de ".$row[0]."</a></td></tr>" ;    
                }    
?>
            </div>
            </div>
			</div>
			<p>Sur ce  site vous pouvez  <strong>Envoyer des reclamations </strong> et  <strong>suivre la réponse de votre technicien </strong> </p>
			<ul class="actions">
			</ul>
		</div>
		<div id="featured">
			<div class="title">
      
<?php
$count=0;
$sql = "SELECT datet FROM formulaire_enseignant  WHERE  destinataire='$mail'";
                  $stmt = $dbh->query($sql);
                  $result = $stmt->setFetchMode(PDO::FETCH_NUM);
                  while ($row = $stmt->fetch()) {
                    $date=$row[0];
                    if($date==date("Y-m-d"))
                    {
                       $count=$count+1;
                    }
                  }
 echo  date("Y-m-d ").": vous avez récu <span class='i'>".$count."</span> nouvelles notifications aujourd'hui </br>";
echo "<span>connecté Maintenant </span></br></br></br>";
if ($_SESSION['mail'] !='') 
{
  $pseudo = $_SESSION['mail'];
  $lastquerytime = time(); 
  $sql = "UPDATE  membres SET lastquerytime='$lastquerytime' WHERE mail='$pseudo'";
  $stmt = $dbh->prepare($sql);
  $stmt->execute();
}
$fiveminago = time() - 5 * 60; 
$sql = "SELECT pseudo FROM  membres WHERE lastquerytime>'$fiveminago'"; //Tous ceux qui ont fait un truc y a moins de 5min
$stmt = $dbh->query($sql);
$result = $stmt->setFetchMode(PDO::FETCH_NUM);
while ($row = $stmt->fetch()) {
  if($row[0]==$_SESSION['name'])
  echo " <a class='buttonn'></a>vous</br>"; 
  else
 echo " <a class='buttonn'></a>" . $row[0]."</br>"; 
}
}
else 
{
header('Location:sign.php');
}
?>
			</div>
			<ul class="style1">
				<li class="first">
					
				</li>
				<li>
					
				</li>
				<li>
					
				</li>
				<li>
					
				</li>
			</ul>
		</div>
		<div id="copyright">
			
		</div>
	</div>
</div>
</body>
</html>
