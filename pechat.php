<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Подтверждение</title>
</head>

<body link='black'>
<table width='98%' align=center CELLSPACING=0>
<tr>
<td width='60%' height='200'><img src='images/1022.png' align='left'>
<b><font size="6" face="Comic Sans MS">КОНТУР</font><p>
<font size="4">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
<br>kontur-tour.ru
</font></b>
</td>
</tr></table>

<?
//<td width='60%' height='200' background='images/1001.png'>
$id_zakaz=$_GET['id_zakaz'];
$city=$_GET['city'];
$firm=$_GET['firm'];
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$data1=$_GET['data1'];
$data2=$_GET['data2'];
$stoim=$_GET['stoim'];
$info=$_GET['info'];
$mesto=$_GET['mesto'];


include("start.php");


/*определяем забронированный это тур или купленный*/
$query1 = "SELECT id_klient FROM bron where id_zakaz='$id_zakaz'";
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
$line1=mysql_fetch_array($result1, MYSQL_ASSOC);
$id_klient=$line1['id_klient'];

if ($id_klient==NULL)
{
$query1 = "SELECT id_klient, stoimreal FROM zakaz where id_zakaz='$id_zakaz'";
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
$line1=mysql_fetch_array($result1, MYSQL_ASSOC);
$id_klient=$line1['id_klient'];
$stoimreal=$line1['stoimreal'];
if($stoimreal<>1) $stoim='стоимость тура еще не уточнена';
if($stoimreal==1) $stoim=substr($stoim,20);
}



$query2 = "SELECT firm,adres, telefon,mail,director,sotoviy FROM klient where id_klient='$id_klient'";
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2=mysql_fetch_array($result2, MYSQL_ASSOC);



echo"
<p align='center'><b><span lang='ru'><font size='2'>Подтверждение</font></span></b></p>";
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);

echo $data_user['is_turist'] == 0 ? "<p align='left'><b><span lang='ru'><font size='2'>Заказчик</font></span></b></p>
<hr>
<table border='0' width='100%' id='table1' cellspacing='0'>
	<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>название фирмы, город</font></span></td>
		<td><b><font size='2'>$line2[firm] ($line2[adres])</font></b></td>
	</tr>
	<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>сотовый телефон</font></span></td>
		<td><b><font size='2'>$line2[sotoviy]</font></b></td>
	</tr>
	<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>телефон фирмы</font></span></td>
		<td><b><font size='2'>$line2[telefon]</font></td>
	</tr>
	<tr>
		<td align='right' width='20%'><font size='2'>e-mail</font></td>
		<td><b><font size='2'>$line2[mail]</font></b></td>
	</tr>
	<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>директор</font></span></td>
		<td><b><font size='2'>$line2[director]</font></b></td>
	</tr>
</table>":"";

echo "
<p><b><span lang='ru'><font size='2'>Заявка</font></span></b></p>
<hr>
<table border='0' width='100%' id='table2' cellspacing='0'>
	<tr>
		<td width='20%' align='right'><span lang='ru'><font size='2'>город</font></span></td>
		<td><b><font size='2'>$city</font></b></td>
	</tr>
	<tr>
		<td width='20%' align='right'><span lang='ru'><font size='2'>дата тура</font></span></td>
		<td><b><font size='2'>с $data1 по $data2</font></b></td>
	</tr>
	<tr>
		<td width='20%' align='right'><span lang='ru'><font size='2'>размещение</font></span></td>
		<td><span lang='ru'><b><font size='2'>гостиница $otel</font></b></span></td>
	</tr>
	<tr>
		<td width='20%' align='right'><span lang='ru'><font size='2'>категория номера</font></span></td>
		<td><b><font size='2'>$komnata</font></b></td>
	</tr>
	<tr>
		<td width='20%' align='right'><span lang='ru'><font size='2'>доп.информация</font></span></td>
		<td><b><font size='2'>$info</font></b></td>
	</tr>
</table><p>";

  
$query = "SELECT fio, birth, pass FROM turist where id_zakaz='$id_zakaz' order by fio";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='100%'>\n";
    print "<tr>\n";
    print "<td  align='center'><font size='2'>Ф.И.О.</font></td>\n";
    print "<td  align='center'><font size='2'>Дата рождения</font></td>\n";
    print "<td  align='center'><font size='2'>Паспорт/свидетельство</font></td>\n";
    print "</tr>\n";
    
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF><b><font size='2'>$col_value</font></b></td>\n";
        }
        print "\t</tr>\n";
    
    }
    print "</table><p>\n";


$data=date("d-m-Y");
echo"<table border='0' width='100%' cellspacing='0' id='table3'>
	<tr>
		<td align='right' width='20%' height='22'><span lang='ru'><font size='2'>места в 
		автобусе</font></span></td>
		<td height='22'><b><font size='2'>$mesto</font></b></td>
	</tr>";

	echo $data_user['is_turist']==1 ? "":"<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>ответственный менеджер</font></span></td>
		<td><b><font size='2'>$line2[director]</font></b></td>
	</tr>";
echo $data_user['is_turist']==1 ? "<tr><td align='center' colspan='2'  >ОПЕРАТОР ИМЕЕТ ПРАВО<br> ВНОСИТЬ ИЗМЕНЕНИЕ В РАССАДКУ ТУРИСТОВ<br>  И КОРРЕКТИРОВАТЬ МЕСТА В АВТОБУСЕ <br> (В СЛУЧАЕ НЕКОРРЕКТНОЙ ПОСАДКИ ТУРИСТОВ И В СЛУЧАЕ ЗАМЕНЫ АВТОБУСА)!</td></tr>":"";
	echo "<tr>
		<td align='right' width='20%'><span lang='ru'><font size='2'>к оплате</font></span></td>
		<td><b><font size='2'>$stoim</font></b></td>
	</tr>
</table>
<p><span lang='ru'><b><font size='2'>Дата </font></b> $data </span></p>
<p><span lang='ru'><b><font size='2'>Печать</font><img border='0' src='images/pechat.jpg' width='118' height='125'></b></span></p>";

?> 
</body>
</html>