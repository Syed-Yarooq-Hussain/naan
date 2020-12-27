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

<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
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
      <ul class="nav navbar-nav navbar-right">
        
		<li><a href="#info-section" class="page-scroll">our info</a></li>
		<li><a href="#product-section" class="page-scroll">Products</a></li>
		<li><a href="#contact-section" class="page-scroll">Contact</a></li>
        <li><a href="#consultant" class="page-scroll">consults</a></li>
        
        <li><a href="#team-section" class="page-scroll">Team</a></li>
        <li><a href="#doctor-section" class="page-scroll">Consult-Doctor</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

  <!-- OUR INFO --> 

<div name="info-section"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h1 style="text-align:center;">This is your product detail you can edit it</h1>

<table id="customers">
	<thead>
	<th>name</th>
	<th>e-mail</th>
	<th>contact-number</th>
	<th>edit</th>
	
	</thead>
	<?php
	require_once('dbcon.php');
				/* $connection = new mysqli('localhost','root','root','jayteeka','3306'); */
                $sql3 = "SELECT * FROM ourinfo";
                $result = mysqli_query($DBcon,$sql3);
                /* while($row = mysqli_fetch_array($result)){ */
	  ?>
	<tr>
		<td><?php echo $row['my_location'];?></td>
		<td><?php echo $row['my_email'];?></td>
		<td><?php echo $row['my_number'];?> </td>
		<td><?php echo '<a href="editinfo.php"><button  type="submit" style="color:#0dbf9b; border-color:#0dbf9b;"class="btn btn-default" name="submit" ;>edit</button></a>' ?></td>
	</tr>
		<?php /* } */ ?>
</table>
</div>



<div class="row">
		<div class="col-sm-6">
		<div name="product-section"style="background: linear-gradient(to bottom, #405166 0%, #656f6f 100%); box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<h1 style="color: white;text-shadow: 2px 2px 4px #000000;text-align:center;">ADD OR EDIT PRODUCT DETAILS</h1>


			<div style="text-align:center;">	
					<a href="addproducts.php"><button type="submit" class="btn btn-default" name="submit">ADD PRODUCTS  </button></a>
					<a href="allproducts.php"><button type="submit" class="btn btn-default" name="submit">See All your products  </button></a>
				</div>
		</div>


</div>
		<div class="col-sm-6">
		<!-- this is section for contacts-->

		<div name="contact-section"style="background: linear-gradient(to bottom, #405166 0%, #656f6f 100%);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<h1 style="color: white;text-shadow: 2px 2px 4px #000000;text-align:center;">CHECK YOUR QUERIES</h1>

				<div style="text-align:center;">	
					<a href="allquery.php"><button type="submit" class="btn btn-default" name="submit">See All Contacts Message </button></a>
				</div>
		</div>
		</div>


</div>

<div class="row">
		<div class="col-sm-6">

		<div name="consultant"style="background: linear-gradient(to bottom, #405166 0%, #656f6f 100%);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
		<h1  style="color: white;text-shadow: 2px 2px 4px #000000;text-align:center;">CHECK YOUR SALES QUERIES </h1>


			<div style="text-align:center;">	
					<a href="allcontacts.php"><button type="submit" class="btn btn-default" name="submit">See All question </button></a>
				</div>
		</div>


</div>

			<div class="col-sm-6">

					<div name="consultant"style="background: linear-gradient(to bottom, #405166 0%, #656f6f 100%);box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
					<h1  style="color: white;text-shadow: 2px 2px 4px #000000;text-align:center;">CHECK YOUR ORDERS </h1>


						<div style="text-align:center;">	
								<a href="allquery.php"><button type="submit" class="btn btn-default" name="submit">See All question </button></a>
							</div>
					</div>


</div>
</div>


<!-- this is section for contacts-->
</br>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<!--script type="text/javascript" src="js/contact_me.js"></script--> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>

<div id="footer">
	<div class=row>
	<div class=col-sm-4>
	<ul>
        <li><a href="career.php">career</a></li>
        <li><a href="order.php">order</a></li>
        
      </ul>
	</div>
	</div>

 <div class="container">
    <div class="fnav">
      <p>Copyright &copy; Helios. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>

</body>
</html>