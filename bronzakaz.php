<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>��������������� ����</title>
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
 include("start.php");
 if($_COOKIE['login']<>0)
{	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421 || $_COOKIE['login']==418)
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

$data_user=mysql_fetch_array(mysql_query("SELECT is_turist FROM `klient` where id_klient='$_COOKIE[login]'"),MYSQL_ASSOC);
	echo"<tr><td>
	<p align='right'>
	<a href='poisk.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo $data_user['is_turist']==1 ? "<a href='bronzakaz.php' style='text-decoration: none'><b>��������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;":"<a href='bronzakaz.php' style='text-decoration: none'><b>������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;";
	echo "<a href='zakazbron.php' style='text-decoration: none'><b>���������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;";
echo $data_user['is_turist']==0 ? "<a href='table_del.php' style='text-decoration: none'><b>�������������� ����</a>&nbsp;&nbsp;&nbsp;&nbsp;":"";
	echo "<a href='login.php' style='text-decoration: none'>������ ����������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a><p></p></p>
    </td></tr>";
	}
	echo"<tr><td>";
echo $data_user['is_turist']==1 ? "":"<table width=100%><tr><td><center><font color=red size=3>������ �� �������� ��������������, ���� ��� �� ������� ������������� �� �������, � ������������ �������� �������������</font></center></td></tr></table>";
	echo "<p><span lang='ru'><font size='4'><b>&nbsp;��������������� ���� ����</b></font></span><p></td></tr>";
 echo "  <tr>
      <td >";



echo $data_user['is_turist']==1 ? "<p><table width=100%  bgcolor=#D3D3D3><tr><td><center><font color=blue size=3><b>������� �������� ������������� ��������� ����!
�� ������� ����������� ������� � ������ ����� ������ ������ ����</b></font></center></td></tr></table><p>":"<p><table width=100%  bgcolor=#D3D3D3><tr><td><center><font color=blue size=3><b>������� �������� ������������� ��������� ����!(� ��������������� ������� � ������������ ���������������)</b></font></center></td></tr></table><p>";



    /* ��������� SQL-������ */
$id_klient=$_COOKIE['login'];

    $query = "SELECT Q.id_zakaz,Q.data,A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto, Q.payment FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(Q.id_tur=A.id_tur)
and (Q.id_klient='$id_klient') ) order by Q.data, Q.id_zakaz"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* ������� ���������� � html */
    print "<table border=1 cellpadding=2 cellspacing=0 width='95%' align=center>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>�</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b><font color=red>����<br>�����</font></b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�.������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�.<br>�����������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>���������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>���.<br>����</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>��������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>����� �<br>��������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�������</b></td>\n";
    print "</tr>\n";
    
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
		$infoinfo = '';
        print "\t<tr>\n";
		$d=substr($line[data1],8);
		$m=strtok(substr($line[data1],5),'-');
		$g=strtok($line[data1],'-');
		$line[data1]=$d.'-'.$m.'-'.$g;

		$d=substr($line[data2],8);
		$m=strtok(substr($line[data2],5),'-');
		$g=strtok($line[data2],'-');
		$line[data2]=$d.'-'.$m.'-'.$g;


		$d=substr($line[data],8);
		$m=strtok(substr($line[data],5),'-');
		$g=strtok($line[data],'-');
		$line[data]="<font color=red>$d-$m-$g</font>";
		
		$infoinfo = $line[info];
		$line[info]="$line[info] <br><a href='/notes.php?id_zakaz=$line[id_zakaz]'>���������� ���������</a>";

		$query1 = "SELECT stoimreal FROM zakaz WHERE id_zakaz='$line[id_zakaz]'"; 
		$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
		$line1 = mysql_fetch_array($result1, MYSQL_ASSOC);
	if($line1[stoimreal]==1)
		{
		$line[stoim]="<font color=blue><b>$line[stoim]</b></font>";
		}

	$id_zakaz=$line[id_zakaz];
	$query2 = "SELECT beznal FROM beznal WHERE id_zakaz='$id_zakaz'"; 
	$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
	$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
		if($line2[beznal]==1)
		{
		$line[id_zakaz]="<b>$id_zakaz</b><hr><img src='images/1.gif' alt='����������� ������'>";
		}

    foreach ($line as $col_value) 
	{
		print "\t\t<td>$col_value</td>\n";
	}
	print"<td>";

	$firm_i=$_COOKIE['login']; 
	$query2 = "SELECT firm FROM klient where id_klient='$firm_i'";
	$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
	$line2=mysql_fetch_array($result2, MYSQL_ASSOC);
    

if($line[mesto]<>'��� ����')
{
echo"	<form action='turist.php' method='get'><input type=submit value='���������'>
	<input type=hidden value='$id_zakaz' name='id_zakaz'>
	<input type=hidden value='$line[city]' name='city'>
	<input type=hidden value='$line2[firm]' name='firm'>
	<input type=hidden value='$line[name1]' name='otel'>
	<input type=hidden value='$line[name2]' name='komnata'>
	<input type=hidden value='$line[data1]' name='data1'>
	<input type=hidden value='$line[data2]' name='data2'>
	<input type=hidden value='$line[stoim]' name='stoim'>
	<input type=hidden value='$infoinfo' name='info'>
	<input type=hidden value='$line[transfer]' name='transfer'>
	<input type=hidden value='$line[mesto]' name='mesto'>
	<input type=hidden value='$line[payment]' name='payment'>
 	<input type=hidden value='bronzakaz' name='perenapr'>
	</form>";
}
else 
{
echo"<form action='turist_besmest.php' method='get'>
	<input type=hidden value='$id_zakaz' name='id_zakaz'>
	<input type=hidden value='$line2[id_klient]' name='id_klient'>
	<input type=hidden value='$line2[firm]' name='firm'>
	<input type=hidden value='$line[city]' name='city'>
	<input type=hidden value='$line[name1]' name='otel'>
	<input type=hidden value='$line[name2]' name='komnata'>
	<input type=hidden value='$line[data1]' name='data1'>
	<input type=hidden value='$line[data2]' name='data2'>
	<input type=hidden value='$line[stoim]' name='stoim'>
	<input type=hidden value='$infoinfo' name='info'>
	<input type=hidden value='$line[transfer]' name='transfer'>
	<input type=hidden value='$line[mesto]' name='mesto'>
	<input type=hidden value='$line[payment]' name='payment'>
	<input type=hidden value='bronzakaz' name='perenapr'>
<input type=submit value='���������'></form>";
}



 $query2 = "SELECT id_avtobus from zakaz where id_zakaz='$id_zakaz'"; 
 $result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
 $line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

	if($line[mesto]<>'��� ����')
		{
	        if($line2[id_avtobus]< '100')
			{echo"<a href='avtobus49.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '200')&&($line2[id_avtobus] < '300'))
			{echo"<a href='avtobus48.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] < '200')&&($line2[id_avtobus] >= '100'))
			{echo"<a href='avtobus50.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '300') && ($line2[id_avtobus] <'400'))
			{echo"<a href='avtobus66.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '400') && ($line2[id_avtobus] <'500'))
			{echo"<a href='avtobus69.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '500') && ($line2[id_avtobus] <'600'))
			{echo"<a href='avtobus49m.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '600') && ($line2[id_avtobus] <'800'))
			{echo"<a href='avtobus53.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '800') && ($line2[id_avtobus] <'900'))
			{echo"<a href='avtobus52.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '900') && ($line2[id_avtobus] <'1000'))
			{echo"<a href='avtobus51.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1000') && ($line2[id_avtobus] <'1200'))
			{echo"<a href='avtobus51m.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1200') && ($line2[id_avtobus] <'1300'))
			{echo"<a href='avtobus501.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1300') && ($line2[id_avtobus] <'1400'))
			{echo"<a href='avtobus62.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1400') && ($line2[id_avtobus] <'1500'))
			{echo"<a href='avtobus84.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1500') && ($line2[id_avtobus] <'1600'))
			{echo"<a href='avtobus661.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1600') && ($line2[id_avtobus] <'1700'))
			{echo"<a href='avtobus61.php'>� ��������</a></font></td>";}
		if(($line2[id_avtobus] >= '1700') && ($line2[id_avtobus] <'1800'))
			{echo"<a href='avtobus691.php'>� ��������</a></font></td>";}
	    }
       print "\t</tr>\n";
    
    }
    print "</table>\n";

    /* ����������� ������ �� ���������� */
    mysql_free_result($result);

    /* ��������� ���������� */
    mysql_close($link);

}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>