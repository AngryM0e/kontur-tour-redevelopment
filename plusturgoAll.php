<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
 include("start.php");
mysql_query('SET NAMES "utf8"');
$otel=$_POST['otel'];
$komnata=$_POST['komnata'];
$q1=$_POST['date1'];
$q2=$_POST['date2'];
$stoim=$_POST['price'];
$avtobus=$_POST['avtobus'];
$kolvo=$_POST['kolvo'];


$query = "insert into tur values('','$otel','$avtobus','$komnata','$q1','$q2','$stoim')";
$result = mysql_query($query) or  die("Query failed : " . mysql_error());


$query2 = "insert into kolvo (id_komnata,id_tur,kolvo) (select '$komnata',id_tur,'$kolvo' from tur where ((id_otel='$otel')and(id_avtobus='$avtobus') and(id_komnata='$komnata') and(data1='$q1') and( data2='$q2') and (stoim='$stoim')))";
//print($query2);
$result2 = mysql_query($query2) or  die("Query failed : " . mysql_error());
if($result && $result2)
echo "Добавлено ";





}
?>