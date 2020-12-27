<html>
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container" > 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i> JAYTEEKA<strong></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<header class="text-center" name="home">
  <div class="intro-text">
    <h1 style="float: right;"><strong></strong></h1>
    <p> </p>
    <a href="#services-section" class="btn btn-default btn-lg page-scroll" style="float: right;"> Drop CV</a> </div>
</header>

<h1 style="text-align: center;">ORDER NOW  </h1>
<p style="text-align: center;">order now our product we will deliver you within 3 working days</p>

<form action="doneorder.php" method="post">
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-2">
			<div class="col-sm-2"></div>
			
			<div class="col-sm-10">
				<input type="text" name="name" placeholder="Name" style="width:100%;">
			</div>
		</div>
		<div class="col-sm-2">
			<input type="text" name="email" placeholder="email" style="width:100%;">
		</div>
		<div class="col-sm-2">
			<input type="text" name="contact" placeholder="phone #" style="width:100%;">
		</div>
		<div class="col-sm-3">
			<input type="text" name="address" placeholder="Address" style="width:100%;">
		</div>
	</div>


<!-- MAIN (Center website) -->
<div class="main">

<!-- Portfolio Gallery Grid -->
<?php

//session_start();
require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
                $sql = "SELECT * FROM products";
                $result = mysqli_query($connection,$sql);
				
                while($row = mysqli_fetch_array($result)){
	  ?> 


 <div class="column" >
    <div class="content">
      <img src= "<?php echo $row['img_dest']; ?>"  alt="Mountains" style="width:100%;height:150px">
	  
      <p style= "text-align: center" ><b><?php echo $row['prod_name']; ?></b></p>
	  
	  <b>Buy now </b><input type="checkbox" style="margin-right:20px"  name="prod[]" value="<?php echo $row['prod_id']; ?>" > 
	  
	  Quantiy<input type="number" style="width:15%;height:18px;margin-left:5px;" name="quantity[<?php echo $row['prod_id']; ?>][name]" placeholder="1" step="1">
	  
	  <?php echo "<P style='text-align: center'> weight:".$row['prod_weight']."</p>"; ?>
      
	  <?php echo "<P style='text-align: center'> Price:<b>".$row['prod_price']."</b></p>"; ?>
    </div>
 
<!-- END GRID -->
</div>


<?php } 
?>
<div class="row">


<button type="submit" value="submit">submit</button>


</div>



<!-- END MAIN -->
</div>

		
</form>


</body>
</html>
