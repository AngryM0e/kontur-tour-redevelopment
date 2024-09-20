<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Распечатка автобуса</title>
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

</td>
</tr>
 <?  
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{echo"    <tr><td>
	<p align='right'>
	<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
        </p>
    </td></tr>
   <tr>
      <td>

<p><p>
<tr><td><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="admin.php">Назад</a>';} 

echo"</b></font></span></td></tr>
   <tr>
      <td >
<center>";


include("start.php");
echo "<table width=100%  bgcolor=#D3D3D3><tr><td>
<center><font size='3'><b>Выберите автобус</b></font></center>
</td></tr></table><p>";
 
echo"<form action='print.php'><p><font size='4'>Дата выезда:</font>

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
<input type='text' size=4 MAXLENGTH=4 name='date1_3' value='2024' style='font-size: 12pt;'>
<input type='submit' name='reg' style='font-size: 14pt;' value='Поиск'></form>";

$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date1_3=$_GET['date1_3'];
$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;

$data=date("Y-m-d");

if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer = "SELECT data1,id_avtobus,name FROM avtobus48 where data1='$q1'";
	}
else
	{
	$qwer = "SELECT data1,id_avtobus,name FROM avtobus48 where data1>='$data'";
	}

$result = mysql_query($qwer) or die("Query failed1 : " . mysql_error());

echo"<form action='printgo.php' method='get'>";

    print "<table border=1 cellpadding=2 cellspacing=0 width='95%'>\n";
    print "<tr>\n";
    print "<td background='images/4.jpg' align='center'><b>Дата отъезда</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>ID</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Имя автобуса</b></td>\n";
    print "<td background='images/4.jpg' align='center'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
 

if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer2 = "SELECT data1,id_avtobus,name FROM avtobus49 where data1='$q1'";
	}
else
	{
	$qwer2 = "SELECT data1,id_avtobus,name FROM avtobus49 where data1>='$data'";
	}

$result2 = mysql_query($qwer2) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
   
if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer21 = "SELECT data1,id_avtobus,name FROM avtobus49m where data1='$q1'";
	}
else
	{
	$qwer21 = "SELECT data1,id_avtobus,name FROM avtobus49m where data1>='$data'";
	}

$result21 = mysql_query($qwer21) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result21, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
    
    
if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer211 = "SELECT data1,id_avtobus,name FROM avtobus53 where data1='$q1'";
	}
else
	{
	$qwer211 = "SELECT data1,id_avtobus,name FROM avtobus53 where data1>='$data'";
	}

$result211 = mysql_query($qwer211) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result211, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
    
    
if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer2111 = "SELECT data1,id_avtobus,name FROM avtobus52 where data1='$q1'";
	}
else
	{
	$qwer2111 = "SELECT data1,id_avtobus,name FROM avtobus52 where data1>='$data'";
	}

$result2111 = mysql_query($qwer2111) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result2111, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
    
if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer21111 = "SELECT data1,id_avtobus,name FROM avtobus51 where data1='$q1'";
	}
else
	{
	$qwer21111 = "SELECT data1,id_avtobus,name FROM avtobus51 where data1>='$data'";
	}

$result21111 = mysql_query($qwer21111) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result21111, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
 

    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer211111 = "SELECT data1,id_avtobus,name FROM avtobus51m where data1='$q1'";
	}
else
	{
	$qwer211111 = "SELECT data1,id_avtobus,name FROM avtobus51m where data1>='$data'";
	}

$result211111 = mysql_query($qwer211111) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result211111, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }


    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer501444 = "SELECT data1,id_avtobus,name FROM avtobus501 where data1='$q1'";
    }
    else
    {
        $qwer501444 = "SELECT data1,id_avtobus,name FROM avtobus501 where data1>='$data'";
    }

    $result501444 = mysql_query($qwer501444) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result501444, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }


    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer62444 = "SELECT data1,id_avtobus,name FROM avtobus62 where data1='$q1'";
    }
    else
    {
        $qwer62444 = "SELECT data1,id_avtobus,name FROM avtobus62 where data1>='$data'";
    }

    $result62444 = mysql_query($qwer62444) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result62444, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }


    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer84444 = "SELECT data1,id_avtobus,name FROM avtobus84 where data1='$q1'";
    }
    else
    {
        $qwer84444 = "SELECT data1,id_avtobus,name FROM avtobus84 where data1>='$data'";
    }

    $result84444 = mysql_query($qwer84444) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result84444, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }

    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer661 = "SELECT data1,id_avtobus,name FROM avtobus661 where data1='$q1'";
    }
    else
    {
        $qwer661 = "SELECT data1,id_avtobus,name FROM avtobus661 where data1>='$data'";
    }

    $result661 = mysql_query($qwer661) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result661, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }


    if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer61 = "SELECT data1,id_avtobus,name FROM avtobus61 where data1='$q1'";
    }
    else
    {
        $qwer61 = "SELECT data1,id_avtobus,name FROM avtobus61 where data1>='$data'";
    }

    $result61 = mysql_query($qwer61) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result61, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }
	
	
	if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
    {
        $qwer691 = "SELECT data1,id_avtobus,name FROM avtobus691 where data1='$q1'";
    }
    else
    {
        $qwer691 = "SELECT data1,id_avtobus,name FROM avtobus691 where data1>='$data'";
    }

    $result691 = mysql_query($qwer691) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result691, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";

    }
	

if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer3 = "SELECT data1,id_avtobus,name FROM avtobus66 where data1='$q1'";
	}
else
	{
	$qwer3 = "SELECT data1,id_avtobus,name FROM avtobus66 where data1>='$data'";
	}

$result3 = mysql_query($qwer3) or die("Query failed 3: " . mysql_error());

    while ($line = mysql_fetch_array($result3, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
	
	if (($date1_1<>'0') && ($date1_2<>'0') && ($date1_3=='2024'))
	{
	$qwer2 = "SELECT data1,id_avtobus,name FROM avtobus69 where data1='$q1'";
	}
else
	{
	$qwer2 = "SELECT data1,id_avtobus,name FROM avtobus69 where data1>='$data'";
	}

$result2 = mysql_query($qwer2) or die("Query failed 2: " . mysql_error());

    while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td>$col_value</td>\n";
        }print"<td><input type=radio name=avtobus value='$line[id_avtobus]'></td>";

        print "\t</tr>\n";
    
    }
 
	
    print "</table><p><input type='submit' name='reg' style='font-size: 14pt;' value='Вывести данные турист/место'>
</form>
 
</center>
 
</tr> 
      
      </td>
   </tr>
</table>";

}
?>

</body>

</html>