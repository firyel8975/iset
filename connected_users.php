<style>
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
</style>
<?php
include_once('connect.inc.php');
session_start();
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
 echo " <a class='buttonn'></a>" . $row[0]; 
}
?>