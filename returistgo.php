<?
if($_COOKIE['login']<>0)
{

 $id_zakaz=$_GET['id_zakaz'];
 $fio=$_GET['fio'];
 $birth=$_GET['birth'];
 $pass=$_GET['pass'];
 $phone=$_GET['phone'];
 $id_turist=$_GET['id_turist'];
 $perenapr=$_GET['perenapr'];

include("start.php");
$query = "update turist set fio='$fio',birth='$birth',pass='$pass',phone='$phone' where id_turist='$id_turist'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

if($perenapr=='bronzakaz')
{
	if($result){HEADER("Location: bronzakaz.php");}
	else echo"Произошла ошибка";

}
if($perenapr=='zakaz')
{
	if($result){HEADER("Location: zakaz.php");}
	else echo"Произошла ошибка";

}
if ($perenapr=='zakazbron')
{		
	if($result){HEADER("Location: zakazbron.php");}
	else echo"Произошла ошибка";
}
                    
    mysql_close($link);
}
?> 
