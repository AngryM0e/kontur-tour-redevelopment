<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{

$id_zakaz=$_POST['id_zakaz'];
$stoim=$_POST['stoim'];

if ($stoim<>0)
{
include("start.php");
$query = "update zakaz set stoim='$stoim',stoimreal='1' where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

}   
  	if($result){HEADER("Location: zakaz.php");}
	else echo"Произошла ошибка";
                    
    mysql_close($link);
}
?> 
