<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Отказы</title>
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
<?include("start.php");

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
	<a href='poisk.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a><p></p></p>
    </td></tr>";
	}


 /*if($_COOKIE['login']<>0)
{	
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>";*/
	
	
  	echo"<tr><td><span lang='ru'><font size='4'><b>&nbsp;Отказы</b></font><p></span>";

 include("start.php");
    /* Соединяемся, выбираем базу данных */
   
    
$qw=$_COOKIE['login'];
  
echo"    
<form action='table_del.php' method='GET'>

<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr><td align='right' style='font-size: 14pt;' width='30%'>Номер:</td><td>
<input type='text' name='nomer' value='0'><p></p>

</td></tr>";

if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==418  || $_COOKIE['login']==421){
echo "<tr>
  <td align='right' style='font-size: 14pt;'>Фирма:</td><td>";

$qwer = "SELECT id_klient, firm FROM klient order by firm";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='klient' size='1' style='font-size: 12pt;'> 
						<option value='0'> </option>"; 
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_klient]'> $line[firm]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>";
}
//else echo '<input type="hidden" name="klient" value="0">';

echo"<tr>
  <td align='right' style='font-size: 14pt;'>Гостиница:</td><td>";


$qwer = "SELECT name, city FROM otel order by city,name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='otel' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[name]'>$line[city] - $line[name] </option>";
	 
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
</td></tr>
</table>
</form>";

$otel=$_GET['otel'];
$nomer=$_GET['nomer'];

if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==418  || $_COOKIE['login']==421) { $id_klient=$_GET['klient']; }
else $id_klient=$_COOKIE['login'];

$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date1_3=$_GET['date1_3'];
$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;




if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==418  || $_COOKIE['login']==421){
	//если ничего не введено+
	if (($otel=='0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where (Z.id_klient=W.id_klient) order by Z.firm, W.id_zakaz";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.otel='$otel')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((W.id_klient='$id_klient')and (Z.id_klient=W.id_klient)) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	} 
	//по номeрy+
	if (($otel=='0')&&($id_klient=='0')&&($nomer<>'0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_zakaz='$nomer')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
    	//по дате от+
	if (($otel=='0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.data1>='$q1')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.otel='$otel')) order by Z.firm";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и дате от+
	if (($otel=='0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.data1>='$q1')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по фирме и дате от и отелю+
	if (($otel<>'0')&&($id_klient<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.id_klient='$id_klient')and (W.data1>='$q1')and (W.otel='$otel')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по дате от и отелю+
	if (($otel<>'0')&&($id_klient=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where ((Z.id_klient=W.id_klient)and (W.data1>='$q1')and (W.otel='$otel')) order by W.data1";
	$result = mysql_query($query) or die("Query failed : " . mysql_error());
	}

}	
else {
	
	$cond1 = $otel!='0' ? " and (W.otel='$otel')" : "";
	$cond2 = $nomer!='0' ? " and (W.id_zakaz='$nomer')" : "";
	$cond3 = $date1_1!='0' && $date1_2!='0' ? " and (W.data1>='$q1')" : "";
	
	$query = "SELECT W.id_zakaz,Z.firm,W.city,W.otel,W.komnata,W.data1,W.data2,W.stoim,W.info,W.mesto,W.sell,W.payment FROM del as W, klient as Z where (Z.id_klient=W.id_klient and (W.id_klient='$id_klient')".$cond1.$cond2.$cond3.") order by Z.firm, W.id_zakaz";
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
    print "<td background='images/4.jpg' align='center'><b>Покупка</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Оплата</b></td>\n";
	print "<td background='images/4.jpg' align='center'><b>Туристы</b></td>\n";
	
    print "</tr>\n";
	
	
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
	$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient=(select id_klient from del where id_zakaz = $line[id_zakaz])"),MYSQL_ASSOC);
	if($line[firm]=='контур'){print"<tr background='images/32.gif'>";}
	else {print  $data_user['is_turist']==0 ? "<tr>":"<tr bgcolor='#FFC0CB'>";}
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
if($line2[beznal]==1)
{
$line[id_zakaz]="<b>$id_zakaz</b><hr><img src='images/1.gif' alt='Безналичная оплата'>";
}
	foreach ($line as $col_value)
	{
         print "\t\t<td>$col_value</td>\n";
        }
	print"<td></font>";

// echo"<form action='delbron.php'>
	// <input type=hidden value='$id_zakaz' name=id_zakaz>
	// <input type=hidden value='$line2[id_klient]' name='id_klient'>"; 
// echo'<input type=submit value="Удалить" onClick="return window.confirm(\'Удалить?\')"></form>';
	
	

echo"<form action='turist_del.php'><input type=submit value='Подробнее'>
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
	<input type=hidden value='$line[payment]' name=payment>
	</form>";

		print "\t</tr>\n";
    }
    print "</table>\n";

	
}
echo"</td></tr></table>";
      /* Закрываем соединение */
    mysql_close($link);

?> 

</body>

</html>