<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������</title>

</head>

<body link='black'>

<div id="progressBarOverley" style="position:absolute;top:0;left:0;display:none;background-color:black;filter: alpha(opacity=50);opacity: 0.5;">&nbsp;</div>
<div id="progressBar" style="position:absolute;display:none;">���� ��������� �������...</div>


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
   
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<p align=left><span lang="ru"><font size="4"><b><a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">�����</a></b></font></span></p>';} 


include("start.php"); 
$id_tur=$_GET['id_tur'];  
$kolvo=$_GET['kolvo'];  
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$city=$_GET['city'];
$kol=$_GET['kol'];
$stoim=$_GET['stoim'];
$id_avtobus=$_GET['id_avtobus'];

if($kol<>0) echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>��������� ������� �� ����� ��� �����. ��������������� ����� � ��� ������ ������������� ��������������!</font></center>
</td></tr></table><p>";

if($kol==0) echo"<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3>�� ������ ������ ���������� ��������!!!</font></center>
</td></tr></table><p><font color=red></font>";

echo"<table><tr><td><b>�����:</b></td><td> $city</td></tr>
	<tr><td><b>���������:</b></td><td> $otel</td></tr>
	<tr><td><b>�������:</b></td><td> $komnata</td></tr>
	<tr><td><b>���������:</b></td><td> $stoim ������</td></tr></table>";

echo"<form name='forma' action='pluszakaz.php' method='get'>
	<input type=hidden value='$id_avtobus' name=id_avtobus>
	<input type=hidden value='$id_tur' name=id_tur>
	<input type=hidden value='$stoim' name=stoim>
    <input type=hidden value='$kolvo' name=kolvo>
	<input type=hidden value='$kol' name=kol>
<font size='3'><b>���������� � ��������: </b></font>";

echo"<table>";
$kol1=$kol;
while($kol>0)
{
echo"
<tr>
  <td align='right'><font size='3'>�.�.�.�������</font></td><td><input name=fio$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>���� ��������</font></td><td><input name=birth$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/></td>
</tr>
<tr>
  <td align='right'><font size='3'>�������/�������������</font></td><td><input name=pass$kol style='font-size: 16pt;' size='45' type='text' value='&nbsp;'/><p><p></td>
</tr>";
$kol-=1;
}

echo"
<tr><td align='right'><font size='3'>���. ����� (��������)</font></td>
<td><input type='checkbox' name='dop_mesto_vzrosl'></td></tr>
<tr><td align='right'><font size='3'>���. ����� (�������)</font></td>
<td> <input type='checkbox' name='dop_mesto_rebenok'></td></tr>
<tr><td align='right'><font size='3'>������� ��� ����� � �����</font></td>
<td> <input type='checkbox' name='bez_mesta'></td></tr>

<tr><td align='right'><font size='3'><b>�������������� ����������</b></font></td>
<td>
<textarea ROWS='5' COLS='55' name=info>&nbsp;</textarea></td>
</tr>
</table>";
if ($kol1<>0)echo"<center><input name='knopka' type='submit' value='�������� ���' onClick=\"this.disabled=true; forma.submit();\"></form>";

mysql_close($link);
}
?> 
</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>
