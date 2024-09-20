<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align='center'><font color='#FFFFFF'><b><font size='7' face='Comic Sans MS'>КОНТУР</font></b><p align='center'>
<font size='5'>г.Тула, Красноармейский пр-т.7, оф.304
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
   
echo"<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="zakaz.php">Назад</a>';} 

echo"</b></font></span></td></tr><tr><td>";
                             
 include("start.php");
   
$id_zakaz=$_GET['id_zakaz'];
$info=$_GET['info'];
$perenapr=$_GET['perenapr'];
echo"<tr><td>";
if ($perenapr=='zakazbron')$perenapr='redopinfobrongo.php';
if ($perenapr=='bronzakaz') $perenapr='redopinfobrongo2.php';
if ($perenapr=='zakaz') $perenapr='redopinfogo.php';
echo"
<form action=$perenapr method='get'>
<b><font size='4'>Внесите изменения</font></b><p>
<input type=hidden value='$id_zakaz' name='id_zakaz'>

<textarea  ROWS='5' COLS='60' name='info'>$info</textarea><br>";
echo'<input type=submit value="Изменить" onClick="return window.confirm(\'Правильно ввели?\')"></form><br>';
mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>
