<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b><p align="center">
<font size="5">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@rambler.ru
</font>
</font>

</td>
</tr>
<?
function sovet1_1($F,$m1,$m2,$m3,$m4,$m5,$m6)
{
// сажаем одного 
	if($F==1)
		{
			if(($m1==0) &&($m2==1))
				{
				$vid='#CAFF70';
				return $vid;
				}
		}

// сажаем двоих
	if($F==2)
		{
		if(($m1==0) &&($m2==0))
			{
				if((($m3==1)&&($m4==0)) || (($m4==1)&&($m3==0)) || (($m5==1)&&($m6==0)) || (($m6==1)&&($m5==0))) $vid='#FFFFFF';
				else $vid='#CAFF70';
			
		
			}
		return $vid;
		}
//сажаем троих
	if($F==3)
		{
		if(($m1==0) &&($m2==0))
			{
				if((($m3==1)&&($m4==0)) || (($m4==1)&&($m3==0)) || (($m5==1)&&($m6==0)) || (($m6==1)&&($m5==0))) $vid='#CAFF70';
				else $vid='#FFFFFF';
			}
		if(($m1==0) &&($m2==1))
			{
				if((($m3==0)&&($m4==0)) || (($m6==0)&&($m5==0))) $vid='#CAFF70';
				else $vid='#FFFFFF';
			}
		return $vid;
		}

}

function sovet1_2($F,$m1,$m2,$m3,$m4,$m5,$m6)
{
	if($F==1)
		{
			if(($m1==1) &&($m2==0))
				{
				$vid='#CAFF70';
				return $vid;
				}
		}
	
	if($F==2)
		{
		if(($m1==0) &&($m2==0))
			{
				if((($m3==1)&&($m4==0)) || (($m4==1)&&($m3==0)) || (($m5==1)&&($m6==0)) || (($m6==1)&&($m5==0))) $vid='#FFFFFF';
				else $vid='#CAFF70';
			
		
			}
		return $vid;
		}
		
	//сажаем троих
	if($F==3)
		{
		if(($m1==0) &&($m2==0))
			{
				if((($m3==1)&&($m4==0)) || (($m4==1)&&($m3==0)) || (($m5==1)&&($m6==0)) || (($m6==1)&&($m5==0))) $vid='#CAFF70';
				else $vid='#FFFFFF';
			}
		if(($m1==1) &&($m2==0))
			{
				if((($m3==0)&&($m4==0)) || (($m6==0)&&($m5==0))) $vid='#CAFF70';
				else $vid='#FFFFFF';
			}
		return $vid;
		}
		
}
function sovet3($F,$m1,$m2,$m3,$m4,$m5)
{
	if($F==1)
		{
			if( $m1==0 && (	((($m2==0 && $m3==0) || ($m2==1 && $m3==1)) && 
					(($m4==0 && $m5==0) || ($m4==1 && $m5==1))) || ($m2==1 && $m4==1)))
				{
				$vid='#CAFF70';
				return $vid;
				}
		}
}

 
function posadka($perem1, $perem2, $value_perem2, $perem3, $id_avtobus)
{   
$qwer=substr($perem2,-2);
	if (($qwer=='SO') || ($qwer=='O2')) $q='О';
		else 
		{
		if (($qwer=='SP') || ($qwer=='P2')) $q='П';
			else $q='Ц';
		}
	echo"<td align='center'  width='20%' height='60' BGCOLOR=$perem3>$perem1 ряд $q<br>";
	if($value_perem2<>1)
		{ 
		echo"<input type='checkbox' name=$perem2 value='1'>";
		}
	else 
		{
		echo"<IMG SRC='images/s.jpg' BORDER='0' ALT='Занято'>";
		}
	echo"</td>";
}

if($_COOKIE['login']<>0)
{	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235)
	{
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'><b>Выход</b></a>
    </td></tr>";
	}
	
	else
	{
	echo"<tr><td>
	<p align='right'>
	<a href='bron.php' style='text-decoration: none'><b>Главная</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='login.php' style='text-decoration: none'><b>Личная информация</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'><b>Выход</b></a><p></p></p>
    </td></tr>";
	}

 echo "  <tr>
      <td >";

echo"<p align=left><span lang='ru'><font size='4'><b><a style='margin-right:20px' href=podbortur.php>Назад</a></b></font></p>";
echo"<h5 align='center'>ОПЕРАТОР ИМЕЕТ ПРАВО ВНОСИТЬ ИЗМЕНЕНИЕ В РАССАДКУ ТУРИСТОВ И КОРРЕКТИРОВАТЬ МЕСТА В АВТОБУСЕ (В СЛУЧАЕ НЕКОРРЕКТНОЙ ПОСАДКИ ТУРИСТОВ И В СЛУЧАЕ ЗАМЕНЫ АВТОБУСА)!
<br><br>
<font size='4'>Внимание! За столик допускается сажать только 4 человека!!!</font> </h5>";
 
include("start.php");

$id_tur=$_GET['id_tur'];  
$kolvo=$_GET['kolvo'];
$otel=$_GET['otel'];
$stoim=$_GET['stoim'];
$komnata=$_GET['komnata'];
$city=$_GET['city'];

$query = "SELECT id_avtobus FROM tur WHERE id_tur='$id_tur'"; 
$result = mysql_query($query) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$id_avtobus=$line[id_avtobus];

//#################################################################### 2013 (69) #######################################################################################
//69
if(($id_avtobus>='400') && ($id_avtobus <'500'))
{
echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	
	<form><p class=obr>Обратите внимание!<br>
Голубым отмечены <b>неоткидывающиеся</b> места<br><br>
Первый ряд первого этажа едет спиной к водителю!<br><br>
<img src='images/avt69_1.jpg'><br>
<img src='images/avt69_2.jpg'></p></form></div>
	
	</td>";
	

$flag=$_GET['flag'];

$i=1;
while($i<=6)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];

	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];

	if (($i<>5)&&($i<>6))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];

		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
$i+=1;
}

$i=1;
while($i<=13)
{
	if($i<>12)
	{
		$Q1='m'.$i.'LSO2';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];

		$Q1='m'.$i.'LSP2';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	if($i<>2)
	{
		$Q1='m'.$i.'PSP2';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];

		$Q1='m'.$i.'PSO2';
		$qwer = "SELECT $Q1 FROM avtobus69 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
$i+=1;
}
//для 13 ряда
$qwer = "SELECT m13P FROM avtobus69 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

echo"<td ROWSPAN='2'>
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
    <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>ЛЕВАЯ СТОРОНА - 1 этаж - ПРАВАЯ СТОРОНА</td>
		</tr>";
for($q=1; $q<=6 ; $q++)
{
	$Q1='m'.$q.'LSO';
	$Q2='m'.$q.'LSP';
	$Q3='m'.$q.'PSP';
	$Q4='m'.$q.'PSO';

	$m=$q-1;
	$Q1_1='m'.$m.'LSO';
	$Q2_1='m'.$m.'LSP';
	$Q3_1='m'.$m.'PSP';
	$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}
	$m=$q+1;
	$Q1_2='m'.$m.'LSO';
	$Q2_2='m'.$m.'LSP';
	$Q3_2='m'.$m.'PSP';
	$Q4_2='m'.$m.'PSO';

		// для последнего ряда
	if ($q==6)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==4)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}
$vid='#FFFFFF';

$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
	
if ($q==1) echo"<td rowspan='6' bgcolor='#CCCCCC'>&nbsp;</td>";
if (($q<>5)&&($q<>6))
		{
		$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

		$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
		}
if($q==5) echo"<td width=40% height=120 align=center bgcolor=#CCCCCC colspan=2 rowspan=2>Дверь</td>";
echo"</tr>";
}
	
echo"</table><p>
	
	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>ЛЕВАЯ СТОРОНА - 2 этаж - ПРАВАЯ СТОРОНА</td>
		</tr>";
$q=1;
$fl=0;
while($q<=13)
{
	$Q1='m'.$q.'LSO2';
	$Q2='m'.$q.'LSP2';
	$Q3='m'.$q.'PSP2';
	$Q4='m'.$q.'PSO2';
	$m=$q-1;
	$Q1_1='m'.$m.'LSO2';
	$Q2_1='m'.$m.'LSP2';
	$Q3_1='m'.$m.'PSP2';
	$Q4_1='m'.$m.'PSO2';
		// для первого ряда
		if ($q==1)
			{
			$$Q1_1='1';
			$$Q2_1='1';
			$$Q3_1='1';
			$$Q4_1='1';
			}
		if ($q==3)
			{
			$$Q3_1='1';
			$$Q4_1='1';
			}
	$m=$q+1;
	$Q1_2='m'.$m.'LSO2';
	$Q2_2='m'.$m.'LSP2';
	$Q3_2='m'.$m.'PSP2';
	$Q4_2='m'.$m.'PSO2';
		// для последнего ряда
		if ($q==13)
			{
			$$Q1_2='1';
			$$Q2_2='1';
			$$Q3_2='1';
			$$Q4_2='1';
			}
		if ($q==1)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if ($q<>12) 
	{
	if(($q==8)&&($fl==0)) echo"<tr><td width=40% height=60 align=center bgcolor=#CCCCCC colspan=2>&nbsp;</td>";
	else 
		{
			if($q==11)
			{
			$Q1_2='m13LSO2';
			$Q2_2='m13LSP2';
			}
			
			if($q==13)
			{
			$Q1_1='m11LSO2';
			$Q2_1='m11LSP2';
			}
			
			$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		}
	}
if ($q==12) echo"<tr><td width=40% height=60 align=center bgcolor=#CCCCCC colspan=2>&nbsp;</td>";
if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
if ($q==13)
	{
	$vid=sovet3($flag,$m13P,$m13LSP2,$m13LSO2,$m13PSP2,$m13PSO2);
	posadka($q,'m13P',$m13P,$vid,$id_avtobus);
	}
if ($q==2) echo"<td width=40% height=60 align=center bgcolor=#CCCCCC colspan=2>Дверь</td></tr>";
if($q<>2)
	{
	if(($q==8)&&($fl==0)) {echo"<td width=40% height=60 align=center bgcolor=#CCCCCC colspan=2>Дверь</td></tr>";$q-=1;
	$fl=1;}	
	else
		{
		$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

		$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
		echo"</tr>";
		}
	}
$q+=1;
}
	
echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

} 

//#################################################################### //2013 (69) #######################################################################################


//66
if(($id_avtobus>='300') && ($id_avtobus <'400'))
{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	</td>";
	

$flag=$_GET['flag'];

$i=1;
while($i<=3)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$i+=1;
}

$i=1;
while($i<=14)
{
$Q1='m'.$i.'LSO2';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP2';
$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

	if($i<>10)
	{
	$Q1='m'.$i.'PSP2';
	$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];

	$Q1='m'.$i.'PSO2';
	$qwer = "SELECT $Q1 FROM avtobus66 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	}
$i+=1;
}

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
		</tr>";
for($q=1; $q<=3 ; $q++)
{
	$Q1='m'.$q.'LSO';
	$Q2='m'.$q.'LSP';
	$Q3='m'.$q.'PSP';
	$Q4='m'.$q.'PSO';

	$m=$q-1;
	$Q1_1='m'.$m.'LSO';
	$Q2_1='m'.$m.'LSP';
	$Q3_1='m'.$m.'PSP';
	$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}
	$m=$q+1;
	$Q1_2='m'.$m.'LSO';
	$Q2_2='m'.$m.'LSP';
	$Q3_2='m'.$m.'PSP';
	$Q4_2='m'.$m.'PSO';

		// для последнего ряда
		if ($q==3)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	

$vid='#FFFFFF';

$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
	
if ($q==1) echo"<td rowspan='3' bgcolor='#CCCCCC'>&nbsp;</td>";

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
}
	
echo"</table><p>

	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
		</tr>";
for($q=1; $q<=14 ; $q++)
{
$Q1='m'.$q.'LSO2';
$Q2='m'.$q.'LSP2';
$Q3='m'.$q.'PSP2';
$Q4='m'.$q.'PSO2';
$m=$q-1;
$Q1_1='m'.$m.'LSO2';
$Q2_1='m'.$m.'LSP2';
$Q3_1='m'.$m.'PSP2';
$Q4_1='m'.$m.'PSO2';
// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}
	if ($q==11)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}
$m=$q+1;
$Q1_2='m'.$m.'LSO2';
$Q2_2='m'.$m.'LSP2';
$Q3_2='m'.$m.'PSP2';
$Q4_2='m'.$m.'PSO2';
// для последнего ряда
	if ($q==14)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==9)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}
$vid='#FFFFFF';

$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";

if($q<>10)
{
$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
}
else echo "<td width='40%' height='60' colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
}
	
echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

}     

//#################################################################### 2013 (49 крым) #######################################################################################

//49
if($id_avtobus<'100') {
echo "	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<14)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

if(($i<>1)&&($i<>8))
{
$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];
}
$i+=1;
}

//для 13 ряда или 
$qwer = "SELECT m13P FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='13' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if ($q==8)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

 $m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==13)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	/*if ($q==5)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}*/

$vid='#FFFFFF';
if(($q<>1)&&($q<>8))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==13)
	{
	$vid=sovet3($flag,$m13P,$m13LSP,$m13LSO,$m13PSP,$m13PSO);
	posadka($q,'m13P',$m13P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
	if($q==1)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь№1</td>";
	}
	if($q==8)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь№2</td>";
	}
}


// Это новый 49.
/*while($i<13)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$i+=1;
}

//для 13 ряда или для 12 нового
$qwer = "SELECT m12P FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m12P=$line[m12P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='12' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Дверь №1<hr>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=12 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==12)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
	
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==12)
	{
	$vid=sovet3($flag,$m12P,$m12LSP,$m12LSO,$m12PSP,$m12PSO);
	posadka($q,'m12P',$m12P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
}*/ 
echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";
}   



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//#################################################################### 2015 (49 мерседес) #################################################################################

//49
if(($id_avtobus>='500') && ($id_avtobus <'600')) 
{
echo "	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<14)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus49m where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus49m where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	if(($i<>7)&&($i<>6))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus49m where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
		
		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus49m where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	$i+=1;
}

//для 13 ряда или 
$qwer = "SELECT m13P FROM avtobus49m where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='13' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if ($q==8)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

 $m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==13)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==5)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if(($q<>7)&&($q<>6))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==13)
	{
	$vid=sovet3($flag,$m13P,$m13LSP,$m13LSO,$m13PSP,$m13PSO);
	posadka($q,'m13P',$m13P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
if($q==6)
	{
$vid=sovet1_1($flag,$m6LSO,$m6LSP,$m5LSO,$m5LSP,$m7LSO,$m7LSP);
	echo"<tr>";
	posadka('6','m6LSO',$m6LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m6LSO,$m6LSP,$m5LSO,$m5LSP,$m7LSO,$m7LSP);
	posadka('6','m6LSP',$m6LSP,$vid,$id_avtobus);

	echo"
	</td>
	<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr><tr>";

$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	posadka('7','m7LSO',$m7LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);
	echo"</tr>";
	$q=7;
	}
}


// Это старый 49.
/*while($i<13)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$i+=1;
}

//для 13 ряда или для 12 нового
$qwer = "SELECT m12P FROM avtobus49 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m12P=$line[m12P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='12' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Дверь №1<hr>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=12 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==12)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
	
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==12)
	{
	$vid=sovet3($flag,$m12P,$m12LSP,$m12LSO,$m12PSP,$m12PSO);
	posadka($q,'m12P',$m12P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
}*/
echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";
} 



//#################################################################### 2015 (52) #################################################################################

if(($id_avtobus>='800') && ($id_avtobus <'900')) 
{
echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<15)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus52 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus52 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	if(($i<>2)&&($i<>8))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus52 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
		
		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus52 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	$i+=1;
}

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='15' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=14 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

	if ($q==3)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==14)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==7)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if(($q<>2)&&($q<>8))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
	if($q==2)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь №1</td></tr>";
	}
	if($q==8)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь №2</td></tr>";
	}
}

echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";
} 


//#################################################################### 2015 (53) #################################################################################

if(($id_avtobus>='600') && ($id_avtobus <'800')) 
{
echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<15)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus53 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus53 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	if(($i<>8)&&($i<>7))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus53 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
		
		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus53 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	$i+=1;
}

//для 14 ряда 
$qwer = "SELECT m14P FROM avtobus53 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m14P=$line[m14P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='14' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=14 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if ($q==8)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

 $m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==14)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==7)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}
	

$vid='#FFFFFF';
if(($q<>8)&&($q<>7))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==14)
	{
	$vid=sovet3($flag,$m14P,$m14LSP,$m14LSO,$m14PSP,$m14PSO);
	posadka($q,'m14P',$m14P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
if($q==7)
	{
$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	echo"<tr>";
	posadka('7','m7LSO',$m7LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);

	echo"
	</td>
	<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь №1</td>
				</tr><tr>";

$vid=sovet1_1($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSO',$m8LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSP',$m8LSP,$vid,$id_avtobus);
	echo"</tr>";
	$q=8;
	}
}
echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";
}


//#################################################################### 2016 (51) #################################################################################

if(($id_avtobus>='900') && ($id_avtobus <'1000')) 
{echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<14)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus51 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus51 where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	if(($i<>8))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus51 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
		
		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus51 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	$i+=1;
}

//для 13 ряда или 
$qwer = "SELECT m13P FROM avtobus51 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='13' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if ($q==9)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

 $m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==13)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==7)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if(($q<>8))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==13)
	{
	$vid=sovet3($flag,$m13P,$m13LSP,$m13LSO,$m13PSP,$m13PSO);
	posadka($q,'m13P',$m13P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
if($q==8)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь №2</td></tr>";
	}
}

echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";

}



//#################################################################### 2017 (50 мест) #################################################################################

	if(($id_avtobus>='1200') && ($id_avtobus <'1300'))
	{echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";

		$flag=$_GET['flag'];

		$i=1;
		while($i<14)
		{
			$Q1='m'.$i.'LSO';
			$qwer = "SELECT $Q1 FROM avtobus501 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP';
			$qwer = "SELECT $Q1 FROM avtobus501 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if(($i<>9))
			{
				$Q1='m'.$i.'PSP';
				$qwer = "SELECT $Q1 FROM avtobus501 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO';
				$qwer = "SELECT $Q1 FROM avtobus501 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='14' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";

		for($q=1; $q<=13 ; $q++)
		{
			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1;
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}

			if ($q==10)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}

			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

			// для последнего ряда
			/*if ($q==13)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}*/
			if ($q==8)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}

			$vid='#FFFFFF';
			if(($q<>9))
			{
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}
			if($q==9)
			{
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
				echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь №2</td></tr>";
			}
		}

		echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";

	}


//#################################################################### 2017 (62) #################################################################################

	if(($id_avtobus>='1300') && ($id_avtobus <'1400'))
	{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	</td>";


		$flag=$_GET['flag'];

		$i=1;
		while($i<=3)
		{
			$Q1='m'.$i.'LSO';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'PSP';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'PSO';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$i+=1;
		}

		$i=1;
		while($i<=13)
		{
			$Q1='m'.$i.'LSO2';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP2';
			$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if($i<>8)
			{
				$Q1='m'.$i.'PSP2';
				$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO2';
				$qwer = "SELECT $Q1 FROM avtobus62 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
		</tr>";
		for($q=1; $q<=3 ; $q++)
		{
			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1;
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

			// для последнего ряда
			if ($q==3)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}


			$vid='#FFFFFF';

			if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';

			$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			echo" <tr>";
			posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

			if ($q==1) echo"<td rowspan='4' bgcolor='#CCCCCC'>&nbsp;</td>";

			$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
			echo"</tr>";

		}

		echo"</table><p>

	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
		</tr>";
		for($q=1; $q<=13 ; $q++)
		{
			$Q1='m'.$q.'LSO2';
			$Q2='m'.$q.'LSP2';
			$Q3='m'.$q.'PSP2';
			$Q4='m'.$q.'PSO2';
			$m=$q-1;
			$Q1_1='m'.$m.'LSO2';
			$Q2_1='m'.$m.'LSP2';
			$Q3_1='m'.$m.'PSP2';
			$Q4_1='m'.$m.'PSO2';
// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==9)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO2';
			$Q2_2='m'.$m.'LSP2';
			$Q3_2='m'.$m.'PSP2';
			$Q4_2='m'.$m.'PSO2';
// для последнего ряда
			if ($q==13)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==7)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}
			$vid='#FFFFFF';

			$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			echo" <tr>";
			posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

			if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";

			if($q<>8)
			{
				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}
			else echo "<td width='40%' height='60' colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}

		echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

	}



	//#################################################################### 2017 (84) #################################################################################

	if(($id_avtobus>='1400') && ($id_avtobus <'1500'))
	{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	</td>";


		$flag=$_GET['flag'];


		$i=1;
		while($i<=6)
		{
			$Q1='m'.$i.'LSO';
			$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP';
			$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if ($i<>6)
			{
				$Q1='m'.$i.'PSP';
				$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO';
				$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

		$i=1;
		while($i<=17)
		{
			$Q1='m'.$i.'LSO2';
			$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP2';
			$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if($i<>3 && $i<>12 && $i<>13)
			{
				$Q1='m'.$i.'PSP2';
				$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO2';
				$qwer = "SELECT $Q1 FROM avtobus84 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
		</tr>";

		for($q=0; $q<=6 ; $q++)
		{
			$start = 0;
			if($q==0){
				$q = 1;
				$start = 1;
			}

			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1;
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

			// для последнего ряда
			if ($q==6)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==5)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}
			$vid='#FFFFFF';

			if($start == 0 && $q == 1) {
				echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>';
			}
			else {
				$vid = sovet1_1($flag, $$Q1, $$Q2, $$Q1_1, $$Q2_1, $$Q1_2, $$Q2_2);
				echo " <tr>";
				posadka($q, $Q1, $$Q1, $vid, $id_avtobus);

				$vid = sovet1_2($flag, $$Q1, $$Q2, $$Q1_1, $$Q2_1, $$Q1_2, $$Q2_2);
				posadka($q, $Q2, $$Q2, $vid, $id_avtobus);
			}

			if ($start == 1) echo "<td rowspan='7' bgcolor='#CCCCCC'>&nbsp;</td><td colspan='2' bgcolor='#CCCCCC' align='center'>&nbsp;Стол</td>";

			if ($q<>6 && $start == 0)
			{
				$vid = sovet1_1($flag, $$Q3, $$Q4, $$Q3_1, $$Q4_1, $$Q3_2, $$Q4_2);
				posadka($q, $Q3, $$Q3, $vid, $id_avtobus);

				$vid = sovet1_2($flag, $$Q3, $$Q4, $$Q3_1, $$Q4_1, $$Q3_2, $$Q4_2);
				posadka($q, $Q4, $$Q4, $vid, $id_avtobus);
			}
			if($q==6) echo"<td width=40% height=120 align=center bgcolor=#CCCCCC colspan=2>Дверь</td>";

			echo"</tr>";
			
			if($start == 1) $q = 0;
		}

		echo"</table><p>

	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
		</tr>";
		for($q=1; $q<=17; $q++)
		{
			$Q1='m'.$q.'LSO2';
			$Q2='m'.$q.'LSP2';
			$Q3='m'.$q.'PSP2';
			$Q4='m'.$q.'PSO2';
			$m=$q-1;
			$Q1_1='m'.$m.'LSO2';
			$Q2_1='m'.$m.'LSP2';
			$Q3_1='m'.$m.'PSP2';
			$Q4_1='m'.$m.'PSO2';
// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==4)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==14)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO2';
			$Q2_2='m'.$m.'LSP2';
			$Q3_2='m'.$m.'PSP2';
			$Q4_2='m'.$m.'PSO2';
// для последнего ряда
			if ($q==17)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==2)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==11)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}


			$vid='#FFFFFF';

			if(($q<>12)&&($q<>13)&&($q<>3))
			{
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

				if ($q==1) echo"<td rowspan='18' bgcolor='#CCCCCC'>&nbsp;</td>";

				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}

			if($q==3)
			{
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
				echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>Дверь №1</td>";
			}

			if($q==12)
			{
				$vid=sovet1_1($flag,$m12LSO2,$m12LSP2,$m11LSO2,$m11LSP2,$m13LSO2,$m13LSP2);
				echo"<tr>";
				posadka('12','m12LSO2',$m12LSO2,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$m12LSO2,$m12LSP2,$m11LSO2,$m11LSP2,$m13LSO2,$m13LSP2);
				posadka('12','m12LSP2',$m12LSP2,$vid,$id_avtobus);

				echo"</td><td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>Дверь №2</td></tr><tr>";

				$vid=sovet1_1($flag,$m13LSO2,$m13LSP2,$m12LSO2,$m12LSP2,$m14LSO2,$m14LSP2);
				posadka('13','m13LSO2',$m13LSO2,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$m13LSO2,$m13LSP2,$m12LSO2,$m12LSP2,$m14LSO2,$m14LSP2);
				posadka('13','m13LSP2',$m13LSP2,$vid,$id_avtobus);
				echo"</tr>";
				$q=13;
			}
		}

		echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

	}



//#################################################################### 2016 (51 мерседес) #################################################################################

if(($id_avtobus>='1000') && ($id_avtobus <'1200')) 
{echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";
	
$flag=$_GET['flag'];

$i=1;
while($i<14)
{
	$Q1='m'.$i.'LSO';
	$qwer = "SELECT $Q1 FROM avtobus51m where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	$Q1='m'.$i.'LSP';
	$qwer = "SELECT $Q1 FROM avtobus51m where id_avtobus='$id_avtobus'";
	$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	$line = mysql_fetch_array($result, MYSQL_ASSOC);
	$$Q1=$line[$Q1];
	
	if(($i<>7))
	{
		$Q1='m'.$i.'PSP';
		$qwer = "SELECT $Q1 FROM avtobus51m where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
		
		$Q1='m'.$i.'PSO';
		$qwer = "SELECT $Q1 FROM avtobus51m where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$$Q1=$line[$Q1];
	}
	$i+=1;
}

//для 13 ряда или 
$qwer = "SELECT m13P FROM avtobus51m where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='13' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if ($q==8)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

 $m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==13)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==6)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if(($q<>7))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==13)
	{
	$vid=sovet3($flag,$m13P,$m13LSP,$m13LSO,$m13PSP,$m13PSO);
	posadka($q,'m13P',$m13P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
if($q==7)
	{
		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		echo" <tr>";
		posadka($q,$Q1,$$Q1,$vid,$id_avtobus);
	
		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
		posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
		echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
			Дверь №2</td></tr>";
	}
}

echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";

}


	//#################################################################### 2018 (66+2) #################################################################################

	if(($id_avtobus>='1500') && ($id_avtobus <'1600'))
	{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form><p class=obr>Обратите внимание!<br>
Первый ряд первого этажа едет спиной к водителю!</p></form>
	
	</div>
	</td>";


		$flag=$_GET['flag'];

		$i=0;
		while($i<=4)
		{
			if($i<>0) {
				$Q1 = 'm' . $i . 'LSO';
				$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1 = $line[$Q1];

				$Q1 = 'm' . $i . 'LSP';
				$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1 = $line[$Q1];
			}

			$Q1='m'.$i.'PSP';
			$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'PSO';
			$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$i+=1;
		}

		$i=1;
		while($i<=13)
		{
			$Q1='m'.$i.'LSO2';
			$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP2';
			$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if($i<>9)
			{
				$Q1='m'.$i.'PSP2';
				$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO2';
				$qwer = "SELECT $Q1 FROM avtobus661 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
		</tr>";
		for($q=0; $q<=4 ; $q++)
		{
			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1; if($m == -1) $m = "f";
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==0)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

			// для последнего ряда
			if ($q==4)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}

			$vid='#FFFFFF';

			if($q==1) echo '<tr><td bgcolor="#CCCCCC" colspan="2" align="center">&nbsp;Перегородка</td>
				<td bgcolor="#CCCCCC" colspan="2" align="center">&nbsp;Перегородка</td></tr>';

			if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';

			if($q == 0) {
				echo '<tr><td colspan="2" align="center">&nbsp;Сопровождающий</td>';
			}
			else {
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
			}

			if ($q==0) echo"<td rowspan='7' bgcolor='#CCCCCC'>&nbsp;</td>";

			$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
			posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
			echo"</tr>";

		}

		echo"</table><p>

	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
		</tr>";
		for($q=1; $q<=13 ; $q++)
		{
			$Q1='m'.$q.'LSO2';
			$Q2='m'.$q.'LSP2';
			$Q3='m'.$q.'PSP2';
			$Q4='m'.$q.'PSO2';
			$m=$q-1;
			$Q1_1='m'.$m.'LSO2';
			$Q2_1='m'.$m.'LSP2';
			$Q3_1='m'.$m.'PSP2';
			$Q4_1='m'.$m.'PSO2';
// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==10)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO2';
			$Q2_2='m'.$m.'LSP2';
			$Q3_2='m'.$m.'PSP2';
			$Q4_2='m'.$m.'PSO2';
// для последнего ряда
			if ($q==13)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==8)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}
			$vid='#FFFFFF';

			$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			echo" <tr>";
			posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

			if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";

			if($q<>9)
			{
				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}
			else echo "<td width='40%' height='60' colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}

		echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

	}




	//#################################################################### 2019 (69) #################################################################################

	if(($id_avtobus>='1700') && ($id_avtobus <'1800'))
	{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form><p class=obr>Обратите внимание!<br>
Первый ряд первого этажа едет спиной к водителю!</p></form>
	
	</div>
	</td>";


		$flag=$_GET['flag'];

		$i=1;
		while($i<=5)
		{
			$Q1 = 'm' . $i . 'LSO';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1 = $line[$Q1];

			$Q1 = 'm' . $i . 'LSP';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1 = $line[$Q1];

			$Q1='m'.$i.'PSP';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'PSO';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$i+=1;
		}

		$i=1;
		while($i<=13)
		{
			$Q1='m'.$i.'LSO2';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP2';
			$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if($i<>9&&$i<>2)
			{
				$Q1='m'.$i.'PSP2';
				$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO2';
				$qwer = "SELECT $Q1 FROM avtobus691 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}
		
		//для 13 ряда
$qwer = "SELECT m13P FROM avtobus691 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m13P=$line[m13P];

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
    <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' width='391' id='table2' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
		</tr>";
		for($q=1; $q<=5 ; $q++)
		{
			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1;
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==1)
				{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
				}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

				// для последнего ряда
			if ($q==5)
				{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
				}
				
		$vid='#FFFFFF';
		
		if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';

		$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			echo" <tr>";
			posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

		$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
			
		if ($q==1) echo"<td rowspan='6' bgcolor='#CCCCCC'>&nbsp;</td>";
		
		$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
		posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

		$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
		posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
		
		echo"</tr>";
		}

		echo"</table><p>

	<table border='1' width='391' id='table1' bgcolor='#FFFFFF'>
		<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
		</tr>";
		for($q=1; $q<=13 ; $q++)
		{
			$Q1='m'.$q.'LSO2';
			$Q2='m'.$q.'LSP2';
			$Q3='m'.$q.'PSP2';
			$Q4='m'.$q.'PSO2';
			$m=$q-1;
			$Q1_1='m'.$m.'LSO2';
			$Q2_1='m'.$m.'LSP2';
			$Q3_1='m'.$m.'PSP2';
			$Q4_1='m'.$m.'PSO2';
// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}
			if ($q==10 || $q==3)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}
			$m=$q+1;
			$Q1_2='m'.$m.'LSO2';
			$Q2_2='m'.$m.'LSP2';
			$Q3_2='m'.$m.'PSP2';
			$Q4_2='m'.$m.'PSO2';
// для последнего ряда
			if ($q==13)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==8 || $q==1)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}
			$vid='#FFFFFF';

			$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			echo" <tr>";
			posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

			$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
			posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

			if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
			
			if ($q==13)
			{
				$vid=sovet3($flag,$m13P,$m13LSP2,$m13LSO2,$m13PSP2,$m13PSO2);
				posadka($q,'m13P',$m13P,$vid,$id_avtobus);
			}

			if($q<>9 && $q<>2)
			{
				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}
			else echo "<td width='40%' height='60' colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}

		echo"</table><p>



<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

	}




//#################################################################### 2018 (61) #################################################################################

	if(($id_avtobus>='1600') && ($id_avtobus <'1700'))
	{
		echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
</div>

	</td>";

		$flag=$_GET['flag'];

		$i=1;
		while($i<17)
		{
			$Q1='m'.$i.'LSO';
			$qwer = "SELECT $Q1 FROM avtobus61 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			$Q1='m'.$i.'LSP';
			$qwer = "SELECT $Q1 FROM avtobus61 where id_avtobus='$id_avtobus'";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);
			$$Q1=$line[$Q1];

			if(($i<>8)&&($i<>7))
			{
				$Q1='m'.$i.'PSP';
				$qwer = "SELECT $Q1 FROM avtobus61 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];

				$Q1='m'.$i.'PSO';
				$qwer = "SELECT $Q1 FROM avtobus61 where id_avtobus='$id_avtobus'";
				$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				$line = mysql_fetch_array($result, MYSQL_ASSOC);
				$$Q1=$line[$Q1];
			}
			$i+=1;
		}

//для 16 ряда
		$qwer = "SELECT m16P FROM avtobus61 where id_avtobus='$id_avtobus'";
		$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
		$line = mysql_fetch_array($result, MYSQL_ASSOC);
		$m16P=$line[m16P];

		echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='16' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона<br/>Сопровождающий</td>
		</tr>";

		for($q=1; $q<=16 ; $q++)
		{
			$Q1='m'.$q.'LSO';
			$Q2='m'.$q.'LSP';
			$Q3='m'.$q.'PSP';
			$Q4='m'.$q.'PSO';

			$m=$q-1;
			$Q1_1='m'.$m.'LSO';
			$Q2_1='m'.$m.'LSP';
			$Q3_1='m'.$m.'PSP';
			$Q4_1='m'.$m.'PSO';
			// для первого ряда
			if ($q==1)
			{
				$$Q1_1='1';
				$$Q2_1='1';
				$$Q3_1='1';
				$$Q4_1='1';
			}

			if ($q==8)
			{
				$$Q3_1='1';
				$$Q4_1='1';
			}

			$m=$q+1;
			$Q1_2='m'.$m.'LSO';
			$Q2_2='m'.$m.'LSP';
			$Q3_2='m'.$m.'PSP';
			$Q4_2='m'.$m.'PSO';

			// для последнего ряда
			if ($q==16)
			{
				$$Q1_2='1';
				$$Q2_2='1';
				$$Q3_2='1';
				$$Q4_2='1';
			}
			if ($q==7)
			{
				$$Q3_2='1';
				$$Q4_2='1';
			}


			$vid='#FFFFFF';
			if(($q<>8)&&($q<>7))
			{
				$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				echo" <tr>";
				posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
				posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

				if ($q==16)
				{
					$vid=sovet3($flag,$m16P,$m16LSP,$m16LSO,$m16PSP,$m16PSO);
					posadka($q,'m16P',$m16P,$vid,$id_avtobus);
				}

				$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
				posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
				echo"</tr>";
			}
			if($q==7)
			{
				$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
				echo"<tr>";
				posadka('7','m7LSO',$m7LSO,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
				posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);

				echo"
	</td>
	<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Вход / Дверь</td>
				</tr><tr>";

				$vid=sovet1_1($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
				posadka('8','m8LSO',$m8LSO,$vid,$id_avtobus);

				$vid=sovet1_2($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
				posadka('8','m8LSP',$m8LSP,$vid,$id_avtobus);
				echo"</tr>";
				$q=8;
			}
		}
		echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>
</tr>
     <tr><td></td></tr></table>";// таблица razmetka";
	}






/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


//не было этого автобуса 50мест на него надо дорабатывать все
if(($id_avtobus<'200') && ($id_avtobus>='100')) 
{echo"
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	</td>";
	

$flag=$_GET['flag'];

$i=1;
while($i<14)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus50 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus50 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

if($i<>7)
{
$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus50 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus50 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];
}
$i+=1;
}
echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$komnata' name=komnata>
        <input type=hidden value='$kolvo' name=kolvo>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='14' align='center' width='60'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>
			Дверь №1<hr>Правая сторона</td>
		</tr>";
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';
$m=$q-1;

$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
// для первого ряда
if ($q==1)
	{
	$$Q1_1='1';
	$$Q2_1='1';
	$$Q3_1='1';
	$$Q4_1='1';
	}
$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

// для последнего ряда
if ($q==13)
	{
	$$Q1_2='1';
	$$Q2_2='1';
	$$Q3_2='1';
	$$Q4_2='1';
	}
$vid='#FFFFFF';
if($q<>7)
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo"<tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
if($q==7)
	{
$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	echo"<tr>";
	posadka('7',$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	echo"<tr>";
	posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);
	
	echo"<td bgcolor='#CCCCCC' colspan='2' align='center' width='60' height='60'>&nbsp;Дверь №2 
	</td>
	</tr>";
	}
}	
echo"</table><p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>

  </tr>
     <tr><td></td></tr></table>";// таблица razmetka

;}     



//48
if(($id_avtobus>='200') && ($id_avtobus<'300')) 
{
echo"	
<table name='razmetka' width='100%' border=0><tr><td width='40%' valign='top'>
	<div class='avtobus'>
<p class=obr>Уважаемые коллеги!<br>
Просим Вас при посадке туристов<br><b>не оставлять</b> одинарных пустых мест.<br>
Придерживайтесь следующей схемы:</p>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить одного туриста</button>
	<input type='hidden' value='1' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>

	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить двух туристов</button>
	<input type='hidden' value='2' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Посадить трех туристов</button>
	<input type='hidden' value='3' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	
	<form action='avtobus.php' method='GET'>
	<button type=submit class='button'>Не помогать</button>
	<input type='hidden' value='0' name='flag'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	</form>
	</div>
	</td>";
	
$flag=$_GET['flag'];

$i=1;
/* это автобус 48 реально
while($i<14)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

if(($i<>7)&&($i<>8))
{
$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];
}
$i+=1;
}

echo"<td ROWSPAN='2'>
		
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>
    
     
	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>
				Водитель<hr>Левая сторона</td>
				<td bgcolor='#CCCCCC' rowspan='13' align='center'>&nbsp;</td>
				<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>
				Дверь №1<hr>Правая сторона</td>
			</tr>";
			
 
for($q=1; $q<=13 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';
$m=$q-1;

$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}
	if ($q==9)
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}
$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

// для последнего ряда
	if ($q==13)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if ($q==6)
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}
$vid='#FFFFFF';
if(($q<>7) && ($q<>8))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo"<tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if($q==13) echo"<td bgcolor='#CCCCCC'align='center' width='50' height='60'></td>";

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}

if($q==7)
	{
$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	echo"<tr>";
	posadka('7','m7LSO',$m7LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);

	echo"<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					&#1044;&#1074;&#1077;&#1088;&#1100; 
					&#8470;2</td>
				</tr><tr>";

$vid=sovet1_1($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSO',$m8LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSP',$m8LSP,$vid,$id_avtobus);
	echo"</tr>"; 
	$q=8;
	}

}
*/
// это автобус 53 на базе 48
while($i<15)
{
$Q1='m'.$i.'LSO';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'LSP';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

if(($i<>7)&&($i<>8)&&($i<>2))
{
$Q1='m'.$i.'PSP';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];

$Q1='m'.$i.'PSO';
$qwer = "SELECT $Q1 FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$$Q1=$line[$Q1];
}
$i+=1;
}

//для 14 ряда 
$qwer = "SELECT m14P FROM avtobus48 where id_avtobus='$id_avtobus'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);
$m14P=$line[m14P];

echo"<td ROWSPAN='2'>
	
	<form name='forma' action='plusinfodop.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$city' name=city>
    <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<p><p><input type='submit' value='Заказать тур без автобуса'></form>

	<form name='bronir' action='plusinfo2.php' method='GET'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$stoim' name=stoim>
        <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$komnata' name=komnata>
	
	<table border='1' id='table1' width='391' bgcolor='#FFFFFF'>
	
		<tr>
			<td colspan='2' bgcolor='#CCCCCC' align='center' width='50' height='50'>Водитель<hr>Левая сторона</td>
			<td bgcolor='#CCCCCC' rowspan='14' align='center'>&nbsp;</td>
			<td bgcolor='#CCCCCC' colspan='2' align='center' width='50' height='50'>Правая сторона</td>
		</tr>";
		
for($q=1; $q<=14 ; $q++)
{
$Q1='m'.$q.'LSO';
$Q2='m'.$q.'LSP';
$Q3='m'.$q.'PSP';
$Q4='m'.$q.'PSO';

$m=$q-1;
$Q1_1='m'.$m.'LSO';
$Q2_1='m'.$m.'LSP';
$Q3_1='m'.$m.'PSP';
$Q4_1='m'.$m.'PSO';
	// для первого ряда
	if ($q==1)
		{
		$$Q1_1='1';
		$$Q2_1='1';
		$$Q3_1='1';
		$$Q4_1='1';
		}

		if (($q==9) || ($q==3))
		{
		$$Q3_1='1';
		$$Q4_1='1';
		}

$m=$q+1;
$Q1_2='m'.$m.'LSO';
$Q2_2='m'.$m.'LSP';
$Q3_2='m'.$m.'PSP';
$Q4_2='m'.$m.'PSO';

	// для последнего ряда
	if ($q==14)
		{
		$$Q1_2='1';
		$$Q2_2='1';
		$$Q3_2='1';
		$$Q4_2='1';
		}
	if (($q==6) || ($q==1))
		{
		$$Q3_2='1';
		$$Q4_2='1';
		}

$vid='#FFFFFF';
if(($q<>7)&&($q<>8)&&($q<>2))
	{
$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);

	if ($q==14)
	{
	$vid=sovet3($flag,$m14P,$m14LSP,$m14LSO,$m14PSP,$m14PSO);
	posadka($q,'m14P',$m14P,$vid,$id_avtobus);
	}

$vid=sovet1_1($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q3,$$Q3,$vid,$id_avtobus);

$vid=sovet1_2($flag,$$Q3,$$Q4,$$Q3_1,$$Q4_1,$$Q3_2,$$Q4_2);
	posadka($q,$Q4,$$Q4,$vid,$id_avtobus);
	echo"</tr>";
	}
	
if($q==2)
	{
	$vid=sovet1_1($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	echo" <tr>";
	posadka($q,$Q1,$$Q1,$vid,$id_avtobus);

	$vid=sovet1_2($flag,$$Q1,$$Q2,$$Q1_1,$$Q2_1,$$Q1_2,$$Q2_2);
	posadka($q,$Q2,$$Q2,$vid,$id_avtobus);
	echo"<td align='center' width='100' colspan=2 bgcolor='#CCCCCC'>
		Дверь№1</td>";
	}
	
if($q==7)
	{
$vid=sovet1_1($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	echo"<tr>";
	posadka('7','m7LSO',$m7LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m7LSO,$m7LSP,$m6LSO,$m6LSP,$m8LSO,$m8LSP);
	posadka('7','m7LSP',$m7LSP,$vid,$id_avtobus);

	echo"
	</td>
	<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					&#1044;&#1074;&#1077;&#1088;&#1100; 
					&#8470;2</td>
				</tr><tr>";

$vid=sovet1_1($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSO',$m8LSO,$vid,$id_avtobus);

$vid=sovet1_2($flag,$m8LSO,$m8LSP,$m7LSO,$m7LSP,$m9LSO,$m9LSP);
	posadka('8','m8LSP',$m8LSP,$vid,$id_avtobus);
	echo"</tr>";
	$q=8;
	}
}

echo"</table>

<p>
<input type='submit' value='Заказать тур с выбранным(и) местом(ами) в автобусе'></form>


 </tr>
     <tr><td>&nbsp;</td></tr></table>";// таблица razmetka

}     

mysql_close($link);
}

?> 
</td>
</tr> 

</table>
</body>

</html>