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
		<img src="image/bigdata1.jpg" alt="">
</div>
<section>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="bigdata">
					<h1>Big Data Analytics with Hadoop </h1>
					<p>
						<strong>Big Data</strong><br>
is a buzz word, used to denote huge volume of both structured and unstructured data. It is difficult to deal with Big Data by using traditional database and software techniques. Big Data has such potential that helps companies to improve their business 
						operations and to enhance faster, more intelligent decision.</p>
<p><strong>Hadoop</strong><br>
is known as an open source, Java-based programming framework that supports the processing and storage of Big Data in a 
distributed computing environment, sponsored by Apache Software Foundation. Hadoop has quickly emerged as a foundation for Big Data processing task. Hadoop enables distributed parallel processing of huge amounts of data across inexpensive, 
industry-standard servers that store and process the data simultaneously and can scale the data without limits. 
					</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="big2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Our Team to Deal Big Data</h2>
				<p>We employ a team of experienced and well-versed Big Data Engineer, Data Scientist, Data Analyst, Quality Assurance Engineer, Data Architect Engineers, Hadoop Engineers to meet our client’s requirement and big-budget project.</p>
			</div>
		</div>
	</div>
</section>
<section class="big3">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="head">
					<h2>Team BrioTech Excels in</h2>
					<ul>
						<li>Processing of Structured & Unstructured Data</li>
						<li>Predictive & Descriptive analysis</li>
						<li>Data Governance</li>
						<li>Enterprise Data Hub (Hadoop)</li>
						<li>HDFS (Hadoop Distributed File System) Framework</li>
						<li>MapReduce Framework</li>
					</ul>
					<ul>
						<li>Hadoop2.x Architecture</li>
						<li>Setting up Hadoop Cluster</li>
						<li>Complex MapReduce Program</li>
						<li>Data Loading by Sqoop & Flume</li>
						<li>Data analytics Using Pig, Hive, Yarn</li>
						<li>Hbase & MapReduce Integration</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="big_back">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="big_text">
					<p>Our team of Big Data Analysts and Hadoop Engineers apply the best practices for Hadoop Development by building powerful data analytics engine which can process analytics algorithms over a large-scale dataset in an accessible manner. </p>
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