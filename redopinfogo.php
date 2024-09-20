<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{

 $id_zakaz=$_GET['id_zakaz'];
 $info=$_GET['info'];

include("start.php");
$query = "update zakaz set info='$info' where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

   
  	if($result){HEADER("Location: zakaz.php");}
	else echo"Произошла ошибка";
                    
    mysql_close($link);
}
?> 
