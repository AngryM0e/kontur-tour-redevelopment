<? 
if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418 || $_COOKIE['login']==421)
{
 include("start.php");

$flag=$_GET['flag'];
$id_zakaz=$_GET['id_zakaz'];
$id_klient=$_GET['id_klient'];

$viborka=$_GET['viborka'];
$id_klient=$_GET['id_klient'];

if ($flag==1)
	{
	$qwer3 = "SELECT firm FROM klient where (id_klient='$id_klient')";
	$result3 = mysql_query($qwer3) or die("Query failed : " . mysql_error());
	$line3 = mysql_fetch_array($result3, MYSQL_ASSOC);
	$firm=$line3[firm];

	if(!empty($viborka))
		{
		foreach($viborka as $key => $id_zakaz)
			{
			$klient=$id_klient[$key];
			
			$qwer = "SELECT B.city,B.name as name1,C.name as name2,A.data1, A.data2, Q.stoim, D.kolvo, Q.info, Q.transfer, Q.mesto,Q.id_avtobus,Q.payment, Q.id_tur 	FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q 
			WHERE ((A.id_otel=B.id_otel) 
			and (A.id_tur=D.id_tur)
			and(C.id_komnata=D.id_komnata)
			and (Q.id_zakaz='$id_zakaz')
			and (Q.id_tur=A.id_tur))";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);

			$city=$line[city];
			$otel=$line[name1];
			$komnata=$line[name2];
			$data1=$line[data1];
			$data2=$line[data2];
			$stoim=$line[stoim];
			$info=$line[info];
			$mesto=$line[mesto];
			$mesto_del=$line[mesto];
			$id_avtobus=$line[id_avtobus];
			$id_tur=$line[id_tur];
			$transfer=$line[transfer];
			$payment=$line[payment];
			
			//добавление к купленным
			$qwery = "INSERT INTO bron VALUES ('$id_zakaz' , '$klient', '$id_tur', '$city', '$otel', '$komnata', '$mesto','$id_avtobus', '$data1', '$data2', '$stoim', '$info', '$transfer','$payment')";
			$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
			
			//удаление из заказов
			$qwery = "delete from zakaz where (id_zakaz='$id_zakaz')";
			$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
			}
		}
	}

if ($flag==2)
	{
	if(!empty($viborka))
		{
		foreach($viborka as $key => $id_zakaz)
			{
			$klient=$id_klient[$key];
			
			$qwer = "SELECT B.city,B.name as name1,C.name as name2,A.data1, A.data2, Q.stoim, D.kolvo, Q.info, Q.mesto,Q.id_avtobus,Q.payment, Q.id_tur 	FROM tur as A, otel as B, komnata as C, kolvo as D, zakaz as Q 
			WHERE ((A.id_otel=B.id_otel) 
			and (A.id_tur=D.id_tur)
			and(C.id_komnata=D.id_komnata)
			and (Q.id_zakaz='$id_zakaz')
			and (Q.id_tur=A.id_tur))";
			$result = mysql_query($qwer) or die("Query failed : " . mysql_error());
			$line = mysql_fetch_array($result, MYSQL_ASSOC);

			$city=$line[city];
			$otel=$line[name1];
			$komnata=$line[name2];
			$data1=$line[data1];
			$data2=$line[data2];
			$stoim=$line[stoim];
			$info=$line[info];
			$mesto=$line[mesto];
			$mesto_del=$line[mesto];
			$id_avtobus=$line[id_avtobus];
			$id_tur=$line[id_tur];
			$payment=$line[payment];
	
			$query2 = "SELECT kolvo FROM kolvo WHERE id_tur='$id_tur'"; 
			$result2 = mysql_query($query2) or die("Query failed : " . mysql_error());
			$line2 = mysql_fetch_array($result2, MYSQL_ASSOC);
			$kolvo=$line2[kolvo];

			$newkolvo=$kolvo+1;
			$query = "update kolvo set kolvo='$newkolvo' where id_tur='$id_tur'";
			$result = mysql_query($query) or die("Произошла ошибка, повторите попытку.");

				if($mesto<>'без мест')
				{
				include("id_avtobus.php");// определение названия автобуса

					$mamama = explode(", ",$mesto);

					foreach($mamama as $k=>$str){
						if($str != ''){

							if ((($id_avtobus>='300') && ($id_avtobus<'500')) || (($id_avtobus >= '1300')&&($id_avtobus < '1400')) || (($id_avtobus >= '1400')&&($id_avtobus < '1600')) || (($id_avtobus >= '1700')&&($id_avtobus < '1800')))
							{
								$mmm=substr($str,-8);
								if($mmm=='ЛС-О_2эт') $mmm='LSO2';
								if($mmm=='ЛС-П_2эт') $mmm='LSP2';
								if($mmm=='ПС-П_2эт') $mmm='PSP2';
								if($mmm=='ПС-О_2эт') $mmm='PSO2';

								if($mmm=='ЛС-О_1эт') $mmm='LSO';
								if($mmm=='ЛС-П_1эт') $mmm='LSP';
								if($mmm=='ПС-П_1эт') $mmm='PSP';
								if($mmm=='ПС-О_1эт') $mmm='PSO';
								if($mmm=='13рядЦ') $mmm='P';
							}
							else
							{
								$mmm=substr($str,-4);
								if($mmm=='ЛС-О') $mmm='LSO';
								if($mmm=='ЛС-П') $mmm='LSP';
								if($mmm=='ПС-П') $mmm='PSP';
								if($mmm=='ПС-О') $mmm='PSO';
								if($mmm=='рядЦ') $mmm='P';
							}

							$ryad=strtok($str,'р');

							//echo $qw='m'.$ryad.$mmm."<br/>";

							$qw='m'.$ryad.$mmm;
                            $query = "update $nameavtobus set $qw=0 where id_avtobus='$id_avtobus'";
                            $result = mysql_query($query) or die("Query failed1 : " . mysql_error());
						}

					}

					/*do
					{
					$str=strtok($mesto,", ");
//дальше из-за $mmm=substr($str,-8); только для автобуса 69

						echo $str." - ";

						if ((($id_avtobus>='300') && ($id_avtobus<'500')) || (($id_avtobus >= '1300')&&($id_avtobus < '1400')) || (($id_avtobus >= '1400')&&($id_avtobus < '1500')))
							{
							$mmm=substr($str,-8);
					 		if($mmm=='ЛС-О_2эт') $mmm='LSO2';
							if($mmm=='ЛС-П_2эт') $mmm='LSP2';
							if($mmm=='ПС-П_2эт') $mmm='PSP2';
							if($mmm=='ПС-О_2эт') $mmm='PSO2';
							
							if($mmm=='ЛС-О_1эт') $mmm='LSO';
							if($mmm=='ЛС-П_1эт') $mmm='LSP';
							if($mmm=='ПС-П_1эт') $mmm='PSP';
							if($mmm=='ПС-О_1эт') $mmm='PSO';
							if($mmm=='13рядЦ') $mmm='P';
							}
						else 
							{
							$mmm=substr($str,-4);
							if($mmm=='ЛС-О') $mmm='LSO';
							if($mmm=='ЛС-П') $mmm='LSP';
							if($mmm=='ПС-П') $mmm='PSP';
							if($mmm=='ПС-О') $mmm='PSO';
							if($mmm=='рядЦ') $mmm='P';
							}

					$ryad=strtok($str,'р');

						echo $mmm."<br/>";

					$qw='m'.$ryad.$mmm;
					$query = "update $nameavtobus set $qw=0 where id_avtobus='$id_avtobus'";
					$result = mysql_query($query) or die("Query failed1 : " . mysql_error());
					$mesto=str_replace($str.", ","",$mesto);
					}
				while($mesto<>'');*/
				}
			 //добавление в таблицу удаленых
			$qwery = "INSERT INTO del VALUES ('$id_zakaz' , '$klient', '$id_tur', '$city', '$otel', '$komnata', '$mesto_del','$id_avtobus', '$data1', '$data2', '$stoim', '$info','бронь','$payment')";
			$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
				 
			$qwery = "delete from zakaz where (id_zakaz='$id_zakaz')";
			$result = mysql_query($qwery) or die("Query failed : " . mysql_error());
			}
		}
	mysql_close($link);
	}
}
Header("Location: zakaz.php");
?>    			

