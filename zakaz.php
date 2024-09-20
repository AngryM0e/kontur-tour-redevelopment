<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Забронированные туры</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function confirmAction(e){
	let confirmPass = prompt('Введите пароль для подтверждения действия', '');

	$.ajax({
		url:"checkConfirmPassword.php",
		method:"POST",
		data:{password: confirmPass},
		success:function(data){
			response = JSON.parse(data);
			console.log(response);
			if(response['success']=== true){
				alert(response['general_message']);
				e.target.submit();
			}else{
				alert(response['general_message']);
			}
		}
	})

	return false;
}
function button_change(butt_id,id_zakaz)
{
document.getElementById('button_id'+butt_id).disabled=false;
} 
function change_data(id_zakaz,butt_id)
{
	//alert();
	//alert($("#input_id"+butt_id).val());
	$.ajax({
		url:"change_transfer.php",
		method:"POST",
		data:{id_zakaz:id_zakaz,transfer:document.getElementById("input_id"+butt_id).value},
		success:function(data)
		{
			//alert("Изменено");
document.getElementById('button_id'+butt_id).disabled=true;
		},
		error:function(data)
		{
			
			alert('ошибка');
		}
		
	}
	
	)	
	
}</script>
</td>
</tr>
<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{$butt_id=1;
echo"    <tr><td>
	<p align='right'>
	<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
        </p>
    </td></tr>
   <tr>
      <td><p><p>
<font size=4><b>&nbsp;  Забронированные туры</b></font><br>";


 include("start.php");
mysql_query('set names utf8');
   $data_transfer=mysql_query("SELECT * FROM transfers");
$Transfers=array();
while ($line = mysql_fetch_array($data_transfer, MYSQL_ASSOC)) 
array_push($Transfers,$line[Name]);
echo"<form action='zakaz.php' method='GET'>

<table  width='100%'>
<tr><td align='right' style='font-size: 14pt;' width='30%'>Номер:</td><td>
<input type='text' name='nomer' value='0'><p></p>

</td></tr>

<tr>
  <td align='right' style='font-size: 14pt;'>Фирма:</td><td>";

$qwer = "SELECT id_klient, firm FROM klient where is_turist!=1  order by firm";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT id='klient' name='klient' size='1' style='font-size: 12pt;'> 
						<option value='0'> </option>"; 
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_klient]'> $line[firm]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>

<tr>
  <td align='right' style='font-size: 14pt;'>Гостиница:</td><td>";


$qwer = "SELECT id_otel,name, city FROM otel order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT id='otel' name='otel' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_otel]'> $line[name] - $line[city] </option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>
<tr>
  <td align='right' style='font-size: 14pt;'>Дата выезда от:</td><td>

<select id='date1_1' name='date1_1' style='font-size: 12pt;'>
<option value='0'></option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

<select id='date1_2' name='date1_2' style='font-size: 12pt;'>
<option value='0'></option>
<option value='1'>январь</option>
<option value='2'>феврарь</option>
<option value='3'>март</option>
<option value='4'>апрель</option>
<option value='5'>май</option>
<option value='6'>июнь</option>
<option value='7'>июль</option>
<option value='8'>август</option>
<option value='9'>сентябрь</option>
<option value='10'>октябрь</option>
<option value='11'>ноябрь</option>
<option value='12'>декабрь</option>
</select>
<input type='text' size=4 MAXLENGTH=4 id='date1_3' name='date1_3' value='2024' style='font-size: 12pt;'></td>
</tr>
<tr>
  <td></td><td><input type='submit' name='reg' style='font-size: 14pt;' value='Поиск'></td>
</tr> </form>
<tr><td></td><td>
   <form action='zakaz_vse.php' method='get'>
   <input type='submit' name='reg' style='font-size: 14pt;' value='Вывести все туры'>
   </form>
</td></tr>
</table>
</form>
<p></p>";

$otel=$_GET['otel'];
$nomer=$_GET['nomer'];
$id_klient=$_GET['klient'];
$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date1_3=$_GET['date1_3'];
$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;

	//если ничего не введено+
	if (($otel=='0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)) order by A.data1,Q.id_zakaz"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and(B.id_otel='$otel')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (Q.id_klient='$id_klient')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	} 
	//по номeрy+
	if (($otel=='0')&&($id_klient=='0')&&($nomer<>'0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (Q.id_zakaz='$nomer')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
    	//по дате от+
	if (($otel=='0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (A.data1>='$q1')) order by A.data1,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (Q.id_klient='$id_klient')
and(B.id_otel='$otel')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//gпо фирме и дате от+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (Q.id_klient='$id_klient')
and (A.data1>='$q1')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и дате от и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (Q.id_klient='$id_klient')
and (A.data1>='$q1')
and(B.id_otel='$otel')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по дате от и отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Z.id_klient=Q.id_klient)
and (A.data1>='$q1')
and(B.id_otel='$otel')) order by A.data1,Q.data,Q.id_zakaz"; 
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}

echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=blue size=3><b>Голубым отмечена окончательная стоимость тура!(с дополнительными местами и комиссионным вознагрождением)</b></font></center>
</td></tr></table><p>";
   
echo"<form onsubmit='return confirmAction(event);' name='forma' action='action.php' method=get>";	
echo'<input type=hidden name="flag" id="flag">';
echo"<table border=0 cellpadding=2 cellspacing=0 align='center' width='95%'><tr><td>";
echo'<input type=submit name="str" value="Подтвердить" onClick="document.forma.flag.value=1">';
echo'<input type=submit name="str" value="Отказать" onClick="document.forma.flag.value=2"></tr></td></table>';	
	
    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center' ><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center' ><b>Фирма</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b><font color=red>Дата<br>брони</font></b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Д.<br>выезда</b></td>\n";
    print "<td background='images/4.jpg' align='center' ><b>Д.<br>возвращения</b></td>\n";
    print "<td background='images/4.jpg' align='center' ><b>Город</b></td>\n";
    print "<td background='images/4.jpg' align='center' ><b>Гостиница</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Комната</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Цена</b></td>\n";
    print "<td background='images/4.jpg' align='center' ><b>Доп.<br>инфо.</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Трансфер</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Место в<br>автобусе</b></td>";
    print "<td background='images/4.jpg' align='center'><b>Оплата</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Выбрать</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Договор</b></td>\n";
    print "</tr>\n";
    
$data=date("Y-m-d");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
        print "\t<tr>\n";
		$d=substr($line[data1],8);
		$m=strtok(substr($line[data1],5),'-');
		$g=strtok($line[data1],'-');
		$line[data1]=$d.'-'.$m.'-'.$g;

		$d=substr($line[data2],8);
		$m=strtok(substr($line[data2],5),'-');
		$g=strtok($line[data2],'-');
		$line[data2]=$d.'-'.$m.'-'.$g;
		
		$infoinfo = $line[info];
		$line[info]="$line[info] <br><a href='/notes.php?id_zakaz=$line[id_zakaz]'>посмотреть переписку</a>";

		$need_data=date("Y-m-d ", time()-(60*(60*(24*3))));
		$qw=$line[data];
		if ($qw <=$need_data)
			{
				$d=substr($line[data],8);
				$m=strtok(substr($line[data],5),'-');
				$g=strtok($line[data],'-');
				$line[data]=$d.'-'.$m.'-'.$g;
				$line[data]="$line[data]<br><font color=red size=1><b>ПРОСРОЧЕНО!</b></font>";
			}

		else 
			{
				$d=substr($line[data],8);
				$m=strtok(substr($line[data],5),'-');
				$g=strtok($line[data],'-');
				$line[data]=$d.'-'.$m.'-'.$g;
			}

$query1 = "SELECT stoimreal FROM zakaz WHERE id_zakaz='$line[id_zakaz]'"; 
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
$line1 = mysql_fetch_array($result1, MYSQL_ASSOC);
if($line1[stoimreal]==1)
{
$line[stoim]="<font color=blue><b>$line[stoim]</b></font>";
}

$id_zakaz=$line[id_zakaz];
$payment = $line[payment];
$line[payment] = $payment."<br/><a href='/pwnew.php?id_zakazpay=$id_zakaz&addpay=$payment'>оплатить</a>";

$query2 = "SELECT beznal FROM beznal WHERE id_zakaz='$line[id_zakaz]'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient=(select id_klient from zakaz where id_zakaz='$line[id_zakaz]')"),MYSQL_ASSOC);
if($line2[beznal]==1)
{
$line[id_zakaz]="<b>$id_zakaz</b><hr><img src='images/1.gif' alt='Безналичная оплата'>";
}

	$number=0;
    foreach ($line as $col_value) 
	{
		if($line[firm]=='контур'){ 
		
			
		
			if($number == 10)
				{	
					echo "<td background='images/32.gif'><select id='input_id$butt_id' onclick='button_change($butt_id,$id_zakaz)'>";
					foreach ($Transfers as $trans)
					{
						echo $trans==$col_value ? "<option selected value='$trans'>$trans</option>":"<option value='$trans'>$trans</option>";
					}
		//print "\t\t<td><input id='input_id$butt_id'type=text onclick='button_change($butt_id,$line[id_otel],$line[id_komnata],$line[id_tur],$id_klient,$id_zakaz)' value='$col_value'></input><button   onclick='change_data($butt_id)'  id='button_id$butt_id' disabled>Обновить</button></td>\n";
					
					echo "</select><button  type='button'  onclick='change_data($id_zakaz,$butt_id)'  id='button_id$butt_id' disabled>Обновить</button></td>\n";
					$butt_id++;
				}
				else
				print "\t\t<td background='images/32.gif'>$col_value</td>\n";
		
		
		
		}
        else {
			
				if($number == 10)
				{	
					echo  $data_user['is_turist']==0 ? "<td><select onclick='button_change($butt_id,$id_zakaz)' id='input_id$butt_id'>":"<td bgcolor='#FFC0CB'><select onclick='button_change($butt_id,$id_zakaz)' id='input_id$butt_id'>";
					foreach ($Transfers as $trans)
					{
						echo $trans==$col_value ? "<option selected value='$trans'>$trans</option>":"<option value='$trans '>$trans</option>";
					}
		//print "\t\t<td><input id='input_id$butt_id'type=text onclick='button_change($butt_id,$line[id_otel],$line[id_komnata],$line[id_tur],$id_klient,$id_zakaz)' value='$col_value'></input><button  type='button'  onclick='change_data($butt_id,$line[id_otel],$line[id_komnata],$line[id_tur],$id_klient,$id_zakaz)'  id='button_id$butt_id' disabled>Обновить</button></td>\n";
					
					echo "</select><button  type='button'  onclick='change_data($id_zakaz,$butt_id)'  id='button_id$butt_id' disabled>Обновить</button></td>\n";
					$butt_id++;
				}
				else
				{
print $data_user['is_turist']==0 ? "\t\t<td>$col_value</td>\n" : "\t\t<td bgcolor='#FFC0CB' >$col_value</td>\n";
//print "\t\t<td>$col_value</td>\n";
}
			
        }
		$number++;
    }
	if($line[firm]=='контур'){print"<td background='images/32.gif'>";}
	else {print"<td>";}

$query2 = "SELECT id_klient FROM zakaz where id_zakaz='$id_zakaz'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$id_klient=$line2[id_klient];

 
 ?>
<a href="restoim.php?id_zakaz=<? echo $id_zakaz ?>&stoim=<? echo $line[stoim] ?>">Стоимость</a><br>
<?
echo"
<input type=checkbox name='viborka[]' value='$id_zakaz'><br>
<input type=hidden name='id_klient[]' value='$id_klient'>
<input type=hidden name='stoim' value='$line[stoim]'>";



if($line[mesto]<>'без мест')
	{	
	$perenapr='zakaz'; 
?>
<a href="turist1.php?id_zakaz=<? echo $id_zakaz?>&perenapr=<? echo $perenapr ?>&id_klient=<? echo $id_klient ?>&firm=<? echo addslashes($line[firm])?>&city=<? echo urlencode($line[city])?>&otel=<? echo urlencode($line[name1])?>&komnata=<? echo $line[name2]?>&data1=<? echo $line[data1]?>&data2=<? echo $line[data2]?>&stoim=<? echo $line[stoim]?>&info=<? echo $infoinfo?>&transfer=<? echo $line[transfer]?>">Подробно</a><br>
<?
	}
else 
	{
	$perenapr='zakaz';
?>
<a href="turist_besmest1.php?id_zakaz=<? echo $id_zakaz ?>&mesto=<? echo $line[mesto]?>&perenapr=<? echo $perenapr ?>&id_klient=<? echo $id_klient ?>&firm=<? echo addslashes($line[firm])?>&city=<? echo $line[city]?>&otel=<? echo urlencode($line[name1])?>&komnata=<? echo $line[name2]?>&data1=<? echo $line[transfer]?>?>">Подробно</a><br>
<?
	}

 $query3 = "SELECT id_avtobus from zakaz where id_zakaz='$id_zakaz'"; 
 $result3 = mysql_query($query3) or die("Query failed : " . mysql_error());
 $line3 = mysql_fetch_array($result3, MYSQL_ASSOC);

	
if($line[mesto]<>'без мест'){
    if($line3[id_avtobus]< '100')
		{echo"<a href='avtobus49.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '200')&&($line3[id_avtobus] < '300'))
		{echo"<a href='avtobus48.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] < '200')&&($line3[id_avtobus] >= '100'))
		{echo"<a href='avtobus50.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '300') && ($line3[id_avtobus] < '400'))
		{echo"<a href='avtobus66.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '400') && ($line3[id_avtobus] < '500'))
		{echo"<a href='avtobus69.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '500') && ($line3[id_avtobus] < '600'))
		{echo"<a href='avtobus49m.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '600') && ($line3[id_avtobus] < '800'))
		{echo"<a href='avtobus53.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '800') && ($line3[id_avtobus] <'900'))
		{echo"<a href='avtobus52.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '900') && ($line3[id_avtobus] <'1000'))
		{echo"<a href='avtobus51.php'>Автобус</a></font></td>";}
	if(($line3[id_avtobus] >= '1000') && ($line3[id_avtobus] <'1200'))
		{echo"<a href='avtobus51m.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1200') && ($line3[id_avtobus] <'1300'))
		{echo"<a href='avtobus501.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1300') && ($line3[id_avtobus] <'1400'))
		{echo"<a href='avtobus62.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1400') && ($line3[id_avtobus] <'1500'))
		{echo"<a href='avtobus84.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1500') && ($line3[id_avtobus] <'1600'))
		{echo"<a href='avtobus661.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1600') && ($line3[id_avtobus] <'1700'))
		{echo"<a href='avtobus61.php'>К автобусу</a></font></td>";}
	if(($line3[id_avtobus] >= '1700') && ($line3[id_avtobus] <'1800'))
		{echo"<a href='avtobus691.php'>К автобусу</a></font></td>";}
    }
    
     print $data_user['is_turist']==1 ?"<td style='text-align:center'><a href='/dogovor1Clear.php?idz=$id_zakaz'>печать договора</a><br/>":"<td style='text-align:center'><a href='/dogovor.php?idz=$id_zakaz&stoim=$line[stoim]'>печать договора</a><br/>";
     	echo	"<a href='/dopdogovor.php?idz=$id_zakaz'>печать приложения</a><br/>
     		<a href='/dopdogovorput.php?idz=$id_zakaz&stoim=$line[stoim]'>печать путевки</a>
     		</td>";
	 print "\t</tr>\n";
    
    }
    print "</table>\n";
echo '</form>';
    
mysql_close($link);
}

?> 


   </tr> 
      
      </td>
   </tr>
</table>
</body>

</html>