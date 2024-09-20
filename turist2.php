<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Клиенты</title>
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
  <style>
   .c {
    border: 1px solid #333; /* Рамка */
    display: inline-block;
    padding: 1px 10px; /* Поля */
    text-decoration: none; /* Убираем подчёркивание */
background: #efefef;
    color: #000; /* Цвет текста */
  }

  </style>
<script>
function go_print(id_z,stoim,data1,city,data2)
{var ct = city.toLowerCase();
window.location='dogovor1.php?idz='+id_z+'&stoim='+stoim+'&data1='+data1+'&city='+ct+'&data2='+data2;

}
</script>
<?
include("start.php");
$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);
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
	<a href='bron.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $data_user['is_turist']==1 ? "<a href='bronzakaz.php' style='text-decoration: none'><b>Забронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo"
	<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $data_user['is_turist']==0 ? "<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"";
echo"
	<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a></p>
    </td></tr>";
	}
   
echo"<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';} 

echo"</b></font></span></td></tr><tr><td>";
                             
 include("start.php");
  

$id_zakaz=$_GET['id_zakaz'];
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$data1=$_GET['data1'];
$data2=$_GET['data2'];
$stoim=$_GET['stoim'];
$info=$_GET['info'];
$mesto=$_GET['mesto'];
$firm=$_GET['firm'];
$city=$_GET['city'];
$perenapr=$_GET['perenapr'];
$transfer=$_GET['transfer'];

 $query1 = "SELECT id_avtobus,payment FROM bron where id_zakaz='$id_zakaz'";
 $result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
 $line=mysql_fetch_array($result1, MYSQL_ASSOC);
 $id_avtobus=$line[id_avtobus];
  $payment=$line[payment];	
 include("id_avtobus.php");

	$query2 = "SELECT name FROM $nameavtobus where id_avtobus='$id_avtobus'";
 	$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
 	$line2=mysql_fetch_array($result2, MYSQL_ASSOC);

echo"<tr><td><font size=3>
<table><tr><td><b>№ заказа:</b></td><td>$id_zakaz</td></tr>
<tr><td><b>Фирма:</b></td><td>$firm<br></td></tr>
<tr><td><b>Город:</b></td><td>$city<br></td></tr>
<tr><td><b>Отель:</b></td><td>$otel<br></td></tr>
<tr><td><b>Комната:</b></td><td>$komnata<br></td></tr>
<tr><td><b>Дата тура:</b></td><td>с $data1 по $data2<br></td></tr>
<tr><td><b>Стоимость:</b></td><td>$stoim рублей</td></tr>";
echo"<tr><td valign=top><b>Доп. инфо.:</b></td><td> $info &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/notes.php?id_zakaz=$id_zakaz'>посмотреть переписку</a>";
/*<form action='redopinfobron.php' method='get'>
<input type=hidden value='$id_zakaz' name='id_zakaz'>
<input type=hidden value='$info' name='info'>
<input type=hidden value='$perenapr' name='perenapr'><input type=submit value="Изменить!" onClick="return window.confirm(\'Изменить?\')"></form>";*/
echo'</td></tr></table>';
echo"
<b>Места в автобусе:</b> $mesto<br>
<b>Автобус:</b> $line2[name]<br>
<b>Туристы:</b><br></font>";

    $query = "SELECT id_turist,fio, birth, pass, phone FROM turist where id_zakaz='$id_zakaz' order by fio";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
 print "<td background='images/4.jpg' align='center'><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Ф.И.О.</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата рождения</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Паспорт/свидетельство</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Телефон</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Изменить</b></td>\n";
    print "</tr>\n";
    
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td>";


	echo"<form name='returist' action='returist.php' method='get'>
	<input type=hidden value='$line[id_turist]' name='id_turist'>
	<input type=hidden value='$line[fio]' name='fio'>
	<input type=hidden value='$line[birth]' name='birth'>
	<input type=hidden value='$line[pass]' name='pass'>
	<input type=hidden value='$line[phone]' name='phone'>
	<input type=hidden value='$perenapr' name='perenapr'>";

echo'<input type=submit value="Изменить" onClick="return window.confirm(\'Изменить?\')"></form>';

        print "\t</tr>\n";
    
    }
    print "</table>\n";
/*echo $id_zakaz." ";
echo $payment;*/

echo"<p></p><p></p><center><table border=0><tr><td width='25%' align='center'></td>";

echo "<td width='8%'align='right'><form action='pechat.php'>";
if($data_user['is_turist'] == 0){
echo "<input type=submit value='На печать'>";
}
if($payment==$stoim){
echo  $data_user['is_turist'] == 0 ?"<input type=submit value='На печать'>":"<a href='/dopdogovorput1.php?idz=$id_zakaz&stoim=$stoim'>Подтверждение бронирования</a><br>";
echo  $data_user['is_turist'] == 1  ?"<a href='/dogovor1.php?idz=$id_zakaz&stoim=$stoim&start=$data1&end=$data2&city=$city&name1=$otel&name2=$komnata'>печать договора</a><br>":"";
echo  $data_user['is_turist'] == 1  ?"<a href='/dopdogovorbron.php?idz=$id_zakaz&stoim=$stoim&start=$data1&end=$data2&trans=$transfer&city=$city&otel=$otel&komnata=$komnata'>печать приложения</a><br>":"";
}


	echo"<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$firm' name=firm>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<input type=hidden value='$data1' name=data1>
	<input type=hidden value='$data2' name=data2>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$info' name=info>
	<input type=hidden value='$mesto' name=mesto>
	</form></td></tr></table><p></center>";

    mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>