<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title> Контур</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS"> Контур</font></b><p align="center">
<font size="5">г.Тула,  Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</font>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){ 
$("#final").click(function() 
{ 
var day=$("#date1_1").val();
var month=$("#date1_2").val();
var year=$("#date1_3").val();


var date_21=$("#date2_1").val();
var date_22=$("#date2_2").val();
var date_23=$("#date3_3").val();


var otel=$("#otel").val();

$("#avtobusi").load("show_buses.php",{date1_1:day,date1_2:month,date1_3:year,otel:otel,date_21:date_21,date_22:date_22,date_23:date_23});
}); 
}); 
</script> 
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

mysql_set_charset('utf8');
$qwer = "SELECT id_otel, name, city FROM otel order by name";
$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
	
				echo"<SELECT id='otel' name='otel' size='1'>"; 

				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {

				print "<OPTION VALUE='$line[id_otel]'> $line[name] - $line[city]</option>";
	 
			          }
       				 print "</SELECT></td></tr>

</td>
</tr>






<tr>


  <td align='right'>Дата выезда:</td><td>
<input type='text' size=4 MAXLENGTH=4 id='date1_1'  name='date1_1'>";

echo"
<select id='date1_2'  name='date1_2'>";

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
<input id='date1_3' type='text' size=4 MAXLENGTH=4 name='date1_3' value='2024'></td>
</tr>
<tr>
  <td align='right'>Дата возвращения:</td><td>
<input id='date2_1' type='text' size=4 MAXLENGTH=4 name='date2_1'>";

echo"
<select id='date2_2' name='date2_2'>";
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
<input id='date3_3' type='text' size=4 MAXLENGTH=4 name='date2_3' value='2024'></td>
</tr>

<tr>
  <td align='right'></td><td>

<tr>
  <td></td><td><input type='button' id='final' name='reg' style='font-size: 14pt;' class='btn btn-primary' value='Внести данные по туру'></td>
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

<div id='avtobusi'>
</div>
</html>