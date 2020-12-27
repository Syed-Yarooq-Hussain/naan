<!DOCTYPE html>
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

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php

//session_start();
require_once('dbcon.php');
global $db;

		function connection(){
      return $connection = new mysqli('localhost','root','','blog','3306');
    }
               /*  $sql = "SELECT * FROM products";
                $result = mysqli_query($connection,$sql);	 */		
	  ?>

<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><i class="fa fa-sun-o"></i> NääN DiġitäL<strong></strong></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Home</a></li>
        <li><a href="#services-section" class="page-scroll">Services</a></li>
        <li><a href="#works-section" class="page-scroll">Articles</a></li>
        <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#news-section" class="page-scroll">News Update</a></li>
        <li><a href="#covid-section" class="page-scroll">Covid</a></li>
        <li><a href="#science-section" class="page-scroll">Sci & Technology</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>

<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
     <h1> <strong></strong></h1>
    <p> </p> 
    <a href="#services-section" class="btn btn-default btn-lg page-scroll">LEARN MORE</a> </div>
</header>

<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Services</h2>
      <hr>
      <div class="clearfix"></div>
      <p>We re ready to give you solution boost your business with modern technologies </p>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4 col-sm-4 service"> <i class="fa fa-rocket"></i>
        <h4>Software Development</h4>
        <p>we deal in web development nd hybrid mobile apps</p>
      </div>
      <div class="col-md-4 col-sm-4 service"> <i class="fa fa-edit"></i>
        <h4>Content Writing</h4>
        <p>aapka content mene yhn likhn hai jitne bhe aapne serivices dalni hun batadijiyega </p>
      </div>
      <div class="col-md-4 col-sm-4 service"> <i class="fa fa-edit"></i>
        <h4>Digital Marketting</h4>
        <p>aapka content mene yhn likhn hai jitne bhe aapne serivices dalni hun batadijiyega </p>
      </div>
      <div class="col-md-4 col-sm-4 service"> <i class="fa fa-edit"></i>
        <h4>SEO</h4>
        <p>aapka content mene yhn likhn hai jitne bhe aapne serivices dalni hun batadijiyega </p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Our Products</h2>
      <hr>
      <div class="clearfix"></div>
      <p>We proudly announce our following products</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".shampoo">Hair care / shampoo</a></li>
            <li><a href="#" data-filter=".soap">Skin Care/ soaps</a></li>
            <li><a href="#" data-filter=".talc">powders / Talc</a></li>
            <li><a href="#" data-filter=".whitening">Glooming products</a></li>
			<li><a href="#" data-filter=".other">other</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div>
      <div class="portfolio-items">
	  <?php   while($row = mysqli_fetch_array($result)){ ?>
        <div class="col-sm-6 col-md-3 col-lg-3 <?php echo $row['prod_type']; ?>">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="<?php echo $row['img_dest']; ?>" rel="prettyPhoto">
              <div class="hover-text">
                <h4><?php echo $row['prod_name']; ?></h4>
                <small>Hair care</small>
                <div class="clearfix"></div>
              </div>
              <img src="<?php echo $row['img_dest']; ?>" class="img-responsive" alt="<?php echo $row['prod_name']; ?>"> </a> </div>
          </div>
        </div>
	  <?php } ?>
        
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Us</h2>
      <hr>
      <div class="clearfix"></div>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.</p>
    </div>
    <div class="row">
      <div class="col-md-6"> <img src="img/about.jpg" class="img-responsive"> </div>
      <div class="col-md-6">
        <div class="about-text">
          <h4>Who We Are</h4>
          <p>Jayteeka Laboratories is a 10 years cosmetic manufacturer based in Pakistan. We are the leader in private label skin care/ hair care/ body & bath products and very soon color makeup/ cosmetics.

Our expertise in the fields of cosmetics & skincare & hair care manufacturing allows us to produce top quality products, natural and technical products that are sold at top department stores .plus due to our very competitive prices we are able to produce products for mass market  …..</p>
          <h4>What We Do</h4>
          <p>We are currently have hundreds of stock private label formulas from which to choose. If you don't see a product you are looking for, please contact us as we may either have already developed it as none exclusive formula for others in which you can have similar formula at lower minimum or we can do it custom formula for you</p>
          <h4>Why Choose Us</h4>
          <p>We are proud to showcase a team of highly qualified and certified professionals.Our team make maximum efforts to make our product efficient and harmless because we care about you </p>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- news section -->
<div id="news-section">
      <div class="container">
      asdasdasdasdadasdaasdasdasdas
      </div>
</div>
<div id="covid-section">
      <div class="container">
        asdasdasdasdadasdaasdasdasdas
      </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="section dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">12,105</span>
          <h4>Happy clients</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">99</span>
          <h4>Efficiency</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">08</span>
          <h4>Product Announced</h4>
        </div>
      </div>
      <div class="col-md-3 col-sm-3">
        <div class="achievement-box"> <span class="count">2</span>
          <h4>Contest won</h4>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Team Section 
<div id="team-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Meet the Team</h2>
      <hr>
      <p>Every organization is not based on one person but its depend on its team , Make our team who make us more successful as we were</p>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/01.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Javeed</h3>
            <p>Founder / CEO</p>
            <p>MR Javeed first realize the need of product and start working on it.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/02.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>name</h3>
            <p>designation</p>
            <p>content</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/03.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Name</h3>
            <p>designation</p>
            <p>content.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="img/team/04.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Name</h3>
            <p>Designation</p>
            <p>product.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

 Doctor Section -->
<div id="science-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Consult with experts</h2>
      <hr>
      <p>If you have any skin problem , Don't worry Our team is here to give you best advice without any charges.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form id="doctorForm" action="doct.php" method="post" novalidate>
      <h3>Ask your query</h3>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="user_name" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" name="user_email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="user_question" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <button type="submit" class="btn btn-default" name="submit">Send Message</button>
      </form>
    </div>
  </div>
</div>
</div>

<?php

//session_start();

                $sql = "SELECT * FROM info";
                $result = mysqli_query($DBcon,$sql);
			        	$count=0;
               
                $row = mysqli_fetch_array($result);
              ?>


<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
      <p>Don't hesitate for ask and visit, we are here to give you quick response.</p>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-4"> <i class="fa fa-map-marker"></i>
        <p><?php echo $row['my_location'];?></p>
      </div>
      <div class="col-md-4"> <i class="fa fa-envelope-o"></i>
        <p><?php echo $row['my_email']; ?></p>
      </div>
      <div class="col-md-4"> <i class="fa fa-phone"></i>
        <p> <?php echo $row['my_phone']; ?> </p>
      </div>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form action="contact.php" method="post"  novalidate>
        <div class="row">
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" name="cont_name" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="email" name="cont_email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
		  <div class="col-md-4">
            <div class="form-group">
              <input type="text" name="cont_number" class="form-control" placeholder="Contact Number">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="cont_message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
</div>
				
<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a href="#"><i class="fa fa-github"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
      </ul>
    </div>
  </div>
</div>
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
</body>
</html>