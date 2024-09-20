<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b><p align="center">
<font size="5">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</font>

</td>
</tr>
<?
 if($_COOKIE['login']<>0)
{	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
	{
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>";
	}
	
	else
	{
	echo"<tr><td>
	<p align='right'>
	<a href='bron.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a></p>
    </td></tr>";
	}
 echo "  <tr>
      <td >";


echo"<p align=left><span lang='ru'><font size='4'><b><a style='margin-right:20px'; href=podbortur.php>Назад</a></b></font></span></p>";
 
include("start.php");
   
$id_tur=$_GET['id_tur'];  
$kolvo=$_GET['kolvo']; 
$otel=$_GET['otel'];
$stoim=$_GET['stoim'];
$komnata=$_GET['komnata'];
$city=$_GET['city'];
$net_mest=0;

echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>Стоимость указана за номер без стоим. дополнительного места и без вычета комиссионного вознаграждения!</font></center>
</td></tr></table><p>";

echo"<table><tr><td><b>Город:</b></td><td> $city</td></tr>
	<tr><td><b>Гостиница:</b></td><td> $otel</td></tr>
	<tr><td><b>Комната:</b> </td><td>$komnata</td></tr>
	<tr><td><b>Стоимость:</b> </td><td>$stoim рублей</td></tr></table>";

 
$id_avtobus=$_GET['id_avtobus'];

echo"<form name='forma' action='pluszakaz2.php' method='get'>";
echo"<b>Места в автобусе: </b>";
$kol=0;
/*if($id_avtobus<'300')
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
	}
	// для нового автобуса 49
$m12P=$_GET[m12P];
	if ( $m12P=='1')
	{$kol+=1;
	echo "12 ряд Ц, <input type=hidden value='1' name='m12P'>";
	}
	// для нового автобуса 53
$m14P=$_GET[m14P];
	if ( $m14P=='1')
	{$kol+=1;
	echo "14 ряд Ц, <input type=hidden value='1' name='m14P'>";
	}
}*/	


if($id_avtobus<'300')
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=500) && ($id_avtobus<600))
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=600) && ($id_avtobus<800))
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m14P=$_GET[m14P];
	if ( $m14P=='1')
	{$kol+=1;
	echo "14 ряд Ц, <input type=hidden value='1' name='m14P'>";
	}
}

if(($id_avtobus>=800) && ($id_avtobus<900))
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	
}

if(($id_avtobus>=900) && ($id_avtobus<1000))
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=1000) && ($id_avtobus<1200))
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
	}
}


	if(($id_avtobus>=1200) && ($id_avtobus<1300))
	{
		for($Q=1;$Q<=13;$Q++)
		{

			$qw='m'.$Q.'LSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
			}
		}
	}


	if(($id_avtobus>=1600) && ($id_avtobus<1700))
	{
		for($Q=1;$Q<=16;$Q++)
		{

			$qw='m'.$Q.'LSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-О, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-П, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ПС-П, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ряд ПС-О, <input type=hidden value='1' name=$qw>";
			}
		}

		$m16P=$_GET[m16P];
		if ( $m16P=='1')
		{$kol+=1;
			echo "16 ряд Ц, <input type=hidden value='1' name='m16P'>";
		}
	}


	//второй этаж
	if (($id_avtobus>=300) && ($id_avtobus<500))
	{

  	for($Q=1;$Q<=6;$Q++)
	   {

			$qw='m'.$Q.'LSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO'}=='1')
			{$kol+=1;
			echo "$Q ряд ЛС-О_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP'}=='1')
			{$kol+=1;
			echo "$Q ряд ЛС-П_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP'}=='1')
			{$kol+=1;
			echo "$Q ряд ПС-П_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO'}=='1')
			{$kol+=1;
			echo "$Q ряд ПС-О_1эт, <input type=hidden value='1' name=$qw>";
			}
	   }		


	   for($Q=1;$Q<=14;$Q++)
	   {
			$qw='m'.$Q.'LSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO2'}=='1')
			{$kol+=1;
			echo "$Q ряд ЛС-О_2эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP2'}=='1')
			{$kol+=1;
			echo "$Q ряд ЛС-П_2эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP2'}=='1')
			{$kol+=1;
			echo "$Q ряд ПС-П_2эт, <input type=hidden value='1' name=$qw>";
			}
		
			$qw='m'.$Q.'PSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO2'}=='1')
			{$kol+=1;
			echo "$Q ряд ПС-О_2эт, <input type=hidden value='1' name=$qw>";
			}
	   }

		$m13P=$_GET[m13P];
		if ( $m13P=='1')
		{$kol+=1;
		echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
		}
	}


// 62
	if (($id_avtobus>=1300) && ($id_avtobus<1400))
	{

		for($Q=1;$Q<=3;$Q++)
		{

			$qw='m'.$Q.'LSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO'}=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-О_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP'}=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-П_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP'}=='1')
			{$kol+=1;
				echo "$Q ряд ПС-П_1эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO'}=='1')
			{$kol+=1;
				echo "$Q ряд ПС-О_1эт, <input type=hidden value='1' name=$qw>";
			}
		}


		for($Q=1;$Q<=13;$Q++)
		{
			$qw='m'.$Q.'LSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO2'}=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-О_2эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP2'}=='1')
			{$kol+=1;
				echo "$Q ряд ЛС-П_2эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP2'}=='1')
			{$kol+=1;
				echo "$Q ряд ПС-П_2эт, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO2'}=='1')
			{$kol+=1;
				echo "$Q ряд ПС-О_2эт, <input type=hidden value='1' name=$qw>";
			}
		}
	}


	 // 84
	 if (($id_avtobus>=1400) && ($id_avtobus<1500))
	 {

		 for($Q=1;$Q<=6;$Q++)
		 {

			 $qw='m'.$Q.'LSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=17;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }
		 }
	 }

	 //66+2
	 if (($id_avtobus>=1500) && ($id_avtobus<1600))
	 {

		 for($Q=0;$Q<=4;$Q++)
		 {

			 $qw='m'.$Q.'LSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=13;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }
		 }
	 }
	 
	 
	 //69 - 2019
	 if (($id_avtobus>=1700) && ($id_avtobus<1800))
	 {

		 for($Q=1;$Q<=5;$Q++)
		 {
			 $qw='m'.$Q.'LSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_1эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_1эт, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=13;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ЛС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-П_2эт, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ряд ПС-О_2эт, <input type=hidden value='1' name=$qw>";
			 }
		 }
		 
		 $m13P=$_GET[m13P];
		if ( $m13P=='1')
		{$kol+=1;
		echo "13 ряд Ц, <input type=hidden value='1' name='m13P'>";
		}
	 }
	 

	if($kol==0){ $net_mest=1;echo"<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>ВЫ НЕ ЗАНЯЛИ МЕСТО В АВТОБУСЕ!!!</font></center>
</td></tr></table><p><font color=red></font>";}



	echo"<input type=hidden value=$id_tur name=id_tur>
        <input type=hidden value=$id_avtobus name=id_avtobus>
	<input type=hidden value=$kol name=kol>
	<input type=hidden value=$stoim name=stoim>
        <input type=hidden value=$kolvo name='kolvo'><font size='4'><p><b>Информация о туристах</b></font><p>";
echo"<table style='font-size:14pt'>";

while($kol>0)
{
echo"
<tr>
  <td align='right'><font size='3'>Ребенок от 6 до 10 лет <b>на основное место</b></font></td><td><input name=child$kol style='font-size: 16pt;' size='45' type='checkbox' value='1'/><font size='2'>Скидка с цены тура 200 рублей</font></td>
</tr>
<tr>
  <td align='right'><font size='3'>Ф.И.О.туриста</font></td><td><input name=fio$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>Дата рождения</font></td><td><input name=birth$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>Паспорт/свидетельство</font></td><td><input name=pass$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>Телефон</font></td><td><input name=phone$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>";
$kol-=1;
}

echo"
<tr><td align='right'><font size='3'>Доп. место (взрослый)</font></td>
<td><input type='checkbox' name='dop_mesto_vzrosl'></td></tr>
<tr><td align='right'><font size='3'>Доп. место (ребенок)</font></td>
<td> <input type='checkbox' name='dop_mesto_rebenok'></td></tr>
<tr><td align='right'><font size='3'>Ребенок без места в отеле</font></td>
<td><input type='checkbox' name='bez_mesta'></td></tr>

<tr><td align='right'><font size='3'>Трансфер</font></td>
<td><input type='radio' name='transfer' value='Новомосковск'> <span style='font-size:16px'>Новомосковск</span>
<input type='radio' name='transfer' value='Узловая'> <span style='font-size:16px'>Узловая</span>
<input type='radio' name='transfer' value='Щекино'> <span style='font-size:16px'>Щекино</span>
<input type='radio' name='transfer' value='Ефремов'> <span style='font-size:16px'>Ефремов</span>
<input type='radio' name='transfer' value='Быковка'> <span style='font-size:16px'>Быковка</span>
<input type='radio' name='transfer' value='Богородицк'> <span style='font-size:16px'>Богородицк</span>
<input type='radio' name='transfer' value='не требуется' checked='checked'> <span style='font-size:16px'>не требуется</span></td></tr>

<tr><td align='right'><font size='3'><b>Дополнительная информация</b></font></td>
<td>
<textarea ROWS='5' COLS='55' name=info>&nbsp; </textarea></td>
</tr>
</table>";

if($net_mest==0){echo '<center><input name="knopka" type="submit" value="Заказать тур" onClick=\"this.disabled=true; forma.submit();\"></center>';}
echo"</form>";

 
    mysql_close($link);
echo" 
</tr> 
      
      </td>
   </tr>
</table>";
}
?>
</body>

</html>