<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
	@media print { .noprint {display:none} }
</style>
<title>�������</title>
</head>

<body>

<div style="width:950px">
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
   
	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421 || true)
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

<p style="text-align: center;width:300px;float:right;clear:both">���������� ��������<br/>
������������ ��������<br/>
���������� ���������<br/>
�� 9 ����.2007 �. � 60�</p>

<p style="clear:both">&nbsp;</p>

<div style="text-align:center;width:610px;float:left;">
<p style="text-align:left;margin:0"><b>�����������</b>/��������</p>
<p style="margin:0">________________________________<b style="font-size:18px">��� ������л</b>_________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">(������ � ����������� ������������)</p>
<p style="margin:0">________________<b>�. ����, ��������������� ��������, �.7, ���� 304</b>______________</p>
<p style="margin:0 0 10px 0;font-size:12px">����� (����� ����������)</p>
<p style="margin:0">___________<b>300041, �. ����, ��������������� ��������, �.7, ���� 304</b>_____________</p>
<p style="margin:0 0 10px 0;font-size:12px">�������� �����</p>
<p style="margin:0">________________________<b>���: 8 (4872) 253-160\ 253-109</b>_________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">�������</p>
<p style="margin:0">_______________<b>��� 7106513630  \ ���� 64691898</b>_____________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">���, ���  ��  ����</p>
<p style="margin:0">__________________________<b>��� 013232</b>_______________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">���������� ����� � ��� ������������</p>
</div>

<table style="width:280px;float:right;" border="1" cellpadding="5">
<tr><td style="width:90px">��� <br/>����� �� ����</td><td><b>0791611</b></td></tr>
<tr><td>��� ���� ����� �� ����</td><td>061000, 061100,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>061200, 061300,<br/>061400, 061500,<br/>061700</td></tr>
</table> 

<p style="clear:both">&nbsp;</p>

<?
	$nomer6 = "";
	if((int)$result['id_zakaz'] < 10 && (int)$result['id_zakaz'] > 0) $nomer6 = "00000".$result['id_zakaz'];
	if((int)$result['id_zakaz'] < 100 && (int)$result['id_zakaz'] > 9) $nomer6 = "0000".$result['id_zakaz'];
	if((int)$result['id_zakaz'] < 1000 && (int)$result['id_zakaz'] > 99) $nomer6 = "000".$result['id_zakaz'];
	if((int)$result['id_zakaz'] < 10000 && (int)$result['id_zakaz'] > 999) $nomer6 = "00".$result['id_zakaz'];
	if((int)$result['id_zakaz'] < 100000 && (int)$result['id_zakaz'] > 9999) $nomer6 = "0".$result['id_zakaz'];
	if((int)$result['id_zakaz'] < 1000000 && (int)$result['id_zakaz'] > 99999) $nomer6 = $result['id_zakaz'];
?>

<p style="text-align: center;"><strong style="font-size:18px">���������� ������� � <?=$nomer6?> * ����� ��</strong></strong></p>

<p style="margin:0;text-align: justify;">�������� ����������� ��������________________________<span style='text-decoration:underline'><?=$restur['fio']?></span>________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(���,  ������ ��������, � ��� ��� ���������� - ����� ���������, ��������������� ��������</p>
<p style="margin:0;text-align: justify;">______________________________________<span style='text-decoration:underline'>������� <?=$passone?></span>______________________________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">� ������������ � ����������������� ���������� ���������,  ����� ����������  - ��� ���. ����),</p>
<p style="margin:0;text-align: justify;">_________________________________________________________________________________________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(���, ������������, ����� (����� ����������), ��� �� ���� � ��� ������������ ����)</p>
<p style="margin:0;text-align: justify;">������ <span style='text-decoration:underline'>&nbsp;
<?  $count = 0;
	do{
		echo ($count==0?"":", ").$restur['fio']." (������� ".$restur['pass'].")";
		$count++;
	}while($restur = mysql_fetch_array($querytur));
?>&nbsp;</span></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(���, ������ ��������, � ��� ��� ���������� - ����� ���������, ��������������� �������� � ������������ � ����������������� ���������� ���������, ����� ����������)</p>
<p style="margin:0;text-align: justify;">��� ����������� �������� (�����������) <b>061100 \ ������ ������������ �� ����������� ����������� �������</b></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(��� ������ �� ����)</p>
<p style="margin:0;text-align: justify;">������� ��������� ����������� �������� (�����������)<span style='text-decoration:underline'>&nbsp;<?=$result['city']?>, ����. "<?=$result['name1']?>", � <?=date("d.m.Y", strtotime($result['data1']))?> �� <?=date("d.m.Y", strtotime($result['data2']))?>&nbsp;</span></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(���������� ���� �� ������ ��������)</p>
<p style="margin:0;text-align: justify;">����� ���� ����������� ��������      &nbsp;&nbsp;&nbsp;&nbsp;         <?echo $stoim."    <strong>".num2str($price[0][0])."</strong>";?>    </p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(����� ��������)</p>
<p style="margin:0;text-align: justify;">________________________________________________________________________________________________________���. ______���.</p>
<p style="clear:both">&nbsp;</p>
<p style="margin:0;text-align: justify;">��������: ��������� ��������� ���������� _______________________________________________________________���. ______���.,</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(����� ��������)</p>
<p style="margin:0;text-align: justify;">� �������������� ��������� ����� _________________________________________________________________________ ���. _____���.</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(����� ��������)</p>
<p style="margin:0 0 10px 0;text-align: justify;">�������� �����, ������������� �� ���������� �������� � ������������ �� ����������:</p>
<p style="margin:0;text-align: justify;">_________<b>���. �������� ������� �. �. 


</b>______________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='text-decoration:underline'>&nbsp;&nbsp;<?=date("d.m.Y", strtotime($result['data1']))?>&nbsp;&nbsp;</span> �.�. (�����)</p> 
<img src="images/name.jpg"  style='margin-left:550;margin-top:-25;position:absolute' width="120" height="58">
 <img src='pechat1.png' style='margin-left:940;margin-top:-95;position:absolute' width='160' />
     
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(���, ���������)<span style="margin-left:350px">(�������)</span><span style="margin-left:170px">(����)</span></p>
<? $massmonthword = array("1"=>"������","2"=>"�������","3"=>"�����","4"=>"������","5"=>"���","6"=>"����","7"=>"����","8"=>"�������","9"=>"��������","10"=>"�������","11"=>"������","12"=>"�������"); ?>
<p style="margin:0 0 10px 0;text-align: justify;">���� ������������� �������: "<span style='text-decoration:underline'>&nbsp;<?=date("d", strtotime($result['data1']))?>&nbsp;</span>" <span style='text-decoration:underline'>&nbsp;<?=$massmonthword[date("n", strtotime($result['data1']))]?>&nbsp;</span> 2024 �.</p>
<p style="margin:0 0 5px 0;text-align: center;"><b>��������� �������� �������� ������������ ������ �������� � ���������� ����������� ��������</b></p>
<p style="margin:0 0 10px 0;text-align: center;"><b>�� �<span style='text-decoration:underline'>&nbsp;<?=date("d", strtotime($result['data1']))?>&nbsp;</span>� <span style='text-decoration:underline'>&nbsp;<?=$massmonthword[date("n", strtotime($result['data1']))]?>&nbsp;</span> 2024 �. �<span style='text-decoration:underline'>&nbsp;&nbsp;<?=$result['id_zakaz']?>&nbsp;&nbsp;</span></b></p>
<p style="margin:0;font-size:11px;text-align: center;">���-�� ��� ���ѻ. �. ����, ��. �.��������, �. 111. ��� 7106019082. ���. � ���������� ��������. ���. 3000 ���. � 695 2015 �.</p>
<p style="margin:0;font-size:11px;text-align: center;">(�������� �� ������������ ������ (����������� ������������, ���, ����� ����������, ����� ������ � ��� ��� ����������, �����)</p>

<?
	}
?> 
	
</div>

</body>
</html>