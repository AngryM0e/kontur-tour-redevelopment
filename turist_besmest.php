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

echo"</b></font></span></td></tr>";
                             
 include("start.php");
    /* �����������, �������� ���� ������ */
    $link = mysql_connect("$mysql_host", "$mysql_user", "$mysql_password")
        or die("Could not connect : " . mysql_error());
    mysql_select_db("$mysql_database") or die("Could not select database");

$id_zakaz=$_GET['id_zakaz'];
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$data1=$_GET['data1'];
$data2=$_GET['data2'];
$stoim=$_GET['stoim'];
$info=$_GET['info'];
$mesto=$_GET['mesto'];
$city=$_GET['city'];
$firm=$_GET['firm'];
$perenapr=$_GET['perenapr'];

/*

<form action='redopinfobron.php' method='get'>
<input type=hidden value='$id_zakaz' name='id_zakaz'>
<input type=hidden value='$info' name='info'>
<input type=hidden value='$perenapr' name='perenapr'>
<input type=submit value="��������!" onClick="return window.confirm(\'��������?\')"></form>

*/
 
echo"<tr><td><font size=3>
<table><tr><td><b>� ������:</b></td><td>$id_zakaz</td></tr>
<tr><td><b>�����:</b></td><td>$firm<br></td></tr>
<tr><td><b>�����:</b></td><td>$city<br></td></tr>
<tr><td><b>�����:</b></td><td>$otel<br></td></tr>
<tr><td><b>�������:</b></td><td>$komnata<br></td></tr>
<tr><td><b>���� ����:</b></td><td>� $data1 �� $data2<br></td></tr>
<tr><td><b>���������:</b></td><td>$stoim ������</td></tr>";
echo"<tr><td valign=top><b>���. ����:</b></td><td> $info &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='/notes.php?id_zakaz=$id_zakaz'>���������� ���������</a>";
echo'</td></tr></table>';


    /* ��������� SQL-������ */
    $query = "SELECT id_turist,fio, birth, pass FROM turist where id_zakaz='$id_zakaz' order by fio";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* ������� ���������� � html */
    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>�</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�.�.�.</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>���� ��������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�������/�������������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>��������</b></td>\n";
    print "</tr>\n";
    
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td>";


	echo"<form name='returist' action='returist.php' method='get'>
	<input type=hidden value='$line[id_turist]' name='id_turist'>
	<input type=hidden value='$line[fio]' name='fio'>
	<input type=hidden value='$line[birth]' name='birth'>
	<input type=hidden value='$line[pass]' name='pass'>
        <input type=hidden value='$perenapr' name='perenapr'>";//��������������� 


echo'<input type=submit value="��������" onClick="return window.confirm(\'��������?\')"></form>';


       print "\t</tr>\n";
    
    }
    print "</table>\n";

echo"<p></p><p></p><center><table border=0><tr><td width='25%' align='center'>";

$query = "SELECT id_zakaz FROM bron where id_zakaz='$id_zakaz'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());
$line = mysql_fetch_array($result, MYSQL_ASSOC);

if($line==NULL)
{
echo"	<form action='beznal.php'><input type=submit value='�������� ������������'>
	<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$firm' name=firm>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$data1' name=data1>
	<input type=hidden value='$stoim' name=stoim>
	</form>";
}

echo "</td><td width='25%'align='center'>
	<form action='pechat.php'><input type=submit value='�� ������'>
	<input type=hidden value='$id_zakaz' name=id_zakaz>
	<input type=hidden value='$city' name=city>
	<input type=hidden value='$firm' name=firm>
	<input type=hidden value='$otel' name=otel>
	<input type=hidden value='$komnata' name=komnata>
	<input type=hidden value='$data1' name=data1>
	<input type=hidden value='$data2' name=data2>
	<input type=hidden value='$stoim' name=stoim>
	<input type=hidden value='$info' name=info>
	<input type=hidden value='$mesto' name=mesto>
	</form></td></tr></table><p></center>";

    mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>
