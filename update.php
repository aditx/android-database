<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="ex1";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $v1 = $_REQUEST['f1'];
  $v2 = $_REQUEST['f2'];
  $v3 = $_REQUEST['f3'];

	$flag['code']=0;

	if($r=mysql_query("UPDATE t1 SET f2='$v2', f3='$v3' WHERE f1='$v1'",$con))
	{
		$flag['res']="Update Success";
    print(json_encode($flag));
	} else {
    $flag['res']="Update Failed";
    print(json_encode($flag));
  }

	mysql_close($con);
?>
