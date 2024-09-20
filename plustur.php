<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b><p align="center">
<font size="5">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</font>

<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
echo"
</td>
</tr>
    <tr><td>
	<p align='right'>
	<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
     </td></tr>
   <tr>
      <td >
<center>";

include("start.php");


echo"
<form action='plustur2.php' method='get'>
<table style='font-size:14pt'>

<tr>
  <td align='right'>Отель:</td><td>";


$qwer = "SELECT id_otel, name, city FROM otel order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='otel' size='1'>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_otel]'> $line[name] - $line[city]</option>";
	 
			          }
       				 print "</SELECT></td></tr>

</td>
</tr>
<tr>
  <td align='right'>Комната:</td><td>";

$qwer = "SELECT id_komnata, name FROM komnata order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT name='komnata' size='1'>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_komnata]'> $line[name]</option>";
	 
			          }
       				 print "</SELECT></td></tr>



</td>
</tr>
  <tr><td>Количество комнат</td>
<td>
<input type=text maxlength=2 size=2 name='kolvo'>

 </td></tr>
<tr>


  <td align='right'>Дата выезда:</td><td>
<input type='text' size=4 MAXLENGTH=4 name='date1_1'>";
/*<select name='date1_1'>

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
</select>*/
echo"
<select  name='date1_2'>";

echo"<option value='1'>январь</option>
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
<option value='12'>декабрь</option>";
echo"</select>
<input type='text' size=4 MAXLENGTH=4 name='date1_3' value='2022'></td>
</tr>
<tr>
  <td align='right'>Дата возвращения:</td><td>
<input type='text' size=4 MAXLENGTH=4 name='date2_1'>";
/*
<select name='date2_1'>

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
</select>*/
echo"
<select name='date2_2'>";
echo"<option value='1'>январь</option>
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
<option value='12'>декабрь</option>";
echo "</select>
<input type='text' size=4 MAXLENGTH=4 name='date2_3' value='2022'></td>
</tr>
<tr><td></td><td><center><font color=red size=3>Стоимость указывать за номер!</font></center></td></tr>
<tr>
  <td align='right'>Стоимость:</td><td><input name='stoim' type='text' style='font-size: 14pt;' size='45' value=''/></td>
</tr>
<tr>
  <td align='right'></td><td>

<tr>
  <td></td><td><input type='submit' name='reg' style='font-size: 14pt;' value='Внести данные по туру'></td>
</tr>
 
</table>
</form>
 
 
</td>
</tr>
</table>	
 
</center>";
}
 ?>
</body>
</html>