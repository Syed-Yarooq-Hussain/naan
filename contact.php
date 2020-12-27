<html>
<head>
   
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>
<script>
$(document).ready(function() {
  $(".title").lettering();
  $(".button").lettering();
});

$(document).ready(function() {
  animation();
}, 1000);

$('.button').click(function() {
  animation();
});


function animation() {
  var title1 = new TimelineMax();
  title1.to(".button", 0, {visibility: 'hidden', opacity: 0})
  title1.staggerFromTo(".title span", 0.5, 
  {ease: Back.easeOut.config(1.7), opacity: 0, bottom: -80},
  {ease: Back.easeOut.config(1.7), opacity: 1, bottom: 0}, 0.05);
  title1.to(".button", 0.2, {visibility: 'visible' ,opacity: 1})
}
</script>
<style>
@import url(https://fonts.googleapis.com/css?family=Fjalla+One);
html {
  height: 100%;
}
body {
  font-family: 'Fjalla One', sans-serif;
  background: linear-gradient(to bottom, #405166 0%, #656f6f 100%);
}
.container {
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  display: block;
  position: absolute;
  max-width: 500px;
}
.button {
  float: left;
  position: relative;
  bottom: -65px;
  left: 50%;
  transform: translateX(-50%) rotate(-10deg);
  color: #e55643;
  text-transform: uppercase;
  opacity: 0;
  visibility: hidden;
  cursor: pointer;
}
.button span {
  transform: skew(-10deg);
  display: block;
  float: left;
  text-shadow: #533d4a 1px 1px, #533d4a 2px 2px, #533d4a 3px 3px, #533d4a 4px 4px;
}
h1 {
  color: #fff;
  text-transform: uppercase;
  font-size: 42px;
  margin: 0;
  line-height: 47px;
  letter-spacing: 2px;
}
.title {
  transform: translateX(-50%) rotate(-10deg);
  display: block;
  float: left;
  left: 50%;
  position: relative;
}
.title span {
  transform: skew(-10deg);
  display: block;
  float: left;
  text-shadow: #533d4a 1px 1px, #533d4a 2px 2px, #533d4a 3px 3px, #533d4a 4px 4px, #533d4a 5px 5px, #533d4a 6px 6px;
  min-width: 10px;
  min-height: 10px;
  position: relative;
}
.title:nth-child(1) {
  color: #e55643;
}
.title:nth-child(2) {
  color: #2b9f5e;
}
.title:nth-child(3) {
  color: #f1c83c;
}
.title:nth-child(4) {
  color: #f1c83c;
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
<section class="container">
  <h1>
    <span class="title">Thank you <?php echo $_POST["user_name"]; ?></span>
    <span class="title">for your interest We</span>
	 <span class="title">will get you</span>
    <span class="title">back soon via your</span>  
	<span class="title">email address<?php echo $_POST["cont_email"]; ?></span>
	<span class="title"></br>or</br> your phone number <?php echo $_POST["cont_number"]; ?></span>
  <a href="index.php"><div class="button"style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">Home Page</div></a>
</h1></section>
<!--
</br>
	<div style="text-align: center;">
		<h1>Thank you <?php echo $_POST["user_name"]; ?></br> for your interest We will get you back soon via your </br>email address <?php echo $_POST["cont_email"]; ?></br>or</br>your phone number <?php echo $_POST["cont_number"]; ?></h1>
		</br></br></br>return to home page to check our more exciting products</br>
		<a href="index.php"><button type="submit">Home page</button></a>
	</div>
-->
</body>


</html>               
<?php
echo "<script>console.log('han dekh kuch kaam ho raha hai')</script>";
    include_once 'dbcon.php';
			$connection = new mysqli('localhost','root','root','jayteeka','3306');
			
			date_default_timezone_set('Asia/Karachi');
			date_default_timezone_get();
			$cont_name = mysqli_real_escape_string($connection,$_POST['cont_name']);
			$cont_email = mysqli_real_escape_string($connection,$_POST['cont_email']);
			$cont_message = mysqli_real_escape_string($connection,$_POST['cont_message']);
			$cont_number = mysqli_real_escape_string($connection,$_POST['cont_number']);
			$cont_date = date('Y-m-d');
				
			echo "<script>console.log( 'Debug Objects: " . $cont_date . "' );</script>";
			
			$query = "INSERT INTO `contacts` (`cont_id`, `cont_name`, `cont_email`, `cont_message`, `cont_number`, `cont_date`) VALUES (NULL, '$cont_name', '$cont_email', '$cont_message', '$cont_number', '$cont_date');";
		
		  if (mysqli_query($connection,$query)) 
       {
          header('Location: index.php?action=added');
          exit;
          
        }
        else {
        echo "Error updating record: " . $conn->error;
        }
?>