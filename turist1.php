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
   
		   echo '<a style="margin-right:20px;" href="zakaz.php">Назад</a>';

echo"</b></font></span></td></tr>";
                             
include("start.php");
   
$id_zakaz=$_GET['id_zakaz'];
$otel=mb_convert_encoding($_GET['otel'],"windows-1251","UTF-8"); 
$komnata=mb_convert_encoding($_GET['komnata'],"windows-1251","UTF-8");
$data1=$_GET['data1'];
$data2=$_GET['data2'];
$stoim=$_GET['stoim'];
$info=mb_convert_encoding($_GET['info'],"windows-1251","UTF-8");
$mesto=mb_convert_encoding($_GET['mesto'],"windows-1251","UTF-8");
$city=mb_convert_encoding($_GET['city'],"windows-1251","UTF-8");
$firm=mb_convert_encoding($_GET['firm'],"windows-1251","UTF-8");
$perenapr=$_GET['perenapr'];

 $query1 = "SELECT id_avtobus FROM zakaz where id_zakaz='$id_zakaz'";
 $result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
 $line=mysql_fetch_array($result1, MYSQL_ASSOC);
 $id_avtobus=$line[id_avtobus];
  	
 include("id_avtobus.php");

	$query2 = "SELECT name FROM $nameavtobus where id_avtobus='$id_avtobus'";
 	$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
 	$line2=mysql_fetch_array($result2, MYSQL_ASSOC);

echo"<tr><td><font size=3>
<table CELLPADDING=0><tr><td><b>№ заказа:</b></td><td>$id_zakaz</td></tr>
<tr><td><b>Фирма:</b></td><td>$firm<br></td></tr>
<tr><td><b>Город:</b></td><td>$city<br></td></tr>
<tr><td><b>Отель:</b></td><td>$otel<br></td></tr>
<tr><td><b>Комната:</b></td><td>$komnata<br></td></tr>
<tr><td><b>Дата тура:</b></td><td>с $data1 по $data2<br></td></tr>
<tr><td valign=top><b>Стоимость:</b></td><td>$stoim рублей  
	<form name='formasum' action='restoim.php' method='get'>
	<input type=hidden value='$id_zakaz' name='id_zakaz'>
	<input type=hidden value='$stoim' name='stoim'>";
	echo'<input type=submit value="Уточнить стоимость!" onClick="return window.confirm(\'Уточнить стоимость?\')"></form>';

echo"
</td></tr>";
echo"<tr><td valign=top><b>Доп. инфо.:</b></td><td> $info &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/notes.php?id_zakaz=$id_zakaz'>посмотреть переписку</a>";
/*<form action='redopinfobron.php' method='get'>
<input type=hidden value='$perenapr' name='perenapr'>
<input type=hidden value='$id_zakaz' name='id_zakaz'>
<input type=hidden value='$info' name='info'><input type=submit value="Изменить!" onClick="return window.confirm(\'Изменить?\')"></form>";*/
echo'</td></tr></table>';
echo"
<b>Места в автобусе: </b>$mesto<br>
<b>Автобус:</b> $line2[name]<br>
<b>Туристы:</b><br></font>";

    /* Выполняем SQL-запрос */
   $query = "SELECT id_turist,fio, birth, pass, phone FROM turist where id_zakaz='$id_zakaz' order by fio";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* Выводим результаты в html */
    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width=95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Ф.И.О.</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата рождения</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Паспорт/свидетельство</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Телефон</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Исправить</b></td>\n";
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
    print "</table><p>\n";

    mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>