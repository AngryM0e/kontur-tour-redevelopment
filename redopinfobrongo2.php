<?
if($_COOKIE['login']<>0)
{

 $id_zakaz=$_GET['id_zakaz'];
 $info=$_GET['info'];


include("start.php");
$query = "update zakaz set info='$info' where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

	if($result){HEADER("Location: bronzakaz.php");}
	else echo"Произошла ошибка";
              
    mysql_close($link);
}
?> 
