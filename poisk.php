<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>������ ����</title>
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
 include("start.php");
echo"
    <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>�������</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>�����</b></a>
    </td></tr>";
	}
else
	{
 include("start.php");
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

 echo "  <tr>
      <td >

<center>
<table width='100%'>
<tr>
<td  align='center'>";



 
echo"
<form action='poisk.php' method='GET'>
<table style='font-size:10pt'>


<tr>
  <td align='right' style='font-size: 14pt;'>�����:</td><td>";


$qwer = "SELECT distinct(city) FROM otel order by city";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='city' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[city]'>$line[city]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>";
/*echo "

<tr>
  <td align='right' style='font-size: 14pt;'>�����:</td><td>";
				echo"<SELECT name='city' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 
				print "<OPTION VALUE='������(�������������)'>������(�������������)</option>";
				print "<OPTION VALUE='�����'>�����</option>";
				print "<OPTION VALUE='��������'>��������</option>";
				print "<OPTION VALUE='���������(������� �����)'>���������(������� �����)</option>";
				print "<OPTION VALUE='���������(������ ���)'>���������(������ ���)</option>";
				print "<OPTION VALUE='���������(�����)'>���������(�����)</option>";
				print "<OPTION VALUE='����������'>����������</option>";
				print "<OPTION VALUE='����������'>����������</option>";
				print "<OPTION VALUE='����������'>����������</option>";
				print "<OPTION VALUE='���������'>���������</option>";
				print "<OPTION VALUE='�����������'>�����������</option>";
				print "<OPTION VALUE='����������'>����������</option>";
				print "<OPTION VALUE='�����'>�����</option>";
				print "<OPTION VALUE='��������'>��������</option>";
				print "<OPTION VALUE='��������(���������)'>��������(���������)</option>";
				print "<OPTION VALUE='�����-���������'>�����-���������</option>";

				print "</SELECT><p></p></td></tr>";*/
echo "

<tr>
  <td align='right' style='font-size: 14pt;'>���������:</td><td>";


$qwer = "SELECT id_otel, name, city FROM otel order by city, name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='otel' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_otel]'> $line[city] - $line[name]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>";
echo "
</td>
</tr>

<tr>
  <td align='right' style='font-size: 14pt;'>�������:</td><td>";

$qwer = "SELECT id_komnata, name FROM komnata order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='komnata' size='1' style='font-size: 12pt;'> 
						<option value='0'> </option>"; 
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_komnata]'> $line[name]</option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>



</td>
</tr>
<tr>


  <td align='right' style='font-size: 14pt;'>���� ������ ��:</td><td>

<select name='date1_1' style='font-size: 12pt;'>
<option value='0'></option>
<option value='1'>1</option>
<option value='2'>2</option>
<option value='3'>3</option>
<option value='4'>4</option>
<option value='5'>5</option>
<option value='6'>6</option>
<option value='7'>7</option>
<option value='8'>8</option>
<option value='9'>9</option>
<option value='10'>10</option>
<option value='11'>11</option>
<option value='12'>12</option>
<option value='13'>13</option>
<option value='14'>14</option>
<option value='15'>15</option>
<option value='16'>16</option>
<option value='17'>17</option>
<option value='18'>18</option>
<option value='19'>19</option>
<option value='20'>20</option>
<option value='21'>21</option>
<option value='22'>22</option>
<option value='23'>23</option>
<option value='24'>24</option>
<option value='25'>25</option>
<option value='26'>26</option>
<option value='27'>27</option>
<option value='28'>28</option>
<option value='29'>29</option>
<option value='30'>30</option>
<option value='31'>31</option>
</select>

<select  name='date1_2' style='font-size: 12pt;'>
<option value='0'></option>
<option value='1'>������</option>
<option value='2'>�������</option>
<option value='3'>����</option>
<option value='4'>������</option>
<option value='5'>���</option>
<option value='6'>����</option>
<option value='7'>����</option>
<option value='8'>������</option>
<option value='9'>��������</option>
<option value='10'>�������</option>
<option value='11'>������</option>
<option value='12'>�������</option>
</select>
<input type='text' size=4 MAXLENGTH=4 name='date1_3' value='2024' style='font-size: 12pt;'></td>
</tr>
<tr>
  <td align='right'></td><td><input type='hidden' style='font-size: 18pt;' size='60'></td>
</tr>";

echo"

<tr>
  <td></td><td><input type='submit' name='reg' style='font-size: 14pt;' value='�����'></td>
</tr>
</form>
<td></td><td>
  <form action='podbortur.php' method='get'>
<input type='submit' name='reg' style='font-size: 14pt;' value='������� ��� ����'>
</form>
</td>
</table>
</form>

</td>
</tr>
</table>";
$city=$_GET['city'];
$otel=$_GET['otel'];
$id_komnata=$_GET['komnata'];
$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date1_3=$_GET['date1_3'];
$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;


$data=date("Y-m-d");
//$data='2011-08-08';

if ((($date1_1=='0')&&($date1_2<>'0'))||(($date1_1<>'0')&&($date1_2=='0')))
{
echo "������ ������� �������";
}
else
{
if (($otel=='0')&&($id_komnata=='0')&&($date1_1=='0')&&($date1_2=='0')&&($city=='0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and(A.data1>='$data')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
}
//����� �� �����
if (($otel<>'0')&&($id_komnata=='0')&&($date1_1=='0')&&($date1_2=='0')&&($city=='0'))
{
      
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and(A.data1>='$data')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
}
//����� �� ������
if (($otel=='0')&&($city<>'0')&&($id_komnata=='0')&&($date1_1=='0')&&($date1_2=='0'))
{
      
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (B.city='$city')
and(A.data1>='$data')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
}

//����� �� ������ � ����

if (($otel=='0')&&($city<>'0')&&($id_komnata=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
{

$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (B.city='$city')
and (A.data1>='$q1')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    
}

//����� �� �������
if (($otel=='0')&&($id_komnata<>'0')&&($date1_1=='0')&&($date1_2=='0')&&($city=='0'))
{
      
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_komnata='$id_komnata')
and(A.data1>='$data')) order by A.data1"; 
    
     $result = mysql_query($query) or die("Query failed : " . mysql_error());
}

//����� �� ����� � �������
if (($otel<>'0')&&($id_komnata<>'0')&&($date1_1=='0')&&($date1_2=='0')&&($city=='0'))
{
      
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (A.id_komnata='$id_komnata')
and(A.data1>='$data')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    
}

//����� �� ������� � ���� 

if (($otel=='0')&&($id_komnata<>'0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city=='0'))
{
     
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_komnata='$id_komnata')
and (A.data1>='$q1')) order by A.data1"; 
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    
}


//����� �� ����
if (($otel=='0')&&($id_komnata=='0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city=='0'))
{
     
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.data1>='$q1') and (A.data1<='$q2')) order by A.data1";
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    
}

//����� �� ���� � �����
if (($otel<>'0')&&($id_komnata=='0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city=='0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (A.data1>='$q1')) order by A.data1";
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
}


//����� �� �����, �������, ���� ��
if (($otel<>'0')&&($id_komnata<>'0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city=='0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (A.id_komnata='$id_komnata')
and (A.data1>='$q1')) order by A.data1"; 
    
 $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
}

//����� �� ������ �����, �������, ���� ��
if (($otel<>'0')&&($id_komnata<>'0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city<>'0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (B.city='$city')
and (A.id_komnata='$id_komnata')
and (A.data1>='$q1')) order by A.data1"; 
    
 $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
}
//����� �� ������ �����, ���� ��
if (($otel<>'0')&&($id_komnata=='0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city<>'0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (B.city='$city')
and (A.data1>='$q1')) order by A.data1"; 
    
 $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
}

//����� �� ������ �����, �������
if (($otel<>'0')&&($id_komnata<>'0')&&($date1_1=='0')&&($date1_2=='0')&&($city<>'0'))
{
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (B.city='$city')
and (A.id_komnata='$id_komnata')) order by A.data1"; 
    
 $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
}

//����� �� ������ �����
if (($otel<>'0')&&($id_komnata=='0')&&($date1_1=='0')&&($date1_2=='0')&&($city<>'0'))
{ echo"qwe";
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.id_otel='$otel')
and (B.city='$city')) order by A.data1"; 
    
 $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
}


//����� �� ����
if (($otel=='0')&&($id_komnata=='0')&&($date1_1<>'0')&&($date1_2<>'0')&&($city=='0'))
{
      
$query = "SELECT A.id_tur, A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and (C.id_komnata=D.id_komnata)
and (A.data1>='$q1')) order by A.data1";
    
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
}

echo "<table width=100%  bgcolor=#D3D3D3><tr>
<td>
<center><font color=blue size=5<b>������������ �������������� ������ �� ������ � ���� ������� ���������� 10%, �� ������ ���� � ������� (����������� �����) 12% (��������� �� 13.04.2024 �.)</b></font></center>
</td></tr>
<tr>
<td>
<center><font color=red size=3><b>��������� ������� �� ����� ��� �����. ��������������� �����!</b></font></center>
</td></tr></table><p>";

    print "<table border=1 cellpadding=2 cellspacing=0 align='center'  width='95%'>\n";
    print "<tr>\n";
    print "<td  background='images/4.jpg' align='center'><b>�</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>���� ������</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>���� �����������</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>�����</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>���������</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>�������</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>���������</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>����������<br>�������</b></td>\n";
    print "<td  background='images/4.jpg' align='center'><b>������������</b></td>\n";
    print "</tr>\n";
        
        while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
	if($line[kolvo]<=0) {$line[kolvo]='<font color=red>���</font>';}
		$d=substr($line[data1],8);
		$m=strtok(substr($line[data1],5),'-');
		$g=strtok($line[data1],'-');
		$line[data1]=$d.'-'.$m.'-'.$g;

		$d=substr($line[data2],8);
		$m=strtok(substr($line[data2],5),'-');
		$g=strtok($line[data2],'-');
		$line[data2]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) 
	{
         print "\t\t<td>$col_value</td>\n";
        }
	print"<td>";

$query2 = "SELECT kolvo FROM kolvo WHERE id_tur='$line[id_tur]'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

echo"
 <form name='forma' action='avtobus.php' method='get'>
	<input type=hidden value='$line[id_tur]' name=id_tur>
	<input type=hidden value='$line[city]' name=city>
	<input type=hidden value='$line[name1]' name=otel>
	<input type=hidden value='$line[stoim]' name=stoim>
	<input type=hidden value='$line[name2]' name=komnata>
        <input type=hidden value='$line2[kolvo]' name=kolvo>";

if($line[kolvo]<>'<font color=red>���</font>')	
	{echo"<input type=submit value='�������� ���'>";}
 	
	echo"</form>
</td>";
        print "\t</tr>\n";
    
    }
    print "</table><p>\n";
}
 
   
  }  /* ��������� ���������� */
    mysql_close($link);
?> 
<p>&nbsp;</p>

</td></tr>
</table>
</form>

</td>
</tr>
</table>	
 
</center>
 </tr> 
      
      </td>
   </tr>
</body>
</html>