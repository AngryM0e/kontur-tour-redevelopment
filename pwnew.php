<?
$id_zakaz=$_GET['id_zakazpay'];
$payment=$_GET['addpay'];

echo"
<html>

<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
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
</tr>";


	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
	{
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>";

	
   
echo"<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="tur.php">Назад</a>';} 

echo"</b></font></span></td></tr>";
                             
include("start.php");
   
echo"<tr><td>
<center>
<form action='repayment.php' method='post'>
<b><font size='4'>Введите пароль</font></b><p>
<input type=hidden value='$id_zakaz' name='id_zakazpay'>
<input type=hidden value='$payment' name='addpay'>
<input name='pw' size='10' type='password'><p>";
echo'<input type=submit value="Далее"></form><br></tr></td>';
mysql_close($link);
}

?> 



   </tr>
</table>
</body>

</html>
