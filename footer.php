<?
				{if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418) $str="<li><a href='admin.php'>Главная</a></li><li><a href='logout.php'>Выход</a></li>";
				 else $str="<li><a href='admin.php'>Поиск тура</a></li><li><a href='logjut.php'>Бронирование тура</a></li><li><a href='logjut.php'>Оплаченные туры</a></li><li><a href='logjut.php'>Личная информация</a></li><li><a href='logjut.php'>Выход</a></li>";
				}
			  else Header("Location: door.php");	
?>  
</center>
<div id="footer"><? echo $str; ?></div> <!-- id="footer" -->
</div> <!-- id="container" -->
</body>
</html>