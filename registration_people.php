<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<title>Контур</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

function end_reg()
{

if (ValidMail() && ValidPhone())	
		$.ajax({
		url:"add_people_to_table.php",
		method:"POST",
		data:{mail:document.getElementById('mail').value,fio:document.getElementById('FIO').value,phone:document.getElementById('phone').value},
		success:function(data)
		{
			alert("Ваша заявка на регистрацию принята. Ожидайте письмо с данными для входа в систему бронирования");
			window.location='door.php';
			
		},
		error:function(data)
		{
			
			alert('Ошибка');
		}
		
	}
	
	)	
	
}

function ValidMail() {
    var re = /^[\w-\.]+@[\w-]+\.[a-z]{2,4}$/i;
    var myMail = document.getElementById('mail').value;
    var valid = re.test(myMail);
    if (valid) output = 'Адрес эл. почты введен правильно!';
    else {output = 'Адрес электронной почты введен неправильно!';
    alert(output);}
    return valid;
}
 
function ValidPhone() {
    var re = /^\d[\d\(\)\ -]{4,14}\d$/;
    var myPhone = document.getElementById('phone').value;
    var valid = re.test(myPhone);
    if (valid) output = 'Номер телефона введен правильно!';
    else {output = 'Номер телефона введен неправильно!';
    alert(output);}
    return valid;
} 

</script>
<body link='black'>
<table width='98%' align=center BACKGROUND='images/d00032.gif' CELLSPACING=0>
<tr>
<td width='60%' height='200' background='images/4.jpg'>
<p align="center"><font color="#FFFFFF"><b><font size="7" face="Comic Sans MS">КОНТУР</font></b><p align="center">
<font size="5">г.Тула, Красноармейский пр-т.7, оф.304
<br>тел:(4872)253-109, 253-160
<br>natakontur@rambler.ru
</font>
</font>

</td>
</tr>
    <tr><td>
	<p align='right'>
	<a href='index.php' style='text-decoration: none'><b>Главная</a>&nbsp;&nbsp;&nbsp;&nbsp;
    </td></tr>

   <tr>
      <td >
<center>
<form >
<table style="font-size:14pt">
<tr><td></td><td><p>
<font size='2'><strong><span style="color:red">*</span>Все поля обязательны для заполнения</strong></font></p></td></tr>
<tr>
</tr>
<tr>
</tr>
<tr>
  <td align="right"><b><span style="color:red">*</span>Ф.И.О. :</b></td><td><input id='FIO' required name="director" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right"><b><span style="color:red">*</span>Личный телефон:</b></td><td><input id='phone' required name="sotoviy" style='font-size: 16pt;' size='45' type="text" ></td>
</tr>
<tr>
  <td align="right"><b><span style="color:red">*</span>e-mail:</b></td><td><input id='mail' name="mail"  required type="text" style='font-size: 16pt;' size='45' ></td>
</tr>

<tr><td></td>
</tr>

<tr>
  <td></td><td><input type="button" onclick="end_reg()" name="reg" style='font-size: 16pt;' class="btn btn-primary" value="Зарегистрироваться" /></td>
</tr>
 <?
echo"<tr><td></td><td><br><span lang='ru'><font size='4'><b>";
if (isset($_SERVER['HTTP_REFERER']))   
		{      echo '<a style="margin-right:20px;" href="'.$_SERVER['HTTP_REFERER'].'">Назад</a>';} 

echo"</b></font></span></td></tr>";
?>
</table>
</form>
 
 </center>
</tr> 
      
      </td>
   </tr>
</table>
</body>

</html>