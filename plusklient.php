<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{
 include("start.php");

 
$id_klient=$_GET['id_klient'];

$qwer = "SELECT * FROM klient2 where (id_klient='$id_klient')";

$result = mysql_query($qwer) or die("Query failed : " . mysql_error());

$line = mysql_fetch_array($result, MYSQL_ASSOC);

$a=$line[login];
$b=$line[pw];
$c=$line[firm];
$d=$line[adres];
$e=$line[telefon];
$f=$line[mail];
$g=$line[director];
$h=$line[sotoviy];
print_r($line);
$qwery = "INSERT INTO klient VALUES ('' , '$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h','12',0,0)";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
echo "here";

$qwery = "delete from klient2 where (id_klient='$id_klient')";
$result = mysql_query($qwery) or die("Query failed : " . mysql_error());

mysql_close($link);
}
Header("Location: klient2.php");

?>