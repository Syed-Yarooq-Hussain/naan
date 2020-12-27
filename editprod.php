<html>

<head>


</head>


<body>
		<?php
		$pageid = $_GET['id'];
		
		
		require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
                $sql = "SELECT * FROM products where prod_id='$pageid'";
                $result = mysqli_query($connection,$sql);
                $row = mysqli_fetch_array($result);
		echo $pageid; 
		echo "this page has been opened";
		?>

		<form method="POST" enctype="multipart/form-data">
			<b>location:</b> <input type="text" name="name" value="<?php echo $row['prod_name'];?>"></br>
			<b>number:</b> <input type="text" name="price" value="<?php echo $row['prod_price'];?>"></br>
			<b>email:</b>&nbsp&nbsp&nbsp&nbsp <input type="text" name="weight" value="<?php echo $row['prod_weight'];?>"></br>
			<input type="file" name="foto"/></br>
			<button type="submit" name="submit" value="submit">DONE</button>
			<p id="demo"></p>
		
		</form>
		
		<?php 
			$name = $_POST['name'];
			$price = $_POST['price'];
			$weight = $_POST['weight'];
			
			$file_get = $_FILES['foto']['name'];
			$temp = $_FILES['foto']['tmp_name'];

			$file_to_saved = "prod_image/".$file_get; 
			move_uploaded_file($temp, $file_to_saved);
			//echo $_FILES['foto']['name'];

			
			$query1 = "UPDATE jayteekaimg SET img_dest ='$file_to_saved' WHERE prod_id='$pageid'";
			$query = "UPDATE products SET prod_name = '$name', prod_price = '$price',prod_weight = '$weight' WHERE prod_id='$pageid'";
			$connection->query($query);
			if($_POST['submit']){
				if ($connection->query($query) === TRUE) {
					if ($connection->query($query1) === TRUE) {
					header('Location: admin.php');
					exit;
					}
				}
				else {
				echo "Error updating record: " . $conn->error;
				}
			}		
		?>
</body>

</html>