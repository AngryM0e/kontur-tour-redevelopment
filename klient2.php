<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>�������</title>
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
   if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421 || $_COOKIE['login']==418)
{                                        
 echo"   
 <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a>
    </td></tr>
   
	<tr>
		
		<td><span lang='ru'><font size='4'><b>&nbsp;�������, �������� ������</b></font></span>";



 include("start.php");
  

    /* ��������� SQL-������ */
    $query = "SELECT * FROM klient2 order by id_klient";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* ������� ���������� � html */
    print "<p><table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>ID_�������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�������� �����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>������� �����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>E-mail</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>��� ���������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>������� �������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>����������������</b></td>\n";
  

    print "</tr>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td>";


 echo"<br><form name='forma' action='plusklient.php' method='get' align='center'>
	<input type=hidden value=$line[id_klient] name=id_klient>";

echo'<input type=submit value="�����������" onClick="return window.confirm(\'��������?\')">
 </form>';

 echo"<form name='forma2' action='delklient.php' method='get' align='center'>
	<input type=hidden value=$line[id_klient] name=id_klient>";
	
echo'<input type=submit value="��������" onClick="return window.confirm(\'��������?\')"></br>';

echo"</form></font></td></tr>";


       }
    print "</table>\n";
    mysql_close($link);
}
?> 



      </td>
   </tr>
</table>
</body>

</html>
