<?
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
{

$password=$_POST['password'];

$response = array();
if ($password == 'traveltula71'){
	$response['success'] = true;
	$response['general_message'] = 'Действие подтверждено!';
}else{
	$response['success'] = false;
	$response['general_message'] = 'Не верный пароль!';
}   

exit(json_encode($response));

}
?>