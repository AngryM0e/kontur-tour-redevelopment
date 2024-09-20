<? 
if($_COOKIE['login']<>0)
{
 include("start.php");

$id_avtobus=$_GET['id_avtobus'];
$dop_mesto_vzrosl=$_GET['dop_mesto_vzrosl'];  
$dop_mesto_rebenok=$_GET['dop_mesto_rebenok'];  
$bez_mesta=$_GET['bez_mesta'];  		
$id_tur=$_GET['id_tur'];
$kolvo=$_GET['kolvo'];  
$kol=$_GET['kol'];
$stoim=$_GET['stoim'];
$id_klient=$_COOKIE['login'];

$qwer = "select skidka from klient where id_klient='$id_klient'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line=mysql_fetch_array($result, MYSQL_ASSOC);
$skidka=$line['skidka'];

$qwer = "select A.id_otel, C.name from komnata as C, tur as A where ((A.id_tur='$id_tur') and (A.id_komnata=C.id_komnata))";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line=mysql_fetch_array($result, MYSQL_ASSOC);
$mest=$line['name'];
$ellada=$line['id_otel'];
$k=substr($mest,0,1);

/*if($ellada==17) $stoim=$stoim-(($stoim*$skidka)/100)+200*$k;
else */

$stoim=$stoim-(($stoim*$skidka)/100)+150*$k;

$info='';
if($dop_mesto_vzrosl<>NULL) $info='Доп. взрослый. ';
if($dop_mesto_rebenok<>NULL) $info=$info.'Доп. ребенок. ';
if($bez_mesta<>NULL) $info=$info.'Ребенок без места в отеле. ';
$info=$info.$_GET['info'];

$query = "select kolvo from kolvo where id_tur='$id_tur'";
$result = mysql_query($query)or die("Query failed4 : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$qw=$line['kolvo'];
if($qw<=0) {$oshibka=1;echo"Просим прощения, но свободных номеров в отеле, который вы выбрали уже нет. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}

if  ($oshibka==0)
	{
	$data=date("Y-m-d");
	$qwer = "insert into zakaz values('','$id_tur','$id_klient','$info','','без мест','$id_avtobus','$data','$stoim','0','0')";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
	

	// and (info='$info')
	$qwer = "select id_zakaz from zakaz where 
	((id_tur='$id_tur') and (id_klient='$id_klient') and (mesto='без мест')and (id_avtobus='$id_avtobus') and (data='$data') and (stoim='$stoim'))";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$id_zakaz=$line['id_zakaz'];
	
	if($id_zakaz == "" || $id_zakaz == 0){
	 	 $qwer111 = "Select id_zakaz from zakaz WHERE id_tur='$id_tur' and id_klient='$id_klient' ORDER BY id_zakaz DESC LIMIT 0,1";
		 $result111 = mysql_query($qwer111) or die("Query failed3 : " . mysql_error());
		 $line111 = mysql_fetch_array($result111, MYSQL_ASSOC);
		 $id_zakaz=$line111['id_zakaz'];
	 }

	while($kol>0)
	 {
	$a='fio'.$kol;
		$fio=$_GET[$a]; 
	$b='birth'.$kol;
		$birth=$_GET[$b];
	$c='pass'.$kol;
		$pass=$_GET[$c]; 

	 $qwer = "insert into turist values('','$id_zakaz','$fio','$birth','$pass','')";
	 $result = mysql_query($qwer) or die("Query failed4 : " . mysql_error());
	 $kol-=1;
	 }

	$newkolvo=$kolvo-1;

	$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
	$result = mysql_query($query) or die("Произошла ошибка, повторите попытку.");
	
	if($info != '') {
		$qwerrr = "insert into `notes` values ('','$id_zakaz','$id_klient','1','natakontur2016@yandex.ru','$info','".date('Y-m-d H:i:s')."')";
		$result = mysql_query($qwerrr) or die("Query failed : " . mysql_error());
	}
	
	if($result)  Header("Location: bronzakaz.php");  
	else 	echo "Произошла ошибка!";
	mysql_close($link);  
	}
}
?>    			

