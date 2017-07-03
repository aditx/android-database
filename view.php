<?php
	$host='localhost';
	$uname='dev';
	$pwd='dev';
	$db="ex1";

	$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");

	$result = mysql_query("SELECT * FROM t1", $con);

  while ($row = mysql_fetch_assoc($result)) {
    $rows[] = $row;
  }

	print(json_encode($rows));
	mysql_close($con);
?>
