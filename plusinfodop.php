<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">������</font></b><p align="center">
<font size="5">�.����, ��������������� ��-�.7, ��.304
<br>���:(4872)253-109, 253-160
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
<a href='admin.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a>
    </td></tr>";
	}
	
	else
	{
	echo"<tr><td>
	<p align='right'>
	<a href='bron.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='bronzakaz.php' style='text-decoration: none'><b>������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='zakazbron.php' style='text-decoration: none'><b>���������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='table_del.php' style='text-decoration: none'><b>�������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='login.php' style='text-decoration: none'>������ ����������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a></p>
    </td></tr>";
	}

 echo "  <tr>
      <td >";
echo"<p align=left><span lang='ru'><font size='4'><b><a style='margin-right:20px'; href=podbortur.php>�����</a></b></font></span></p>";
include("start.php");
   

echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>��������� ������� �� ����� ��� �����. ��������������� ����� � ��� ������ ������������� ��������������!</font></center>
</td></tr></table><p>";
$id_avtobus=$_GET['id_avtobus'];
$id_tur=$_GET['id_tur'];  
$kolvo=$_GET['kolvo'];  
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$city=$_GET['city'];
$skidka=strtok($komnata,'-');
$stoim=$_GET['stoim']-($skidka*1200);

echo"<table><tr><td>
	<b>�����:</b> </td><td> $city </td></tr> 
	<tr><td>
	<b>���������:</b></td><td> $otel</td></tr>
	<tr><td>
	<b>�������:</b></td><td> $komnata</td></tr>
	<tr><td>
	<b>���������:</b> </td><td> $stoim ������</td></tr></table>";

echo"	<form name='forma' action='plusinfo.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value=$id_tur name=id_tur>
	<input type=hidden value=$stoim name=stoim>
    <input type=hidden value=$kolvo name=kolvo>
	<input type=hidden value='$city' name=city>
    <input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>

<b>������� ���������� ��������: </b><input name='kol' type='text' size=3>
<p><input type='submit' value=' ����� ' ></form>";
    mysql_close($link);
}

?> 
</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>