<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Jayteeka</title>
<meta name="description" content="">
<meta name="author" content="">
   
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

<style>
body {
  background: linear-gradient(to bottom, #dff 0%, #dff 100%);
}
table {
    border-collapse: collapse;
    width: 50%;
	text-align:center;
}

th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}
td{color:#4CAF50;}
th{color:aaaaaa;}

tr:hover {background-color:#f5f5f5;}
.btn {
    background: transparent;
    border: 2px solid #12dbb2;
    border-radius: 4px;
    padding: 10px 20px;
    margin-top: 20px;
    color: #0dbf9b;
}
.btn:hover {
    background: #0dbf9b;
    border: 2px solid #0dbf9b;
	color: #fff;
}
</style>


</head>
<body>
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
</nav>


<?php
require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
    
foreach($_POST['prod'] as $id){
  $quantity = $_POST['quantity'][$id]['name'];
  //TODO: update the database
 // echo $quantity;
}	
$buy = $_POST['prod'];
$name = $_POST['name'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$address = $_POST['address'];
//$quantity = $_POST['quantity'];

// optional
// echo "You chose the following color(s): <br>";
 $N = count($buy);

?>


<div class="row">
	<div class="col-sm-3">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name :<b> <?php echo $name ?></b>
	</div>
	<div class="col-sm-3">
		Address :<b> <?php echo $address ?></b>
	</div>
	<div class="col-sm-3">
		Phone# :<b> <?php echo $contact ?></b>
	</div>
	<div class="col-sm-3">
		Email : <b><?php echo $email ?></br></b>
	</div>
</div>
<div style="text-align: center;">
<table id="customers" style="margin:auto; text-align: center;">
	<thead>
	<th>name</th>
	<th>unit price</th>
	<th>product weight</th>
	<th>quantity</th>
	<th>price</th>
	</thead>


<?php 
  $bill = 0; 
 for($i=0; $i < $N; $i++)
    {
		$quantity = $_POST['quantity'][$buy[$i]]['name'];
			if($quantity==null)
				$quantity=1;
			//echo  $quantity;
				
		$sql = "SELECT * FROM products WHERE prod_id='$buy[$i]' ";
				$result = mysqli_query($connection,$sql);
				while($row = mysqli_fetch_array($result)){
					
				
		?>
		<tr>
		<td><?php echo $row['prod_name'];?></td>
		<td><?php echo $row['prod_price'];?> </td>
		<td><?php echo $row['prod_weight'];?> </td>
		<td><?php echo  $quantity; ?></td>
		<td><?php echo $row['prod_price']* $quantity;?></td>
		</tr>
	
	
	<?php 
	$bill =  $bill + $row['prod_price']*$quantity;
	//$total = $total+$bill; 
	$a .= $row['prod_name']." <-- quantity --> ".$quantity."</br>";
	} } 
	?>
	</table>
</div>	</br>
	<p id="customers" style="text-align: center;"><b>Your total bill is <strong><?php echo $bill; ?></strong></b></p>
	
	<div style="text-align: center;"> 
	<form>
	<button  name="done" class="btn" > confirm</button>
	<button  name="cancel"  class="btn">cancel</button>
	</form>

				<?php 
						
					echo $name;
					echo $contact;
					echo $email;
					echo $address;
					echo $a;
					$cont_date = date('Y-m-d');
					echo $cont_date;
					
$query = "INSERT INTO `orders` (`order_id`, `consumer_name`, `consumer_email`, `consumer_phone`, `consumer_address`, `order_date`, `order_detail`) VALUES (NULL, '$name', '$email', '$contact', '$address', '$cont_date', '$a');";			
				if (mysqli_query($connection,$query)) {
					//if (mysqli_query($connection,$query1)) {
					//header('Location: index.php?action=added');
					exit;
					
				}
				else {
				echo "Error updating record: " . $conn->error;
				}
				?>
	</div>

</body>
</html>