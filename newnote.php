<?
if($_COOKIE['login']<>0)
{
	include("start.php");
 
	$id_zakaz=$_POST['id_zakaz'];
	$id_klient=$_POST['id_klient'];
	$to_klient=$_POST['to_klient'];
	$email=$_POST['email'];
	$text=$_POST['newnote'];
	
	if($text != '' && $to_klient != 0) {
		$qwerrr = "insert into `notes` values ('','$id_zakaz','$id_klient','$to_klient','$email','$text','".date('Y-m-d H:i:s')."')";
		$result = mysql_query($qwerrr) or die("Query failed : " . mysql_error());
		
		if($email != ""){
			$headers  = "Content-type: text/html; charset=windows-1251 \r\n";
	        //$headers .="From: natakontur@mail.ru\r\nReply-To: natakontur@mail.ru";
			$headers .="From: natakontur2016@yandex.ru\r\nReply-To: natakontur2016@yandex.ru";
	        
	        $message = 'Заказ №'.$id_zakaz.'<br /><br />Примечание:<br />'.$text.'<br />';
	        

			mail("natakontur2016@yandex.ru",'Примечание по заказу с сайта '.$_SERVER['HTTP_HOST'],$message,$headers);
	        mail($email,'Примечание по заказу с сайта '.$_SERVER['HTTP_HOST'],$message,$headers);
			//mail('AlyonaProgr@yandex.ru','Примечание по заказу с сайта '.$_SERVER['HTTP_HOST'],$message,$headers);
		}
	}
	
	Header("Location: notes.php?id_zakaz=".$id_zakaz);  
	mysql_close($link);
}
?>    			