<?
				{if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235  || $_COOKIE['login']==421  || $_COOKIE['login']==418) $str="<li><a href='admin.php'>�������</a></li><li><a href='logout.php'>�����</a></li>";
				 else $str="<li><a href='admin.php'>����� ����</a></li><li><a href='logjut.php'>������������ ����</a></li><li><a href='logjut.php'>���������� ����</a></li><li><a href='logjut.php'>������ ����������</a></li><li><a href='logjut.php'>�����</a></li>";
				}
			  else Header("Location: door.php");	
?>  
</center>
<div id="footer"><? echo $str; ?></div> <!-- id="footer" -->
</div> <!-- id="container" -->
</body>
</html>