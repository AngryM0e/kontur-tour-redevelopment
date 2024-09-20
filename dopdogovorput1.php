<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<style>
	@media print { .noprint {display:none} }
</style>
<title>Договор</title>
</head>

<body>

<div style="width:950px">
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
   
	if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421 || true)
	{ 
		include("start.php");
		
		$idz = $_GET['idz'];
		$stoim = $_GET['stoim'];
		preg_match_all("/\d+/", $stoim, $price);
		
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
		$passone = $restur['pass'];
		$phoneone = $restur['phone'];
		
?>
<FORM style="text-align:center">
<INPUT NAME="print" TYPE="button" VALUE= "Печать" ONCLICK="varitext()" class="noprint">
<SCRIPT LANGUAGE="JavaScript">
function varitext(text){
text=document
print(text)
}
</SCRIPT>
</FORM>

<p style="text-align: center;width:300px;float:right;clear:both">Утверждена приказом<br/>
Министерства финансов<br/>
Российской Федерации<br/>
от 9 июля.2007 г. № 60н</p>

<p style="clear:both">&nbsp;</p>

<div style="text-align:center;width:610px;float:left;">
<p style="text-align:left;margin:0"><b>Туроператор</b>/Турагент</p>
<p style="margin:0">________________________________<b style="font-size:18px">ООО «КОНТУР»</b>_________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">(полное и сокращенное наименования)</p>
<p style="margin:0">________________<b>г. Тула, Красноармейский проспект, д.7, офис 304</b>______________</p>
<p style="margin:0 0 10px 0;font-size:12px">адрес (место нахождения)</p>
<p style="margin:0">___________<b>300041, г. Тула, Красноармейский проспект, д.7, офис 304</b>_____________</p>
<p style="margin:0 0 10px 0;font-size:12px">почтовый адрес</p>
<p style="margin:0">________________________<b>тел: 8 (4872) 253-160\ 253-109</b>_________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">Телефон</p>
<p style="margin:0">_______________<b>ИНН 7106513630  \ ОКПО 64691898</b>_____________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">ИНН, код  по  ОКПО</p>
<p style="margin:0">__________________________<b>РТО 013232</b>_______________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px">реестровый номер – для туроператора</p>
</div>

<table style="width:280px;float:right;" border="1" cellpadding="5">
<tr><td style="width:90px">Код <br/>формы по ОКУД</td><td><b>0791611</b></td></tr>
<tr><td>Код вида услуг по ОКУН</td><td>061000, 061100,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br/>061200, 061300,<br/>061400, 061500,<br/>061700</td></tr>
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

<p style="text-align: center;"><strong style="font-size:18px">ТУРИСТСКАЯ ПУТЕВКА № <?=$nomer6?> * Серия БА</strong></strong></p>

<p style="margin:0;text-align: justify;">Заказчик туристского продукта________________________<span style='text-decoration:underline'><?=$restur['fio']?></span>________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(ФИО,  данные паспорта, а при его отсутствии - иного документа, удостоверяющего личность</p>
<p style="margin:0;text-align: justify;">______________________________________<span style='text-decoration:underline'>ПАСПОРТ <?=$passone?></span>______________________________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">в соответствии с законодательством Российской Федерации,  место жительства  - для физ. лица),</p>
<p style="margin:0;text-align: justify;">_________________________________________________________________________________________________________________</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(ИНН, наименование, адрес (место нахождения), код по ОКПО – для юридического лица)</p>
<p style="margin:0;text-align: justify;">Турист <span style='text-decoration:underline'>&nbsp;
<?  $count = 0;
	do{
		echo ($count==0?"":", ").$restur['fio']." (паспорт ".$restur['pass'].")";
		$count++;
	}while($restur = mysql_fetch_array($querytur));
?>&nbsp;</span></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(ФИО, данные паспорта, а при его отсутствии - иного документа, удостоверяющего личность в соответствии с законодательством Российской Федерации, место жительства)</p>
<p style="margin:0;text-align: justify;">Вид туристского продукта (путешествия) <b>061100 \ Услуги туроператора по организации внутреннего туризма</b></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(вид услуги по ОКУН)</p>
<p style="margin:0;text-align: justify;">Единица измерения туристского продукта (путешествия)<span style='text-decoration:underline'>&nbsp;<?=$result['city']?>, гост. "<?=$result['name1']?>", с <?=date("d.m.Y", strtotime($result['data1']))?> по <?=date("d.m.Y", strtotime($result['data2']))?>&nbsp;</span></p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(количество дней на одного человека)</p>
<p style="margin:0;text-align: justify;">Общая цена туристского продукта      &nbsp;&nbsp;&nbsp;&nbsp;         <?echo $stoim."    <strong>".num2str($price[0][0])."</strong>";?>    </p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(сумма прописью)</p>
<p style="margin:0;text-align: justify;">________________________________________________________________________________________________________руб. ______коп.</p>
<p style="clear:both">&nbsp;</p>
<p style="margin:0;text-align: justify;">Оплачено: наличными денежными средствами _______________________________________________________________руб. ______коп.,</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(сумма прописью)</p>
<p style="margin:0;text-align: justify;">с использованием платежной карты _________________________________________________________________________ руб. _____коп.</p>
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(сумма прописью)</p>
<p style="margin:0 0 10px 0;text-align: justify;">Получено лицом, ответственным за совершение операции и правильность ее оформления:</p>
<p style="margin:0;text-align: justify;">_________<b>Ген. директор Егорова Н. А. 


</b>______________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_________________________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style='text-decoration:underline'>&nbsp;&nbsp;<?=date("d.m.Y", strtotime($result['data1']))?>&nbsp;&nbsp;</span> М.П. (штамп)</p> 
<img src="images/name.jpg"  style='margin-left:550;margin-top:-25;position:absolute' width="120" height="58">
 <img src='pechat1.png' style='margin-left:940;margin-top:-95;position:absolute' width='160' />
     
<p style="margin:0 0 10px 0;font-size:12px;text-align: center;">(ФИО, должность)<span style="margin-left:350px">(подпись)</span><span style="margin-left:170px">(дата)</span></p>
<? $massmonthword = array("1"=>"января","2"=>"февраля","3"=>"марта","4"=>"апреля","5"=>"мая","6"=>"июня","7"=>"июля","8"=>"августа","9"=>"сентября","10"=>"октября","11"=>"ноября","12"=>"декабря"); ?>
<p style="margin:0 0 10px 0;text-align: justify;">Дата осуществления расчета: "<span style='text-decoration:underline'>&nbsp;<?=date("d", strtotime($result['data1']))?>&nbsp;</span>" <span style='text-decoration:underline'>&nbsp;<?=$massmonthword[date("n", strtotime($result['data1']))]?>&nbsp;</span> 2024 г.</p>
<p style="margin:0 0 5px 0;text-align: center;"><b>Настоящий документ является неотъемлемой частью договора о реализации туристского продукта</b></p>
<p style="margin:0 0 10px 0;text-align: center;"><b>от «<span style='text-decoration:underline'>&nbsp;<?=date("d", strtotime($result['data1']))?>&nbsp;</span>» <span style='text-decoration:underline'>&nbsp;<?=$massmonthword[date("n", strtotime($result['data1']))]?>&nbsp;</span> 2024 г. №<span style='text-decoration:underline'>&nbsp;&nbsp;<?=$result['id_zakaz']?>&nbsp;&nbsp;</span></b></p>
<p style="margin:0;font-size:11px;text-align: center;">Изд-во ЗАО «РУС». г. Тула, ул. Л.Толстого, д. 111. ИНН 7106019082. Отп. В типографии «Папирус». Тир. 3000 Зак. № 695 2015 г.</p>
<p style="margin:0;font-size:11px;text-align: center;">(Сведения об изготовителе бланка (сокращенное наименование, ИНН, место нахождения, номер заказа и год его выполнения, тираж)</p>

<?
	}
?> 
	
</div>

</body>
</html>