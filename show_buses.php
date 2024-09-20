<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script> 




function BronAvto(otel,q1,q2,index)
{
var avtobus_index=index;
var otel=$("#otel").val();
var komnata=$("#komnata"+index).val();
var avtobus=$("#avtobus"+index).val();
var date1=$("#date1").val();
var date2=$("#date2").val();
var kolvo=$("#kolvo"+index).val();
var price=$("#price"+index).val();
document.getElementById('bron'+index).style.backgroundColor='#BEFFBB';
document.getElementById('bron'+index).style.color='#000000';
$("#show_message").load("plusturgoAll.php",{otel:otel,komnata:komnata,date1:date1,date2:date2,price:price,avtobus:avtobus,kolvo:kolvo,avtobus_index:avtobus_index});
	
}

$(document).ready(function(){
$("#send_tour").click(function() 
{
	
	$.ajax({
		url:"fetch.php",
		method:"POST",
		data:{date1:$("#date1").val(),date2:$("#date2").val(),otel:$("#otel").val(),avtobus_index:avtobus_index},
		success:function(data)
		{
			$('#newtr').append(data);
			
		},
		error:function(data)
		{
			
			alert('ошибка');
		}
		
	}
	
	)
});

}); 
</script> 


<meta charset="UTF-8">
<?
$date_3=$_POST['date1_3'];
$date_2=$_POST['date1_2'];
$date_1=$_POST['date1_1'];
include("start.php");

if(strlen($date_1) == 1)
{
	$date_1='0'.$date_1;
}
if(strlen($date_2) == 1)
{
	$date_2='0'.$date_2;
}
$date=$date_3.'-'.$date_2.'-'.$date_1;

$date_23=$_POST['date_23'];
$date_22=$_POST['date_22'];
$date_21=$_POST['date_21'];
include("start.php");

if(strlen($date_21) == 1)
{
	$date_21='0'.$date_21;
}
if(strlen($date_22) == 1)
{
	$date_22='0'.$date_22;
}
$date2=$date_23.'-'.$date_22.'-'.$date_21;
$otel=$_POST['otel'];
?>

<input type='hidden' id='otel' value='<?echo $otel?>'>
<input type='hidden' id='date1' value='<?echo $date?>'>
<input type='hidden' id='date2' value='<?echo $date2?>'>
<div class='container' >
<table align='center' border='1' class="table table-hover w-auto" width="950px">
<thead>
<tr><th>Дата отъезда</th><th>Дата приезда</th><th>№ автобуса</th><th>Вид комнаты</th><th>Количество комнат</th><th>Цена</th><th>Кнопка</th></tr>
</thead>


<?

$query1 = "SELECT data1,id_avtobus,name FROM avtobus49m where data1='$date'";
$query2 = "SELECT data1,id_avtobus,name FROM avtobus49 where data1='$date'";
$query3 = "SELECT data1,id_avtobus,name FROM avtobus53 where data1='$date'";
$query4 = "SELECT data1,id_avtobus,name FROM avtobus51 where data1='$date'";
$query5 = "SELECT data1,id_avtobus,name FROM avtobus501 where data1='$date'";
$query6 = "SELECT data1,id_avtobus,name FROM avtobus62 where data1='$date'";
$query7 = "SELECT data1,id_avtobus,name FROM avtobus84 where data1='$date'";
$query8 = "SELECT data1,id_avtobus,name FROM avtobus51m where data1='$date'";
$query9 = "SELECT data1,id_avtobus,name FROM avtobus52 where data1='$date'";
$query10 = "SELECT data1,id_avtobus,name FROM avtobus661 where data1='$date'";
$query11 = "SELECT data1,id_avtobus,name FROM avtobus61 where data1='$date'";
$query12 = "SELECT data1,id_avtobus,name FROM avtobus691 where data1='$date'";
$query13 = "SELECT data1,id_avtobus,name FROM avtobus69 where data1='$date'";
mysql_query('SET NAMES "utf8"');
$result1 = mysql_query($query1) or die("Query failed : " . mysql_error());
$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
$result3 = mysql_query($query3) or die("Query failed : " . mysql_error());
$result4 = mysql_query($query4) or die("Query failed : " . mysql_error());
$result5 = mysql_query($query5) or die("Query failed : " . mysql_error());
$result6 = mysql_query($query6) or die("Query failed : " . mysql_error());
$result7 = mysql_query($query7) or die("Query failed : " . mysql_error());
$result8 = mysql_query($query8) or die("Query failed : " . mysql_error());
$result9 = mysql_query($query9) or die("Query failed : " . mysql_error());
$result10 = mysql_query($query10) or die("Query failed : " . mysql_error());
$result11 = mysql_query($query11) or die("Query failed : " . mysql_error());
$result12 = mysql_query($query12) or die("Query failed : " . mysql_error());
$result13 = mysql_query($query13) or die("Query failed : " . mysql_error());

$avtobus_index=0;
$avtobus_info=array();
//Получаем все автобусы в массив
//49mm
if (mysql_num_rows($result1) > 0){
    while ($line = mysql_fetch_array($result1, MYSQL_ASSOC)) {
		array_push($avtobus_info,$line);
    }}
	
	
//49
if (mysql_num_rows($result2) > 0){
    while ($line = mysql_fetch_array($result2, MYSQL_ASSOC)) {
		array_push($avtobus_info,$line);
    }}
	
//53
if (mysql_num_rows($result3) > 0){
    while ($line = mysql_fetch_array($result3, MYSQL_ASSOC)) {
   array_push($avtobus_info,$line);
    }	}
	
	
	//51
if (mysql_num_rows($result4) > 0){
    while ($line = mysql_fetch_array($result4, MYSQL_ASSOC)) {
    array_push($avtobus_info,$line);
    }	}
	
	
	//501
if (mysql_num_rows($result5) > 0){
    while ($line = mysql_fetch_array($result5, MYSQL_ASSOC)) {
array_push($avtobus_info,$line);
    }	}
	
	
	//62
if (mysql_num_rows($result6) > 0){
    while ($line = mysql_fetch_array($result6, MYSQL_ASSOC)) {
        array_push($avtobus_info,$line);
    }	}
	
	
	//84
if (mysql_num_rows($result7) > 0){
    while ($line = mysql_fetch_array($result7, MYSQL_ASSOC)) {
       array_push($avtobus_info,$line);
    }	}
	//51m
	//echo $query8;
if (mysql_num_rows($result8) > 0){
    while ($line = mysql_fetch_array($result8, MYSQL_ASSOC)) {
        array_push($avtobus_info,$line);
    }	}
	
	//52
	//echo $query8;
if (mysql_num_rows($result9) > 0){
    while ($line = mysql_fetch_array($result9, MYSQL_ASSOC)) {
	array_push($avtobus_info,$line);
    }}
	
		
	//662
	//echo $query8;
if (mysql_num_rows($result10) > 0){
    while ($line = mysql_fetch_array($result10, MYSQL_ASSOC)) {
        array_push($avtobus_info,$line);
    }	}
	
	//result11
if (mysql_num_rows($result11) > 0){
    while ($line = mysql_fetch_array($result11, MYSQL_ASSOC)) {
 array_push($avtobus_info,$line);
    }	}
	
	
	//result12
	
if (mysql_num_rows($result12) > 0){
    while ($line = mysql_fetch_array($result12, MYSQL_ASSOC)) {
        array_push($avtobus_info,$line);
    }	}
	
	//result13 avtobus69
if (mysql_num_rows($result13) > 0){
    while ($line = mysql_fetch_array($result13, MYSQL_ASSOC)) {
        array_push($avtobus_info,$line);
    }	}

?>


<?
echo "<tr><td>$date</td><td>$date2</td>";
echo"<td><SELECT id='avtobus$avtobus_index' name='avtobus' size='1' >"; 
foreach ($avtobus_info as $value)
{
		$d=substr($value[data1],8);
		$m=strtok(substr($value[data1],5),'-');
		$g=strtok($value[data1],'-');
		$value[data1]=$d.'-'.$m.'-'.$g;
		echo  "<OPTION VALUE='$value[id_avtobus]'>".$value['name']."</option>";
    }
	
echo"</SELECT></td>"; 

   

?>

<?
//команты
$result = mysql_query("SELECT id_komnata, name FROM komnata order by name");
				echo"<td><SELECT id='komnata$avtobus_index' name='komnata' size='1' style='width:200px'>"; 
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC))
				 {
				print "<OPTION VALUE='$line[id_komnata]'> $line[name]</option>";
			     }
       				 print "</SELECT></td>";

echo "<td><input id='kolvo$avtobus_index' type='number' style='width:80px'> </td> <td ><input id='price$avtobus_index' type='number' style='width:80px'> </td> ";


?>

<td><button id='bron<?echo $avtobus_index?>' onclick='BronAvto(<?echo $otel.',"'.$date.'","'.$date2.'",'.$avtobus_index?>)' class="btn btn-primary">Добавить</button></td>"
<?$avtobus_index++;?>
<script>
<?
echo "var avtobus_index=$avtobus_index";

?>
</script>	
</tr>
<tbody id='newtr'></tbody>
</table>
<button id='send_tour' class="btn btn-primary">Добавить строку</button>
</div>
<div id='show_message'> </div>