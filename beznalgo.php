<?
if($_COOKIE['login']<>0)
{
 include("start.php");
   
$id_zakaz=$_GET['id_zakaz'];

$query = "insert into beznal values('$id_zakaz','1')";
$result = mysql_query($query) or  die("Query failed : " . mysql_error());

if ($result)  Header("Location: beznal.php");  
else 	echo "Произошла ошибка!";
mysql_close($link);
}
?>    			
