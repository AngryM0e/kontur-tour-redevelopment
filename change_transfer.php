<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
 include("start.php");
mysql_query('set names utf8');
/*$id_otel=$_POST['id_otel'];
$id_tur=$_POST['id_tur'];
$id_komnata=$_POST['id_komnata'];
$id_klient=$_POST['id_klient'];*/
$transfer=$_POST["transfer"];
$id_zakaz=$_POST["id_zakaz"];
    $query = "Update zakaz set transfer='$transfer' where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or  die("Query failed : " . mysql_error());


}
?>