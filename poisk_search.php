<?include "header.php"; include("start.php");?>

<form action="poisk.php" method="GET">
	<table class='tur'>
	<tr><td>�����:</td><td>
		<select id="otel" name="otel" size="1"> 
			<option value="">�������� �����</option> 
			<?
			$qwer = "SELECT id_otel, name, city FROM otel order by name";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
						 {
						print "<option value=\"".$line[id_otel]."\">".$line[name]."-".$line[city]."</option>";
						}
			?>
		</select></td></tr>
		<tr><td>�������:</td><td>
		<select id="komnata">
			<option value="">�������� �������</option>
			<?
			$qwer = "SELECT id_komnata, name FROM komnata order by name";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
						 {
						print "<option value=\"".$line[id_komnata]."\">".$line[name]."</option>";
						}
			?>
		</select></td></tr>
		<tr><td>����� ��:</td><td>
		<select id="date1_1">
			<option value=""></option>
			<? for($i=1;$i<32;$i++) {print"<option value=\"".$i."\">".$i."</option>";}?>
		</select>
		
		<select  id="date1_2">
			<? $str="<option value=\"\"></option>
			<option value=\"1\">������</option>
			<option value=\"2\">�������</option>
			<option value=\"3\">����</option>
			<option value=\"4\">������</option>
			<option value=\"5\">���</option>
			<option value=\"6\">����</option>
			<option value=\"7\">����</option>
			<option value=\"8\">������</option>
			<option value=\"9\">��������</option>
			<option value=\"10\">�������</option>
			<option value=\"11\">������</option>
			<option value=\"12\">�������</option>";
			print $str;?>
		</select>

		<input type="text" size="1" id="date1_3" value="2019" disabled="disabled">
		</td></tr>
		<tr><td>��</td><td>
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
		<button type="submit" class="button">�����</button>
</form>
<form action="podbortur.php" method="GET">
	<button type="submit" class="button">������� ��� ����</button>
</form>
<p class="help">��������� ������� �� ����� ��� �����. ��������������� ����� � ��� ������ ������������� ��������������!</p>
<table class="info">
<tr>
<th>�</th>
<th>���� ������</th>
<th>���� �����������</th>
<th>�����</th>
<th>���������</th>
<th>�������</th>
<th>���������</th>
<th>����������<br>�������</th>
<th>������������</th>
</tr>


</table>