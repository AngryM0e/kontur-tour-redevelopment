<?include "header.php"; include("start.php");?>

<form action="poisk.php" method="GET">
	<table class='tur'>
	<tr><td>Отель:</td><td>
		<select id="otel" name="otel" size="1"> 
			<option value="">Выберите отель</option> 
			<?
			$qwer = "SELECT id_otel, name, city FROM otel order by name";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
						 {
						print "<option value=\"".$line[id_otel]."\">".$line[name]."-".$line[city]."</option>";
						}
			?>
		</select></td></tr>
		<tr><td>Комната:</td><td>
		<select id="komnata">
			<option value="">Выберите комнату</option>
			<?
			$qwer = "SELECT id_komnata, name FROM komnata order by name";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
						 {
						print "<option value=\"".$line[id_komnata]."\">".$line[name]."</option>";
						}
			?>
		</select></td></tr>
		<tr><td>Выезд от:</td><td>
		<select id="date1_1">
			<option value=""></option>
			<? for($i=1;$i<32;$i++) {print"<option value=\"".$i."\">".$i."</option>";}?>
		</select>
		
		<select  id="date1_2">
			<? $str="<option value=\"\"></option>
			<option value=\"1\">январь</option>
			<option value=\"2\">феврарь</option>
			<option value=\"3\">март</option>
			<option value=\"4\">апрель</option>
			<option value=\"5\">май</option>
			<option value=\"6\">июнь</option>
			<option value=\"7\">июль</option>
			<option value=\"8\">август</option>
			<option value=\"9\">сентябрь</option>
			<option value=\"10\">октябрь</option>
			<option value=\"11\">ноябрь</option>
			<option value=\"12\">декабрь</option>";
			print $str;?>
		</select>

		<input type="text" size="1" id="date1_3" value="2019" disabled="disabled">
		</td></tr>
		<tr><td>до</td><td>
		<select id="date2_1">
			<option value=""></option>
			<? for($i=1;$i<32;$i++) {print"<option value=\"".$i."\">".$i."</option>";}?>
		</select>

		<select id="date2_2">
			<? print $str;?>
		</select>
		<input type="text" size="1" id="date1_3" value="2019" disabled="disabled">
		</td></tr>
	</table>
		<button type="submit" class="button">Поиск</button>
</form>
<form action="podbortur.php" method="GET">
	<button type="submit" class="button">Вывести все туры</button>
</form>
<p class="help">Стоимость указана за номер без стоим. дополнительного места и без вычета комиссионного вознаграждения!</p>
<table class="info">
<tr>
<th>№</th>
<th>Дата выезда</th>
<th>Дата возвращения</th>
<th>Город</th>
<th>Гостиница</th>
<th>Комната</th>
<th>Стоимость</th>
<th>Количество<br>номеров</th>
<th>Бронирование</th>
</tr>


</table>