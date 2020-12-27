<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jayteeka</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<style type="text/css">
body {
  background: linear-gradient(to bottom, #405166 0%, #656f6f 100%);
}
.form-style-5{
	max-width: 500px;
	padding: 10px 20px;
	background: #f4f7f8;
	margin: 10px auto;
	padding: 20px;
	background: #f4f7f8;
	border-radius: 8px;
	font-family: Georgia, "Times New Roman", Times, serif;
}
.form-style-5 fieldset{
	border: none;
}
.form-style-5 legend {
	font-size: 1.4em;
	margin-bottom: 10px;
}
.form-style-5 label {
	display: block;
	margin-bottom: 8px;
}
.form-style-5 input[type="text"],
.form-style-5 input[type="date"],
.form-style-5 input[type="datetime"],
.form-style-5 input[type="email"],
.form-style-5 input[type="number"],
.form-style-5 input[type="search"],
.form-style-5 input[type="time"],
.form-style-5 input[type="url"],
.form-style-5 textarea,
.form-style-5 select {
	font-family: Georgia, "Times New Roman", Times, serif;
	background: rgba(255,255,255,.1);
	border: none;
	border-radius: 4px;
	font-size: 16px;
	margin: 0;
	outline: 0;
	padding: 7px;
	width: 100%;
	box-sizing: border-box; 
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box; 
	background-color: #e8eeef;
	color:#8a97a0;
	-webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
	margin-bottom: 30px;
	
}
.form-style-5 input[type="text"]:focus,
.form-style-5 input[type="date"]:focus,
.form-style-5 input[type="datetime"]:focus,
.form-style-5 input[type="email"]:focus,
.form-style-5 input[type="number"]:focus,
.form-style-5 input[type="search"]:focus,
.form-style-5 input[type="time"]:focus,
.form-style-5 input[type="url"]:focus,
.form-style-5 textarea:focus,
.form-style-5 select:focus{
	background: #d2d9dd;
}
.form-style-5 select{
	-webkit-appearance: menulist-button;
	height:35px;
}
.form-style-5 .number {
	background: #1abc9c;
	color: #fff;
	height: 30px;
	width: 30px;
	display: inline-block;
	font-size: 0.8em;
	margin-right: 4px;
	line-height: 30px;
	text-align: center;
	text-shadow: 0 1px 0 rgba(255,255,255,0.2);
	border-radius: 15px 15px 15px 0px;
}

.form-style-5 input[type="submit"],
.form-style-5 input[type="button"]
{
	position: relative;
	display: block;
	padding: 19px 39px 18px 39px;
	color: #FFF;
	margin: 0 auto;
	background: #1abc9c;
	font-size: 18px;
	text-align: center;
	font-style: normal;
	width: 100%;
	border: 1px solid #16a085;
	border-width: 1px 1px 3px;
	margin-bottom: 10px;
}
.form-style-5 input[type="submit"]:hover,
.form-style-5 input[type="button"]:hover
{
	background: #109177;
}
</style>
</head>


<body>
		<?php
		require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
                
		?>

<nav id="menu" class="navbar navbar-inverse">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><i class="fa fa-sun-o"></i> JAYTEEKA<strong></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
<!--		<form method="POST" enctype="multipart/form-data">
			<b>location:</b> <input type="text" name="name" ></br>
			<b>number:</b> <input type="text" name="price" ></br>
			<b>email:</b>&nbsp&nbsp&nbsp&nbsp <input type="text" name="weight" ></br>
			<b>type:</b>&nbsp&nbsp&nbsp&nbsp <select type="text" name="type">
			<option>shampoo</option>
			<option>soap</option>
			<option>talc</option>
			<option>whitening</option>
			<option>other</option>
			</select></br>
			<input type="file" name="foto"/></br>
			<button type="submit" name="submit" value="submit">DONE</button>
			<p id="demo"></p>
		
		</form>-->
		<div class="form-style-5">
<form method="POST" enctype="multipart/form-data">
<fieldset>
<legend><span class="number">1</span> Add Product</legend>
<input type="text" name="name"  placeholder="Enter Product Name *">
<input type="number" name="price" placeholder="Enter Product Price *">
<input type="text" name="weight" placeholder="Enter product mail *">

<label for="type">Type:</label>
<select id="type" name="type">
<optgroup label="Select">
  <option value="shampoo">Shampoo</option>
  <option value="soap">Soap</option>
  <option value="talc">Talc</option>
  <option value="whitening">Whitening</option>
  <option value="other">Other</option>
</optgroup>
</select>      
</fieldset>
<fieldset>
<legend><span class="number">2</span> Additional Info</legend>
<input type="file" name="foto"/></br>
</fieldset>
<input type="submit" name="submit"  value="Add Product" />
</form>
</div>
		<?php 
			$name = $_POST['name'];
			$price = $_POST['price'];
			$weight = $_POST['weight'];
			$type = $_POST['type'];
			
			$file_get = $_FILES['foto']['name'];
			$temp = $_FILES['foto']['tmp_name'];

			$file_to_saved = "prod_image/".$file_get; 
			move_uploaded_file($temp, $file_to_saved);
			//echo $_FILES['foto']['name'];

			
			//$query1 = "INSERT INTO `jayteekaimg` (prod_id,img_dest) VALUES(NULL,)";
			$query = "INSERT INTO `products` (`prod_id`, `prod_name`, `prod_price`, `prod_weight` , `prod_type` , img_dest) VALUES (NULL, '$name' , '$weight' , '$price' , '$type','$file_to_saved')";
			
			if($_POST['submit']){
				if (mysqli_query($connection,$query)) {
					//if (mysqli_query($connection,$query1)) {
					header('Location: admin.php?action=added');
					exit;
					//}
				}
				else {
				echo "Error updating record: " . $conn->error;
				}
			}		
		?>
</body>

</html>