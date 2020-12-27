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
      
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<div name="product-section">
<h1>This is your product detail you can edit it</h1>

<table id="customers">
	<thead>
	<th>name</th>
	<th>e-mail</th>
	<th>message</th>
	<th>date</th>
	<th>respond</th>
	</thead>
	<?php
		require_once('dbcon.php');
				$connection = new mysqli('localhost','root','root','jayteeka','3306');
				$sql2 = "SELECT * FROM consultant ORDER BY user_id DESC";
                $result = mysqli_query($connection,$sql2);
				
                while($row = mysqli_fetch_array($result)){
	  ?>
	<tr>
		<td><?php echo $row['user_name'];?></td>
		<td><?php echo $row['user_email'];?></td>
		<td><?php echo $row['user_question'];?> </td>
		<td><?php echo $row['query_date'];?> </td>
		<td><?php echo '<a href="deletepost.php?id='.$row['postID'].'"><button  type="submit" ;>Respond</button></a>' ?></td>
	</tr>
		<?php } ?>
</table>

	<div style="text-align:center; padding-top:40px ;">	
			<a href="admin.php"><button>Home </button></a>
		</div>
</div>

	
</body>
</html>