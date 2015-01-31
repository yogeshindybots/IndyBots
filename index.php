<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IndyBots Technologies</title>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/indybots.css" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/png" href="favicon.png">
<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
<!-- responsive slider-->
<link href="css/responsive-slider-parallax.css" rel="stylesheet">    
    <style>
	</style>
</head>

<body><!-- oncontextmenu="return false"-->
  <header>
  	<nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
        <!--<div class="round"></div>-->
          <a href="index.php" class="pull-left"><img src="img/logo_home.png" class="img-responsive logo_home"></a>

        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                	<span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
            </div><!--.navbar-header-->
            
            <div class="collapse navbar-collapse" id="menu">
            	<ul class="nav navbar-nav navbar-right">
                	<li class="hidden">
                    	<a href=""></a>
                    </li>
                    <li class="active">
                    	<a href="index.php">Home</a>
                    </li>
                    <li>
                    	<a href="company.php">Company</a>
                    </li>
                    <li class="dropdown">
                    	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Services &nbsp;<b class="fa fa-chevron-down"> </b></a>
                        
                        <ul class="dropdown-menu">
                            <li>
                            	<a href="robotics.php">Robotics</a>
                            </li>
                        	<li>
                            	<a href="mobility.php">Moblility</a>
                            </li>
                            <li>
                            	<a href="sw_dev.php">S/W Development</a>
                            </li>
                        	<li>
                            	<a href="web_dev.php">Web Development</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                    	<a href="career.php">Career</a>
                    </li>
                    <li>
                    	<a href="contact_us.php">Contact Us</a>
                    </li>    
                </ul>
            </div><!--.collapse-->
        </div><!--.container-->
    </nav>
  </header>
  
  <!-----------Slider-------------> 
  <?php include'slider.php'; ?>
  
  
   <div class="container index_content">
   	  <div class="row">	 
      		
          <div class="col-md-3 text-center" onmouseover="roboimgOnMouseOver()"
      onmouseout="roboimgOnMouseOut()">
          	<h2 class="animated wow fadeInUp">Robotics</h2>
            <!--<b class="fa fa-cog wow animated zoomIn"></b>-->
            <img src="img/robotics.png" id="robotics" class="wow animated zoomIn"/>
            <p class="text-justify animated wow fadeInDown">IndyBots Principle business is to offer complete solutions on turnkey basis to its customers, typically consisting user requirement capturing & understanding of customer need, </p>
            <a href="robotics.php" class="animated wow fadeInDown">Know more ...</a>
          </div><!--col-md-3-->
            
          <div class="col-md-3 text-center" onmouseover="moimgOnMouseOver()"
      onmouseout="moimgOnMouseOut()">
          	<h2 class="animated wow fadeInUp">Mobility</h2>
            <!--<b class="fa fa-mobile wow animated zoomIn"></b>-->
            <img src="img/mobile.png" id="mobile" class=" wow animated zoomIn"/>
            <p class="text-justify animated wow fadeInDown">Android OS that has made it successful and favorite in the Smartphone industry. In no time, Android started competing with Apple iOS and Windows operating platform</p>
            <a href="mobility.php" class="animated wow fadeInDown">Know more ...</a>
          </div><!--col-md-3-->
          
          <div class="col-md-3 text-center" onmouseover="swimgOnMouseOver()"
      onmouseout="swimgOnMouseOut()">
          	<h2 class="animated wow fadeInUp">S/W Development</h2>
            <!--<b class="fa fa-desktop wow animated zoomIn"></b>-->
            <img src="img/computer.png" id="software" class=" wow animated zoomIn"/>
            <p class="text-justify animated wow fadeInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text.</p>
            <a href="sw_dev.php" class="animated wow fadeInDown">Know more ...</a>
          </div><!--col-md-3-->
          
          <div class="col-md-3 text-center" onmouseover="webimgOnMouseOver()"
      onmouseout="webimgOnMouseOut()">
          	<h2 class="animated wow fadeInUp">Web Development</h2>
            <!--<b class="fa fa-globe wow animated zoomIn"></b>-->
            <img src="img/globe.png" id="web" class="wow animated zoomIn"/>
            <p class="text-justify animated wow fadeInDown">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text.</p>
            <a href="web_dev.php" class="animated wow fadeInDown">Know more ...</a>
          </div><!--col-md-3-->
          
       </div><!--row-->
   </div><!--.container-->       
   
   
   <!--------footer------------>
   <?php include'footer.php';?>
  
    
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>   
    <script src="js/jquery.nav.js" type="text/javascript"></script> 
    <script src="js/respond.min.js" type="text/javascript"></script>
   
   <!-- Image hover on index page------>
   <script src="js/hover.js" type="text/javascript"></script> 
    <!--slider js-->
    <script src="js/responsive-slider.min.js" type="text/javascript"></script>
    <script src="js/jquery.event.move.js" type="text/javascript"></script>
    
    <!--wow js-->
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script src="js/wow.js" type="text/javascript" ></script>
	<script type="text/javascript" src="js/custom.js"></script>
   
 
</body>
</html>