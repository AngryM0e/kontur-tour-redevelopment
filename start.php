<?
  $mysql_host="localhost";
 $mysql_user="konturtoru_new";
 $mysql_password="123456";
 $mysql_database="konturtoru_new";

$link = mysql_connect("$mysql_host", "$mysql_user", "$mysql_password")
        or die("Could not connect : " . mysql_error());
mysql_select_db("$mysql_database") or die("Could not select database");
	mysql_query('set names cp1251');
?>