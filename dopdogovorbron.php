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
<title>Приложение к договору</title>
</head>

<body>

<div style="width:1200px;">
<?
function num2str($num)
{
	$nul = 'ноль';
	$ten = array(
		array('', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять'),
		array('', 'одна', 'две', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять')
	);
	$a20 = array('десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать', 'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать');
	$tens = array(2 => 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят', 'семьдесят', 'восемьдесят', 'девяносто');
	$hundred = array('', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот', 'шестьсот', 'семьсот', 'восемьсот', 'девятьсот');
	$unit = array(
		array('копейка' , 'копейки',   'копеек',     1),
		array('рубль',    'рубля',     'рублей',     0),
		array('тысяча',   'тысячи',    'тысяч',      1),
		array('миллион',  'миллиона',  'миллионов',  0),
		array('миллиард', 'миллиарда', 'миллиардов', 0),
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
 * Склоняем словоформу
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

		$month = array('01'=>'января','02'=>'февраля','03'=>'марта','04'=>'апреля','05'=>'мая','06'=>'июня','07'=>'июля','08'=>'августа','09'=>'сентября','10'=>'октября','11'=>'ноября','12'=>'декабря');
		
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
<INPUT NAME="print" TYPE="button" VALUE= "Печать (сменить разметку на альбомную)" ONCLICK="varitext()" class="noprint">
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
					<strong>Продавец: ООО </strong>&lsquo;Контур&rsquo;, ИНН 7106513630</p>
				<p>
					300041, Россия, г.Тула, Красноармейский пр-т, д.7, оф.304, тел/факс(4872)253-109, 253-160</p>
				<h1 style="text-align: center;">
					ПРИЛОЖЕНИЕ&nbsp; К&nbsp; ДОГОВОРУ&nbsp;№<span style="text-decoration:underline">&nbsp;<?=$idz?>&nbsp;</span></h1>
				<p>
					<strong>ТУР</strong>:&nbsp; <span style="text-decoration:underline">&nbsp;<?=$city?>,
					 &nbsp;<?=$otel?>&nbsp;</span></p>
				<p align="center">
					наименование тура, код по ОКУН, по классификатору, номер сертификата</p>
				<p>
					<strong>Покупатель: </strong>юридическое лицо: __________________________________________________________________</p>
				<p align="center">
					наименование, ФИО руководителя, юридический адрес&nbsp;</p>
				<p align="center">
					банковские реквизиты, тел./факс, адрес офиса</p>
				<p>
					физическое лицо: <span style="text-decoration:underline">&nbsp;<?=$restur['fio']?>&nbsp;</span></p>
				<p align="center">
					ФИО, данные ОП, ОЗП, адрес, тел. (служебный, домашний)</p>
				<p>
					<strong>Список туристов </strong> 
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
					ФИО, данные ОП, ОЗП, адрес, тел. (служебный, домашний)</p>
				<p>
					<strong>Наличие руководителя группы:</strong><u>&nbsp; гид&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </u><br />
					&nbsp;</p>
				<p>
					<strong>Продолжительность поездки:</strong> <strong><span style="text-decoration:underline">с 
						&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;по
						&laquo;&nbsp;<?=date("d", strtotime($end))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($end))]?>&nbsp; 2022 г.</span></strong></p>
				<p>
					<strong>Маршрут поездки и страны (пункты) пребывания:</strong></p>
				<p>
					начало маршрута (город РФ, а/п., ж/д., авт., речн., мор., вокзалы отъезда)<u>&nbsp;&nbsp;&nbsp;Тула&nbsp;&nbsp;&nbsp;</u></p>
				<p>
					пункты пребывания <span style="text-decoration:underline">&nbsp;<?=$city?>&nbsp;</span><br />
					окончание маршрута (город РФ, а/п., ж/д., авт., речн., мор., вокзалы прибытия&nbsp;<u>&nbsp;&nbsp;&nbsp;Тула&nbsp;&nbsp;&nbsp;</u></p>
				<p>
					<strong>Пакет услуг:</strong> категория проездного билета<u> &nbsp;&nbsp;автобус&nbsp;&nbsp;</u></p>
				<p>
					номер <span style="text-decoration:underline">&nbsp;<?=$komnata?>&nbsp;</span>. Размещение <span style="text-decoration:underline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$numbertur?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> питание _______________ </p>
				<p>
					виза <u>&nbsp;&nbsp;&nbsp; нет &nbsp;&nbsp;&nbsp;</u> страховка _______________________ трансфер <span style="text-decoration:underline">&nbsp;<?=$transfer?>&nbsp;</span> </p>
				<p>
					Экскурсионная программа<strong>:</strong><u>&nbsp;нет&nbsp;</u></p>
				<p align="center">
					количество экскурсий, способ передвижения</p>
				<p>
					<strong>Дополнительные оплаченные услуги:</strong><u>&nbsp; нет&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
				<p align="center">
					наименование</p>
				<p>
					Стоимость путевки:<u>&nbsp;&nbsp;договорная&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></p>
				<p align="right">
					Сумма прописью&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
				<p>
					<strong>Дата продажи:</strong> <span style="text-decoration:underline">&nbsp;
					&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
					&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;<?=date("Y", strtotime($start))?> г.&nbsp;</span></p>
				<p>Продавец </strong>ООО &laquo;Контур&raquo;</p>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Покупатель</p>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; М.П. (для организаций)</td>
			<td>
				<p align="center">
					<b>«Контур»</b></p>
				<h2 style="text-align: center;margin-bottom:0">
					<strong>ОТРЫВНОЙ ТАЛОН</strong></h2>
				<p align="center" style="margin-left:14.2pt;">
					ПРИЛОЖЕНИЯ&nbsp; К&nbsp; ДОГОВОРУ<strong> №<span style="text-decoration:underline">&nbsp;<?=$idz?>&nbsp;</span></strong><br />
					&nbsp;</p>
				<p style="margin-left:14.2pt;">
					<strong>Тур: </strong><span style="text-decoration:underline">&nbsp;<?=$city?>,
					 &nbsp;<?=$otel?>&nbsp;</span></p>
				<p style="margin-left:14.2pt;">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; наименование тура</p>
				<p>
					<strong>&nbsp;&nbsp;&nbsp;&nbsp; Покупатель </strong><span style="text-decoration:underline">&nbsp;<?=$fioone?>&nbsp;</span>&nbsp;<br />
					&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; тел. для физ. лиц</p>
				<p style="margin-left:14.2pt;">
					<strong>Продолжительность поездки:</strong></p>
				<p style="margin-left:14.2pt;">
					<span style="text-decoration:underline">с 
						&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;по
						&laquo;&nbsp;<?=date("d", strtotime($end))?>&nbsp;&raquo;
						&nbsp;<?=$month[date("m", strtotime($end))]?>&nbsp;</span>&nbsp; 2022 г.</p>
				<p style="margin-left:14.2pt;">
					&nbsp;</p>
				<p>
					<strong>&nbsp;&nbsp;&nbsp; Список</strong>&nbsp;<strong>туристов:</strong> 
					<?
						echo "<span style='text-decoration:underline'>&nbsp;".$turists."&nbsp;</span>";
					?>
					</p>
				<p>
					&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</p>
				<p>
					<strong>Оплаченные</strong></p>
				<p>
					<strong>&nbsp;услуги</strong></p>
				<p>
					<strong>проезд на автобусе, проживание в гостинице, номер выбранной категории</strong></p>
				<p>
					<strong>____________________________________________</strong></p>
				<p>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; полный перечень услуг</p>
				<p>
					____________________________________________<br />
					<br />
					<strong>&nbsp;&nbsp;&nbsp;&nbsp; Стоимость путевки:__________________________</p></strong>
				<p>
					<strong>_____________________________________________</strong></p>
				<p>
					<strong>_____________________________________________</strong></p>
				<p>
					сумма прописью <strong><?echo " ".num2str($stoim)?> </strong></p>
				<p style="margin-left:14.2pt;">
					<br />
					<strong>Продавец:</strong><u> ООО &laquo;Контур&raquo;</u><br />
					М.П.</p>
				<p style="margin-left:14.2pt;">
					С условиями предоставления<br />
					туристских услуг ознакомлен<br />
					и согласен.<br />
					<br />
					<strong>Покупатель: _______________________________</strong><br />
					&nbsp;</p>
				М.П. ( для организаций )<br />
				<br />
				<strong>Дата продажи: <span style="text-decoration:underline">
					&laquo;&nbsp;<?=date("d", strtotime($start))?>&nbsp;&raquo;
					&nbsp;<?=$month[date("m", strtotime($start))]?>&nbsp;2022 г.</span></strong></td>
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