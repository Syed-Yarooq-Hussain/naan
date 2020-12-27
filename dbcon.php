<!-- author: Syed Yarooq Hussain-->
<?php

	 $DBhost = "localhost";
	 $DBuser = "root";
	 $DBpass = "";
	 $DBname = "blog";
	 $results_per_page = 5;
	 $DBcon = new MySQLi($DBhost,$DBuser,$DBpass,$DBname,'3306');
    
     if ($DBcon->connect_errno) {
         die("ERROR : -> ".$DBcon->connect_error);
     }
?>