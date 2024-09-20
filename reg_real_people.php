<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Клиенты</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
function Approval(index,email)
{

	$.ajax({
		url:"approval_reg_real_people.php",
		method:"POST",
		data:{id:index,email:email},
		success:function(data)
		{
			document.getElementById('button'+index).style.backgroundColor='#BEFFBB';
document.getElementById('button'+index).style.color='#000000';
document.getElementById('button'+index).disabled =true;
		document.getElementById('buttondis'+index).style.backgroundColor='#550000';
			document.getElementById('buttondis'+index).style.color='#000000';
			document.getElementById('buttondis'+index).disabled =true;
		},
		error:function(data)
		{
			
			alert('Ошибка');
		}
		
	}
	
	)
}

function DisApproval(index,email)
{

	$.ajax({
		url:"del.php",
		method:"POST",
		data:{id:index,email:email},
		success:function(data)
		{

document.getElementById('button'+index).disabled =true;
			document.getElementById('buttondis'+index).style.backgroundColor='#550000';
			document.getElementById('buttondis'+index).style.color='#FFFFFF';
			document.getElementById('buttondis'+index).disabled =true;
			
		},
		error:function(data)
		{
			
			alert('Ошибка');
		}
		
	}
	
	)
}
</script>
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
   if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421 || $_COOKIE['login']==418)
{                                        
 echo"   
 <tr><td>
	<p align='right'>
<a href='admin.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
	<a href='logout.php' style='text-decoration: none'>Выход</b></a>
    </td></tr>
   
	<tr>
		
		<td><span lang='ru'><font size='4'><b>&nbsp;Клиенты, подавшие заявку</b></font></span>";



 include("start.php");
  mysql_query('set names utf8');

    /* Выполняем SQL-запрос */
    $query = "SELECT * FROM klient where registered != 1 and is_turist=1";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());

    /* Выводим результаты в html */
    print "<p><table border=1 cellpadding=2 cellspacing=0 align='center' width='95%' class='table table-bordered table-sm'>\n";
    print "<tr class='table-primary'>\n";
    print "<td  align='center'><b>ID_Клиента</b></td>\n";
	print "<td  align='center'><b>ФИО</b></td>\n";
    print "<td  align='center'><b>Логин</b></td>\n";
    print "<td  align='center'><b>Пароль</b></td>\n";
    print "<td  align='center'><b>Почта</b></td>\n";
    print "<td  align='center'><b>Телефон</b></td>\n";
	print "<td  align='center'><b>Одобрение</b></td>\n";

  

    print "</tr>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        print "\t<tr class='table-info'>\n";
		?>
		<td><?echo $line[id_klient];?></td>
		<td><?echo $line[director];?></td>
		<td><?echo $line[login];?></td>
		<td><?echo $line[pw];?></td>
		<td><?echo $line[mail];?></td>
		<td><?echo $line[telefon];?></td>
		<?

		
	?>
	<td><button id="<?echo 'button'.$line[id_klient]?>"onclick='Approval(<?echo $line[id_klient].',"'.$line[mail].'"'?>)' class="btn btn-primary">Одобрить</button><br><br><button id="<?echo 'buttondis'.$line[id_klient]?>"onclick='DisApproval(<?echo $line[id_klient].',"'.$line[mail].'"'?>)' class="btn btn-primary">Отказать</button></td>
	<?
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