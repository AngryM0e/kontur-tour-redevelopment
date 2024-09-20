<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
	@media print { .noprint {display:none} }
</style>

<script language="javascript">
function CallPrint(strid)
{
 var prtContent = document.getElementById(strid);
 /*var prtCSS = '<link rel="stylesheet" href="/templates/white2/print-style.css" type="text/css" />';*/
 var WinPrint = window.open('','','left=0,top=0,width=1000,height=800,toolbar=0,scrollbars=1,status=0');
 WinPrint.document.write('<div id="print" class="contentpane">');
 /*WinPrint.document.write(prtCSS);*/
 WinPrint.document.write(prtContent.innerHTML);
 WinPrint.document.write('</div>');
 WinPrint.document.close();
 WinPrint.focus();
 WinPrint.print();
 WinPrint.close();
 prtContent.innerHTML=strOldOne;
}
</script>

<title>Распечатка автобуса</title>
</head>

<body>

<? 

$summ=0;
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
$array_fio= array();

 include("start.php");
   mysql_query('set names utf8');
$id_avtobus=$_GET['avtobus'];
if($id_avtobus==NULL){echo"<p align=left><a href='admin.php'><font size='4'><b>Назад</b></font></a></p>
<font size=4 color=red><b><center>Вы не выбрали автобус!</center></b></font>";}
else
{
include ("id_avtobus.php");

$qaz = "select name, data1 from $nameavtobus where id_avtobus='$id_avtobus'";
$w= mysql_query($qaz) or  die("Query failed : " . mysql_error());
$line2= mysql_fetch_array($w, MYSQL_ASSOC);
$d=substr($line2[data1],8);
$m=strtok(substr($line2[data1],5),'-');
$g=strtok($line2[data1],'-');
$line2[data1]=$d.'-'.$m.'-'.$g;


echo "<p align=left><a href='print.php'><font size='4'><b>Назад</b></font></a></p>";
?>
<br/><input type="button" onClick="javascript:CallPrint('printturist');" value="распечатать туристов"><br/><br/>
<?
echo "<div id='printturist' style='width:1000px'>"; ############################################################ распечатка туристов #######################################


echo"<table class='max' width='800' CELLSPACING='0' cellpadding='0'><tr><td><font size='1'><b>Автобус: $line2[name]<br>Выезд: $line2[data1]</b></font></td></tr></table>";

echo"<table border=1 cellpadding=0 cellspacing=0 width='800'><tr>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>№</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>№пп/ФИО/дата рождения/паспорт/телефон</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>Гостиница</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>Комната</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>Фирма</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>М/а</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>Трансфер</b></font></td>\n";
print "<td bgcolor=#D3D3D3 align='center'><font size='1'><b>Цена</b></font></td>\n";
print "</tr>\n";

$qwe2 = "select id_zakaz, data1, mesto, id_klient, otel, komnata, transfer,stoim from bron where ((id_avtobus='$id_avtobus') and (mesto<>'без мест')) order by otel, komnata, id_klient, id_zakaz ASC";
$Q2= mysql_query($qwe2) or  die("Query failed : " . mysql_error());

$array_mesto=array();
$countertourist = 1;
while ($line2 = mysql_fetch_array($Q2, MYSQL_ASSOC)) 
{	$data1=$line2[data1];
	$n=0;
	$q=0;
	echo"<tr><td align='center'><font size='1'>$line2[id_zakaz]<br>+</font></td>";
	echo"<td  width=60%>";
	$query = "select  fio,birth, pass, phone from turist where id_zakaz=$line2[id_zakaz]";
	$result = mysql_query($query) or  die("Query failed2 : " . mysql_error()); 
	$mesto=$line2[mesto];
	$id_zakaz=$line2[id_zakaz];
	
	
				/*if($id_zakaz==2631)//исключительная ситуация
				{ 
				$m0='1рядПС-О,';
				$m1='11рядПС-П,';
				$m2='11рядПС-О,';
				}
				else{*/
				//print_r(strtok($mesto,", "));	
	$pieces = explode(", ", $mesto);
	foreach ($pieces as $piece){
		if($piece != ''){
			${'m'.$q} = $piece;
			$q+=1;
		}
	}
	/*do
	{
	${'m'.$q}=strtok($mesto,", ");
	$mesto=str_replace(${'m'.$q}.", ","",$mesto);
	$q+=1;
	}
	while ($mesto<>'');*/
	
	//print_r( ${'m0'});
					/*}//исключительная ситуация*/
					
				
					
	$query1 = "select  firm from klient where id_klient=$line2[id_klient]";
	$result1 = mysql_query($query1) or  die("Query failed2 : " . mysql_error()); 
	$firm = mysql_fetch_array($result1, MYSQL_ASSOC); 
	
	

	echo"<table class='mini' name=2  CELLSPACING='0' CELLPADDING='0' rules='all' frame='void'   width='100%'>";
	
		while ($turist = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{ 
				if($mesto<>'без мест')
				{
				$array_fio[$n]=$turist[fio];
				$n+=1;
				}
		
	        print "
		 	<tr>
		 	<td width=5%><font size='1'>&nbsp;$countertourist</font></td>
			<td width=50%><font size='1'>&nbsp;$turist[fio]</font></td>
			<td width=12%><font size='1'>&nbsp;$turist[birth]</font></td>
			<td width=20%><font size='1'>&nbsp;$turist[pass]</font></td>
			<td width=13%><font size='1'>&nbsp;$turist[phone]</font></td></tr>";
	        $countertourist++;
		}
	?>
	</table></td>
	<?//print_r($line2);?>
	<td align='center'><font size='1'>&nbsp;<?echo $line2[otel]?></font></td>
	<td align='center'><font size='1'>&nbsp;<?echo $line2[komnata]?></font></td>
	<td align='center'><font size='1'>&nbsp;<?echo $firm[firm]?></font><br></td>
	<td align='center'><font size='1'>&nbsp;<?echo $line2[mesto]?></font></td>
	<td align='center'><font size='1'>&nbsp;<?echo $line2[transfer]?></font></td>
	<td align='center'><font <?
	if($line2[stoimreal] ==1)
		echo "color=blue style='font-weight:bold'";
	?> size='1'>&nbsp;<?echo $line2[stoim]?></font></td></tr>
	
	<?$summ=$summ+$line2[stoim];
	if($q==$n)
	{	$q=0;

		do
		{
		$array_mesto[${'m'.$q}]=$array_fio[$q];
		$q+=1;
		}
		while($q<$n);
				
	}
//если туристов больше чем мест 	
/* 	 if($q<>$n)
	 {	$dop=$q;
		$q=0;
		 do
		 {
		
			 if(${'m'.$q}==NULL)
				 echo ${'m'.($q-1)}.$array_mesto[${'m'.($q-1)}].=$array_fio[$q];
			else
			 echo $array_mesto[${'m'.$q}]=$array_fio[$q];
		 $q+=1;
		}
		while($q<$dop);
	 }   */
}
//print_r($array_mesto);



//бронированные с местом в автобусе
$qwe = "select id_zakaz, mesto, id_klient, id_tur, transfer,stoim,stoimreal from zakaz where ((id_avtobus='$id_avtobus') and (mesto<>'без мест')) order by id_tur, id_klient ASC";
$Q=mysql_query($qwe) or  die("Query failed : " . mysql_error());


while ($line = mysql_fetch_array($Q, MYSQL_ASSOC)) 
	{
	$n=0;
	$q=0;
	echo"<tr><td align='center'><font size='1'>$line[id_zakaz]</font></td>";
	echo"<td width=60%>";
	
	$query = "select  fio, birth, pass, phone from turist where id_zakaz=$line[id_zakaz]";
	$result = mysql_query($query) or  die("Query failed : " . mysql_error()); 
	
	
	$mesto=$line[mesto];
				
	/*do
		{
			${'m'.$q}=strtok($mesto,", ");
			$mesto=str_replace(${'m'.$q}.", ","",$mesto,$count);
			$q+=1;
			
		}
	while ($mesto<>'');*/
	
	$pieces = explode(", ", $mesto);
	foreach ($pieces as $piece){
		if($piece != ''){
			${'m'.$q} = $piece;
			$q+=1;
		}
	}
	

	$query1 = "select firm from klient where id_klient=$line[id_klient]";
	$result1 = mysql_query($query1) or  die("Query failed2 : " . mysql_error()); 
	$firm = mysql_fetch_array($result1, MYSQL_ASSOC);

	$query2 = "select id_otel from tur where id_tur=$line[id_tur]";
	$result2 = mysql_query($query2) or  die("Query failed3 : " . mysql_error()); 
	$id_otel = mysql_fetch_array($result2, MYSQL_ASSOC);

	$query22 = "select id_komnata from tur where id_tur=$line[id_tur]";
	$result22 = mysql_query($query22) or  die("Query failed32 : " . mysql_error()); 
	$id_komnata = mysql_fetch_array($result22, MYSQL_ASSOC);

	$query3 = "select name from otel where id_otel=$id_otel[id_otel]";
	$result3 = mysql_query($query3) or  die("Query failed4 : " . mysql_error()); 
	$otel = mysql_fetch_array($result3, MYSQL_ASSOC);

	$query6 = "select name from komnata where id_komnata=$id_komnata[id_komnata]";
	$result6 = mysql_query($query6) or  die("Query failed6 : " . mysql_error()); 
	$komnata = mysql_fetch_array($result6, MYSQL_ASSOC);


	echo"<table class='mini' name=1  CELLSPACING='0' CELLPADDING='0' rules='all' frame='void'   width='100%'>";
		while ($turist = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
				if($mesto<>'без мест')
					{
					$array_fio[$n]=$turist[fio];
					$n+=1;
					}
					
		    print "
		 	<tr>
		 	<td width=5%><font size='1'>&nbsp;$countertourist</font></td>
			<td width=50%><font size='1'>&nbsp;$turist[fio]</font></td>
			<td width=12%><font size='1'>&nbsp;$turist[birth]</font></td>
			<td width=20%><font size='1'>&nbsp;$turist[pass]</font></td>
			<td width=13%><font size='1'>&nbsp;$turist[phone]</font></td></tr>";
	        $countertourist++;
			}
			?>
	</table></td>
	<?
	/*print_r("NEWDDD");
	print_r($line);*/?>
	<td  align='center'><font size='1'>&nbsp;<?echo $otel[name]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo $komnata[name]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo $firm[firm]?></font><br></td>
	<td  align='center'><font size='1'>&nbsp;<?echo $line[mesto]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo $line[transfer]?></font></td>
	<td align='center'><font <?
	if ($line[stoimreal] ==1)
	echo "color=blue style='font-weight:bold'";
?>

size='1'>&nbsp;<?echo $line[stoim]?></font></td></tr>
	<?
	$summ=$summ+$line[stoim];
	
	
	if($q==$n)
		{
			$q=0;
			do
				{
				$array_mesto[${'m'.$q}]=$array_fio[$q];
				$q+=1;
				}
			while($q<$n);
		} 
	}

	
	
//купленные, без мест в автобусе
$qwe3 = "select id_zakaz, data1, mesto, id_klient, otel, komnata, transfer, stoim from bron where ((id_avtobus='$id_avtobus') and (mesto='без мест')) order by otel, komnata, id_klient, id_zakaz ASC";
$Q3= mysql_query($qwe3) or  die("Query failed9 : " . mysql_error());

while ($line3 = mysql_fetch_array($Q3, MYSQL_ASSOC)) 
{	
	echo"<tr><td align='center'><font size='1'>$line3[id_zakaz]<br>+</font></td>";
	echo"<td  width=60%>";
	$query = "select  fio,birth, pass, phone from turist where id_zakaz=$line3[id_zakaz]";
	$result = mysql_query($query) or  die("Query failed2 : " . mysql_error()); 
		
	$query1 = "select  firm from klient where id_klient=$line3[id_klient]";
	$result1 = mysql_query($query1) or  die("Query failed2 : " . mysql_error()); 
	$firm = mysql_fetch_array($result1, MYSQL_ASSOC); 

	echo"<table class='mini' name=2  CELLSPACING='0' CELLPADDING='0' rules='all' frame='void'   width='100%'>";
	$countertourist = 1;
		while ($turist = mysql_fetch_array($result, MYSQL_ASSOC)) 
		{ 
		print "
		 	<tr>
		 	<td width=5%><font size='1'>&nbsp;$countertourist</font></td>
			<td width=50%><font size='1'>&nbsp;$turist[fio]</font></td>
			<td width=12%><font size='1'>&nbsp;$turist[birth]</font></td>
			<td width=20%><font size='1'>&nbsp;$turist[pass]</font></td>
			<td width=13%><font size='1'>&nbsp;$turist[phone]</font></td></tr>";
	        $countertourist++;
		}
	echo"</table></td>
	<td align='center'><font size='1'>&nbsp;$line3[otel]</font></td>
	<td align='center'><font size='1'>&nbsp;$line3[komnata]</font></td>
	<td align='center'><font size='1'>&nbsp;$firm[firm]</font><br></td>
	<td align='center'><font size='1'>&nbsp;$line3[mesto]</font></td>
	<td align='center'><font size='1'>&nbsp;$line3[transfer]</font></td>
	<td align='center'><font size='1'>&nbsp;$line3[stoim]</font></td></tr>";
	$summ=$summ+$line3[stoim];
} 

//бронированные без места в автобусе	

$qwe = "select id_zakaz, mesto, id_klient,id_tur, transfer, stoim,stoimreal from zakaz where ((id_avtobus='$id_avtobus') and (mesto='без мест')) order by id_tur, id_klient ASC";
$Q=mysql_query($qwe) or  die("Query failed : " . mysql_error());

while ($line = mysql_fetch_array($Q, MYSQL_ASSOC)) 
	{
	$query2 = "select id_otel, id_komnata, data1 from tur where id_tur='$line[id_tur]'";
	$result2 = mysql_query($query2) or  die("Query failed3 : " . mysql_error()); 
	$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
	
	$id_otel=$line2[id_otel];
	$id_komnata=$line2[id_komnata];
	
	
	echo"<tr><td align='center'><font size='1'>$line[id_zakaz]</font></td>";
	echo"<td width=60%>";
	
	$query = "select  fio, birth, pass, phone from turist where id_zakaz='$line[id_zakaz]'";
	$result = mysql_query($query) or  die("Query failed : " . mysql_error()); 
	
	$query1 = "select firm from klient where id_klient='$line[id_klient]'";
	$result1 = mysql_query($query1) or  die("Query failed2 : " . mysql_error()); 
	$firm = mysql_fetch_array($result1, MYSQL_ASSOC);

	$query3 = "select name from otel where id_otel='$id_otel'";
	$result3 = mysql_query($query3) or  die("Query failed4 : " . mysql_error()); 
	$otel = mysql_fetch_array($result3, MYSQL_ASSOC);

	$query6 = "select name from komnata where id_komnata='$id_komnata'";
	$result6 = mysql_query($query6) or  die("Query failed6 : " . mysql_error()); 
	$komnata = mysql_fetch_array($result6, MYSQL_ASSOC);


	echo"<table class='mini' name=1  CELLSPACING='0' CELLPADDING='0' rules='all' frame='void'   width='100%'>";
		while ($turist = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
			print "
		 	<tr>
		 	<td width=5%><font size='1'>&nbsp;$countertourist</font></td>
			<td width=50%><font size='1'>&nbsp;$turist[fio]</font></td>
			<td width=12%><font size='1'>&nbsp;$turist[birth]</font></td>
			<td width=20%><font size='1'>&nbsp;$turist[pass]</font></td>
			<td width=13%><font size='1'>&nbsp;$turist[phone]</font></td></tr>";
	        $countertourist++;
			}
	?>
	</table></td>
	<td  align='center'><font size='1'>&nbsp;<?echo $otel[name]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo$komnata[name]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo$firm[firm]?></font><br></td>
	<td  align='center'><font size='1'>&nbsp;<?echo$line[mesto]?></font></td>
	<td  align='center'><font size='1'>&nbsp;<?echo$line[transfer]?></font></td>
	
	<td align='center'><font
		<?
		if ($line[stoimreal] ==1)
	echo "color=blue style='font-weight:bold'";
?>		
	size='1'>&nbsp;<?echo$line[stoim]?></font></td></tr>
	
	<?$summ=$summ+$line[stoim];
}
echo "<tr><td colspan=7>ИТОГО</td><td>$summ</td></tr>";	
echo"</table>";


echo "</div>"; ############################################################ //распечатка туристов ##########################################################
?>
<br/><input type="button" onClick="javascript:CallPrint('printavtobus');" value="распечатать автобус" /><br/><br/>
<?
echo "<div id='printavtobus' style='width:1000px'>"; ############################################################ распечатка автобусов ##################################
//66
if(($id_avtobus>='300') && ($id_avtobus<'400'))
{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=3 ; $q++)
		{ 
		$name1=$q.'рядЛС-О_1эт';
		$name2=$q.'рядЛС-П_1эт';
		$name3=$q.'рядПС-П_1эт';
		$name4=$q.'рядПС-О_1эт';
				
		echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
		echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='3' bgcolor='#CCCCCC'>&nbsp;</td>";
		echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
		echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
		}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";
		
	for($q=1; $q<=14 ; $q++)
		{
		$name1=$q.'рядЛС-О_2эт';
		$name2=$q.'рядЛС-П_2эт';
		$name3=$q.'рядПС-П_2эт';
		$name4=$q.'рядПС-О_2эт';
		echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
		echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";
			if($q<>10)
			{
			echo" <td align='center'  width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			else echo "<td width=23% colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}
	echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
}     

//69
if(($id_avtobus>='400') && ($id_avtobus<'500'))
{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=6; $q++)
		{ 
		$name1=$q.'рядЛС-О_1эт';
		$name2=$q.'рядЛС-П_1эт';
		$name3=$q.'рядПС-П_1эт';
		$name4=$q.'рядПС-О_1эт';
				
		echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
		echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='6' bgcolor='#CCCCCC'>&nbsp;</td>";
			if (($q<>5)&&($q<>6))
			{
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			if($q==5) echo"<td align=center bgcolor=#CCCCCC colspan=2 rowspan=2>Дверь</td></tr>";
		}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";
$q=1;
$fl=0;		
	while($q<=13)
		{
		$name1=$q.'рядЛС-О_2эт';
		$name2=$q.'рядЛС-П_2эт';
		$name3=$q.'рядПС-П_2эт';
		$name4=$q.'рядПС-О_2эт';
		$name5=$q.'рядЦ';
		if ($q<>12) 
		{
			if(($q==8)&&($fl==0)) echo"<tr><td align=center bgcolor=#CCCCCC colspan=2>&nbsp;</td>";
			else 
				{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				}
		}
		if ($q==12) echo"<tr><td align=center bgcolor=#CCCCCC colspan=2>&nbsp;</td>";
		if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
		if ($q==13)
			{	
			echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
			}
		if ($q==2) echo"<td align=center bgcolor=#CCCCCC colspan=2>Дверь</td></tr>";
		if($q<>2)
			{
				if(($q==8)&&($fl==0)) 
					{echo"<td align=center bgcolor=#CCCCCC colspan=2>Дверь</td></tr>";$q-=1; $fl=1;}	
				else
					{
					echo" <td align='center'  width=23%>$name3<br>$array_mesto[$name3]</td>";
					echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
					}
			}
			$q+=1;
		}
	echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
}  



//69 - 2019
if(($id_avtobus>='1700') && ($id_avtobus<'1800'))
{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=5; $q++)
	{ 
		$name1=$q.'рядЛС-О_1эт';
		$name2=$q.'рядЛС-П_1эт';
		$name3=$q.'рядПС-П_1эт';
		$name4=$q.'рядПС-О_1эт';
		
		if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';
				
		echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
		echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
		
		if ($q==1) echo"<td rowspan='6' bgcolor='#CCCCCC'>&nbsp;</td>";
				
		echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
		echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
		
	}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";
			
		for($q=1; $q<=13; $q++)
		{
			$name1=$q.'рядЛС-О_2эт';
			$name2=$q.'рядЛС-П_2эт';
			$name3=$q.'рядПС-П_2эт';
			$name4=$q.'рядПС-О_2эт';
			$name5=$q.'рядЦ';

			if(($q<>9)&&($q<>2))
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==13)
				{
					echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
				echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			else
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>Дверь</td>
				</tr>";
			}
		}
			
	echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
}



//49 новый
if($id_avtobus<'100') 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=13 ; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		if(($q<>1)&&($q<>8))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				//if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==13)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==1)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td><td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь1</td>
				</tr>";
			}
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь2</td>
				</tr>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}
	
	
// 49 старый
/*if($id_avtobus<'100') 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=12 ; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='11' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==12)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
					
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}*/

//49 мерседес
if(($id_avtobus>='500') && ($id_avtobus<'600')) 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=13 ; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		if(($q<>7)&&($q<>6))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==13)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==6)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr>";
			}
		if($q==7)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}
	
//53
if(($id_avtobus>='600') && ($id_avtobus<'800')) 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=14; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		if(($q<>8)&&($q<>7))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==14)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==7)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь №1</td>
				</tr>";
			}
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}

	//61
	if(($id_avtobus>='1600') && ($id_avtobus<'1700'))
	{
		echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";

		echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
		for($q=1; $q<=16; $q++)
		{
			$name1=$q.'рядЛС-О';
			$name2=$q.'рядЛС-П';
			$name3=$q.'рядПС-П';
			$name4=$q.'рядПС-О';
			$name5=$q.'рядЦ';

			if(($q<>8)&&($q<>7))
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='15' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==16)
				{
					echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
				echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}

			if($q==7)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				echo"</td>
						<td align='center' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Вход / Дверь</td>
				</tr>";
			}
			if($q==8)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}


//52
if(($id_avtobus>='800') && ($id_avtobus<'900')) 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=14; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		
		if(($q<>8)&&($q<>2))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==2)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь №1</td>
				</tr>";
			}
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}

//51
if(($id_avtobus>='900') && ($id_avtobus<'1000')) 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=13; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		if(($q<>8))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==13)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}	
	
//51 мерседес
if(($id_avtobus>='1000') && ($id_avtobus<'1200')) 
{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=13; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		if(($q<>7))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==13)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==7)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
}


	//50 new
	if(($id_avtobus>='1200') && ($id_avtobus<'1300'))
	{
		echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";

		echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
		for($q=1; $q<=13; $q++)
		{
			$name1=$q.'рядЛС-О';
			$name2=$q.'рядЛС-П';
			$name3=$q.'рядПС-П';
			$name4=$q.'рядПС-О';

			if(($q<>9))
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
				echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}

			if($q==9)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь №2</td>
				</tr>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}



// 62 new
	if(($id_avtobus>='1300') && ($id_avtobus<'1400'))
	{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";

		echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
		for($q=1; $q<=3 ; $q++)
		{
			$name1=$q.'рядЛС-О_1эт';
			$name2=$q.'рядЛС-П_1эт';
			$name3=$q.'рядПС-П_1эт';
			$name4=$q.'рядПС-О_1эт';

			if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';

			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='4' bgcolor='#CCCCCC'>&nbsp;</td>";
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
		}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";

		for($q=1; $q<=13 ; $q++)
		{
			$name1=$q.'рядЛС-О_2эт';
			$name2=$q.'рядЛС-П_2эт';
			$name3=$q.'рядПС-П_2эт';
			$name4=$q.'рядПС-О_2эт';
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
			if($q<>8)
			{
				echo" <td align='center'  width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			else echo "<td width=23% colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}
		echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}


	// 84 new
	if(($id_avtobus>='1400') && ($id_avtobus<'1500'))
	{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";

		echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
		for($q=0; $q<=6; $q++)
		{
			$start = 0;
			if($q==0){
				$q = 1;
				$start = 1;
			}

			$name1=$q.'рядЛС-О_1эт';
			$name2=$q.'рядЛС-П_1эт';
			$name3=$q.'рядПС-П_1эт';
			$name4=$q.'рядПС-О_1эт';

			if($start == 0 && $q == 1) {
				echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>';
			}
			else {
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}

			if ($start == 1) echo "<td rowspan='7' bgcolor='#CCCCCC'>&nbsp;</td><td colspan='2' bgcolor='#CCCCCC' align='center'>&nbsp;Стол</td>";

			//if ($q==1) echo"<td rowspan='6' bgcolor='#CCCCCC'>&nbsp;</td>";
			if($q<>6 && $start == 0)
			{
				echo" <td align='center'  width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			if($q==6) echo "<td width=23% colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";

			if($start == 1) $q = 0;
		}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";

		for($q=1; $q<=17; $q++)
		{
			$name1=$q.'рядЛС-О_2эт';
			$name2=$q.'рядЛС-П_2эт';
			$name3=$q.'рядПС-П_2эт';
			$name4=$q.'рядПС-О_2эт';

			if($q==3)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				echo"</td><td align='center' colspan='2' bgcolor='#CCCCCC'>Дверь №1</td></tr>";
			}
			if(($q<>12)&&($q<>13)&&($q<>3))
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='17' bgcolor='#CCCCCC'>&nbsp;</td>";
				echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			if($q==12)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				echo"</td><td align='center' colspan='2' rowspan='2' bgcolor='#CCCCCC'>Дверь №2</td></tr>";
			}
			if($q==13)
			{
				echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}

		}
		echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}


	//66+2
	if(($id_avtobus>='1500') && ($id_avtobus<'1600'))
	{	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";

		echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
		for($q=0; $q<=4; $q++)
		{
			$name1=$q.'рядЛС-О_1эт';
			$name2=$q.'рядЛС-П_1эт';
			$name3=$q.'рядПС-П_1эт';
			$name4=$q.'рядПС-О_1эт';

			if($q==1) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Перегородка</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Перегородка</td></tr>';

			if($q==2) echo '<tr><td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td>
				<td colspan="2" bgcolor="#CCCCCC" align="center">&nbsp;Стол</td></tr>';

			if($q == 0) {
				echo '<tr><td colspan="2" align="center">&nbsp;Сопровождающий</td>';
			}
			else {
				echo"<tr><td align='center' width=23%>$name1<br>$array_mesto[$name1]</td>";
				echo" <td align='center' width=23%>$name2<br>$array_mesto[$name2]</td>";
			}

			if ($q==0) echo"<td rowspan='7' bgcolor='#CCCCCC'>&nbsp;</td>";
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
		}
		echo"</table><p>
		<table border='1' width=100% id='table1' bgcolor='#FFFFFF'>
			<tr>
				<td colspan='5' align='center' bgcolor='#CCCCCC'>2 этаж</td>
			</tr>";

		for($q=1; $q<=13; $q++)
		{
			$name1=$q.'рядЛС-О_2эт';
			$name2=$q.'рядЛС-П_2эт';
			$name3=$q.'рядПС-П_2эт';
			$name4=$q.'рядПС-О_2эт';
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='14' bgcolor='#CCCCCC'>&nbsp;</td>";
			if($q<>9)
			{
				echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
				echo"<td align='center' width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
			else echo "<td width=23% colspan='2' bgcolor='#CCCCCC' align='center'>Дверь</td>";
		}
		echo"</table><p>
	  </tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}

//48
/* старый 
if(($id_avtobus>='200') && ($id_avtobus<'300')) 
	{
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=13 ; $q++)
		{	
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
				
		if(($q<>7) && ($q<>8))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			if ($q==1) echo"<td rowspan='12' bgcolor='#CCCCCC'>&nbsp;</td>";
			if($q==13) echo"<td bgcolor='#CCCCCC'align='center' width='50' height='60'></td>";
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		if($q==7)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"<td align='center' width='100' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь2</td></tr>";
			}
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}
*/
// типа 48 на самом деле 53
if(($id_avtobus>='200') && ($id_avtobus<'300')) 
	{	
	echo"<table name='razmetka' width='800' border=0><tr><td valign='top'>";
	
	echo"<td ROWSPAN='2'>
		<table border='1' width=100% id='table2' bgcolor='#FFFFFF'>
			<tr>
			<td colspan='5' align='center' bgcolor='#CCCCCC'>1 этаж</td>
			</tr>";
	for($q=1; $q<=14 ; $q++)
		{
		$name1=$q.'рядЛС-О';
		$name2=$q.'рядЛС-П';
		$name3=$q.'рядПС-П';
		$name4=$q.'рядПС-О';
		$name5=$q.'рядЦ';
		
		
		if($q==2)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' bgcolor='#CCCCCC'>
					Дверь1</td>
				</tr>";
			}
		if(($q<>7)&&($q<>8)&&($q<>2))
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
				if ($q==1) echo"<td rowspan='13' bgcolor='#CCCCCC'>&nbsp;</td>";
				if ($q==14)
				{	
				echo"<td align='center'>$name5<br>$array_mesto[$name5]</td>";
				}
			echo" <td align='center' width=23%>$name3<br>$array_mesto[$name3]</td>";
			echo"<td align='center'  width=23%>$name4<br>$array_mesto[$name4]</td></tr>";
			}
		
		if($q==7)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			echo"</td>
						<td align='center' colspan='2' rowspan='2' bgcolor='#CCCCCC'>
					Дверь2</td>
				</tr>";
			}
		if($q==8)
			{
			echo"<tr><td align='center'  width=23%>$name1<br>$array_mesto[$name1]</td>";
			echo" <td align='center'  width=23%>$name2<br>$array_mesto[$name2]</td>";
			}
		}
		echo"</table><p></tr>
	     <tr><td></td></tr></table>";// таблица razmetka
	}
	
	echo "</div>"; ############################################################ //распечатка автобусов ##########################################################

}
}
?>    			
</body>
</html>