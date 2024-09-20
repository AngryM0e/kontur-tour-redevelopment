<?
if($_COOKIE['login']<>0)
{
 include("start.php");
  		

$id_zakaz=$_GET['id_zakaz'];
$qwer = "SELECT id_tur, id_avtobus, mesto FROM zakaz where (id_zakaz='$id_zakaz')";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$id_tur=$line[id_tur];
$id_avtobus=$line[id_avtobus];
$mesto=$line[mesto];

$query2 = "SELECT kolvo FROM kolvo WHERE id_tur='$id_tur'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$kolvo=$line2[kolvo];

$newkolvo=$kolvo+1;
$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
$result = mysql_query($query) or die("Произошла ошибка, повторите попытку.");


if($mesto<>'без мест')
{
	include ("id_avtobus.php");
do
{
$str=strtok($mesto,",");
$qw='m'.$str;
$query = "update $nameavtobus set $qw=0 where id_avtobus='$id_avtobus'";
$result = mysql_query($query) or die("Query failed1 : " . mysql_error());
$mesto=str_replace($str.",","",$mesto);
}
while($mesto<>'');
}

$qwery1 = "delete from turist where (id_zakaz='$id_zakaz')";
$result1 = mysql_query($qwery1) or die("Query failed : " . mysql_error());


$qwery = "delete from zakaz where (id_zakaz='$id_zakaz')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
mysql_close($link);
}
Header("Location: bronzakaz.php");
?>    			

