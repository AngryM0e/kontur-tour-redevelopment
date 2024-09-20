<html>

<head>
<title>Все туры</title>
</head>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b><p align="center">
<font size="5">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</font>

<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{echo"
</td>
</tr>
    <tr><td>
	<p align='right'>
	<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>
   <tr>
      <td >";

include("start.php");

echo"<form action='tur.php' method='GET'>

<table align=center width='100%'>
<tr><td align='right' style='font-size: 14pt;' width='30%'>Номер:</td><td>
<input type='text' name='nomer' value='0'><p></p>

</td></tr>
<tr>
  <td align='right' style='font-size: 14pt;'>Гостиница:</td><td>";


$qwer = "SELECT id_otel,name, city FROM otel order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='otel' size='1' style='font-size: 12pt;'> 
					<option value='0'> </option>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_otel]'> $line[name] - $line[city] </option>";
	 
			          }
       				 print "</SELECT><p></p></td></tr>
<tr>
  <td align='right' style='font-size: 14pt;'>Дата выезда от:</td><td>

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
<option value='1'>январь</option>
<option value='2'>феврарь</option>
<option value='3'>март</option>
<option value='4'>апрель</option>
<option value='5'>май</option>
<option value='6'>июнь</option>
<option value='7'>июль</option>
<option value='8'>август</option>
<option value='9'>сентябрь</option>
<option value='10'>октябрь</option>
<option value='11'>ноябрь</option>
<option value='12'>декабрь</option>
</select>
<input type='text' size=4 MAXLENGTH=4 name='date1_3' value='2024' style='font-size: 12pt;'></td>
</tr>
<tr>
  <td></td><td><input type='submit' name='reg' style='font-size: 14pt;' value='Поиск'></td>
</tr> </form>
</table>
</form>
<p></p>";

$otel=$_GET['otel'];
$nomer=$_GET['nomer'];
$id_klient=$_GET['klient'];
$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date1_3=$_GET['date1_3'];
$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;

	//если ничего не введено+
	if (($otel=='0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT A.id_tur,A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)) order by name1,name2,A.data1"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по отелю+
	if (($otel<>'0')&&($nomer=='0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT A.id_tur,A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(B.id_otel='$otel')) order by name1,name2,A.data1"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}

	//по номeрy+
	if (($otel=='0')&&($nomer<>'0')&&($date1_1=='0')&&($date1_2=='0'))
	{
$query = "SELECT A.id_tur,A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(A.id_tur='$nomer')) order by name1,name2,A.data1"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
    	//по дате от+
	if (($otel=='0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
$query = "SELECT A.id_tur,A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(A.data1>='$q1')) order by A.data1,name1,name2"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}
	//по дате от и отелю+
	if (($otel<>'0')&&($nomer=='0')&&($date1_1<>'0')&&($date1_2<>'0'))
	{
$query = "SELECT A.id_tur,A.data1, A.data2, B.city, B.name as name1, C.name as name2, A.stoim, D.kolvo FROM tur as A, otel as B, komnata as C, kolvo as D 
WHERE ((A.id_otel=B.id_otel) 
and (A.id_tur=D.id_tur)
and(C.id_komnata=D.id_komnata)
and(A.data1>='$q1')
and (B.id_otel='$otel')) order by name1,name2,A.data1"; 
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	}



echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font color=red size=3><b>Стоимость указана за номер без стоим. дополнительного места и без вычета комиссионного вознаграждения!</b></font></center>
</td></tr></table><p>";

    /* Выводим результаты в html */
    print "<table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>№</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата выезда</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата<br>возвращения</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Город</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Гостиница</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Комната</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Стоимость</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Количество<br>номеров</b></td>\n";
     print "<td background='images/4.jpg' align='center'><b>Поменять</b></td>\n";
   
   

    print "</tr>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

$d=substr($line[data2],8);
$m=strtok(substr($line[data2],5),'-');
$g=strtok($line[data2],'-');
$line[data2]=$d.'-'.$m.'-'.$g;
        foreach ($line as $col_value) {

         print "\t\t<td>$col_value</td>\n";
        } 

echo"<td>
 	<form name='forma2' action='pw.php' method='post'>
	<input type=hidden value=$line[id_tur] name=id_tur>
	<input type=hidden value=$line[kolvo] name=kolvo>
	<input type=hidden value=$line[stoim] name=stoim>";

echo'<input type=submit value="Уточнить"></form></td>';


        print "\t</tr>\n";
    
    }
    print "</table>\n";
    mysql_close($link);
}
?> 


</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>