<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
 include("start.php");

  
$id_klient=$_GET['id_klient'];

$qwer3 = "SELECT firm FROM klient where (id_klient='$id_klient')";
$result3 = mysql_query($qwer3) or die("Query failed : " . mysql_error());
$line3 = mysql_fetch_array($result3, MYSQL_ASSOC);
$firm=$line3[firm];

echo $viborka=$_GET['viborka'];
if(!empty($viborka))
	{
	foreach($viborka as $qw => $key)
	echo $viborka[$qw].',';
	}
$qwer.'здесь';
$id_zakaz=$_GET['id_zakaz'];

$qwer = "SELECT id_tur FROM zakaz where (id_zakaz='$id_zakaz')";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$id_tur=$line[id_tur];


$qwer2 = "SELECT B.city,B.name as name1,C.name as name2,A.data1, A.data2, Q.stoim, D.kolvo, Q.info, Q.mesto, Q.transfer, Q.payment, Q.id_avtobus FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and (Q.id_zakaz='$id_zakaz')
and (Q.id_tur=A.id_tur))";
$result2 = mysql_query($qwer2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

$city=$line2[city];
$otel=$line2[name1];
$komnata=$line2[name2];
$data1=$line2[data1];
$data2=$line2[data2];
$stoim=$line2[stoim];
$info=$line2[info];
$mesto=$line2[mesto];
$id_avtobus=$line2[id_avtobus];
$transfer=$line2[transfer];
$payment=$line2[payment];

//добавление к купленным
 $qwery = "INSERT INTO bron VALUES ('$id_zakaz' , '$id_klient', '$id_tur', '$city', '$otel', '$komnata', '$mesto','$id_avtobus', '$data1', '$data2', '$stoim', '$info', '$transfer','$payment')";
 $result = mysql_query($qwery) or die("Query failed : " . mysql_error());

//удаление из заказов
 $qwery = "delete from zakaz where (id_zakaz='$id_zakaz')";
 $result = mysql_query($qwery) or die("Query failed : " . mysql_error());
}

Header("Location: zakaz.php");
mysql_close($link);
?>    			

