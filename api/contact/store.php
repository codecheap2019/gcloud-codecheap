<?php
   $host        = "host = ec2-18-204-232-57.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7pkis5qdkbu86";
   $credentials = "user = smwujrysziwkxj password=eea0cf153dc8883a6f5a9f288a07ee766b89a7a7fb9863914b572abf4a7c3927";

	$name = $_GET['name'];
	$email = $_GET['email'];
	$mobile = $_GET['monbile'];
	$comment = $_GET['comment'];

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   }

	$sql = "INSERT INTO CONTACT (NAME,EMAIL,MOBILE,COMMENT) VALUES ($name, $email,'9007614782', $comment)";
   
	$ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
		echo $ret;
   }
   pg_close($db);
?>