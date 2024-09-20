<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{

$id_tur=$_POST['id_tur'];
$kolvo=$_POST['kolvo'];
$stoim=$_POST['stoim'];

if ($kolvo<>NULL && $stoim<>NULL)
{
include("start.php");
$query = "update kolvo set kolvo='$kolvo' where id_tur='$id_tur'";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

$query1 = "update tur set stoim='$stoim' where id_tur='$id_tur'";
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
  mysql_close($link);
}   
  	if($result){HEADER("Location: tur.php");}
	else echo"Вы оставили поля не заполненными!";
                    
  
}
?> 
