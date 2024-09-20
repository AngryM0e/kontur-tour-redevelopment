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
if($_COOKIE['login']<>0)
{$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);
echo"<tr><td>
	<p align='right'>
	<a href='poisk.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $data_user['is_turist']==1 ? "<a href='bronzakaz.php' style='text-decoration: none'><b>Забронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $data_user['is_turist']==0 ? "<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"";
	echo "<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a><p></p></p>
    </td></tr><p>";



mysql_query('set names utf8');
$id_klient=$_COOKIE['login'];

    $query = "Select login,pw,firm,adres,telefon,mail,director,sotoviy,is_turist from klient where id_klient='$id_klient'";
    $result = mysql_query($query) or die("Could not connect : " . mysql_error());
    $line = mysql_fetch_array($result, MYSQL_ASSOC);
	//print_r($line);

?>
<center>
<form action='relogin.php'  method='post'>
<table align='center'>
<?if ($line[is_turist] != 1)
{
?>
<tr>
  <td align='right'><b>Название компании:&nbsp;&nbsp;</td><td><?echo $line[firm]?></td>
</tr>
<?}?>
<tr>
  <td align='right'><b>Адрес:&nbsp;&nbsp;</td><td><?echo  $line[adres]?></td>
</tr>
<tr>
  <td align='right'><b><?echo ($line[is_turist]==1)?"ФИО:&nbsp;&nbsp;":"Ф.И.О.Директора:&nbsp;&nbsp;"?></td><td><?echo $line[director]?> </td>
</tr>
<?if ($line[is_turist] != 1)
{
?>
<tr>
  <td align='right'><b>Личный телефон:&nbsp;&nbsp;</td><td><?echo $line[sotoviy]?> </td>
</tr>
<?}?>
<tr>
  <td align='right'><b><?echo ($line[is_turist]==1)?"Ваш телефон:&nbsp;&nbsp;":"Телефон компании:&nbsp;&nbsp;"?></td><td><?echo $line[telefon]?> </td>
</tr>
<tr>
  <td align='right'><b>e-mail:&nbsp;&nbsp;</td><td><?echo $line[mail]?> </td>
</tr>
<tr>
  <td align='right'><b>Логин:&nbsp;&nbsp;</td><td><?echo $line[login] ?></td>
</tr>
<tr>
  <td align='right'><b>Пароль:&nbsp;&nbsp;</td><td><?echo $line[pw] ?></td>
</tr>
<tr>
  <td></td><td><input type='submit' name='reg' value='Изменить данные'></td>
</tr>
 
</table>
</form>
 
 </center>
</tr> 
      
      </td>
   </tr>
</table>
<?
}
 mysql_close($link);

?> 
</body>

</html>