<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Купленные туры</title>
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
function button_change(butt_id,id_zakaz)
{
document.getElementById('button_id'+butt_id).disabled=false;
} 
function change_data(id_zakaz,butt_id)
{
	//alert();
	//alert($("#input_id"+butt_id).val());
	$.ajax({
		url:"change_transfer_bron.php",
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
 include("start.php");
   $data_transfer=mysql_query("SELECT * FROM transfers");
$Transfers=array();
while ($line = mysql_fetch_array($data_transfer, MYSQL_ASSOC)) 
array_push($Transfers,$line[Name]);

 if($_COOKIE['login']<>0)
{	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
	{
$butt_id=1;
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>";
	}
	
	else
	{
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);
	echo"<tr><td>
	<p align='right'>
	<a href='poisk.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $data_user['is_turist']==1 ? "<a href='bronzakaz.php' style='text-decoration: none'><b>Забронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $data_user['is_turist']==0 ? "<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"";
	echo "<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a><p></p></p>
    </td></tr>";
	}

   	echo"<tr><td><span lang='ru'><font size='4'><b>&nbsp;Купленные туры</b></font><p></span>";

 include("start.php");
    /* Соединяемся, выбираем базу данных */
   
    
$qw=$_COOKIE['login'];
    if($qw==1 || $qw==234 || $qw==235 || $qw==418 || $qw==421)
	{    
echo"    


<form action='zakazbron.php' method='GET'>

<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr><td align='right' style='font-size: 14pt;' width='30%'>Номер:</td><td>
<input type='text' name='nomer' value='0'><p></p>

</td></tr>

<tr>
  <td align='right' style='font-size: 14pt;'>Фирма:</td><td>";

$qwer = "SELECT id_klient, firm FROM klient where is_turist=0 order by firm";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='klient' size='1' style='font-size: 12pt;'> 
						<option value='0'> </option>"; 
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_klient]'> $line[firm]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>

<tr>
  <td align='right' style='font-size: 14pt;'>Гостиница:</td><td>";


$qwer = "SELECT name, city FROM otel order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='otel' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[name]'> $line[name] - $line[city] </option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>
<tr>
  <td align='right' style='font-size: 14pt;'>Дата выезда от:</td><td>

<select name='date1_1' style='font-size: 12pt;'>
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

<select  name='date1_2' style='font-size: 12pt;'>
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
<input type='text' size=4 MAXLENGTH=4 name='date1_3' value='2024' style='font-size: 12pt;'></td>
</tr>
<tr>
  <td></td><td><input type='submit' name='reg' style='font-size: 14pt;' value='Поиск'></td>
</tr> </form>
<tr><td></td><td>
   <form action='zakazbron_vse.php' method='get'>
   <input type='submit' name='reg' style='font-size: 14pt;' value='Вывести все туры'>
   </form>
</td></tr>
</table>
</form>";

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
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where (Z.id_klient=W.id_klient) order by Z.firm, W.id_zakaz";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.otel='$otel')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((W.id_klient='$id_klient')and (Z.id_klient=W.id_klient)) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	} 
	//по номeрy+
	if (($otel=='0')&&($id_klient=='0')&&($nomer<>'0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_zakaz='$nomer')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
    	//по дате от+
	if (($otel=='0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.data1>='$q1')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.otel='$otel')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//gпо фирме и дате от+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.data1>='$q1')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и дате от и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.data1>='$q1')and (W.otel='$otel')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по дате от и отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.data1>='$q1')and (W.otel='$otel')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}


    print "<table border=1 cellpadding=1 cellspacing=0 align='center' width='95%' align=center BACKGROUND='images/d00032.gif'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Фирма</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Город</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Гостиница</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Комната</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Д.отъезда</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Д.<br>возвращения</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Цена</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Доп.<br>инфо</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Места<br>в автобусе</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Трансфер</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Оплата</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Туристы</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Договор</b></td>\n";
    print "</tr>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
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

$id_zakaz=$line[id_zakaz];
$query2 = "SELECT beznal FROM beznal WHERE id_zakaz='$id_zakaz'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient=(select id_klient from bron where id_zakaz='$line[id_zakaz]')"),MYSQL_ASSOC);

if($line2[beznal]==1)
{
$line[id_zakaz]="<b>$id_zakaz</b><hr><img src='images/1.gif' alt='Безналичная оплата'>";
}

$number=0;
//print_r($Transfers);
	foreach ($line as $col_value)
	{
if($number ==10)
{
echo  $data_user['is_turist']==0 ? "<td><select onclick='button_change($butt_id,$id_zakaz)' id='input_id$butt_id'>":"<td bgcolor='#FFC0CB'><select onclick='button_change($butt_id,$id_zakaz)' id='input_id$butt_id'>";
					foreach ($Transfers as $trans)
					{
						echo $trans==$col_value ? "<option selected value='$trans'>$trans</option>":"<option value='$trans'>$trans</option>";
					}
echo "</select><button  type='button'  onclick='change_data($id_zakaz,$butt_id)'  id='button_id$butt_id' disabled>Обновить</button></td>\n";
					$butt_id++;
}
else
print $data_user['is_turist']==0 ? "\t\t<td>$col_value</td>\n" : "\t\t<td bgcolor='#FFC0CB' >$col_value</td>\n";
	$number++;
        }

	print"<td></font>";

echo"<form action='delbron.php'>
	<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$line2[id_klient]' name='id_klient'>"; 
echo'<input type=submit value="Удалить" onClick="return window.confirm(\'Удалить?\')"></form>';
	
	
if($line[mesto]<>'без мест')
{
echo"	<form action='turist2.php'><input type=submit value='Подробнее'>
	<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$line[firm]' name=firm>
	<input type=hidden value='$line[city]' name=city>
	<input type=hidden value='$line[otel]' name=otel>
	<input type=hidden value='$line[komnata]' name=komnata>
	<input type=hidden value='$line[data1]' name=data1>
	<input type=hidden value='$line[data2]' name=data2>
	<input type=hidden value='$line[stoim]' name=stoim>
	<input type=hidden value='$infoinfo' name=info>
	<input type=hidden value='$line[mesto]' name=mesto>
	<input type=hidden value='$line[transfer]' name=transfer>
	<input type=hidden value='$line[payment]' name='payment'>
	<input type=hidden value='zakazbron' name='perenapr'>
	</form>";
}

else 
{
echo"<form action='turist_besmest.php'><input type=submit value='Подробнее'>
	<input type=hidden value='$id_zakaz' name='id_zakaz'>
	<input type=hidden value='$line2[id_klient]' name='id_klient'>
	<input type=hidden value='$line[firm]' name=firm>
	<input type=hidden value='$line[city]' name=city>
	<input type=hidden value='$line[otel]' name=otel>
	<input type=hidden value='$line[komnata]' name=komnata>
	<input type=hidden value='$line[data1]' name=data1>
	<input type=hidden value='$line[data2]' name=data2>
	<input type=hidden value='$line[stoim]' name=stoim>
	<input type=hidden value='$infoinfo' name=info>
	<input type=hidden value='$line[transfer]' name=transfer>
	<input type=hidden value='$line[payment]' name='payment'>
	<input type=hidden value='zakazbron' name='perenapr'>
	</form>";
}

 $query2 = "SELECT id_avtobus from bron where id_zakaz='$id_zakaz'"; 
 $result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
 $line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

if($line[mesto]<>'без мест'){
        if($line2[id_avtobus]< '100')
		{echo"<a href='avtobus49.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '200')&&($line2[id_avtobus] < '300'))
		{echo"<a href='avtobus48.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] < '200')&&($line2[id_avtobus] >= '100'))
		{echo"<a href='avtobus50.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '300') && ($line2[id_avtobus] < '400'))
		{echo"<a href='avtobus66.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '400') && ($line2[id_avtobus] < '500'))
		{echo"<a href='avtobus69.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '500') && ($line2[id_avtobus] < '600'))
		{echo"<a href='avtobus49m.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '600') && ($line2[id_avtobus] < '800'))
		{echo"<a href='avtobus53.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '800') && ($line2[id_avtobus] <'900'))
		{echo"<a href='avtobus52.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '900') && ($line2[id_avtobus] <'1000'))
		{echo"<a href='avtobus51.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '1000') && ($line2[id_avtobus] <'1200'))
		{echo"<a href='avtobus51m.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1200') && ($line2[id_avtobus] <'1300'))
		{echo"<a href='avtobus501.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1300') && ($line2[id_avtobus] <'1400'))
		{echo"<a href='avtobus62.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1400') && ($line2[id_avtobus] <'1500'))
		{echo"<a href='avtobus84.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1500') && ($line2[id_avtobus] <'1600'))
		{echo"<a href='avtobus661.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1600') && ($line2[id_avtobus] <'1700'))
		{echo"<a href='avtobus61.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1700') && ($line2[id_avtobus] <'1800'))
		{echo"<a href='avtobus691.php'>К автобусу</a></font></td>";}
    }
print  $data_user['is_turist']==0 ?"<td style='text-align:center'><a href='/dogovor1Clear.php?idz=$id_zakaz'>печать договора</a>":"<td style='text-align:center'><a href='/dogovor_bron.php?idz=$id_zakaz&stoim=$line[stoim]&start=$line[data1]&end=$line[data2]&city=$line[city]'>печать договора</a>";
	echo	"<br/>
     		<a href='/dopdogovorbron.php?idz=$id_zakaz&stoim=$line[stoim]&start=$line[data1]&end=$line[data2]&trans=$line[transfer]&city=$line[city]&otel=$line[otel]&komnata=$line[komnata]'>печать приложения</a><br/>
     		<a href='/dopdogovorput.php?idz=$id_zakaz'>печать путевки</a>
     		</td>";
        print "\t</tr>\n";
    
    }
    print "</table>\n";

	}// для контура

    else 
	{      
	  if($qw<>0)
		{
    	$query = "SELECT W.id_zakaz,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.transfer,W.payment FROM bron as W, klient as Z where ((W.id_klient='$qw')and(Z.id_klient=W.id_klient)) order by data1";
    	$result = mysql_query($query) or die("Query failed : " . mysql_error());

    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Город</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Гостиница</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Комната</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата отъезда</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата<br>возвращения</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Стоимость</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Доп.<br>инфо</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Места<br>в автобусе</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Трансфер</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Оплата</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Туристы</b></td>\n";

    print "</tr>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
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

$id_zakaz=$line[id_zakaz];
$query2 = "SELECT beznal FROM beznal WHERE id_zakaz='$id_zakaz'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient=(select id_klient from zakaz where id_zakaz='$line[id_zakaz]')"),MYSQL_ASSOC);

if($line2[beznal]==1)
{
$line[id_zakaz]="<b>$id_zakaz</b><hr><img src='images/1.gif' alt='Безналичная оплата'>";
}

$number=0;
        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";

        }print"<td></font>";
$firm_i=$_COOKIE['login']; 
$query2 = "SELECT firm FROM klient where id_klient='$firm_i'";
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2=mysql_fetch_array($result2, MYSQL_ASSOC);
$firm=$line2[firm]; 

if($line[mesto]<>'без мест')
{
echo"	<form action='turist2.php'><input type=submit value='Подробнее'>
	<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$firm' name=firm>
	<input type=hidden value='$line[city]' name=city>
	<input type=hidden value='$line[otel]' name=otel>
	<input type=hidden value='$line[komnata]' name=komnata>
	<input type=hidden value='$line[data1]' name=data1>
	<input type=hidden value='$line[data2]' name=data2>
	<input type=hidden value='$line[stoim]' name=stoim>
	<input type=hidden value='$infoinfo' name=info>
	<input type=hidden value='$line[mesto]' name=mesto>
	<input type=hidden value='$line[transfer]' name=transfer>
	<input type=hidden value='$line[payment]' name='payment'>
	<input type=hidden value='zakazbron' name='perenapr'>
	</form>";
}
else 
{
echo"<form action='turist_besmest.php'><input type=submit value='Подробнее'>
	<input type=hidden value='$id_zakaz' name='id_zakaz'>
	<input type=hidden value='$line[city]' name=city>
	<input type=hidden value='$firm' name=firm>
	<input type=hidden value='$line[otel]' name=otel>
	<input type=hidden value='$line[komnata]' name=komnata>
	<input type=hidden value='$line[data1]' name=data1>
	<input type=hidden value='$line[data2]' name=data2>
	<input type=hidden value='$line[stoim]' name=stoim>
	<input type=hidden value='$infoinfo' name=info>
	<input type=hidden value='$line[transfer]' name=transfer>
	<input type=hidden value='$line[payment]' name='payment'>
	<input type=hidden value='zakazbron' name='perenapr'>
	</form>";
}

 $query2 = "SELECT id_avtobus from bron where id_zakaz='$id_zakaz'"; 
 $result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
 $line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

if($line[mesto]<>'без мест'){
        if($line2[id_avtobus]< '100')
		{echo"<a href='avtobus49.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '200')&&($line2[id_avtobus] < '300'))
		{echo"<a href='avtobus48.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] < '200')&&($line2[id_avtobus] >= '100'))
		{echo"<a href='avtobus50.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '300') && ($line2[id_avtobus] < '400'))
		{echo"<a href='avtobus66.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '400') && ($line2[id_avtobus] < '500'))
		{echo"<a href='avtobus69.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '500') && ($line2[id_avtobus] < '600'))
		{echo"<a href='avtobus49m.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '600') && ($line2[id_avtobus] < '800'))
		{echo"<a href='avtobus53.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '800') && ($line2[id_avtobus] <'900'))
		{echo"<a href='avtobus52.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '900') && ($line2[id_avtobus] <'1000'))
		{echo"<a href='avtobus51.php'>Автобус</a></font></td>";}
	if(($line2[id_avtobus] >= '1000') && ($line2[id_avtobus] <'1200'))
		{echo"<a href='avtobus51m.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1200') && ($line2[id_avtobus] <'1300'))
		{echo"<a href='avtobus501.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1300') && ($line2[id_avtobus] <'1400'))
		{echo"<a href='avtobus62.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1400') && ($line2[id_avtobus] <'1500'))
		{echo"<a href='avtobus84.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1500') && ($line2[id_avtobus] <'1600'))
		{echo"<a href='avtobus661.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1600') && ($line2[id_avtobus] <'1700'))
		{echo"<a href='avtobus61.php'>К автобусу</a></font></td>";}
	if(($line2[id_avtobus] >= '1700') && ($line2[id_avtobus] <'1800'))
		{echo"<a href='avtobus691.php'>К автобусу</a></font></td>";}
    }
    
        print "\t</tr>\n";

    
    }
    print "</table><p>\n";
		

		}
	}

}
echo"</td></tr></table>";
      /* Закрываем соединение */
    mysql_close($link);

?> 

</body>

</html>