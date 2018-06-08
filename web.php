<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>BrioTech</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen navigation and sections control menu." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
	<meta name="Resource-type" content="Document" />


	<link rel="stylesheet" type="text/css" href="css/jquery.fullPage.css" />
	<link href="css/slicknav.css" type="text/css" rel="stylesheet"/>
	<link href="css/responsive.css" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
	<!--<link rel="stylesheet" type="text/css" href="css/examples.css" />-->
	<link href="css/style1.css" type="text/css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<script src="js/jquery-1.11.3.min.js"></script>
	<!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>-->

	<!--<script type="text/javascript" src="file:///C|/Users/Pratik Das/Downloads/fullPage.js-master/fullPage.js-master/vendors/scrolloverflow.js"></script>-->

	<script type="text/javascript" src="js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="js/examples.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="js/jquery.slicknav.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['firstPage', 'secondPage', '3rdPage',],
				sectionsColor: ['#C63D0F', '#1BBC9B', '#fff'],
				navigation: true,
				navigationPosition: 'right',
				navigationTooltips: ['First page', 'Second page', 'Third page',]
			});
		});
	</script>

</head>
<body>
<section class="headtop">
    	<div class="container">
        	<div class="row">
            	<div class="col-lg-4 col-md-4 col-sm-4">
                	<div class="logo">
                    	<a href="#"><img src="image/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
               		<ul class="topnav" id="myTopnav">
                     <a href="index.html">Home</a>
                    <a href="about.html">About us</a>
                    <a href="#">Leadership</a>
                    <a href="service.html" class="active">Service</a>
                    <a href="contactus.html">contact Us</a>
					<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
                </ul>
                </div>
            </div>
        </div>
    </section>
    <div class="banner">
		<img src="image/web.jpg" alt="">
</div>
<section class="weeb">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="web">
					<h1>Web Application Development</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="web_text">
					<p>We build Web Application that sets new trend. Our team of web developers is specialized in all trending domains of web application development with mind-blowing idea and techniques. Our web app developers are well versed in AngularJS framework, Backbone.JS framework and in Node.JS Development to implement expressive and dynamic web application with code enriched in function. BrioTech is going to be the 
ultimatum of advanced web app evelopment services.</p>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="web_img">
					<img src="image/web_img.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="web2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>We develop world-class web application development services including </h2>
			</div>
			<div class="web_part">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>E-Commerce Web App Development</h3>
<p>We are specialized in developing e-commerce centric web 
application that make your presence vibrant in the realm of online marketing to excel your retail business. </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>Custom Web Application Development </h3>
<p>Under this service, our aim is to customize the web application according to the requirements of our clients in the most 
innovative way.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>Backbone.JS Development</h3>
<p>Our team is well-versed in backbone.js development that helps us to code, rich in function and to enhance advance web 
application development. </p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>AngularJS Development</h3>
<p>Our team of web developers are expert in Angular JS Framework to facilitate you with trending, expressive and dynamic web application.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>Node.JS Development</h3>
<p>You will be provided lightweight web applications with Node.JS Development framework at BrioTech. We deliver superb 
performance in this genre.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>Enterprise Web Based Application Development</h3>
<p>BrioTech uses the trending and well-known strategies to develop the incredible web application e.g. for miscellaneous web based application.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h3>Application Maintenance and Enhancement</h3>
<p>We believe in deploying changes. Every business should deploy changes at times. One of the prime motives of our team is always to stay focused on maintenance and enhancement of web application we developed.sss</p>
				</div>
			</div>
		</div>
	</div>
</section>
<footer class="footer1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
					©2018 BrioTech Consulting Inc. All Rights Reserved.
			</div>
		</div>
	</div>
</footer>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>