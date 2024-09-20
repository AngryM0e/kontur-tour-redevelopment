<?
if($_COOKIE['login']<>0)
{

 include("start.php");
 $data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);
$dop_mesto_vzrosl=$_GET['dop_mesto_vzrosl'];  
$dop_mesto_rebenok=$_GET['dop_mesto_rebenok'];  
$bez_mesta=$_GET['bez_mesta'];  
$id_tur=$_GET['id_tur'];
$kolvo=$_GET['kolvo'];  
$transfer=$_GET['transfer'];

$info='';
if($dop_mesto_vzrosl<>NULL) $info='Доп. взрослый. ';
if($dop_mesto_rebenok<>NULL) $info=$info.'Доп. ребенок. ';
if($bez_mesta<>NULL) $info=$info.'Ребенок без места в отеле. ';


$id_klient=$_COOKIE['login'];
$kol=$_GET['kol'];
$stoim=$_GET['stoim'];
$id_avtobus=$_GET['id_avtobus'];

/*считывание занятых мест*/
$oshibka=0;
include("id_avtobus.php");
$mesto_array=array();

if($id_avtobus<'300' || ($id_avtobus>='500' && $id_avtobus<'1300') || ($id_avtobus>='1600' && $id_avtobus<'1700'))
{
 for($Q=1;$Q<=16;$Q++)
 {
$i=1;
	while($i<=4)
	{
	if($i==1)
		{
		$qw='m'.$Q.'LSO';
		$qw1=$_GET[$qw];
		}
	if($i==2)
		{
		$qw='m'.$Q.'LSP';
		$qw1=$_GET[$qw];
		}
	if($i==3)
		{
		$qw='m'.$Q.'PSP';
		$qw1=$_GET[$qw];
		}
	if($i==4)
		{
		$qw='m'.$Q.'PSO';
		$qw1=$_GET[$qw];
		}

 	if($qw1==1)
 		{
		$mmm=substr($qw,-3);
 		if($mmm=='LSO') $mmm='ЛС-О';
		if($mmm=='LSP') $mmm='ЛС-П';
		if($mmm=='PSO') $mmm='ПС-О';
		if($mmm=='PSP') $mmm='ПС-П';
		$m=substr($qw,1,-3);
		$mesto.=$m.'ряд'.$mmm.', ';
              
		$proverka_mesto= $m.'ряд'.$mmm;
 		$proverka = "Select $qw from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[$qw]==1) {$oshibka=1; echo"Просим прощения, но место $proverka_mesto, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {	
					$mesto_array[]=$qw;
				}
		}
	$i+=1;
	}
 }
}
	$m13P=$_GET['m13P'];
	if($m13P==1)
		{
		$mesto.='13рядЦ'.', ';
        $proverka = "Select m13P from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed1 : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[m13P]==1) {$oshibka=1; echo"Просим прощения, но место 13рядЦ, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {
				$qw='m13P';
				$mesto_array[]=$qw;
 				}
		}
		// для нового 49
		$m12P=$_GET['m12P'];
	if($m12P==1)
		{
		$mesto.='12рядЦ'.', ';
        $proverka = "Select m12P from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed1 : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[m12P]==1) {$oshibka=1; echo"Просим прощения, но место 12рядЦ, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {
				$qw='m12P';
				$mesto_array[]=$qw;
 				}
		}
		
		// для нового 53
		$m14P=$_GET['m14P'];
	if($m14P==1)
		{
		$mesto.='14рядЦ'.', ';
        $proverka = "Select m14P from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed1 : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[m14P]==1) {$oshibka=1; echo"Просим прощения, но место 14рядЦ, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {
				$qw='m14P';
				$mesto_array[]=$qw;
 				}
		}

	// для нового 61
	$m16P=$_GET['m16P'];
	if($m16P==1)
	{
		$mesto.='16рядЦ'.', ';
		$proverka = "Select m16P from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed1 : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		if ($line[m16P]==1) {$oshibka=1; echo"Просим прощения, но место 16рядЦ, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
		else {
			$qw='m16P';
			$mesto_array[]=$qw;
		}
	}
		
// для автобуса 66 и 69
if((($id_avtobus>=300) && ($id_avtobus<500)) || ($id_avtobus>=1300) && ($id_avtobus<1600) || ($id_avtobus>=1700) && ($id_avtobus<1800))
{
 for($Q=1;$Q<=17;$Q++)
 {
$i=1;
	while($i<=4)
	{
	if($i==1)
		{
		$qw='m'.$Q.'LSO2';
		$qw1=$_GET[$qw];
		}
	if($i==2)
		{
		$qw='m'.$Q.'LSP2';
		$qw1=$_GET[$qw];
		}
	if($i==3)
		{
		$qw='m'.$Q.'PSP2';
		$qw1=$_GET[$qw];
		}
	if($i==4)
		{
		$qw='m'.$Q.'PSO2';
		$qw1=$_GET[$qw];
		}

 	if($qw1==1)
 		{
		$mmm=substr($qw,-4);
 		if($mmm=='LSO2') $mmm='ЛС-О_2эт';
		if($mmm=='LSP2') $mmm='ЛС-П_2эт';
		if($mmm=='PSO2') $mmm='ПС-О_2эт';
		if($mmm=='PSP2') $mmm='ПС-П_2эт';
		$m=substr($qw,1,-4);
		$mesto.=$m.'ряд'.$mmm.', ';
                
 		$proverka_mesto= $m.'ряд'.$mmm;
 		$proverka = "Select $qw from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed1 : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[$qw]==1) {$oshibka=1; echo"Просим прощения, но место $proverka_mesto, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {
				$mesto_array[]=$qw;
 				}
		}
	$i+=1;
	}
 }

for($Q=0;$Q<=6;$Q++)
 {
$i=1;
	while($i<=4)
	{
	if($i==1)
		{
		$qw='m'.$Q.'LSO';
		$qw1=$_GET[$qw];
		}
	if($i==2)
		{
		$qw='m'.$Q.'LSP';
		$qw1=$_GET[$qw];
		}
	if($i==3)
		{
		$qw='m'.$Q.'PSP';
		$qw1=$_GET[$qw];
		}
	if($i==4)
		{
		$qw='m'.$Q.'PSO';
		$qw1=$_GET[$qw];
		}

 	if($qw1==1)
 		{
		$mmm=substr($qw,-3);
 		if($mmm=='LSO') $mmm='ЛС-О_1эт';
		if($mmm=='LSP') $mmm='ЛС-П_1эт';
		if($mmm=='PSO') $mmm='ПС-О_1эт';
		if($mmm=='PSP') $mmm='ПС-П_1эт';
		$m=substr($qw,1,-3);
		$mesto.=$m.'ряд'.$mmm.', ';
                
 		
		$proverka_mesto= $m.'ряд'.$mmm;
 		$proverka = "Select $qw from $nameavtobus where id_avtobus='$id_avtobus'";
		$result = mysql_query($proverka) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
			if ($line[$qw]==1) {$oshibka=1; echo"Просим прощения, но место $proverka_mesto, которое вы выбрали уже занято. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}
			else {
				$mesto_array[]=$qw;
 				}
		}
	$i+=1;
	}
 }

}

$query = "select kolvo from kolvo where id_tur='$id_tur'";
$result = mysql_query($query)or die("Query failed4 : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$qw=$line['kolvo'];
if($qw<=0) {$oshibka=1;echo"Просим прощения, но свободных номеров в отеле, который вы выбрали уже нет. Пожалуйста, <a href='bronzakaz.php'>перепроверьте данные.</a>";}

if  ($oshibka==0)
{
	foreach( $mesto_array as $key => $value)
		{
		$query = "update $nameavtobus set $value=1 where id_avtobus='$id_avtobus'";
 		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		}
	
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
	
	if($ellada==17) $skidka_na_rebenka=300;
	else $skidka_na_rebenka=200;
	
	$t=0;
	$kol2=$kol;	
	while($kol2>0)
	{
		 $child='child'.$kol2;
		 if($_GET[$child]==1){$stoim-=$skidka_na_rebenka;$t+=1;}
		 $kol2-=1;
	}
	
	/*if($ellada==17) $stoim=$stoim-(($stoim*$skidka)/100)+200*$k-50*$t;
	else */
	$stoim=$stoim-(($stoim*$skidka)/100)+150*$k;
	

	if ($t<>0) $info=$info.'Ребенок на осн.место ('.$t.' шт.) ';
	$info=$info.$_GET['info'];
	
	$data=date("Y-m-d");
	$qwer = "insert into zakaz values('','$id_tur','$id_klient','$info','$transfer','$mesto','$id_avtobus','$data','$stoim','0','0')";
	$result = mysql_query($qwer) or die("Query failed2 : " . mysql_error());

	// and (info='$info')
	 $qwer = "Select id_zakaz from zakaz where ((id_tur='$id_tur') and (id_klient='$id_klient') and (transfer='$transfer') and (mesto='$mesto') and  (id_avtobus='$id_avtobus') and (data='$data') and (stoim='$stoim'))";
	 $result = mysql_query($qwer) or die("Query failed3 : " . mysql_error());
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
	$d='phone'.$kol;
		$phone=$_GET[$d];

	$qwer = "insert into turist values('','$id_zakaz','$fio','$birth','$pass','$phone')";
	$result = mysql_query($qwer) or die("Query failed4 : " . mysql_error());
	$kol-=1;
	}

	$newkolvo=$kolvo-1;
	$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
	$result = mysql_query($query)or die("Query failed4 : " . mysql_error());
	
	if($info != '') {
		$qwerrr = "insert into `notes` values ('','$id_zakaz','$id_klient','1','natakontur2016@yandex.ru','$info','".date('Y-m-d H:i:s')."')";
		$result = mysql_query($qwerrr) or die("Query failed : " . mysql_error());
	}
}
 if($data_user['is_turist'] == 1){
if($oshibka<>1)  {
?>
<script>
alert("Ожидайте подтверждение на электронную почту от администратора с окончательной стоимостью тура и реквизитами для оплаты");
window.location.href='bronzakaz.php';
</script>
<?}}
else{
Header("Location: bronzakaz.php");
}
  
mysql_close($link);
}
?>