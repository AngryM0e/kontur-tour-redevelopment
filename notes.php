<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>

<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b></font></p>
<p align="center">
<font size="5" color="#FFFFFF">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@mail.ru
</font>
</p>
</td>
</tr>
<?
if($_COOKIE['login']<>0)
{	
	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235)
	{
		echo "<tr><td><p align='right'><a href='admin.php' style='text-decoration: none'><b>Главная</b></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='logout.php' style='text-decoration: none'><b>Выход</b></a></p></td></tr>";
	}
	else
	{
		echo "<tr><td>
		<p align='right'>
		<a href='bron.php' style='text-decoration: none'><b>Главная</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='bronzakaz.php' style='text-decoration: none'><b>Бронированные туры</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='zakazbron.php' style='text-decoration: none'><b>Оплаченные туры</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='table_del.php' style='text-decoration: none'><b>Аннулированные туры</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='login.php' style='text-decoration: none'><b>Личная информация</b></a>&nbsp;&nbsp;&nbsp;&nbsp;
		<a href='logout.php' style='text-decoration: none'><b>Выход</b></a></p>
	    </td></tr>";
	}
	
	echo"<tr><td><span lang='ru'><font size='4'><b>";
	if (isset($_SERVER['HTTP_REFERER'])) echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';
	echo"</b></font></span><br/><br/></td></tr>";
                             
 	include("start.php");
    $link = mysql_connect("$mysql_host", "$mysql_user", "$mysql_password") or die("Could not connect : " . mysql_error());
    mysql_select_db("$mysql_database") or die("Could not select database");

	$id_zakaz=$_GET['id_zakaz'];
	
    $query = "SELECT * FROM `notes` where id_zakaz='$id_zakaz' order by `data` ASC";
    $result = mysql_query($query) or die("Query failed : " . mysql_error());
	
    echo "<tr><td><font size='3'><table border=1 cellpadding=2 cellspacing=0 align='center' width='95%'><tr><td>Дата</td><td>Автор</td><td>Текст</td></tr>";
    
    $count = 0;
    $mainklient = 0;
    //$mainemail = "natakontur@mail.ru";
	$mainemail = "natakontur2016@yandex.ru";
	while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
		if($line['id_klient'] == 1){ $author = "администратор";}
		else {
    		$resultman = mysql_query("SELECT * FROM `klient` where id_klient='".$line['id_klient']."'",$link);
           	$human = mysql_fetch_array($resultman);
			$author = $human['firm']." (".$human['mail'].")";
			if($count == 0) $mainemail = $human['mail'];
		}
		if($count == 0) $mainklient = $line['id_klient'];
		echo "<tr><td>".date("H:i:s d.m.Y",strtotime($line['data']))."</td><td>".$author."</td><td>".$line['text']."</td></tr>";
		$count++;
    }
    echo "</table></font><br>";
    
    echo"<tr><td>";
    
    if($_COOKIE['login']==1 && $mainklient == 0){
    	$rman = mysql_query("SELECT * FROM `zakaz` where id_zakaz='".$id_zakaz."'",$link);
        $humann = mysql_fetch_array($rman);
        
        if(isset($humann['id_klient'])){
        	$mainklient = $humann['id_klient'];
        }
        else {
        	$rman = mysql_query("SELECT * FROM `bron` where id_zakaz='".$id_zakaz."'",$link);
        	$humann = mysql_fetch_array($rman);
        	if(isset($humann['id_klient'])){
	        	$mainklient = $humann['id_klient'];
	        }
	        else {
	        	$rman = mysql_query("SELECT * FROM `del` where id_zakaz='".$id_zakaz."'",$link);
	        	$humann = mysql_fetch_array($rman);
	        	$mainklient = isset($humann['id_klient'])?$humann['id_klient']:0;
	        }
        }
        
        if($mainklient != 0){
        	$resultman = mysql_query("SELECT * FROM `klient` where id_klient='".$mainklient."'",$link);
           	$human = mysql_fetch_array($resultman);
			$mainemail = $human['mail'];
        }
        
    }
    
    ?>
	<table border=0 cellpadding=2 cellspacing=0 align='center' width='95%'><tr><td align="left"><form action="/newnote.php" method="POST">
		<textarea name="newnote" style="width:400px;height:100px"></textarea><br/><br/>
		<input type="hidden" name="id_zakaz" value="<?=$id_zakaz?>">
		<input type="hidden" name="id_klient" value="<?=$_COOKIE['login']?>">
		<input type="hidden" name="to_klient" value="<?=($_COOKIE['login']==1?$mainklient:1)?>">
		<input type="hidden" name="email" value="<?=($_COOKIE['login']==1?$mainemail:"natakontur2016@yandex.ru")?>">
		<input type="submit" name="submit" value="отправить сообщение <?=($_COOKIE['login']==1?"агенту (".$mainemail.")":"администратору (natakontur2016@yandex.ru)")?>">
	</form></td></tr></table>
	<?
	
	echo"<br/></td></tr>";
	
    mysql_close($link);
}
?>
</td>
</tr>
</table>
</body>
</html>