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

echo"   <tr><td>
	<p align='right'>
	<a href='bron.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $data_user['is_turist']==0 ? "<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</a>&nbsp;&nbsp;&nbsp;&nbsp;":"";
	echo "<a href='login.php' style='text-decoration: none'>Личная информация</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a></p><p></p>

    </td></tr>
   <tr>
      <td >";

mysql_query('set names utf8');

$id_klient=$_COOKIE['login'];

    $query = "Select login,pw,firm,adres,telefon,mail,director,sotoviy,is_turist from klient where id_klient='$id_klient'";
    $result = mysql_query($query) or die("Could not connect : " . mysql_error());
    $line = mysql_fetch_array($result, MYSQL_ASSOC);
?>

<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font size=3><b>Внесите изменения</b></font></center>
</td></tr></table><p>

<center>
<form action='relogingo.php' method='post'>
<table>
<?if ($line[is_turist] != 1)
{
?>
<tr>
  <td align='right'>Название компании:</td><td><input name='firm'  size='45' type='text' value='<?echo $line[firm]?>'/></td>
</tr>
<?}?>
<tr>
  <td align='right'>Адрес</td><td><input name='adres'  size='45' type='text' value='<?echo $line[adres]?>'/></td>
</tr>
<tr>
  <td align='right'><?echo ($line[is_turist]==1)?"ФИО:":"Ф.И.О.Директора:"?></td><td><input name='director'  size='45' type='text' value='<?echo $line[director]?>'/></td>
</tr>
<?if ($line[is_turist] != 1)
{
?>
<tr>
  <td align='right'>Личный телефон:</td><td><input name='sotoviy'  size='45' type='text' value='<?echo $line[sotoviy]?>'/></td>
</tr>
<?}?>
<tr>
  <td align='right'><?echo ($line[is_turist]==1)?"Ваш телефон:":"Телефон компании:"?></td><td><input name='telefon'  size='45' type='text' value='<?echo $line[telefon]?>'/></td>
</tr>
<tr>
  <td align='right'>e-mail:</td><td><input name='mail' type='text'  size='45' value='<?echo $line[mail]?>'/></td>
</tr>
<tr>
  <td align='right'>Логин:</td><td><input name='login' type='text'  size='45' value='<?echo $line[login]?>'/></td>
</tr>
<tr>
  <td align='right'>Пароль:</td><td><input name='pw' type='text'  size='45' value='<?echo $line[pw]?>'/></td>
</tr>
<tr>
  <td align='right'>Повторите пароль:</td><td><input name='pw2'  size='45' type='text' value='<?echo $line[pw]?>'/></td>
</tr>
<tr>
<?
mysql_close($link);
}
?> 

  <td></td><td><input type='submit' name='reg' value='Изменить данные' onClick="return window.confirm('Изменить?')"></td>
</tr>
 
</table>
</form>
 
 </center>
</tr> 
      
      </td>
   </tr>
</table>

 
</body>

</html>