<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
	@media print { .noprint {display:none} }
</style>
<title>�������</title>
</head>

<body>

<div style="width:1000px">
<?	function num2str($num)
{
	$nul = '����';
	$ten = array(
		array('', '����', '���', '���', '������', '����', '�����', '����', '������', '������'),
		array('', '����', '���', '���', '������', '����', '�����', '����', '������', '������')
	);
	$a20 = array('������', '�����������', '����������', '����������', '������������', '����������', '�����������', '����������', '������������', '������������');
	$tens = array(2 => '��������', '��������', '�����', '���������', '����������', '���������', '�����������', '���������');
	$hundred = array('', '���', '������', '������', '���������', '�������', '��������', '�������', '���������', '���������');
	$unit = array(
		array('�������' , '�������',   '������',     1),
		array('�����',    '�����',     '������',     0),
		array('������',   '������',    '�����',      1),
		array('�������',  '��������',  '���������',  0),
		array('��������', '���������', '����������', 0),
	);
 
	list($rub, $kop) = explode('.', sprintf("%015.2f", floatval($num)));
	$out = array();
	if (intval($rub) > 0) {
		foreach (str_split($rub, 3) as $uk => $v) {
			if (!intval($v)) continue;
			$uk = sizeof($unit) - $uk - 1;
			$gender = $unit[$uk][3];
			list($i1, $i2, $i3) = array_map('intval', str_split($v, 1));
			// mega-logic
			$out[] = $hundred[$i1]; // 1xx-9xx
			if ($i2 > 1) $out[] = $tens[$i2] . ' ' . $ten[$gender][$i3]; // 20-99
			else $out[] = $i2 > 0 ? $a20[$i3] : $ten[$gender][$i3]; // 10-19 | 1-9
			// units without rub & kop
			if ($uk > 1) $out[] = morph($v, $unit[$uk][0], $unit[$uk][1], $unit[$uk][2]);
		}
	} else {
		$out[] = $nul;
	}
	$out[] = morph(intval($rub), $unit[1][0], $unit[1][1], $unit[1][2]); // rub
	$out[] = $kop . ' ' . morph($kop, $unit[0][0], $unit[0][1], $unit[0][2]); // kop
	return trim(preg_replace('/ {2,}/', ' ', join(' ', $out)));
}
 
/**
 * �������� ����������
 * @author runcore
 */
function morph($n, $f1, $f2, $f5) 
{
	$n = abs(intval($n)) % 100;
	if ($n > 10 && $n < 20) return $f5;
	$n = $n % 10;
	if ($n > 1 && $n < 5) return $f2;
	if ($n == 1) return $f1;
	return $f5;
}
     
	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
	{ 
		include("start.php");
		
		$idz = $_GET['idz'];
		$stoim = $_GET['stoim'];
		preg_match_all("/\d+/", $stoim, $price);
		
		
		$month = array('01'=>'������','02'=>'�������','03'=>'�����','04'=>'������','05'=>'���','06'=>'����','07'=>'����','08'=>'�������','09'=>'��������','10'=>'�������','11'=>'������','12'=>'�������');
		
		$query = "SELECT Q.id_zakaz,Z.firm,Q.data, A.data1, A.data2, B.city, B.name as name1, C.name as name2, Q.stoim, Q.info, Q.transfer, Q.mesto FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q, klient as Z 
			WHERE ((A.id_otel=B.id_otel) 
			and (A.id_tur=D.id_tur)
			and (C.id_komnata=D.id_komnata)
			and (Q.id_tur=A.id_tur)
			and (Z.id_klient=Q.id_klient)
			and (Q.id_zakaz='$idz'))"; 
		$res = mysql_query($query) or die("Query failed : " . mysql_error());
		$result = mysql_fetch_array($res);
		
		$querytur = mysql_query("SELECT id_turist, fio, birth, pass, phone FROM turist where id_zakaz='$idz' order by id_turist ASC") or die("Query failed : " . mysql_error());
		$numbertur = mysql_num_rows($querytur);
		$restur = mysql_fetch_array($querytur);
		
		$fioone = $restur['fio'];
		$passone = $restur['pass'];
		$phoneone = $restur['phone'];
		
?>
<FORM style="text-align:center">
<INPUT NAME="print" TYPE="button" VALUE= "������" ONCLICK="varitext()" class="noprint">
<SCRIPT LANGUAGE="JavaScript">
function varitext(text){
text=document
print(text)
}
</SCRIPT>
</FORM>

<p style="text-align: center;">
	<strong>�������</strong> �� �������� ������������� ����� � <strong><span style="text-decoration:underline">&nbsp;<?=$result['id_zakaz']?>&nbsp;</span></strong></p>
<p style="text-align: center;">
	<strong>�. ����&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	&laquo;<span style="text-decoration:underline">&nbsp;<?=date("d", strtotime($result['data']))?>&nbsp;</span>&raquo;
	<span style="text-decoration:underline">&nbsp;<?=$month[date("m", strtotime($result['data']))]?>&nbsp;</span> <?=date("Y", strtotime($result['data']))?> �.</strong><br />
	&nbsp;</p>
<p style="text-align: justify;">
	�������� � ������������ ���������������� &laquo;������&raquo; ����������� �� ��������� ������������� per �71002041731 �� 06.04.2010 ���� ���� 1107154008246, � ���� �������� �.�., ��������� � ���������� &quot;���������&quot;, ����������� �� ��������� ������ � ����� �������, � 
	<?=$restur['fio']?>, ��������� � ���������� &quot;������&quot; � ������ �������, ��������� ��������� ������� � �������������:</p>
<p style="text-align: center;">
	<strong>1. ������� ��������.</strong>
</p>
<p style="text-align: justify;">
	1.1. ��������� ��������� �� ��������� ������� � �� ��� ���� ������������ ��� <span style="text-decoration:underline">&nbsp;<?=$result['city'].", ".$result['name1']?>&nbsp;</span><br />
	������������ ������������� (����������� �������� ���������������� ������������ ������������� �����, �������� � ���������� ����� 1.3, 1.4, 1.6):<strong>_OOO TK &laquo; ������_&raquo; ������.�__���-013232  ��./����.�����: 300041 �.����,��.��������������� �������� 7,���� 304, ���������� ����������� 500000 (������� �����) ������, �� ���������� �������� ����Ż 191119, �. �����-���������, ��������� ��-�., �.108, ����� ���. ������� ����������� ����������� ��������������� �� ������������ ��� ������������ ���������� ������������ �� �������� � ���������� �������������� �������� � 1128/24-49 �� 13.02.2024 �. ���� �������� ����������� ����������� : � 23.04.2024 �� 22.04.2025 �.,���.8 812 677-86-62 </strong><br />
	1.2. ���������� ������� ����������� (����������, �������, ������� ����������� � ��������) ������� � ������������� ������� � <span style="text-decoration:underline">&nbsp;<?=$result['id_zakaz']?>&nbsp;</span> ������� �������� ������������ ������ ��������.<br />
	1.3. ����������������� ���� _____________________________________________________________________.<br />
	1.4. ���� ������ ���� <span style="text-decoration:underline">&nbsp;<?=date("d.m.Y", strtotime($result['data1']))?>&nbsp;</span>. ���� ��������� ���� <span style="text-decoration:underline">&nbsp;<?=date("d.m.Y", strtotime($result['data2']))?>&nbsp;</span>. ��������� ���������� __________________________________________, ����� ������ � ��������� �����������, ������� �������, �������� � ������������� �������� ����������� � ���������� 1 � ������� ��������, ���������� ������������ ������ ��������, ����� �������������� ����������� �������������, �� ������� ��� �� 2 (���) ��� �� ���� ������ �����������.<br />
	1.5. ����������� ���������� �������� � ������, ����������� ��� ����, ����� ����������� ���������� __35______ �������.<br />
	1.6. ���������� � ����� <span style="text-decoration:underline">&nbsp;<?=$result['name1']?>&nbsp;</span> ������
	<span style="text-decoration:underline">&nbsp;<?=$result['name2']?>&nbsp;</span>. ���������� 
	<span style="text-decoration:underline">&nbsp;<?=$numbertur?>&nbsp;</span>. �������� �� ����� ��������������� ���������� � �������� ��� ���� �����. ����� (����������) ����� ��������������� ������������� �������� ������ ����������. �������������� ������ <i>������</i> ����� �������� �� �������� ���������� ��� ������������ ��������� �� ������ �����.<br />
	1.7.����������� ��������, ������������� �� ���������� ��������:<br />
	<? 
		$amount = 1;
		do{
			echo "&nbsp;&nbsp;&nbsp; ".$amount.".
			<span style='text-decoration:underline'>&nbsp;".$restur['fio']."&nbsp;</span> ������� 
			<span style='text-decoration:underline'>&nbsp;".$restur['pass']."&nbsp;</span> ������� 
			<span style='text-decoration:underline'>&nbsp;".$restur['phone']."&nbsp;</span><br />";
			$amount++;
		}while($restur = mysql_fetch_array($querytur));
	?>
	</p>
<p style="text-align: center;">
	<strong>2. ��������� ������� � �������.</strong>
</p>
<p style="text-align: justify;">
	2.1. ��������� ���� �������������� �������� ����������    <?echo $stoim."  <strong> ".num2str($price[0][0])."</strong>";?>         �� ��������/ ����������� ������, ������� ������������ �������������� ���������.<br />
	2.2. ������ ���� ������ ���� ����������� ���� � ����������� ������� � ������� 3 (����) ���������� ���� �� ��� ��������� �������� ����� �� ������, ���� ����� ����� ��������� ��������������� ��� ���������� ��������. ����������� �������� ���������� � ������� �� ����� 50 (����������) % �� ����� ��������� ����. ������������� ������ ������ ���� ���������� �� ������� 10 ���� �� ������ �����������, ������� ������������ ������ ����� ������ ������ ���� � ����� ��������� ��� �������� ������ ��� ����� ����������� ������ ������ ���� �� ��������� ���� ���������.
</p>
<p style="text-align: center;">
	<strong>3. ����� � ����������� ������.</strong>
</p>
<p style="text-align: justify;">
	<strong>3.1. ��������� �������:</strong><br />
	3.1.1. ���������� �������������� ����� � ������������ � ��������.<br />
	3.1.2. ������������� ��� ������� ��� � ������������ � ���� �� 1 �� 3-� �����. ������� ����� �� ������������ ��������� �� ���� �������.<br />
	3.1.3. � ������ �������� ������ ��������� ������� ������������ ������� �� ��� ��� � ������� ������� 100 % ��������� ����.<br />
	3.1.4. � ������� ������, ��� ������������� �������������� ���������� �������� ����� ��������� ����� ����� ���������� ������ �� ����� (����� ����������) ����������� ��������� ��� ���������� ���� ��� ������, ���� ���������� ����, �� � ��������� ������� ����� ������. � ���������� ����� � ������ ������ �������� (��������� ����� ��������), �������� ��������� ���� � ��������.<br />
	3.1.5. ���� � ������ ������� ������ ������, ��������������� ������������� (����������) ��� ��������� ��������� (��������� �����) � �.�., ��������� �� ���� ������� � � ��� �������� ����������� ��� ������. ��������� ������� ��������� ��������� � �������� ��������������� ���������.<br />
	3.1.6. ��������� (��� ��� �������������) ����� ����� ��������� ��������� � �������� (�/� ������ � �.�.) � ������ �� ������� ��������������� ����� ������� ����������� �����.<br />
	3.1.7. ��������� ������� ������������ ������� ���������� �� ������ (�����) ���������� � ������� �������.<br />
	<strong>3.2 ������ ������:</strong><br />
	3.2.1. �������� ��������� �������, ��������� � ����������� ��������� ��������� �������� � ������� 3 ���������� ���� � ������ ������ �� ������������ �������, ��� ����� ����� ��������� ��������������� ��� ���������� ��������.<br />
	3.2.2. �������������� ������� � �������� �� ������� 2 (����) ����� �� ������� ������, ���������� � ����������, ��� � ���������� 1 � ������� ��������.<br />
	3.2.3. �� ����� ���������� �����������, ������� �������, ������ ������ ��������� ���������������� ������ (�����) ���������� ����������, ������� � ���������� ����������, ������, ��������, ��������� ���������� ��������� �����, ������� ��������� � ���������� �������, ������� � �������� � ������ (�����) ���������� ����������, ��������� ������� ������ � ������ (�����) ���������� ����������, ������ �� ������ (�����) ���������� ���������� � ���������� ���, � ����� � ������� ����������� �������, ��������� �� ����� ����������� ������� ������ ������������.<br />
	3.2.4. ��� ������ �� ������� � �������� �� 18 ��� ��� ������������� ������ ��� ����� ���������, ����� ���������� ���������� �� �����, ���������� ����������. ��� ������� � 6 (�����) ���, ���������� � ������������� ��������� � ������������ ������� ����������� ����������.<br />
	3.2.5. ������� �� ������������ ������ �����, ����������, ���������, ��� ���� ������������� ������������ ����� ��������.<br />
	3.2.6. ������ ������ ������������ � ��������� �������������, �������������� ��������������� �������������-������������, � ��������� �����������, �������������� ��������������� ��������� ���������, �� ���������� �� ����� (������), � ������� ����� ��������� ������, � �������� �� ������ ����������.<br />
	3.2.7. ��� ���������� ���� ������ ������ ������������ ��������� ��� ������������� ���������� ��������� � ��������.<br />
	��� �� �������������� ����������� �������� ������ �� ������ ����������� ���������<br />
	��������� �� ��������������� ��������� ��� ������ ����������.<br />
	3.2.8. � ������ �������� ��������-���������������� ����� �� ���������� �������������� ���� � ���������� ���������� ����, �������������� ���������� ���������, ������ ��������� �������� ������ ����  �� �������� �� ����� � ��������������� ������.<br />
	3.2.9. ������ ���� ���� �������� �� ��������� ����� ������������ ������ ����������� ��� ���������� �������� � �������������� ������������� �����.
</p>
<p style="text-align: center;">
	<strong>4. ������� ��������� � ����������� ��������. ��������������� ������.</strong>
</p>
<p style="text-align: justify;">
	4.1 ������ �� ������ ������ ����������� ��������� ��� ����������� �������� � ����� � ������������� ����������� �������������, �� ������� ������� �������� ��� ���������� ��������. � ������������ ���������� ������������� ���������: ��������� ������ �����������, ������� ���������� � �������� ������������ ���������� �������� � ������, ������������ ��� ����, ����� ����������� ����������, �������������� ���� ������������ �������, �������� ����� ��� ��������� ����������� ������ ������� � ������, ������ ��������� ����� ������������ �����.<br />
	4.2 ���������� ������� ��� ����������� �������� �������������� � ������������ � ������������ ��������� ������, �� ��� ��� �� ���� ����������� ������� ����� ���������� �� 90% ��������� ����.<br />
	4.3. ���� ������� ������������ �� ���������� ���������, ������� ������������ ������ ��������� ������� ��� �������������� ������� � ��������� ���� �� �������� ��������������.<br />
	4.4. � ������ ������ ��� ��������� ������� � �������� ��� � ����� ���������� �� ����� ��������, ������� ������������, ��������� ������� �� ������������.<br />
	4.5. ��������� �� ���� ��������������� � ������ ������ ������������ ���������� � ������ ������� �������� ���� ������ ��� � �������������� ����������� ����� � ���������� � ������� ���������� ���������� ���������� �������.<br />
	4.6 ����� ����������� ���������� ���� �����, ��������� � ����������, �� �� ����� ��������������� �� �������������� ��������������� ����� ��������� �������.<br />
	4.7 ��� ��������� � ���������� � �������� ������ ���� ��������� � ���������� ���� � ���� ����������� � ��������� ���������.<br />
	4.6.��������� �� ����� ��������������� �� ����������� � �������� � ���������� ������������, �/� ������� � ���������.
</p>
<p style="text-align: center;">
	<strong>5. �������������� ������������� ����.</strong>
</p>
<p style="text-align: justify;">
	5.1 ������� �� ����� ��������������� �� ������������ ����� ������������ �� ���������� �������� � ������ ����������� ������������� ������������� ����, � ����� ������� ������� ������� ����������� ��������� ������� �������, ������������� ��������� ������������ ������� ��� ����������� ��������, ��������, � ����� ��������� ����������������, ������ ��������� ����� �����, � ����� ���������� ������, ��������� � ������������� ����� ������������ ���������, � �������� ��������� ������� ����������������� � ������������ � ������������ ���������������� (����������, ������� � ������ ������), � ���������� �������� ������������� ��� ���� ��������������� ��� ������������� �������.<br />
	5.2 � ��������� ���� �������. ������ ��������� ������������� �������. ���� ������ �� ����������� � ����������� ������� ��������, ��������������� ��� ��������� �����, �������� � �������, ��������� �����������, ��������� � �.4.2..
</p>
<p style="text-align: center;">
	<strong>6.������� � ����� ������������ �������� ���������� �� ������ �������� ����� �� ���������� ��������. ��������� ��� ������������� ������ �� ���������� ��������.</strong>
</p>
<p style="text-align: justify;">
	6.1.� ������� ������������ ��� ������������� ���������� ������������� ������������, �������� � ���������� �� ���������� ��������, ��� ������� ��������� ��� ������ �������� ����� �� ���������� �������� &laquo;������&raquo; ������ � �������� ����� ����������� ����������� ���������� ���������� ���������� ������� �� ������ �������� ����������� ��������������� ������� ����������� �������������� ���������� ����������� � ��������� � �.1.1 ���������� ��������.<br />
	6.2.���������� ���������� &laquo;�������&raquo; �� ������ �������� ����� �� ���������� �������� ������ ���� ����������� ������� � ������� ����� �������� ����������� �����������.<br />
	6.3.��������� ��� ������ �������� ����� �� ���������� �������� �������� ���� ������������ ����������� ������������ ���������� &laquo;�������&raquo; �������� ����� ��������� � ���������� ������������ ��� ������������� ���������� ������������� ��������� � ������ 1.3,1.4, 1.5 � 1.6 ���������� �������� ������������, ���� ��� �������� ������������ ���������� ������� ������ ��������.<br />
	� ������������ ���������� ���������:<br />
	������������ ������������ �� �������� ������� �������� � ������������� ������� ����� �� ��������� �- ��� ����������<br />
	������� � ������������� �������� ������������ �����������, ������� ������������ ��������� ���������� � �������� � ������������ �������������� ��������.<br />
	6.4.����������� ������������ ���������� ������� ����� ������������� �.�6.3. ���������� ��������, ��������������� ���������� ���������� ��������� �������������� ��������� ������� ��� �� ������� ����.
</p>
<p style="text-align: center;">
	<strong>7. ������� � ����� ������������ ��������� ��������.</strong>
</p>
<p style="text-align: justify;">
	7.1. � ������ ������������� � ������� �����-���� ������� � ������ (�����) ���������� �� ��������� ��������������� ��������� ��������� � ����������� ������������� ������������ ��� ������������� ����������� ������� ��� �������������� �������� ���, ���� ��������� �� �������� �� ����� ���������� � �� ������������ �������� ��� ������� ����������� ������� ��������� � ������������ �� �����������<br />
	7.2. ������ ����� ����� ������ ��������� ��������� � ���������� ���� � ��������������� ��������������� �� ��������������� ����� � �� �������������� ������� ��������, � ������� 20 (��������) ���� �� ��� ��������� �������� ��������. ��������� ��������������� � ������� 10 (������) ����.<br />
	7.3. ���������, �������� ����� ���������� ����� ��� �� ���������� � ������ (�����) ����������, �� ����������� � �� ���������������.
</p>
<p style="text-align: center;">
	<strong>8. ������ �������.</strong>
</p>
<p style="text-align: justify;">
	8.1 ���� �������� �������� ��������������� � <span style="text-decoration:underline">&nbsp;<?=date("d.m.Y", strtotime($result['data']))?>&nbsp;</span> �. �� <span style="text-decoration:underline">&nbsp;<?=date("d.m.Y", strtotime($result['data2']))?>&nbsp;</span> �.<br />
	8.2 ��� ����� � �����������, ����������� ����� ��������� �� ���������� �������� ��� � ����� � ���, �������� ���� ����������� ����� ���������. � ������ ������������� ���������� ����������� ���� �����������, ��� �������� ������������ � �������� �������, ������������� ����������������� ��.<br />
	8.2 ������� ��������� � ���� �����������, ������� ���������� ����������� ����. ���� ��������� ���������� �������, ������ �������� � ���������.<br />
	<strong>���������</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>������</strong><br />
	��� �� &laquo;������&raquo;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �.�.�.(����.��� �����������) <span style="text-decoration:underline">&nbsp;<?=$fioone?>&nbsp;</span><br />
	&nbsp; ��.�����: �.����,�����������������.7 - 304&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br />
	����.�����: 300041, �.����, ��������������� ��.7 ��. 304&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ����.(��� ��� �����������) <span style="text-decoration:underline">&nbsp;<?=$passone?>&nbsp;</span><br />
	&nbsp; ��� 7106513630 ��� 710601001<br />
	&nbsp; �/� 40702810902000035805&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �����, ���. <span style="text-decoration:underline">&nbsp;<?=$phoneone?>&nbsp;</span> <br />
	&nbsp; ��� 044525297, �/� 30101810945250000297<br />
	� ������� ������������ ��� ����� &laquo;�� ��������&raquo; �.������<br />
	���(4872)253-109,253-160&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; _____________________________________________</p>
<p>
	��������_______ /�������&nbsp; �. �./&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �������:</p>

<?
	}
?> 
	
</div>

</body>
</html>