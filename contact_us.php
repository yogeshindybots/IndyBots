<?php
    ob_start();  
?>


<?php
    session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>IndybBots Technologies | Contact Us</title>	
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
</head>
<body oncontextmenu="return false"><!---->
	  <header>
  	<nav class="navbar navbar-default navbar-fixed-top">
    	<div class="container">
          <a href="index.php" class="pull-left"><img src="img/logo.png" class="img-responsive logo"></a>

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
                    <li class="">
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
                    <li class=" active">
                    	<a href="contact_us.php">Contact Us</a>
                    </li>    
                </ul>
            </div><!--.collapse-->
        </div><!--.container-->
    </nav>
  </header> 

  <div class="section_heading contact_head">
	<div class="container">
    	<div class="col-md-5 pull-left">
	    	<h2>Contact Us</h2>
        </div><!--col-md-6-->
        <div class="col-md-4 pull-right">
        	<ol class="breadcrumb text-right">
            	<li><b><a href="index.php">Home</a></b></li>  
                <li class="active"><a href="#">Contact Us</a></li>           
            </ol>
        </div><!--col-md-4-->
    </div><!--.contianer-->  
  </div><!--section_heading-->
  
  <div class="section_content">
  	<div class="container">
	  	<div class="col-md-8 animated wow fadeInLeft">
    		<h3>Your Message</h3>
            <form name="contact_form" method="post"  role="form">
                	<div class="form-group">
	                	<input name="usr_name" type="text" class="form-control" pattern="^([a-z]|[A-Z])+\s?([a-z]|[A-Z])+?$"  onchange="try{setCustomValidity('')}catch(e){}" required data-validation-required-message="Please enter your name." placeholder="Your Name *">
    				</div>
                    <div class="form-group">
	                	<input name="usr_email" type="email" class="form-control" pattern="^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$" onChange="try{setCustomValidity('')}catch(e){}" required data-validation-required-message="Please enter your email." placeholder="Your Email *">
    				</div>
                    <div class="form-group">
	                	<input name="usr_phone" type="tel" class="form-control" placeholder="Your Contact No. *" pattern="(?:\+?\d[91]-)?(?:\d{3}-)?\d{10}" oninvalid="setCustomValidity('Plz enter valid mobile number')" onChange="try{setCustomValidity('')}catch(e){}" required data-validation-required-message="Please enter mobile number.">
    				</div>
                    <div class="form-group">
	                	<input name="usr_sub" type="text" class="form-control" placeholder="Subjcet">
    				</div>
                    <div class="form-group">
	                	<textarea name="usr_msg" class="form-control" style="height:100px;" required placeholder="Your Name *"></textarea>
    				</div>
                    <div class="form-group">
                            	<img src="captcha.php" id="captcha" /><br/>


<!-- CHANGE TEXT LINK -->
<a onclick="
    document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br/><br/>
						

<input type="text" class="form-control" name="captcha" id="captcha-form" required autocomplete="off" /><br/>

                            </div>
                    <button name="submit" type="submit" class="btn button">Submit &nbsp;<i class="fa fa-arrow-circle-o-right"></i></button>
                </form>
    	</div><!--col-md-8-->
        
        <div class="col-md-3 pull-right contact_details">
            	<h3 class="animated wow fadeInRight">Contact Details</h3>
                <div class="pull-left animated wow fadeInRight">
                	<b class="fa fa-home pull-left"></b>
                	<p class="pull-left text-justify"> IndyBots Technologies,<br />
					Marigold Lane, Veerbhadra Nagar,<br />
					Baner, Pune - 411045.</p><br />
                </div>
                
                <div class="pull-left animated wow fadeInRight">
                	<b class="fa fa-phone pull-left"></b>
                    <p class="pull-left"> +91 9960203965, 8976404421</p>
                </div>
                
                <div class="pull-left animated wow fadeInRight">
                	<b class="fa fa-envelope pull-left"></b>
                    <p class="pull-left"> &nbsp;think@indybots.in &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                </div><br />

                <div class="pull-left animated wow fadeInRight">
                	<b class="fa fa-globe pull-left"></b>
                    <a class="pull-left" href="http://www.indybots.in" target="_blank" style="color:#333333;"> &nbsp;www.indybots.in</a>
                </div><br />
                     
            </div><!--col-md-3-->
            
    </div><!--container-->
  </div><!--section_content-->
  
  <div class="container">
  	<div class="row">
    	<div class="social text-center">
        <ul class=" list-inline list-unstyled  animated wow fadeInUp">
            <li><a href="https://www.facebook.com/indybotstech" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>             
            <li><a href="https://plus.google.com/108441422037102225378" target="_blank" class="google_plus"><i class="fa fa-google-plus"></i></a></li> 
        	<li><a href="#" target="_blank" class="twitter_icon"><i class="fa fa-twitter"></i></a></li> 
            <li><a href="#" target="_blank" class="you_tube"><i class="fa fa-youtube"></i></a></li>
        </ul>
    </div><!--social-->
    </div><!--row-->
  </div><!--container-->	
  
  <div class="container-fluid animated wow fadeInUp" style="padding:0px;">
  	<div id="map-canvas" style="height:350px; padding:0px; margin:0px;"></div>
  </div><!--container-fluid-->	
  
	<footer class="text-center">
		<div class="container">
        	<div class="row">
		    	<p>Copyright &copy; 2014 IndyBots Technologies</p>
            </div>
        </div>
   </footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&extension=.js&output=embed"></script>
    <script src="js/scripts.js"></script>
        
	<script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>   
    <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>   
    <script src="js/jquery.nav.js" type="text/javascript"></script> 
    <script src="js/respond.min.js" type="text/javascript"></script>
    
    <!--slider js-->
    <script src="js/responsive-slider.min.js" type="text/javascript"></script>
    <script src="js/jquery.event.move.js" type="text/javascript"></script>
    
    <!--wow js-->
	<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
    <script src="js/wow.js" type="text/javascript" ></script>
	<script type="text/javascript" src="js/custom.js"></script>  
  
   <?php			
if(isset($_POST['submit']))
{
	if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
        $captcha_message = "Invalid captcha";
        $style = "background-color: #FF606C";
    } else {
    
        $name = $_POST['usr_name'];
        $email = $_POST['usr_email'];
		$phone = $_POST['usr_phone'];
		$subject = $_POST['usr_sub'];
	    $message = $_POST['usr_msg'];
        $sSendTo = 'patil.rahul962@gmail.com';
        $sBuffer = "-------------------- You have got message from ".$name." --------------------\n\n".
           
		   "Full Name   : $name\n\n".
           "Email       : $email\n\n".
		   "Phone		: $phone\n\n".
		   "Subject		: $subject\n\n".
           "Message   	:  $message\n\n";
		  
	   mail($sSendTo, "You have got message from $name", $sBuffer, "From: $name\r\nReply-To: $email\r\n");
       echo '<script type="text/javascript">alert("Message Sent Successfully!");</script>'; 
        //header('Location:contact.php');
 }
}
?>   