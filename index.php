<!DOCTYPE HTML>
<?php
if(isset($_GET['err'])){
    if ($_GET['err']=="sent") {
        echo '<script>
            alert("We will contact you shortly!!");
        </script>';
    }
}
?>
<html>
<head>
<title>tecvit.in</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta charset="utf-8" />
		<meta name="language" content="en-us"/>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="description" content="TEC,the electronics club - VIT university,vellore WEBSITE. DEVELOPED BY- MUKUL DEV(DEVMUKUL44@GMAIL.COM)," />
		<meta name="keywords" content="TEC,the electronics club,tec-vit,tecvit,tecvit.in,VIT university VELLORE,VIT VELLORE,MUKUL DEV,DEVMUKUL44@GMAIL.COM,MUKUL.DEV@OUTLOOK.COM,mukul.dev2013@vit.ac.in,MUKUL DEV VIT,MUKUL DEV VIT VELLORE,DEVMUKUL44, Web Designing" />
		<meta name="distribution" content="Global" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="1 days"/>
		<meta name="publisher" content="TEC(the electronics club), VIT VELLORE, MUKUL DEV ," />
		<meta name="copyright" content="TEC-VIT 2016"/>
<link rel="icon" type="image/png" href="images/icon.png">
<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
<script src="js/jquery.min.js"></script>

<script>

function validate()
{
if(document.form1.fname.value == "Firstname*")
{
alert( "enter FirstName");
document.form1.fname.focus() ;
return false;
}
else if(document.form1.lname.value == "Lastname*")
{
alert("enter LastName");
document.form1.lname.focus() ;
return false;
}
else if(document.form1.email.value == "Email*")
{
alert("enter Email");
document.form1.email.focus() ;
return false;
}
else if(document.form1.message.value == "MESSAGE")
{
alert("enter Querry or Comment!");
document.form1.message.focus() ;
return false;
}
}

</script>

<script type="text/javascript">
			<!-- script-for-portfolio -->
						jQuery(document).ready(function($) {
							$(".scroll").click(function(event){		
								event.preventDefault();
								$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
							});
						});
					</script>					
				<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
				<script type="text/javascript">
						$(function () {
			
							var filterList = {
			
								init: function () {
				
					// MixItUp plugin
					// http://mixitup.io
					$('#portfoliolist').mixitup({
						targetSelector: '.portfolio',
						filterSelector: '.filter',
						effects: ['fade'],
						easing: 'snap',
						// call the hover effect
						onMixEnd: filterList.hoverEffect()
					});				
				
				},
				
				hoverEffect: function () {
				
					// Simple parallax effect
					$('#portfoliolist .portfolio').hover(
						function () {
							$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
							$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
						},
						function () {
							$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
							$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
							}		
						);				
				
					}

				};
			
				// Run the show!
				filterList.init();
			});	
			</script>
			<!-- script-for-portfolio -->
			<!-- pop-up-box -->
			<script type="text/javascript" src="js/modernizr.custom.min.js"></script>
				<script src="js/jquery.magnific-popup.js" type="text/javascript"></script> 
			<script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>
				<!-- pop-up-box -->
				<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
</head>
<body>
<!-- header -->
	<div class="banner">
		<div class="header" >
			<div class="container">
				<div class="logo">
			<!--		<a href="#"><img src="images/teclogo1.png" alt="" /></a>
					<p style="color:grey; font-size: 25px"><b>THE ELECTRONICS CLUB</b><p>
			-->
				</div>
				<div class="menu" >												
					<a href="#" class="right_bt" id="activator"><img src="images/menu.png" alt=""/></a>
						<div class="box" id="box">
							<div class="box_content">
							   <div class="menu_box_list">
								   <ul>
									   <li class="active"><a href="#home" class="scroll">home</a></li>
										<li><a href="#about" class="scroll">About us</a></li>
										<li><a href="#services" class="scroll">Projects</a></li>
										<li><a href="#portfolio" class="scroll">Events</a></li>
										<li><a href="#contact-us" class="scroll">Contact us</a></li>
										<li><a href="https://www.facebook.com/tec.vit" target="_blank">Follow us: <img src="images/black_facebook.png" alt="facebook page" width="5%" height="5%"></a>
									</ul>
								</div>
								<a class="boxclose" id="boxclose"><img src="images/close.png" alt=""/></a>
							</div>                
						</div>
						<script type="text/javascript" src="js/easing.js"></script>
							 <script type="text/javascript">
									var $ = jQuery.noConflict();
										$(function() {
											$('#activator').click(function(){
													$('#box').animate({'top':'0px'},500);
											});
											$('#boxclose').click(function(){
													$('#box').animate({'top':'-700px'},500);
											});
										});
										$(document).ready(function(){
										
										//Hide (Collapse) the toggle containers on load
										$(".toggle_container").hide(); 
										
										//Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
										$(".trigger").click(function(){
											$(this).toggleClass("active").next().slideToggle("slow");
											return false; //Prevent the browser jump to the link anchor
										});
										
										});
									</script>
				</div> 
					<div class="clearfix"> </div>				
			</div>			
		</div>

							  <script defer src="js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script> 
						
		<div class="info">
			<div class="container" style="position:relative">
			<br><br><br><br>
			<a href="#"><img src="images/teclogo1.png" alt="" /></a>
			<hr style="width:55%;height:3px;background-color:white">
				<p style="color:grey; font-size: 40px"><b>THE ELECTRONICS CLUB</b><p>
				<hr style="width:35%;height:3px;background-color:white;">
				<br><br><br>
						 <div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
					<li>
					<p style="color:white; font-size:30px"><b>TECHNICAL&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><p>
					</li>
					<li>
					<p style="color:white; font-size:30px"><b>ELECTRONICS&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><p>
					</li>
					<li>
					<p style="color:white; font-size:30px"><b>COMPUTER SCIENCE&nbsp&nbsp&nbsp&nbsp&nbsp</b><p>
					</li>
					</ul>
				</div>
			</section>
		</div> 
					<a class="work scroll" href="#contact-us">Register</a>
			<!--	<a class="hire" href="#contact-us">Register</a> -->
			<br><br><br><br>
 			</div>
		</div>
	</div> 
<!-- header -->	
<!-- ourstory -->
<div class="ourstory" id="about">
	<div class="container">
		<div class="col-md-12">
			<h2>OUR <span>STORY</span></h2>
			<p>
			<i>It was founded by Akash Kashyap , Mayank Prasad and Saurabh Kabra on 9th March 2012..</i><br> The Electronics Club of VIT provides a platform for students who are solely interested in electronics.The club is intended to complement the study of electronics by organizing exhilarating theoretical as well as Hands-on sessions for the students and paid projects for the core committee members in association with the SENSE. There are 50 core members and what binds us all together is our love for electronics. The smooth working of the club is owed to the regular meetings held to discuss the ongoing activities of the club members. Seniors in here mentor the juniors and provide them with assistance and encouragement and juniors work hard to strive for excellence. Knowledge sessions are held for the club members by the club members to improve and update their aptitude for electronics. As its true that all work and no play makes jack a dull boy, so the club members keep organizing small parties and trips to strengthen the bond between its members since there is no scope for friction in a team.		</div>
			</p>
		<div class="ourstory-1">
	<!--	<div class="col-md-6">
		<h6>"All our dreams can come true, if we have the courage to pursue them."</h6>
		</div>
		-->
			<div class="clearfix"> </div>
			<img src="images/tecfamily.jpg" class="img-responsive" alt="" />
		</div>	
	</div>
</div>	
<!-- ourstory -->	
<div class="ourservices" id="services">
	<div class="container">
		<div class="col-md-12">
			<h2>OUR <span>PROJECTS |</span></h2>
		</div>
			<div class="clearfix"> </div>
		<div class="col-md-6">
<!--			<div class="icons">
				<i class="bed"> </i>
			</div>
-->
				<div class="icon-data">
				<a href="old/orn.html" target="_blank">
				<img src="old/pro/unnamed.jpg">
				</a>
					<h5><a href="old/orn.html" target="_blank">ORNITHOPTER</a></h5>
					</a>
					<p><i>By- Sarthak Dubey, Rohan Kamra, Lavin Khandelwal, Shriya Agrawal, R.Mukundan,Hemant Kumavat(External Consultant).</i><br>

Ornithopter is an aircraft which flies using flapping of wings as opposed to normal aircrafts which have fixed wings or helicopters which have rotating blades. The ornithopter .</p>
				</div>
					<div class="clearfix"> </div>
		</div>
		<div class="col-md-6">
<!--			<div class="icons">
				<i class="lcd"> </i>
			</div>
-->
				<div class="icon-data">
				<a href="old/gest.html" target="_blank">
				<img src="old/pro/gest.jpg" height="80%" width="80%">
				</a>
					<h5><a href="old/gest.html" target="_blank">HAND GESTURE RECOGNITION</a></h5>
					</a>
					<p><i>By- Yuvraj Singh Rathore, Charvi Mittal, Arpit Sethi, Pulkit Khandelwal.</i><br>

This project aims at using image processing to recognize and display the letters made using hand gestures. Image processing is a form of signal processing in which the input is an .

</p>
				</div>
					<div class="clearfix"> </div>
		</div>
	
	</div>
</div>
	<!-- portfolio -->
<div class="our-work-section" id="portfolio">
		<div class="container">
		 
			<div class="our-work-section-head ">
				  <h3>OUR <span>EVENTS |</span></h3>
			</div>
				<ul id="filters" class="clearfix">
							<li><span class="filter active" data-filter="g14 g15 g13">All</span></li>
							<li><span class="filter" data-filter="g15">Gravitas 2015</span></li>
							<li><span class="filter" data-filter="g14">Gravitas 2014</span></li>
							<li><span class="filter" data-filter="g13">Gravitas 2013</span></li>
							</ul>
						<div id="portfoliolist">
						<div class="portfolio g14 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g14" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog2" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/thenextceo.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>				
						<div class="portfolio g15 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g15" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog3" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/sensored2_r.jpg" class="img-responsive"  alt=""/><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>		
						<div class="portfolio g14 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g14" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog4" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/dip.jpg" class="img-responsive"  alt=""/><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>				
						<div class="portfolio g14 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g14" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog5" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/electropedia14_r.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>
						<div class="portfolio g13 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g13" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog6" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/edu.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>
						<div class="portfolio g13 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g13" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog8" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/brand_r.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>
						<div class="portfolio g13 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g13" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog9" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/electropedia13.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>
						<div class="portfolio g15 mix_all  wow bounceIn" data-wow-delay="0.4s" data-cat="g15" style="display: inline-block; opacity: 1;">
							<div class="portfolio-wrapper">		
								<a href="#small-dialog7" class="b-link-stripe b-animate-go  thickbox play-icon popup-with-zoom-anim">
								 <img src="images/electropedia15_r.jpg" class="img-responsive" alt="" /><div class="b-wrapper"><h5 class="b-animate b-from-left    b-delay03 "><img src="images/cross.png" class="img-responsive" alt=""/></h5>
								<p class="b-animate b-from-right    b-delay03 "></p></div></a>
							</div>
						</div>						
							<div class="clearfix"></div>					
					</div>
		</div>		<div class="clearfix"></div>
	</div>
			  <!-- script-for-portfolio -->
				<!-- Gallery Script Ends -->
			<div id="small-dialog2" class="mfp-hide">
				<div class="image-top">
					<img src="images/thenextceo.jpg" alt=""/>
					<p>Ever thought of starting your own company and getting away from the boring 9 to 5 Job. Ever
wondered what it takes to become the Next Big Thing on this planet?
Well here is your chance to learn from the leaders of the Startup Industry to get your Idea into a Product.
So, come and join us to get your entrepreneurial journey started. Get to know what it takes to mould a raw idea and get a company started out of it.
An interactive session by the CEOs of the Companies. An awesome chance to interact with the CEOs and network. </p>
				</div>
				<a href="https://www.facebook.com/events/1480051432261227/" target="new"><img src="images/fb_btn.png" alt="facebook page"></a>
			</div>
			<div id="small-dialog3" class="mfp-hide">
				<div class="image-top">
					<img src="images/sensored2.jpg" alt=""/>
					<p>A perfect start for exploring the field of embedded systems & sensor interfacing.<br>
					<pre>
<strong>Course itinerary:</strong>
->Basics of microcontrollers 
->programming on -ARDUINO
->familiarity with EMBEDDED-C
->Interfacing 6 Sensors on the Micro-controller
->Take-a-way kits(comprises all the necessary components)</pre></p>
	</div>	
<a href="https://www.facebook.com/events/921109357960124/" target="new"><img src="images/fb_btn.png" alt="facebook page"></a>
			</div>
			<div id="small-dialog4" class="mfp-hide">
				<div class="image-top">
					<img src="images/dip.jpg" alt=""/>
					<p>DIGITAL IMAGE PROCESSING workshop this graVITas'14!
THIS graVITas, Come and play with the tiny pixels and process your own images.Unravel the world of Image Processing to analyze and recreate your own experience of images with the technical edge to it.</p>
				</div>
			</div>
			<div id="small-dialog5" class="mfp-hide">
				<div class="image-top">
					<img src="images/electropedia14.jpg" alt=""/>
					<p>Electropedia: Anything & Everthing about Electronics. 
It's a quiz contest conducted by The Electronics Club of VIT during GraVITas. </p>
				</div>
				<a href="https://www.facebook.com/Electropaedia" target="_blank"><img src="images/fb_btn.png" alt="facebook page"></a>

			</div>
			<div id="small-dialog6" class="mfp-hide">
				<div class="image-top">
					<img src="images/edu.jpg" alt=""/>
					<p>This was the chance we gave participants to redefine the perception of an ideal college as per their accord. Manage their own college, make their own rules, attract students, get accreditations and be the country’s best EDUCATIONAL TYCOON!! Universities are increasingly facing a double-sided pressure: to be innovative with a specific organizational mission while at the same time being an integrated part of a growing, and highly interconnected, internationalized and standardized higher education ‘industry’. </p>
				</div>
				<a href="old/edu.html" target="_blank">MORE INFO</a>
			</div>
			<div id="small-dialog8" class="mfp-hide">
				<div class="image-top">
					<img src="images/brand.jpg" alt=""/>
					<p>BRAND DETECTIVE a three round event based on identification of brands .First round being the elimination round was a written quiz consisting of around 25 easy to medium level questions and top one fourth participants were asked to proceed to next round . Second round was an audio-visual round ‘GET THE QUESTION ‘ with a miscellaneous group of questions asked on identification of tunes, ppt. pop ups.... </p>
				</div>
				<a href="old/brand.html" target="_blank">MORE INFO</a>
			</div>
			<div id="small-dialog9" class="mfp-hide">
				<div class="image-top">
					<img src="images/electropedia13.jpg" alt=""/>
					<p>A three round quiz based on electronics .
Round 1- GENERAL QUIZ:
10-15 easy to medium level questions related to electronics were asked in MCQ format and one-fourth of the participants were forwarded to next round. .
Round 2- BRICK BREAKER
A mysterious picture related to electronics was hidden behind 9 bricks. Participants were asked to break bricks numbered from 1 to 9.Teams which identified the picture correctly.... </p>
				</div>
				<a href="old/electro.html" target="_blank">MORE INFO</a>
			</div>
			<div id="small-dialog7" class="mfp-hide">
				<div class="image-top">
					<img src="images/electropedia15.jpg" alt=""/>
					<p>Electropedia is an electronics quiz which has been conducted successfully for the past 2 years. It is the trademark event of TEC. It will be a full day quiz event, comprising of 3 rounds. </p>
				</div>
				<a href="https://www.facebook.com/events/132106867129472/" target="new"><img src="images/fb_btn.png" alt="facebook page"></a>
				<div class="info">
		</div>
			</div>
			<div class="container">
			<a href="old/events.html" target="new">
			<center>
			 <button class="btn btn-lg btn-info btn-block" type="button">MORE EVENTS</button>
			 </center>
			 </a>
			 <br><br><br>
			 </div>

<!-- portfolio -->
<!-- contact -->
<div class="hello" id="contact-us">
	<div class="container">
		<div class="col-md-4">
			<h3>SAY <span>HELLO | </span></h3>
		</div>
		<div class="col-md-8">
			<h6> Do you have any project</h6>
		</div>
			<div class="clearfix"> </div>
				<p>We are trying to provide an education that results in understanding and sharing with others . Our motto is to impart practical approach along with theoretical knowledge gained in classes. We being a non-profit organization have always conducted free theory and hands-on sessions on various topics related to electronics. TEC has a functioning core committee of its own which is formed on the basis of the performances in core committee selections .In the course of almost one and half year , we have organized several hands-on sessions related to basic electronic components and their usage.</p>
				<div class="say">	
					<div class="col-md-5">
						<div class="icon">
							<i class="addres"> </i>
						</div>
						<div class="icon-data1">
							<h5>address</h5>
							<p>VIT University,Vellore</p>
						</div>
							<div class="clearfix"> </div>
						<div class="icon">
							<i class="phone"> </i>
						</div>
					<!--	<div class="icon-data1">
							<h5>PHONE NUMBER</h5>
							<p>99 88888 777 666  |  012345678</p>
					-->
						<div class="icon-data1">
						<h5>PHONE NUMBER</h5>
						<p>9629782443 | 9787114179 </p>
						</div>	
							<div class="clearfix"> </div>
						<div class="icon">
							<i class="mail"> </i>
						</div>
						<div class="icon-data1">
							<h5>EMAIL</h5>
							<p>info@tecvit.in <br>dev@tecvit.in</p>
						</div>
							<div class="clearfix"> </div>			
					</div>
				<div class="col-md-7">
					<form name="form1" onsubmit="return validate();" action="contactform_mail.php" method="post" >
							<span class="text-field-firstname">
								<input type="text" name="fname" value="Firstname*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Firstname*';}">
							</span>
							<span  class="text-field-lastname">
								<input type="text" name="lname" value="Lastname*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Lastname*';}">
							</span>
							<span  class="text-field-email">
								<input type="text" name="email" value="Email*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email*';}">
							</span>
							<span class="text-field-name">
								<input type="text" name="pname" value="Project name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Project name';}">
							</span>
						<span class="text-field-area">
								<textarea name="message" value="MESSAGE" onfocus="if(this.value == 'MESSAGE') this.value='';" onblur="if(this.value == '') this.value='MESSAGE';">MESSAGE</textarea>
						</span>
						<span class="button">
								<input type="submit" value="submit">
						</span>
					</form>
							<div class="clearfix"> </div>
				</div>
						<div class="clearfix"> </div>
				</div>
				<div class="bottom">

					<p style="text-align: right;">
					Copyright © 2015 <a href="http://www.tecvit.in">The Electronics Club - "TEC VIT"</a> <br>
					Developed by <a href="https://www.facebook.com/devmukul44" target="_blank"> Mukul Dev</a></p>
				</div>
				<div class="clearfix"> </div>
				</div>
	</div>
	<div class="clearfix"> </div>
				</div>
</div>
<div class="clearfix"> </div>
				</div>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- contact -->
<div class="clearfix"> </div>
				</div>
	
</body>
</html>