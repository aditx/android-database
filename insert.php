<?php
  $conn = mysql_connect("127.0.0.1", "root", "adm13");
  if ($conn) {
    die('Could not connect: ' . mysql_error());
  }

    mysql_select_db("ex1", $conn);
    $v1 = $_REQUEST['f1'];
    $v2 = $_REQUEST['f2'];
    $v3 = $_REQUEST['f3'];

      if($v1 == NULL || $v2 == NULL || $v3 == NULL) {
          $r["re"] = "Fill the all fields !!!";
          print(json_encode($r));
          die('Could not connect: Kosong' . mysql_error());
      } else {
          $i = mysql_query("SELECT * FROM t1 WHERE f1 = $v1", $conn);
          $check = '';
          while($row = mysql_fetch_array($i)) {
              $check = $row['f1'];
          }
              if($check == NULL) {
                  $q = "INSERT INTO t1 VALUES('$v1', '$v2', '$v3')";
                  $s = mysql_query($q);
                  if(!$q) {
                      $r["re"] = "Inserting problem in database";
                      print(json_encode($r));
                  } else {
                      $r["re"] = "Record inserted in database";
                      print(json_encode($r));
                  }
              } else {
                  $r["re"] = "Record is repeated";
                  print(json_encode($r));
              }
      }
  mysql_close($conn);
?>
