<?php
session_start();
include_once('connect.inc.php');
if(isset($_SESSION["name"])&& $_SESSION["rol"]==='technicien'){

?>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>
span{color:red;}
@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);
body{
    background-color:#1c1c1e}
h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.container th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: left;
  color: black;
}

.container td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
	  text-align: left;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
} 
.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}
.notification:hover {
  background: orange;
}
.n{
    color:black;
}
.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: orange;
  color: white;
}
.dropbtn {
  background-color: orange;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.delete {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 11px 22px;
    border-radius: 8px;
    background: #ef5350;
    font: normal normal bold 15px arial;
    color: #ffffff;
    text-decoration: none;
}
.delete:hover,
.delete:focus {
    border: 1px solid #735050;
    background:#b71c1c;
    
    color: #ffffff;
    text-decoration: none;
}
.delete:active {
    background: #92513e;
    background: -webkit-gradient(linear, left top, left bottom, from(#92513e), to(#f48768));
    background: -moz-linear-gradient(top, #92513e, #f48768);
    background: linear-gradient(to bottom, #92513e, #f48768);
}
.delete:before{
    content:  "\0000a0";
    display: inline-block;
    height: 24px;
    width: 24px;
    line-height: 24px;
    margin: 0 4px -6px -4px;
    position: relative;
    top: 0px;
    left: 0px;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAACIElEQVRIicWWv24TQRDGf7NYVrxyDrMWb0ERRVQIShqUh+ABEKKyfCZS5AK5oKGgo6GGno6SjpIiRR4hOqEEnSLLvqG43fN5vTYWKGKl083Nn292vp1ZnQCGW1wBvNpir/5V7iSMJpadzV8BWaS/KsrZu5R/LMcUbVDmbD7dR5da0gZ0Nn8GPBCkAlDvoOhTRL7XGh+meizI1+Dj/Q3oj6KcfYkTVFl2ZjqL+RuUs1WAIggqmACjWut89ZWELQQ4YWpYvL4s33p7iytn8+fAE+BGRMptZauCyLqsqEXpAt+KcvaR6Ayax9n8xNn8CDDDfm6y3sQA5p4dNT4De2oAk/VGZnh4GuKOnM1PYrx2m4bnJzAAKlUed6Q6rku98/Jud8T9bIxh+QKoOmIe6nL5yMcNfGzAAahSQxYSANoBul5vay7UIPQ94x2Vxu6AIgYLc9BOdOUTtHWm5lvNqmc27JnWsWv6kKA9gb8AS2IqRYRY15KtQEk0aCmKSpB+Qh+DhiEJq+83t+Ybl2lceT0H7SZs9VtaFOmavVuUFwu2dFHIWF3wPrXbpitQXemEcCTe/rnBCT4pirbdrOmla187b9Ndl94+FKUw2KBo1274I0UbOP+bIpVL0Lm3nYuCChXKOWBUKaSe9K0UJYGdzSfOTg5In8OG7Hrjg6HNxymfdgVNaQKfFJ0ObX6d2lG8FA4VPpCaflb39q39XezTnn8t/wY5U8lh6EH3QgAAAABJRU5ErkJggg==") no-repeat left center transparent;
    background-size: 100% 100%;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
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
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: blue;}
button {
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    padding: 6px 9px;
    border: 0px solid #a12727;
    border-radius: 98px;
    background: #504aff;
    background: -webkit-gradient(linear, left top, left bottom, from(#504aff), to(#263a99));
    background: -moz-linear-gradient(top, #504aff, #263a99);
    background: linear-gradient(to bottom, #504aff, #263a99);
    font: normal normal normal 20px arial;
    color: #ffffff;
    text-decoration: none;
}
.button:hover,
.button:focus {
    background: #6059ff;
    background: -webkit-gradient(linear, left top, left bottom, from(#6059ff), to(#2e46b8));
    background: -moz-linear-gradient(top, #6059ff, #2e46b8);
    background: linear-gradient(to bottom, #6059ff, #2e46b8);
    color: #ffffff;
    text-decoration: none;
}
.button:active {
    background: #302c99;
    background: -webkit-gradient(linear, left top, left bottom, from(#302c99), to(#263a99));
    background: -moz-linear-gradient(top, #302c99, #263a99);
    background: linear-gradient(to bottom, #302c99, #263a99);
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
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAACXBIWXMAAA7EAAAOxAGVKw4bAAACHElEQVRIia2UP2/TUBTFf8fyxJDPEPEZ2KgqpRViLU1HVIkNVXguZmglBgJia6R+gKpjw58JMdBWFWwMfIKSzxAx+zD4vfglNSGKciTLx/a997x3fN/VblHeE7wD9iV1SGFABtRwq7lDKzeeAGfgw1zwHngOnAPjUC5WbwoGbjWf0rAZbrrAAYgceAqcGz8bnQwqIAOqkLIS3yvKzPXzfobUERp/GL6NQSmqVfjFcFCBxohOLqZbzAA+Xf7YtN2jef9/SwKXdLWz9fAm5ipYlKpn4B7SkUK2bRRWYTvktvOA61rQGKLANKDa2do4Bo5ZjEX/oIaEHAXqNssAPl5+35TV8wI/hHEbl692tjZuoOne3EQLwipMD3xUJ9Tpwd+ah7Lzogm/nq7ZkIvY2DWebK/JoiC3mkWJFS2FM1iPRdeLdtNYFOdIwJIWpWg9dNH4HJnQxhlrhA2SyUGzFq1hFgUJbJHZntju7hVl3MFK8yflu8XLDOiCJzniDHNgoF+U45bdfh4NB7/iQ78oj5cYTF3qKX2aYx+GD/tAR0rmTM1f9IvyURCpQEcS4b/V9t7lTIBTw6HmPJxBvyjvA9+ADvB4NBz87BevLPH64uTNUp02f0BmrtFwMAa2w4q+9IvygTQ993fi265UoEp2MuWj4eA2iPwBvtpEhdb4ed7W+3e6IhGZALGt/xmf8oUW0WqXx2u1iDa77N/LxAPVX88uNkhwNZT3AAAAAElFTkSuQmCC") no-repeat left center transparent;
    background-size: 100% 100%;
}
.v{color:green;}
.ss{color:orange;}
</style>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-6">
                        
                    </div>
                    <div class="col-md-2">
                    
<div class="dropdown">
  <button class="dropbtn">Mon espace</button>
  <div class="dropdown-content">
    <a href="espaceENS.php">Profil</a>
    <a href="changerpsswd.php">Sécurity</a>
    <a href="deco.php">Déconnexion</a>
  </div>
</div>

                    </div>
                </div> 
                <div class="row">
                <table class="container">
	<thead>
		<tr>
       <th><h1>Date</h1></th>
		<th><h1>Num labo</h1></th>
		<th><h1>Num poste</h1></th>
        <th><h1>probléme</h1></th>
        <th><h1></h1></th> 
        <th><h1>Selectionner</h1></th>  
		</tr>
	</thead>
	<tbody>
    <?php
    if ($_SESSION['mail'] !='') 
    {
      $pseudo = $_SESSION['mail'];
      $lastquerytime = time(); 
      $sql = "UPDATE  membres SET lastquerytime='$lastquerytime' WHERE mail='$pseudo'";
      $stmt = $dbh->prepare($sql);
      $stmt->execute();
    }
                @$mail=$_SESSION['mail'];
                @$smail=$_SESSION['sonemail'];
                $sql = "SELECT  nom,numlabo,numposte,probleme,daten,id  FROM formulaire_enseignant  WHERE destinataire='$mail' ";
                try {
                  $stmt = $dbh->query($sql);
                  $result = $stmt->setFetchMode(PDO::FETCH_NUM);
                  while ($row = $stmt->fetch()) {  
                    print "<tr><td>".$row[4]."</td><td>" . $row[1]."</td><td> " .$row[2] . "</td><td><span class='v'>".$row[4] . "</span></td><td><a class='button' href='reclamation2.php'><span class='ss'>Repondre</span></a> <td><input type='checkbox' id='scales' name='option[]' value='$row[5]'></td></tr>" ;
                  }
                }             
                catch (PDOException $e) {
                  print $e->getMessage();
                }
                if(!empty($_POST['option'])) {
                foreach($_POST["option"] as $checkoptions){
                  $sql = "DELETE FROM formulaire_enseignant WHERE id=$checkoptions ";
                   $dbh->exec($sql);
                   
                 }
               } 
            }
            else 
            {
            header('Location:sign.php');
            }            
?>		
	</tbody>
  </br> <th><button class='delete' href='#'></button></th>   
</table>
                    <div class="col-md-4">
                    </div>
                    <div class="col-md-8">
                    
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
        
        </html>
        <?php
        ?>