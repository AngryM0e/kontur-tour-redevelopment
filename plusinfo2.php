<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">������</font></b><p align="center">
<font size="5">�.����, ��������������� ��-�.7, ��.304
<br>���:(4872)253-109, 253-160
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
<a href='admin.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a>
    </td></tr>";
	}
	
	else
	{
	echo"<tr><td>
	<p align='right'>
	<a href='bron.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>���������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='table_del.php' style='text-decoration: none'><b>�������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='login.php' style='text-decoration: none'>������ ����������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a></p>
    </td></tr>";
	}
 echo "  <tr>
      <td >";


echo"<p align=left><span lang='ru'><font size='4'><b><a style='margin-right:20px'; href=podbortur.php>�����</a></b></font></span></p>";
 
include("start.php");
   
$id_tur=$_GET['id_tur'];  
$kolvo=$_GET['kolvo']; 
$otel=$_GET['otel'];
$stoim=$_GET['stoim'];
$komnata=$_GET['komnata'];
$city=$_GET['city'];
$net_mest=0;

echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>��������� ������� �� ����� ��� �����. ��������������� ����� � ��� ������ ������������� ��������������!</font></center>
</td></tr></table><p>";

echo"<table><tr><td><b>�����:</b></td><td> $city</td></tr>
	<tr><td><b>���������:</b></td><td> $otel</td></tr>
	<tr><td><b>�������:</b> </td><td>$komnata</td></tr>
	<tr><td><b>���������:</b> </td><td>$stoim ������</td></tr></table>";

 
$id_avtobus=$_GET['id_avtobus'];

echo"<form name='forma' action='pluszakaz2.php' method='get'>";
echo"<b>����� � ��������: </b>";
$kol=0;
/*if($id_avtobus<'300')
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
	}
	// ��� ������ �������� 49
$m12P=$_GET[m12P];
	if ( $m12P=='1')
	{$kol+=1;
	echo "12 ��� �, <input type=hidden value='1' name='m12P'>";
	}
	// ��� ������ �������� 53
$m14P=$_GET[m14P];
	if ( $m14P=='1')
	{$kol+=1;
	echo "14 ��� �, <input type=hidden value='1' name='m14P'>";
	}
}*/	


if($id_avtobus<'300')
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=500) && ($id_avtobus<600))
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=600) && ($id_avtobus<800))
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m14P=$_GET[m14P];
	if ( $m14P=='1')
	{$kol+=1;
	echo "14 ��� �, <input type=hidden value='1' name='m14P'>";
	}
}

if(($id_avtobus>=800) && ($id_avtobus<900))
{
 for($Q=1;$Q<=14;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
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
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
	}
}

if(($id_avtobus>=1000) && ($id_avtobus<1200))
{
 for($Q=1;$Q<=13;$Q++)
 {

	$qw='m'.$Q.'LSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'LSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSP';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}

	$qw='m'.$Q.'PSO';

	if ( $_GET[$qw]=='1')
	{$kol+=1;
	echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
	}
 }	

$m13P=$_GET[m13P];
	if ( $m13P=='1')
	{$kol+=1;
	echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
	}
}


	if(($id_avtobus>=1200) && ($id_avtobus<1300))
	{
		for($Q=1;$Q<=13;$Q++)
		{

			$qw='m'.$Q.'LSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
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
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';

			if ( $_GET[$qw]=='1')
			{$kol+=1;
				echo "$Q ��� ��-�, <input type=hidden value='1' name=$qw>";
			}
		}

		$m16P=$_GET[m16P];
		if ( $m16P=='1')
		{$kol+=1;
			echo "16 ��� �, <input type=hidden value='1' name='m16P'>";
		}
	}


	//������ ����
	if (($id_avtobus>=300) && ($id_avtobus<500))
	{

  	for($Q=1;$Q<=6;$Q++)
	   {

			$qw='m'.$Q.'LSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}
	   }		


	   for($Q=1;$Q<=14;$Q++)
	   {
			$qw='m'.$Q.'LSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO2'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP2'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP2'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}
		
			$qw='m'.$Q.'PSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO2'}=='1')
			{$kol+=1;
			echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}
	   }

		$m13P=$_GET[m13P];
		if ( $m13P=='1')
		{$kol+=1;
		echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
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
				echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			}
		}


		for($Q=1;$Q<=13;$Q++)
		{
			$qw='m'.$Q.'LSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSO2'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'LSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'LSP2'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSP2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSP2'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			}

			$qw='m'.$Q.'PSO2';
			$$qw=$_GET[$qw];

			if ( ${'m'.$Q.'PSO2'}=='1')
			{$kol+=1;
				echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
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
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=17;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
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
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=13;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
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
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_1��, <input type=hidden value='1' name=$qw>";
			 }
		 }


		 for($Q=1;$Q<=13;$Q++)
		 {
			 $qw='m'.$Q.'LSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'LSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'LSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSP2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSP2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }

			 $qw='m'.$Q.'PSO2';
			 $$qw=$_GET[$qw];

			 if ( ${'m'.$Q.'PSO2'}=='1')
			 {$kol+=1;
				 echo "$Q ��� ��-�_2��, <input type=hidden value='1' name=$qw>";
			 }
		 }
		 
		 $m13P=$_GET[m13P];
		if ( $m13P=='1')
		{$kol+=1;
		echo "13 ��� �, <input type=hidden value='1' name='m13P'>";
		}
	 }
	 

	if($kol==0){ $net_mest=1;echo"<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>�� �� ������ ����� � ��������!!!</font></center>
</td></tr></table><p><font color=red></font>";}



	echo"<input type=hidden value=$id_tur name=id_tur>
        <input type=hidden value=$id_avtobus name=id_avtobus>
	<input type=hidden value=$kol name=kol>
	<input type=hidden value=$stoim name=stoim>
        <input type=hidden value=$kolvo name='kolvo'><font size='4'><p><b>���������� � ��������</b></font><p>";
echo"<table style='font-size:14pt'>";

while($kol>0)
{
echo"
<tr>
  <td align='right'><font size='3'>������� �� 6 �� 10 ��� <b>�� �������� �����</b></font></td><td><input name=child$kol style='font-size: 16pt;' size='45' type='checkbox' value='1'/><font size='2'>������ � ���� ���� 200 ������</font></td>
</tr>
<tr>
  <td align='right'><font size='3'>�.�.�.�������</font></td><td><input name=fio$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>���� ��������</font></td><td><input name=birth$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>�������/�������������</font></td><td><input name=pass$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>�������</font></td><td><input name=phone$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>";
$kol-=1;
}

echo"
<tr><td align='right'><font size='3'>���. ����� (��������)</font></td>
<td><input type='checkbox' name='dop_mesto_vzrosl'></td></tr>
<tr><td align='right'><font size='3'>���. ����� (�������)</font></td>
<td> <input type='checkbox' name='dop_mesto_rebenok'></td></tr>
<tr><td align='right'><font size='3'>������� ��� ����� � �����</font></td>
<td><input type='checkbox' name='bez_mesta'></td></tr>

<tr><td align='right'><font size='3'>��������</font></td>
<td><input type='radio' name='transfer' value='������������'> <span style='font-size:16px'>������������</span>
<input type='radio' name='transfer' value='�������'> <span style='font-size:16px'>�������</span>
<input type='radio' name='transfer' value='������'> <span style='font-size:16px'>������</span>
<input type='radio' name='transfer' value='�������'> <span style='font-size:16px'>�������</span>
<input type='radio' name='transfer' value='�������'> <span style='font-size:16px'>�������</span>
<input type='radio' name='transfer' value='����������'> <span style='font-size:16px'>����������</span>
<input type='radio' name='transfer' value='�� ���������' checked='checked'> <span style='font-size:16px'>�� ���������</span></td></tr>

<tr><td align='right'><font size='3'><b>�������������� ����������</b></font></td>
<td>
<textarea ROWS='5' COLS='55' name=info>&nbsp; </textarea></td>
</tr>
</table>";

if($net_mest==0){echo '<center><input name="knopka" type="submit" value="�������� ���" onClick=\"this.disabled=true; forma.submit();\"></center>';}
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