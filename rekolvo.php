<?
$id_tur=$_POST['id_tur'];
$kolvo=$_POST['kolvo'];
$stoim=$_POST['stoim'];
$pw=$_POST['pw'];

if($pw<>'sun')
{
HEADER("Location: tur.php");
}
else
{
echo"
<html>

<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<title>������</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align='center'><font color='#FFFFFF'><b><font size='7' face='Comic Sans MS'>������</font></b><p align='center'>
<font size='5'>�.����, ��������������� ��-�.7, ��.304
<br>���:(4872)253-109, 253-160
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
<a href='admin.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a>
    </td></tr>";

	
   
echo"<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="tur.php">�����</a>';} 

echo"</b></font></span></td></tr>";
                             
 include("start.php");
   

echo"<tr><td>
<center>
<form action='rekolvogo.php' method='post'>
<b><font size='4'>������� ���������</font></b><p>
<input type=hidden value='$id_tur' name='id_tur'>
����������:<input name='kolvo' size='3' type='text' value='$kolvo'><br><br>���������:<input name='stoim' size='7' type='text' value='$stoim'><p>";
echo'<input type=submit value="�������� ���������!" onClick="return window.confirm(\'��������� �����?\')"></form><br>';
mysql_close($link);
}

echo"

</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>";
}
?> 