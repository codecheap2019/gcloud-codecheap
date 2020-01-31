<?php
   $host        = "host = ec2-18-204-232-57.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d7pkis5qdkbu86";
   $credentials = "user = smwujrysziwkxj password=eea0cf153dc8883a6f5a9f288a07ee766b89a7a7fb9863914b572abf4a7c3927";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
   
   $sql2 ="CREATE TABLE CONTACT
      (NAME           TEXT    NOT NULL,
      EMAIL           TEXT     NOT NULL,
      MOBILE       INT,
      COMMENT        TEXT)";
	$sql = "INSERT INTO CONTACT (NAME,EMAIL,MOBILE,COMMENT) VALUES ('Rajesh Mondal', 'rajeshmondal9007@gmail.com', 9007614782, 'Hello World')";

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
   } else {
      echo "Table created successfully\n";
   }
   pg_close($db);
?>