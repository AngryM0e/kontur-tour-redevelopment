<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
 include("start.php");
   
$otel=$_GET['otel'];
$komnata=$_GET['komnata'];
$q1=$_GET['q1'];
$q2=$_GET['q2'];
$stoim=$_GET['stoim'];
$avtobus=$_GET['avtobus'];
$kolvo=$_GET['kolvo'];

$query = "insert into tur values('','$otel','$avtobus','$komnata','$q1','$q2','$stoim')";
$result = mysql_query($query) or  die("Query failed : " . mysql_error());

$qwe = "select id_tur from tur where ((id_otel='$otel')and(id_avtobus='$avtobus') and(id_komnata='$komnata') and(data1='$q1') and( data2='$q2') and (stoim='$stoim'))";
$res = mysql_query($qwe) or  die("Query failed : " . mysql_error());
$line = mysql_fetch_array($res, MYSQL_ASSOC);

$query2 = "insert into kolvo values('$komnata','$line[id_tur]','$kolvo')";
$result2 = mysql_query($query2) or  die("Query failed : " . mysql_error());


if (($result)and($result2))  Header("Location: plustur.php");  
else 	echo "Произошла ошибка!";
mysql_close($link);
}
?>    			
