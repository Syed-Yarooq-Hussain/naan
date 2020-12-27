<html>
<head></head>
<body>
<?php

//session_start();
require_once('dbcon.php');
$connection = new mysqli('localhost','root','root','jayteeka','3306');
                $sql = "SELECT my_location FROM ourinfo";
                $result = mysqli_query($connection,$sql);
				$count=0;

		//		echo $result['my_location'];
               
                $row = mysqli_fetch_array($result);
               
               echo $row['my_location'];
          
        ?>
      
</body>
</html>

