
<?php
session_start();
include_once('connect.inc.php');
if(isset($_SESSION["name"])&& $_SESSION["rol"]==='enseignant'){

?>
<html>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<meta charset="UTF-8">
<link rel="stylesheet" href="change.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="changer.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet">
<style>
.dropbtn {
  background-color: orange;
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
.t{color:white;}
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
.button{
    background: transparent;
    color: #fff;
    font-size: 18px;
}

.button:hover{
    background: orange;
    color: #000;
}
 span{color:red;} a{color:#0000FF;}
.p {
color:orange;
}
tr{ color:white}
tr:hover {background-color: #ddd;}
.pos{}
.n{background-color:orange;}
.pos{}
span{color:red;}
body{
    background-color:#1c1c1e;
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
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
.b{
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
</style>
<div  style="background-color:#0f0f0f;" class="container emp-profile">
            <form method="post">
                <div style="background-color:#0f0f0f;"  class="row">
                    <div  style="background-color:#0f0f0f;" class="col-md-4">  
                    </div>
                    <div style="background-color:#0f0f0f;"  class="col-md-6">
                        <div style="background-color:#0f0f0f;"  class="profile-head">
                        </br></br></br></br>
                        <form class="form" method="post">
                <table border="1 solid"><tr><td class="p">Prof</td><td class="p">Email</td><td class="p">numéro de téléphone</td></tr>
                <?php
                  $sql = "SELECT pseudo, mail ,num FROM membres WHERE rol='technicien'";
                
                    $stmt = $dbh->query($sql);
                    $result = $stmt->setFetchMode(PDO::FETCH_NUM);
                    while ($row = $stmt->fetch()) {
                      print "<tr> <td>  ".$row[0] . "\t</td>" ."<td> ". $row[1] . "\t</td><td> ". @$row[2] ."\t</td></tr>" ;
                    }
                    echo "</table>";
                  ?>
                 </form>
                 <a class='button' href='reclamation.php'>envoyer une réclamation</a>
    <main>
               <div>
        </div>
                        </div>
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
                <div class="row">
                    <div class="col-md-4">         
                    </div>
                    </div>
                </div>
            </form>           
        </div>
        </html>
        <?php
}
else 
{

header('Location:sign.php');
}
        ?>