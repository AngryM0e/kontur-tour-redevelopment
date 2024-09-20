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
 
<td  align="center" >
<? 

$pw=addslashes($pw);
$pw2=addslashes($pw2);
$login=addslashes($login);

$login=$_POST['login'];
$pw=$_POST['pw'];
$pw2=$_POST['pw2'];
$firm=$_POST['firm'];
$adres=$_POST['adres'];
$telefon=$_POST['telefon'];
$mail=$_POST['mail'];
$director=$_POST['director'];
$sotoviy=$_POST['sotoviy'];


if (empty($adres) || empty($firm) || empty($login)|| empty($pw)|| empty($pw2) ||($pw2<>$pw)|| empty($sotoviy)|| empty($mail)|| empty($telefon)|| empty($director))
	{
	echo"<p><p><font size='5'>Вы заполнили не все поля или неправильно подтвердили пароль!<p>";
	echo"Пожалуйста заполните ещё раз.<p></font>";

echo"<span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';} 

echo"</b></font></span>";
	
	exit;
	} 

else{

include("start.php");

    $query = "insert into klient2 values('', '$login', '$pw' , '$firm', '$adres', '$telefon', '$mail', '$director', '$sotoviy')";
    $result = mysql_query($query) or die("Could not connect : " . mysql_error());
}
    	
    if($result) echo "<p><p><font size=4>Добро пожаловать, $director! Для завершения вашей регистрации Вам будет выслано подтверждение на e-mail!";
         echo" <tr><td>
	<p align='center'>
	<a href='index.php' style='text-decoration: none'><b><font size=4>Главная</font></a>&nbsp;&nbsp;&nbsp;&nbsp;
    </td></tr> ";       
    mysql_close($link);

?> 
 
</table>
</body>

</html>