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
   
echo"<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">�����</a>';} 

echo"</b></font></span></td></tr><tr><td>";
                             
 include("start.php");
   
$fio=$_GET['fio'];
$birth=$_GET['birth'];
$pass=$_GET['pass'];
$phone=$_GET['phone'];
$id_turist=$_GET['id_turist'];
$perenapr=$_GET['perenapr'];

 
echo"<tr><td>
<form action='returistgo.php' method='get'>
<b><font size='4'>������� ���������</font></b><p>
	<input type=hidden value='$id_turist' name='id_turist'>
	 <input type=hidden value='$perenapr' name='perenapr'>
<table><tr><td align=right>
                  ���:</td><td> <input name='fio' style='font-size: 16pt;' size='70' type='text' value='$fio'/><br></td></tr>
	<tr><td align=right>
        ���� ��������: </td><td><input name='birth' style='font-size: 16pt;' size='70' type='text' value='$birth'/><br></td></tr>
	<tr><td align=right>
�������/�������������: </td><td><input name='pass' style='font-size: 16pt;' size='70' type='text' value='$pass'/><br></td></tr>
<tr><td align=right>
�������: </td><td><input name='phone' style='font-size: 16pt;' size='70' type='text' value='$phone'/><br></td></tr>
</table>";
echo'<input type=submit value="��������" onClick="return window.confirm(\'��������� �����?\')"></form><p>';
mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>
