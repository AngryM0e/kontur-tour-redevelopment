<?
if($_COOKIE['login']<>0)
{
   

$pw=addslashes($pw);
$pw2=addslashes($pw2);
$login=addslashes($login);

$id_klient=$_COOKIE['login'];
$login=mb_convert_encoding($_POST['login'],"windows-1251", "utf-8" );
$pw=$_POST['pw'];
$pw2=$_POST['pw2'];
$firm=mb_convert_encoding($_POST['firm'],"windows-1251", "utf-8" );
$adres= mb_convert_encoding($_POST['adres'],"windows-1251", "utf-8" );
$telefon=$_POST['telefon'];
$mail=$_POST['mail'];
$director=mb_convert_encoding($_POST['director'],"windows-1251", "utf-8" ); 
$sotoviy=$_POST['sotoviy'];


if (empty($adres) || empty($firm) || empty($login)|| empty($pw)|| empty($pw2) ||($pw2<>$pw)|| empty($sotoviy)|| empty($mail)|| empty($telefon)|| empty($director))
	{
	echo"Вы неправильно заполнили форму!<p>";
	echo"Пожалуйста заполните ещё раз.";
	exit;
	} 

else{


include("start.php");

   $query = "update klient set login='$login',pw='$pw',firm='$firm',adres='$adres',telefon='$telefon',mail='$mail',director='$director',sotoviy='$sotoviy' where id_klient='$id_klient'";
   $result = mysql_query($query) or die("Query failed : " . mysql_error());
}   
   	if($result){HEADER("Location: login.php");}
	else echo"Произошла ошибка";
                    
    mysql_close($link);
}
?>