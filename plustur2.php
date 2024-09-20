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
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';} 

echo"</b></font></span></td></tr>
   <tr>
      <td >
<center>";

 include("start.php");

 
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$date1_1=$_GET['date1_1'];
$date1_2=$_GET['date1_2'];
$date2_1=$_GET['date2_1'];
$date2_2=$_GET['date2_2'];
$date2_3=$_GET['date2_3'];
$date1_3=$_GET['date1_3'];
$stoim=$_GET['stoim'];
$kolvo=$_GET['kolvo'];

$q1=$date1_3.'-'.$date1_2.'-'.$date1_1;
$q2=$date2_3.'-'.$date2_2.'-'.$date2_1;

echo"
<form action='plusturgo.php' method='get' onSubmit=\"document.form[0].knopka.disabled\"><font size='4'><b>Выберите автобус</b></font><p>
<input type='hidden' name='otel' value='$otel'>
<input type='hidden' name='komnata' value='$komnata'>
<input type='hidden' name='stoim' value='$stoim'>
<input type='hidden' name='kolvo' value='$kolvo'>
<input type='hidden' name='q1' value='$q1'>
<input type='hidden' name='q2' value='$q2'>";



/*$qwer = "SELECT data1,id_avtobus,name FROM avtobus48 where data1='$q1'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";
*/


$qwer2 = "SELECT data1,id_avtobus,name FROM avtobus49 where data1='$q1'";
$result2 = mysql_query($qwer2) or die("Query failed : " . mysql_error());
print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";

    
$qwer = "SELECT data1,id_avtobus,name FROM avtobus49m where data1='$q1'";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";

/*
$qwer3 = "SELECT data1,id_avtobus,name FROM avtobus66 where data1='$q1'";
$result3 = mysql_query($qwer3) or die("Query failed : " . mysql_error());
print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    while ($line = mysql_fetch_array($result3, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>";
*/	

$qwer4 = "SELECT data1,id_avtobus,name FROM avtobus53 where data1='$q1'";
$result4 = mysql_query($qwer4) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result4, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";
    
    
$qwer5 = "SELECT data1,id_avtobus,name FROM avtobus51 where data1='$q1'";
$result5 = mysql_query($qwer5) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result5, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";



    $qwer50144 = "SELECT data1,id_avtobus,name FROM avtobus501 where data1='$q1'";
    $result50144 = mysql_query($qwer50144) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result50144, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";


    $qwer62444 = "SELECT data1,id_avtobus,name FROM avtobus62 where data1='$q1'";
    $result62444 = mysql_query($qwer62444) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result62444, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";


    $qwer84444 = "SELECT data1,id_avtobus,name FROM avtobus84 where data1='$q1'";
    $result84444 = mysql_query($qwer84444) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result84444, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";
    
    
    $qwer5111 = "SELECT data1,id_avtobus,name FROM avtobus51m where data1='$q1'";
$result5111 = mysql_query($qwer5111) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result5111, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";
    
    
$qwer6 = "SELECT data1,id_avtobus,name FROM avtobus52 where data1='$q1'";
$result6 = mysql_query($qwer6) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";
    

    while ($line = mysql_fetch_array($result6, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>\n";

    $qwer661 = "SELECT data1,id_avtobus,name FROM avtobus661 where data1='$q1'";
    $result661 = mysql_query($qwer661) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result661, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";

    $qwer61 = "SELECT data1,id_avtobus,name FROM avtobus61 where data1='$q1'";
    $result61 = mysql_query($qwer61) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result61, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";
	
	
	$qwer691 = "SELECT data1,id_avtobus,name FROM avtobus691 where data1='$q1'";
    $result691 = mysql_query($qwer691) or die("Query failed : " . mysql_error());


    print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    print "<tr>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Дата отъезда</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>ID автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Имя автобуса</b></td>\n";
    print "<td bgcolor=#D3D3D3 align='center' width='10%' height='50'><b>Выбрать</b></td>\n";
    print "</tr>\n";


    while ($line = mysql_fetch_array($result691, MYSQL_ASSOC)) {
        print "\t<tr>\n";
        $d=substr($line[data1],8);
        $m=strtok(substr($line[data1],5),'-');
        $g=strtok($line[data1],'-');
        $line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
            print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";

    }
    print "</table>\n";
	

    

$qwer3 = "SELECT data1,id_avtobus,name FROM avtobus69 where data1='$q1'";
$result3 = mysql_query($qwer3) or die("Query failed : " . mysql_error());
print "<table border=1 cellpadding=2 cellspacing=0 width='60%'>\n";
    while ($line = mysql_fetch_array($result3, MYSQL_ASSOC)) {
        print "\t<tr>\n";
$d=substr($line[data1],8);
$m=strtok(substr($line[data1],5),'-');
$g=strtok($line[data1],'-');
$line[data1]=$d.'-'.$m.'-'.$g;

        foreach ($line as $col_value) {
         print "\t\t<td bgcolor=#FFFFFF width='10%' height='50'><font face=Courier>$col_value</font></td>\n";
        }print"<td bgcolor=#FFFFFF width='10%' height='50'>
<input type=checkbox name=avtobus value=$line[id_avtobus]></td>";

        print "\t</tr>\n";
    
    }
    print "</table>	
	
	
	
	<p><input type='submit' name='reg' style='font-size: 14pt;' value='Внести данные по туру'>
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