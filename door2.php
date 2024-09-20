<?
session_start(); //инициализирум механизм сесссий

if(!isset($_POST['go'])) 
{
HEADER("Location: door.php");
}

else {	



   $login=iconv( "UTF-8","Windows-1251", $_POST['login']);
   $pw=iconv( "UTF-8","Windows-1251",$_POST['pw']);

 include("start.php");

   	//проверяем есть ли пользователь с таким login'ом и password'ом
$query = "SELECT * FROM klient WHERE ((login='$login') and (pw='$pw'))";
$result = mysql_query($query) or die("Query failed : " . mysql_error());

	if(mysql_num_rows($result)!='1')
		{
	HEADER("Location: door.php");
//echo "no";

		}
	
	else
		{
		$query = "SELECT id_klient FROM klient WHERE ((login='$login') and (pw='$pw'))";
		$result = mysql_query($query) or die("Query failed : " . mysql_error());
		$line=mysql_fetch_array($result, MYSQL_ASSOC);
	
	
		setcookie('login', $line[id_klient]);
	
			
			Header("Location: perehod.php");
		
		}
	
	
 mysql_close($link);
}
?>