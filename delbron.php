<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418)
{
 include("start.php");
 
 $id_zakaz=$_GET['id_zakaz'];

// $qwer = "SELECT id_tur, id_avtobus, mesto FROM bron where (id_zakaz='$id_zakaz')";
// $result = mysql_query($qwer) or die("Query failed : " . mysql_error());
// $line = mysql_fetch_array($result, MYSQL_ASSOC);
// $id_avtobus=$line[id_avtobus];
// $mesto=$line[mesto];


$qwer2 = "SELECT * FROM bron WHERE id_zakaz='$id_zakaz'";
$result2 = mysql_query($qwer2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

$id_klient=$line2[id_klient];
$id_tur=$line2[id_tur];
$city=$line2[city];
$otel=$line2[otel];
$komnata=$line2[komnata];
$mesto=$line2[mesto];
$mesto_del=$line2[mesto];
$id_avtobus=$line2[id_avtobus];
$data1=$line2[data1];
$data2=$line2[data2];
$stoim=$line2[stoim];
$info=$line2[info];
$payment=$line2[payment];


$query2 = "SELECT kolvo FROM kolvo WHERE id_tur='$id_tur'"; 
$result2 = mysql_query($query2) or die("Ошибка: " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$kolvo=$line2[kolvo];

$newkolvo=$kolvo+1;
$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
$result = mysql_query($query) or die("Произошла ошибка, повторите попытку.");


if($mesto<>'без мест')
{
include("id_avtobus.php");	
do
{
$str=strtok($mesto,", ");

	
	if ((($id_avtobus>=300) && ($id_avtobus<500)) || ($id_avtobus>=1300) && ($id_avtobus<1600) || ($id_avtobus>=1700) && ($id_avtobus<1800))
		{
		$mmm=substr($str,-8);
 		if($mmm=='ЛС-О_2эт') $mmm='LSO2';
		if($mmm=='ЛС-П_2эт') $mmm='LSP2';
		if($mmm=='ПС-П_2эт') $mmm='PSP2';
		if($mmm=='ПС-О_2эт') $mmm='PSO2';
		
		if($mmm=='ЛС-О_1эт') $mmm='LSO';
		if($mmm=='ЛС-П_1эт') $mmm='LSP';
		if($mmm=='ПС-П_1эт') $mmm='PSP';
		if($mmm=='ПС-О_1эт') $mmm='PSO';
		if($mmm=='13рядЦ') $mmm='P';
		}
	else 
		{
		$mmm=substr($str,-4);
		if($mmm=='ЛС-О') $mmm='LSO';
		if($mmm=='ЛС-П') $mmm='LSP';
		if($mmm=='ПС-П') $mmm='PSP';
		if($mmm=='ПС-О') $mmm='PSO';
		if($mmm=='рядЦ') $mmm='P';
		}

$ryad=strtok($str,'р');
$qw='m'.$ryad.$mmm;
$query = "update $nameavtobus set $qw=0 where id_avtobus='$id_avtobus'";
$result = mysql_query($query) or die("Query failed1 : " . mysql_error());
$mesto=str_replace($str.", ","",$mesto);
}
while($mesto<>'');
}

// добавление в таблицу удаленых
$qwery = "INSERT INTO del VALUES ('$id_zakaz' , '$id_klient', '$id_tur', '$city', '$otel', '$komnata', '$mesto_del','$id_avtobus', '$data1', '$data2', '$stoim', '$info','покупка','$payment')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
 
 
$qwery = "delete from bron where (id_zakaz='$id_zakaz')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());


}
Header("Location: zakazbron.php");
?>    			

