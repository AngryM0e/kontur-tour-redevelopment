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
<br>natakontur@rambler.ru
</font>
</font>

</td>
</tr>
    <tr><td>
	<p align='right'>
	<a href='index.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </td></tr>

   <tr>
      <td >
<center>
<form action="registr2.php" method="post">
<table style="font-size:14pt">
<tr><td></td><td><p>
<font size='2'>Все поля обязательны для заполнения</font></p></td></tr>
<tr>
  <td align="right">Название компании:</td><td><input name="firm" style='font-size: 16pt;' size='45' type="text" value=""/></td>
</tr>
<tr>
  <td align="right">Адрес</td><td><input name="adres" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right">Ф.И.О.Директора:</td><td><input name="director" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right">Личный телефон:</td><td><input name="sotoviy" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right">Телефон компании:</td><td><input name="telefon" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right">e-mail:</td><td><input name="mail" type="text" style='font-size: 16pt;' size='45' ></td>
</tr>
<tr>
  <td align="right">Логин:</td><td><input name="login" type="text" style='font-size: 16pt;' size='45' ></td></tr>
<tr><td></td><td>
<p>
<font size='2'>Для защиты Ваших личных данных, вводите пароль не менее 5 символов</font></p></td>
</tr>
<tr>
  <td align="right">Пароль:</td><td><input name="pw" type="password" style='font-size: 16pt;' size='45' ></td>
</tr>
<tr>
  <td align="right">Повторите пароль:</td><td><input name="pw2" style='font-size: 16pt;' size='45' type="password" ></td>
</tr>
<tr>
  <td></td><td><input type="submit" name="reg" style='font-size: 16pt;' value="Зарегистрироваться" /></td>
</tr>
 <?
echo"<tr><td></td><td><br><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';} 

echo"</b></font></span></td></tr>";
?>
</table>
</form>
 
 </center>
</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>
