<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418)
{
 include("start.php");
 

$id_zakaz=$_GET['id_zakaz'];

// $qwer = "SELECT id_tur, id_avtobus, mesto FROM zakaz where (id_zakaz='$id_zakaz')";
// $result = mysql_query($qwer) or die("Query failed : " . mysql_error());
// $line = mysql_fetch_array($result, MYSQL_ASSOC);

// $id_avtobus=$line[id_avtobus];
// $mesto=$line[mesto];
// $mesto_del=$line[mesto];
// $id_tur=$line[id_tur];


$qwer2 = "SELECT B.city,B.name as name1,C.name as name2,A.data1, A.data2, Q.stoim, D.kolvo, Q.info, Q.mesto,Q.id_avtobus,Q.payment,Q.id_tur FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q 
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
$mesto_del=$line2[mesto];
$id_avtobus=$line2[id_avtobus];
$id_tur=$line2[id_tur];
$id_klient=$_GET['id_klient'];
$payment=$line2[payment];

$query2 = "SELECT kolvo FROM kolvo WHERE id_tur='$id_tur'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$kolvo=$line2[kolvo];

$newkolvo=$kolvo+1;
$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
$result = mysql_query($query) or die("��������� ������, ��������� �������.");



if($mesto<>'��� ����')
{
include("id_avtobus.php");// ����������� �������� ��������
do
{
$str=strtok($mesto,", ");

	
	if ((($id_avtobus>=300) && ($id_avtobus<500)) || ($id_avtobus>=1300) && ($id_avtobus<1600) || ($id_avtobus>=1700) && ($id_avtobus<1800))
		{
		$mmm=substr($str,-8);
 		if($mmm=='��-�_2��') $mmm='LSO2';
		if($mmm=='��-�_2��') $mmm='LSP2';
		if($mmm=='��-�_2��') $mmm='PSP2';
		if($mmm=='��-�_2��') $mmm='PSO2';
		
		if($mmm=='��-�_1��') $mmm='LSO';
		if($mmm=='��-�_1��') $mmm='LSP';
		if($mmm=='��-�_1��') $mmm='PSP';
		if($mmm=='��-�_1��') $mmm='PSO';
		if($mmm=='13����') $mmm='P';
		}
	else 
		{
		$mmm=substr($str,-4);
		if($mmm=='��-�') $mmm='LSO';
		if($mmm=='��-�') $mmm='LSP';
		if($mmm=='��-�') $mmm='PSP';
		if($mmm=='��-�') $mmm='PSO';
		if($mmm=='����') $mmm='P';
		}

$ryad=strtok($str,'�');

$qw='m'.$ryad.$mmm;
$query = "update $nameavtobus set $qw=0 where id_avtobus='$id_avtobus'";
$result = mysql_query($query) or die("Query failed1 : " . mysql_error());
$mesto=str_replace($str.", ","",$mesto);
}
while($mesto<>'');
}

 
 // ���������� � ������� ��������
$qwery = "INSERT INTO del VALUES ('$id_zakaz' , '$id_klient', '$id_tur', '$city', '$otel', '$komnata', '$mesto_del','$id_avtobus', '$data1', '$data2', '$stoim', '$info','�����','$payment')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
 
$qwery = "delete from zakaz where (id_zakaz='$id_zakaz')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
mysql_close($link);

}
Header("Location: zakaz.php");
?>    			

