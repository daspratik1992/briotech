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
		<img src="image/desktop.jpg" alt="">
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="desktop">
					<h1>Desktop Application Development</h1>
					<p>
						<strong>Improve Productivity of Your Team by Our Modern Desktop Application. </strong><br>
BrioTech specialized in the modernizing system by minimizing your cost concurrently.  Manifest desktop app development to simplify all your business process with Team BrioTech. The desktop application will be built according to your business requirements. Your vision is transformed into reality here. Speed up your business operations by having customized desktop applications availed by our team.</p>
<h3><strong>BrioTech offers an array of Desktop Application Services including</strong><br></h3>
			<ul>
				<li>Java Based Desktop Application</li>
				<li>ASP based Desktop application</li>
				<li>Integrating Desktop & Web Application</li>
				<li>Desktop Software Management</li>
				<li>Desktop to Web Software Migration</li>
				<li>Desktop Application Designing</li>
			</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="desktop1">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Desktop Application Testing</h2>
				<p>We offer a range of application testing methods facilitates by our of QA Test Professionals concerning desktop application developed by us, including:</p>
				<ul>
						<li>Functional Testing</li>
						<li>Performance Testing</li>
						<li>Usability Testing</li>
						<li>Compatibility Testing</li>
						<li>Multi-language Support</li>
						<li>Installation Testing</li>
					</ul>
					<ul>
						<li>Load Testing</li>
						<li>Stress Testing</li>
						<li>Regression Testing</li>
						<li>Exploratory Testing</li>
						<li>User Acceptance Testing</li>
						<li>Database Testing</li>
					</ul>
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