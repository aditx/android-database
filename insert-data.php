<?php
	$host='localhost';
	$uname='root';
	$pwd='adm13';
	$db="ex1";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

  $v1 = $_REQUEST['f1'];
  $v2 = $_REQUEST['f2'];
  $v3 = $_REQUEST['f3'];

	$flag['code']=0;

	if($r=mysql_query("INSERT INTO t1 VALUES('$v1', '$v2', '$v3')",$con))
	{
		$flag['code']=1;
		echo"hi";
	}

	print(json_encode($flag));
	mysql_close($con);
?>
