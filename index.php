<?php
   $host        = "host = ec2-174-129-33-84.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = d46te2h5urrp0e";
   $credentials = "user = jfxjsafmfdzhzu password=eb5eed2f015da016e68cca3d97136fd97ff53e8ca34d3aadc426a8689308fe13";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
	
	$sql = "CREATE TABLE CONTACT(NAME TEXT NOT NULL,EMAIL TEXT NOT NULL,COMMENT TEXT NOT NULL)";
	$ret = pg_query($db, $sql); 
	if(!$ret) { 
		echo pg_last_error($db); 
	} else { 
		echo "Table created successfully\n"; 
	} 
	pg_close($db);
?>
