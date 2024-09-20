<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418)
{
 include("start.php");
  

$id_klient=$_POST['id'];

$qwery = "delete from klient where (id_klient='$id_klient')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
mysql_close($link);
}
?>