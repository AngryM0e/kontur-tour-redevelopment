<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418)
{
 include("start.php");
  

$id_klient=$_GET['id_klient'];

$qwery = "delete from klient2 where (id_klient='$id_klient')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
mysql_close($link);
}
Header("Location: klient2.php");
?>    			
