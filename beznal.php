<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>
<?
$id_zakaz=$_GET['id_zakaz'];
$otel=$_GET['otel'];
$data1=$_GET['data1'];
$stoim=$_GET['stoim'];
$firm=$_GET['firm'];
$k=$_GET['k'];
$data=date("d-m-Y");
include("start.php");

$query1 = "SELECT stoimreal FROM zakaz where id_zakaz='$id_zakaz'";
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
$line1=mysql_fetch_array($result1, MYSQL_ASSOC);
$stoimreal=$line1['stoimreal'];
if($stoimreal==1) $stoim=substr($stoim,20);
else $stoim='00';


if($k==1)
{
$query = "insert into beznal values('$id_zakaz','1')";
$result = mysql_query($query) or  die("Query failed : " . mysql_error());
}


$query2 = "SELECT beznal FROM beznal WHERE id_zakaz='$id_zakaz'"; 
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);

if($line2[beznal]==0)
{
echo "<table width=50%  bgcolor=#D3D3D3><tr><td>
<center><font color=red><b>Вы будете расплачиваться безналичными?</b></font>
<p>
<form action='beznal.php' method='get'>
	<input type=hidden value='$firm' name='firm'>
	<input type=hidden value='1' name='k'>
	<input type=hidden value='$otel' name='otel'>
	<input type=hidden value='$data1' name='data1'>
	<input type=hidden value='$stoim' name='stoim'>
<input type=hidden value='$id_zakaz' name='id_zakaz'>
<input type=submit value='Да, я буду расплачиваться безналичными!'></form>
</center>
</td></tr></table><p>";

echo"<HR NOSHADE WIDTH='50%' SIZE='4' ALIGN='left' color='red' >";
}


 $query = "SELECT fio FROM turist where id_zakaz='$id_zakaz' order by fio";
 $result = mysql_query($query) or die("Query failed : " . mysql_error());
 while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
         foreach ($line as $col_value) {
         $turist=$turist."$col_value, ";
        }}
$turist=substr($turist,0,-2);
 mysql_close($link);
 echo"</span></p>";
echo"
<body style='background-color:white'>

<div class=Section1>

<table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0 width=658
 style='width:493.4pt;margin-left:4.65pt;border-collapse:collapse;mso-padding-alt:
 0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:12.75pt'>
  <td width=338 nowrap colspan=4 valign=bottom style='width:253.45pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size: 12.0pt; font-family: Times New Roman; text-decoration:underline; font-weight:700'>Поставщик: ООО 
	&nbsp;«Контур»</span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:12.75pt;mso-height-source:userset'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:8.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size:10.0pt;font-family:Arial; font-weight:700'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:12.75pt'>
  <td width=658 colspan=8 valign=bottom style='width:493.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class='MsoNormal'><b>Адрес: г. Тула, Красноармейский пр-т 7, офис 304, тел.:(4872) 
		253-109, 253-160</b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:12.75pt'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:12.75pt;mso-height-source:userset'>
  <td width=281 nowrap colspan=3 style='width:210.9pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class='MsoNormal'>ИНН 7106513630</td>
  <td width=127 nowrap colspan=2 style='width:95.4pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'> КПП 710601001<o:p></o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;border:solid windowtext 1.0pt;
  border-bottom:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;border:none;
  border-top:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:12.75pt'>
  <td width=281 nowrap colspan=3 valign=bottom style='width:210.9pt;border:
  none;border-left:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><font size='2'><span style='font-family: Arial'>Получатель</span></font></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:none;border-right:solid windowtext 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:12.75pt'>
  <td width=408 colspan=5 valign=top style='width:306.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class='MsoNormal'>
	<span style='font-size: 12.0pt; font-family: Times New Roman'>ООО &nbsp;«Контур»</span></td>
  <td width=56 nowrap valign=top style='width:42.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><font size='2'>
	<span style='font-family: Arial'>Сч.№</span></font></p>
  </td>
  <td width=193 nowrap colspan=2 valign=top style='width:145.05pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>
	40702810902000035805</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:12.75pt;mso-height-source:userset'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;border:
  none;border-left:solid windowtext 1.0pt;mso-border-left-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><font size='2'><span style='font-family: Arial'>Банк 
	получателя</span></font></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap style='width:42.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><font size='2'>
	<span style='font-family: Arial'>БИК</span></font></p>
  </td>
  <td width=103 nowrap valign=top style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>044525297</span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;border:none;border-right:
  solid windowtext 1.0pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>&nbsp;<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:12.75pt'>
  <td width=408 colspan=5 valign=top style='width:306.3pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal>
	<span style='font-size: 12.0pt; font-family: Times New Roman'>Филиал Центрального ПАО Банка «ФК Открытие» г.Москва</span></p>
  </td>
  <td width=56 nowrap valign=top style='width:42.05pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal align=center style='text-align:center'><font size='2'>
	<span style='font-family: Arial'>Сч.№</span></font></p>
  </td>
  <td width=193 nowrap colspan=2 valign=top style='width:145.05pt;border-top:
  none;border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;mso-border-right-alt:solid black .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>
	30101810945250000297</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:11.25pt'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:18.0pt'>
  <td width=658 nowrap colspan=8 valign=bottom style='width:493.4pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><b><font size='4'>
	СЧЕТ</font><font size='4'> № $id_zakaz от $data г.</font></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:18.0pt'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><b><span style='font-size:14.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:18.0pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:11.25pt'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:11.25pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:12.75pt'>
  <td width=658 colspan=8 valign=bottom style='width:493.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>
	<span lang='ru'>Плательщик</span>:<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>
	<span lang='ru' style='font-size: 10.0pt; font-family: Arial'>$firm</span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;height:12.75pt'>
  <td width=658 colspan=8 valign=bottom style='width:493.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>
	<span lang='ru'>Грузополучатель</span>: <span lang='ru'>$firm</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:16;height:12.75pt'>
  <td width=25 nowrap valign=bottom style='width:18.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=256 nowrap colspan=2 valign=bottom style='width:192.15pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:17;height:51.0pt'>
  <td width=25 nowrap style='width:18.75pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang='ru'>
	<font size='2'><span style='font-family: Arial'>№</span></font></span></p>
  </td>
  <td width=313 colspan=3 style='width:234.7pt;border-top:solid windowtext 1.0pt;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:none;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class='MsoNormal' align='center'>Наименование<br>
	товара</td>
  <td width=70 valign=bottom style='width:52.85pt;border:solid windowtext 1.0pt;
  border-right:none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:
  solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal align=center style='text-align:center'>Единица<br>
	изме-<br>
	рения</p>
  </td>
  <td width=56 style='width:42.05pt;border:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:51.0pt'>
  <p class=MsoNormal align=center style='text-align:center'>Коли-<br>
	чество</p>
  </td>
  <td width=103 style='width:77.55pt;border:solid windowtext 1.0pt;border-right:
  none;mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-bottom-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:51.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span lang='ru'>
	<font size='2'><span style='font-family: Arial'>Цена</span></font></span></p>
  </td>
  <td width=90 style='width:67.5pt;border:solid windowtext 1.0pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:51.0pt'>
  <p class=MsoNormal align=center style='text-align:center'><span
  style='font-size:10.0pt;font-family:Arial'><span lang='ru'>Сумма</span></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:18;height:12.75pt'>
  <td width=25 nowrap valign=top style='width:18.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:num>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:10.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=313 colspan=3 valign=top style='width:234.7pt;border:none;
  border-bottom:solid windowtext 1.0pt;mso-border-top-alt:solid windowtext .5pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-bottom-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'>Оплата 
	Тур путевки в гостиницу &quot;$otel&quot; с $data1 за туристов $turist
 </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class='MsoNormal' align='center'><span lang='ru'><font size='2'>
	<span style='font-family: Arial'>шт</span></font></span></td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:num>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:10.0pt;font-family:Arial'>1<o:p></o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;border-top:none;
  border-left:solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;
  border-right:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'
  x:num='13464'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:10.0pt;font-family:Arial'>$stoim,00<o:p></o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:num='13464'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:10.0pt;font-family:Arial'>$stoim,00<o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:19;height:12.75pt'>
  <td width=25 nowrap valign=bottom style='width:18.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=256 nowrap colspan=2 valign=bottom style='width:192.15pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal align=right style='text-align:right'><span lang='ru'>
	<font size='2'><b><span style='font-family: Arial'>Итого</span></b></font></span><b><span
  style='font-size:10.0pt;font-family:Arial'>:<o:p></o:p></span></b></p>
  </td>
  <td width=90 nowrap style='width:67.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:num='13464'>
  <p class=MsoNormal align=right style='text-align:right'><b><span
  style='font-size:10.0pt;font-family:Arial'>$stoim,00<o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:20;height:12.75pt'>
  <td width=25 nowrap valign=bottom style='width:18.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=256 nowrap colspan=2 valign=bottom style='width:192.15pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal align=right style='text-align:right'><b>
	<span
  style='font-size:10.0pt;font-family:Arial'><span lang='ru'>Без налога</span>(<span lang='ru'>НДС</span>)</span></b></p>
  </td>
  <td width=90 nowrap style='width:67.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:str='-              '>
  <p class=MsoNormal align=right style='text-align:right'><b><span
  style='font-size:10.0pt;font-family:Arial'>-<span
  style='mso-spacerun:yes'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><o:p></o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:21;height:12.75pt'>
  <td width=25 nowrap valign=bottom style='width:18.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=256 nowrap colspan=2 valign=bottom style='width:192.15pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal align=right style='text-align:right'><span
  style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal align=right style='text-align:right'><b>
	<span
  style='font-size:10.0pt;font-family:Arial'><span lang='ru'>Всего к оплате</span>:<o:p></o:p></span></b></p>
  </td>
  <td width=90 nowrap style='width:67.5pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-left-alt:solid windowtext .5pt;mso-border-bottom-alt:
  solid windowtext .5pt;mso-border-right-alt:solid windowtext .5pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt' x:num='13464'>
  <p class=MsoNormal align=right style='text-align:right'><b><span
  style='font-size:10.0pt;font-family:Arial'>$stoimf<o:p>$stoim,00</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:22;height:12.75pt'>
  <td width=25 nowrap valign=bottom style='width:18.75pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=256 nowrap colspan=2 valign=bottom style='width:192.15pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:23;height:12.75pt'>
  <td width=658 colspan=8 valign=bottom style='width:493.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal>Всего наименований 1, на сумму $stoim,00</p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:24;height:12.75pt'>
  <td width=658 colspan=8 valign=top style='width:493.4pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><b><o:p>";
function num2str($inn, $stripkop=false) {
    $nol = 'ноль';
    $str[100]= array('','сто','двести','триста','четыреста','пятьсот','шестьсот', 'семьсот', 'восемьсот','девятьсот');
    $str[11] = array('','десять','одиннадцать','двенадцать','тринадцать', 'четырнадцать','пятнадцать','шестнадцать','семнадцать', 'восемнадцать','девятнадцать','двадцать');
    $str[10] = array('','десять','двадцать','тридцать','сорок','пятьдесят', 'шестьдесят','семьдесят','восемьдесят','девяносто');
    $sex = array(
        array('','один','два','три','четыре','пять','шесть','семь', 'восемь','девять'),// m
        array('','одна','две','три','четыре','пять','шесть','семь', 'восемь','девять') // f
    );
    $forms = array(
        array('копейка', 'копейки', 'копеек', 1), // 10^-2
        array('рубль', 'рубля', 'рублей',  0), // 10^ 0
        array('тысяча', 'тысячи', 'тысяч', 1), // 10^ 3
        array('миллион', 'миллиона', 'миллионов',  0), // 10^ 6
        array('миллиард', 'миллиарда', 'миллиардов',  0), // 10^ 9
        array('триллион', 'триллиона', 'триллионов',  0), // 10^12
    );
    $out = $tmp = array();
    // Поехали!
    $tmp = explode('.', str_replace(',','.', $inn));
    $rub = number_format($tmp[ 0], 0,'','-');
    if ($rub== 0) $out[] = $nol;
    // нормализация копеек
    $kop = isset($tmp[1]) ? substr(str_pad($tmp[1], 2, '0', STR_PAD_RIGHT), 0,2) : '00';
    $segments = explode('-', $rub);
    $offset = sizeof($segments);
    if ((int)$rub== 0) { // если 0 рублей
        $o[] = $nol;
        $o[] = morph( 0, $forms[1][ 0],$forms[1][1],$forms[1][2]);
    }
    else {
        foreach ($segments as $k=>$lev) {
            $sexi= (int) $forms[$offset][3]; // определяем род
            $ri = (int) $lev; // текущий сегмент
            if ($ri== 0 && $offset>1) {// если сегмент==0 & не последний уровень(там Units)
                $offset--;
                continue;
            }
            // нормализация
            $ri = str_pad($ri, 3, '0', STR_PAD_LEFT);
            // получаем циферки для анализа
            $r1 = (int)substr($ri, 0,1); //первая цифра
            $r2 = (int)substr($ri,1,1); //вторая
            $r3 = (int)substr($ri,2,1); //третья
            $r22= (int)$r2.$r3; //вторая и третья
            // разгребаем порядки
            if ($ri>99) $o[] = $str[100][$r1]; // Сотни
            if ($r22>20) {// >20
                $o[] = $str[10][$r2];
                $o[] = $sex[ $sexi ][$r3];
            }
            else { // <=20
                if ($r22>9) $o[] = $str[11][$r22-9]; // 10-20
                elseif($r22> 0) $o[] = $sex[ $sexi ][$r3]; // 1-9
            }
            // Рубли
            $o[] = morph($ri, $forms[$offset][ 0],$forms[$offset][1],$forms[$offset][2]);
            $offset--;
        }
    }
    // Копейки
    if (!$stripkop) {
        $o[] = $kop;
        $o[] = morph($kop,$forms[ 0][ 0],$forms[ 0][1],$forms[ 0][2]);
    }
    return preg_replace("/\s{2,}/",' ',implode(' ',$o));
}
 
/**
 * Склоняем словоформу
 */
function morph($n, $f1, $f2, $f5) {
    $n = abs($n) % 100;
    $n1= $n % 10;
    if ($n>10 && $n<20) return $f5;
    if ($n1>1 && $n1<5) return $f2;
    if ($n1==1) return $f1;
    return $f5;
}
echo num2str($stoim);
echo"</o:p></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:25;height:12.75pt'>
  <td width=236 nowrap colspan=2 valign=bottom style='width:176.7pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=46 nowrap valign=bottom style='width:34.2pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=57 nowrap valign=bottom style='width:42.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:8.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=70 nowrap valign=bottom style='width:52.85pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=56 nowrap valign=bottom style='width:42.05pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=103 nowrap valign=bottom style='width:77.55pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:12.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:26;height:24.75pt;mso-height-source:userset'>
  <td width=568 nowrap colspan=7 valign=bottom style='width:425.9pt;padding:
  0cm 5.4pt 0cm 5.4pt;height:24.75pt'>
  <p class=MsoNormal><span style='font-size: 10.0pt; font-family: Arial'>
	Директор т/а «Контур»<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <img src='images/name.jpg' width='120' height='58' />
	<span style='font-size:10.0pt;font-family:Arial'></span>
	</span><span style='font-size:10.0pt;font-family:Arial'>
	&nbsp;&nbsp;&nbsp;</span><span style='font-size: 10.0pt; font-family: Arial'>Егорова 
	Н.А</span></p>
  </td>
  <td width=90 nowrap valign=bottom style='width:67.5pt;padding:0cm 5.4pt 0cm 5.4pt;
  height:24.75pt'>
  <p class=MsoNormal><span style='font-size:10.0pt;font-family:Arial'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <![if !supportMisalignedColumns]>
 <tr height=0>
  <td width=28 style='border:none'></td>
  <td width=211 style='border:none'></td>
  <td width=46 style='border:none'></td>
  <td width=57 style='border:none'></td>
  <td width=70 style='border:none'></td>
  <td width=56 style='border:none'></td>
  <td width=103 style='border:none'></td>
  <td width=90 style='border:none'></td>
 </tr>
 <![endif]>
</table>

<p class=MsoNormal><o:p>&nbsp;</o:p></p>
</div>
 &nbsp;

        <img src='images/pechat.jpg' style='margin-left:549;margin-top:-156;position:absolute' width='190' height='194'/>
</body>";
?>
</html>