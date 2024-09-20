<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{

$id_zakaz=$_POST['id_zakazpay'];
$payment=$_POST['addpay'];
$addedpay=$_POST['addedpay'];

if ($addedpay<>NULL)
{
include("start.php");
$newpay = $payment + $addedpay;
$query = "update zakaz set payment='$newpay' where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());
  mysql_close($link);
}   
  	if($result){HEADER("Location: zakaz.php");}
	else echo"Вы оставили поле не заполненным!";
                    
  
}
?> 
