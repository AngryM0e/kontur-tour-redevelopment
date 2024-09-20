<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
	@media print { .noprint {display:none} }
	p {
		margin-top:0px;
		margin-bottom:0px;
	}
</style>
<title>���������� � ��������</title>
</head>

<body>

<div style="width:1200px;">
<?
function num2str($num)
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

	
	/*if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
	{ */
		include("start.php");
		
		$idz = $_GET['idz'];
		$stoim = $_GET['stoim'];
		$start= $_GET['start'];
		$end= $_GET['end'];
		$transfer = $_GET['trans'];
		$city= $_GET['city'];
		$otel= $_GET['otel'];
		$komnata = $_GET['komnata'];		

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
		$turists = '';
		
?>
<FORM style="text-align:center">
<INPUT NAME="print" TYPE="button" VALUE= "������ (������� �������� �� ���������)" ONCLICK="varitext()" class="noprint">
<SCRIPT LANGUAGE="JavaScript">
function varitext(text){
text=document
print(text)
}
</SCRIPT>
</FORM>


<table border="0" cellpadding="4" cellspacing="4">
	<tbody>
		<tr>
			<td style="border-right:1px solid #000000" width="66%">
				<p>
					<strong>��������: ��� </strong>&lsquo;������&rsquo;, ��� 7106513630</p>
				<p>
					300041, ������, �.����, ��������������� ��-�, �.7, ��.304, ���/����(4872)253-109, 253-160</p>
				<h1 style="text-align: center;">
					����������&nbsp; �&nbsp; ��������&nbsp;�<span style="text-decoration:underline">&nbsp;<?=$idz?>&nbsp;</span></h1>
				<p>
					<strong>���</strong>:&nbsp; <span style="text-decoration:underline">&nbsp;<?=$city?>,
					 &nbsp;<?=$otel?>&nbsp;</span></p>
				<p align="center">
					������������ ����, ��� �� ����, �� ��������������, ����� �����������</p>
				<p>
					<strong>����������: </strong>����������� ����: __________________________________________________________________</p>
				<p align="center">
					������������, ��� ������������, ����������� �����&nbsp;</p>
				<p align="center">
					���������� ���������, ���./����, ����� �����</p>
				<p>
					���������� ����: <span style="text-decoration:underline">&nbsp;<?=$restur['fio']?>&nbsp;</span></p>
				<p align="center">
					���, ������ ��, ���, �����, ���. (���������, ��������)</p>
				<p>
					<strong>������ �������� </strong> 
					<? 
						echo "<span style='text-decoration:underline'>&nbsp;"; $counttur=0;
						do{
							if($counttur == 0){echo $restur['fio']; $turists .= $restur['fio'];}
							else {echo ", ".$restur['fio']; $turists .= ", ".$restur['fio'];}
							$counttur++;
						}while($restur = mysql_fetch_array($querytur));
						echo "&nbsp;</span>";
					?>
					</p>
				<p align="center">
					���, ������ ��, ���, �����, ���. (���������, ��������)</p>
				<p>
					<strong>������� ������������ ������:</strong><u>&nbsp; ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><br />
					&nbsp;</p>
				<p>
					<strong>����������������� �������:</strong> <strong><span style="text-decoration:underline">� 
						&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;��
						&laquo;&nbsp;<?=date("d", strtotime($end))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($end))]?>&nbsp; 2022 �.</span></strong></p>
				<p>
					<strong>������� ������� � ������ (������) ����������:</strong></p>
				<p>
					������ �������� (����� ��, �/�., �/�., ���., ����., ���., ������� �������)<u>&nbsp;&nbsp;&nbsp;����&nbsp;&nbsp;&nbsp;</u></p>
				<p>
					������ ���������� <span style="text-decoration:underline">&nbsp;<?=$city?>&nbsp;</span><br />
					��������� �������� (����� ��, �/�., �/�., ���., ����., ���., ������� ��������&nbsp;<u>&nbsp;&nbsp;&nbsp;����&nbsp;&nbsp;&nbsp;</u></p>
				<p>
					<strong>����� �����:</strong> ��������� ���������� ������<u> &nbsp;&nbsp;�������&nbsp;&nbsp;</u></p>
				<p>
					����� <span style="text-decoration:underline">&nbsp;<?=$komnata?>&nbsp;</span>. ���������� <span style="text-decoration:underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$numbertur?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> ������� _______________ </p>
				<p>
					���� <u>&nbsp;&nbsp;&nbsp; ��� &nbsp;&nbsp;&nbsp;</u> ��������� _______________________ �������� <span style="text-decoration:underline">&nbsp;<?=$transfer?>&nbsp;</span> </p>
				<p>
					������������� ���������<strong>:</strong><u>&nbsp;���&nbsp;</u></p>
				<p align="center">
					���������� ���������, ������ ������������</p>
				<p>
					<strong>�������������� ���������� ������:</strong><u>&nbsp; ���&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
				<p align="center">
					������������</p>
				<p>
					��������� �������:<u>&nbsp;&nbsp;����������&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
				<p align="right">
					����� ��������&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				<p>
					<strong>���� �������:</strong> <span style="text-decoration:underline">&nbsp;
					&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
					&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;<?=date("Y", strtotime($start))?> �.&nbsp;</span></p>
				<p>�������� </strong>��� &laquo;������&raquo;</p>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;����������</p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; �.�. (��� �����������)</td>
			<td>
				<p align="center">
					<b>�������</b></p>
				<h2 style="text-align: center;margin-bottom:0">
					<strong>�������� �����</strong></h2>
				<p align="center" style="margin-left:14.2pt;">
					����������&nbsp; �&nbsp; ��������<strong> �<span style="text-decoration:underline">&nbsp;<?=$idz?>&nbsp;</span></strong><br />
					&nbsp;</p>
				<p style="margin-left:14.2pt;">
					<strong>���: </strong><span style="text-decoration:underline">&nbsp;<?=$city?>,
					 &nbsp;<?=$otel?>&nbsp;</span></p>
				<p style="margin-left:14.2pt;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ������������ ����</p>
				<p>
					<strong>&nbsp;&nbsp;&nbsp;&nbsp; ���������� </strong><span style="text-decoration:underline">&nbsp;<?=$fioone?>&nbsp;</span>&nbsp;<br />
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; ���. ��� ���. ���</p>
				<p style="margin-left:14.2pt;">
					<strong>����������������� �������:</strong></p>
				<p style="margin-left:14.2pt;">
					<span style="text-decoration:underline">� 
						&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;��
						&laquo;&nbsp;<?=date("d", strtotime($end))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($end))]?>&nbsp;</span>&nbsp; 2022 �.</p>
				<p style="margin-left:14.2pt;">
					&nbsp;</p>
				<p>
					<strong>&nbsp;&nbsp;&nbsp; ������</strong>&nbsp;<strong>��������:</strong> 
					<?
						echo "<span style='text-decoration:underline'>&nbsp;".$turists."&nbsp;</span>";
					?>
					</p>
				<p>
					&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>
				<p>
					<strong>����������</strong></p>
				<p>
					<strong>&nbsp;������</strong></p>
				<p>
					<strong>������ �� ��������, ���������� � ���������, ����� ��������� ���������</strong></p>
				<p>
					<strong>____________________________________________</strong></p>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ������ �������� �����</p>
				<p>
					____________________________________________<br />
					<br />
					<strong>&nbsp;&nbsp;&nbsp;&nbsp; ��������� �������:__________________________</p></strong>
				<p>
					<strong>_____________________________________________</strong></p>
				<p>
					<strong>_____________________________________________</strong></p>
				<p>
					����� �������� <strong><?echo " ".num2str($stoim)?> </strong></p>
				<p style="margin-left:14.2pt;">
					<br />
					<strong>��������:</strong><u> ��� &laquo;������&raquo;</u><br />
					�.�.</p>
				<p style="margin-left:14.2pt;">
					� ��������� ��������������<br />
					���������� ����� ����������<br />
					� ��������.<br />
					<br />
					<strong>����������: _______________________________</strong><br />
					&nbsp;</p>
				�.�. ( ��� ����������� )<br />
				<br />
				<strong>���� �������: <span style="text-decoration:underline">
					&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
					&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;2022 �.</span></strong></td>
		</tr>
	</tbody>
</table>
<p>
	&nbsp;</p>
<?
	//}
?> 
	
</div>

</body>
</html>