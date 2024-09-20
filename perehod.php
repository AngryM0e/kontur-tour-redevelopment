<?
if($_COOKIE['login']==NULL)
			{
	Header("Location: cookies.php");
           		}	

if($_COOKIE['login']==1 || $_COOKIE['login']==234 || $_COOKIE['login']==235 || $_COOKIE['login']==418  || $_COOKIE['login']==421)
			{
	Header("Location: admin.php");
           		}
if(($_COOKIE['login']<>1 && $_COOKIE['login']<>234 && $_COOKIE['login']<>235) && $_COOKIE['login']<>418  && $_COOKIE['login']<>418 && ($_COOKIE['login']<>NULL))
			{
	Header("Location: poisk.php");
          		}
/*if(($_COOKIE['login']<>1 && $_COOKIE['login']<>234 && $_COOKIE['login']<>235) && ($_COOKIE['login']<>NULL))
			{
	Header("Location: index.php");
          		}*/
?>