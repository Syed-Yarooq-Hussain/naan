<html>
	<head></head>
	<body>	
		<?php
			require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
                $sql = "SELECT * FROM ourinfo";
                $result = mysqli_query($connection,$sql);
                $row = mysqli_fetch_array($result);
				
	  ?>
	
		<form method="POST">
			<b>location:</b> <input type="text" name="location" value="<?php echo $row['my_location'];?>"></br>
			<b>number:</b> <input type="text" name="number" value="<?php echo $row['my_number'];?>"></br>
			<b>email:</b>&nbsp&nbsp&nbsp&nbsp <input type="text" name="email" value="<?php echo $row['my_email'];?>"></br>
			<button type="submit" name="submit" value="submit">DONE</button>
		</form>
		
		<?php 
		
			$my_location = $_POST['location'];
			$my_number = $_POST['number'];
			$my_email = $_POST['email'];
			
			echo $my_email;
			
			$query = "UPDATE ourinfo SET my_location = '$my_location',my_email = '$my_email',my_number = '$my_number'";
			$connection->query($query);
			if($_POST['submit']){
				if ($connection->query($query) === TRUE) {
				header('Location: admin.php?action=added');
				exit;
				} else {
				echo "Error updating record: " . $conn->error;
				}
			}		
		?>
		
		
	</body>
</html>