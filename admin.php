<?
echo"
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=windows-1251'>
<title>Контур</title>
</head>
<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align='center'><font color='#FFFFFF'><b><font size='7' face='Comic Sans MS'>КОНТУР</font></b><p align='center'>
<font size='5'>г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</font>


</td>
</tr>
    <tr><td>
	<p align='right'>";



if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418 || $_COOKIE['login']==421)
{
echo" 	<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
        </p>
    </td></tr>
   <tr>
      <td >
        
<p>&nbsp;</p>
<center>
<table border='0' width='50%'>
	<tr>
		<td width='50%'>
		<p align='center'><b><span lang='ru'>На подтверждение</span></b></p>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='zakaz.php' style='text-decoration: none'>Забронированные 
		туры</a></span></td>
		<td><span lang='ru' style='letter-spacing: 1pt'><a href='poisk.php' style='text-decoration: none'>Забронировать тур</a></span></td>
	</tr>
	<tr>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='klient2.php' style='text-decoration: none'>Хотят зарегистрироваться агентства</a></span></td>
		<td><span lang='ru' style='letter-spacing: 1pt'><a href='print.php' style='text-decoration: none'>Распечатать автобус</a></span></td>
	</tr>
	<tr>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='reg_real_people.php' style='text-decoration: none'>Хотят зарегистрироваться туристы</a></span></td>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='list_people.php' style='text-decoration: none'>Список туристов</a></span></td>
	</tr>
</table>
<p>&nbsp;</p>


<table border='0' width='50%'>
	<tr>
		<td width='50%'>
		<p align='center'><b><span lang='ru'>Вывод информации</span></b></p>
		</td>
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='klient.php' style='text-decoration: none'>Все пользователи</a></span></td>
		<td><span lang='ru' style='letter-spacing: 1pt'><a href='tur.php' style='text-decoration: none'>Все туры</a></span></td>
	</tr>
	<tr>
		<td width='50%'><span lang='ru' style='letter-spacing: 1pt'><a href='bronzakaz.php' style='text-decoration: none'>Забронированные мной туры</a></span></td>
		<td><span lang='ru' style='letter-spacing: 1pt'><a href='zakazbron.php' style='text-decoration: none'>Купленные туры</a></span></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><span lang='ru' style='letter-spacing: 1pt'><a href='table_del.php' style='text-decoration: none'>Удаленные туры</a></span></td>
	</tr>
</table>
<p>&nbsp;</p>


<table border='0' width='50%'>";
/*	<tr>
	<td align='left'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus48.php' style='text-decoration: none'>схема автобуса 
		48 мест</a></span></td>
	</tr>
echo "<tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus49.php' style='text-decoration: none'>схема автобуса 
		49 мест</a></span></td>
	</tr>";
echo "<tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus49m.php' style='text-decoration: none'>схема автобуса 
		49 мест, мерседес</a></span></td>
	</tr><tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus501.php' style='text-decoration: none'>схема автобуса
		50 мест</a></span></td>
	</tr><tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus84.php' style='text-decoration: none'>схема автобуса
		84 места</a></span></td>
	</tr>";*/
/*echo "<tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus51.php' style='text-decoration: none'>схема автобуса 
		51 место</a></span></td>
	</tr><tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus61.php' style='text-decoration: none'>схема автобуса 
		61 место</a></span></td>
	</tr><tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus661.php' style='text-decoration: none'>схема автобуса 
		66+2 мест</a></span></td>
	</tr>";*/
	
	echo "<tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus51.php' style='text-decoration: none'>схема автобуса 
		51 место</a></span></td>
	</tr><tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus691.php' style='text-decoration: none'>схема автобуса 
		69 мест</a></span></td>
	</tr>";
	
    /*echo "<tr>
            <td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus51m.php' style='text-decoration: none'>схема автобуса
            51 место, мерседес</a></an></td>
        </tr>";
    /*	<tr>
            <td align='left'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus66.php' style='text-decoration: none'>схема автобуса
            66 мест</a></span></td>
        </tr>
    echo "<tr>
            <td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus52.php' style='text-decoration: none'>схема автобуса
            52 места</a></span></td>
        </tr>";
echo "<tr>
		<td align='legt'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus53.php' style='text-decoration: none'>схема автобуса 
		53 места</a></span></td>
	</tr>";*/
/*echo "<tr>
		<td align='left'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus69.php' style='text-decoration: none'>схема автобуса 
		69 мест</a></span></td>
	</tr>";
	<tr>
		<td align='left'><span lang='ru' style='letter-spacing: 1pt'><a href='avtobus48.php' style='text-decoration: none'>схема автобуса 
		53 мест</a></span></td>
	</tr>*/
echo "<tr>
		<td align='left'><span lang='ru' style='letter-spacing: 1pt'><a href='plusturnew.php' style='text-decoration: none'>добавить 
		тур</a></span></td>
	</tr>
</table>
<p>&nbsp;</p>
</center>";
}
	//echo 'qwe'.$mmm=substr('13рядЦ',-8);
 ?>
  </tr> 
      </td>

  </tr>
</table>
</body>

</html>