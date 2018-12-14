<?php
include_once("login_dbo.php");

if(!isset($_SESSION['email'])){
	header("Location:login.php");
}
?>

<!-- after login show this page -->

<!DOCTYPE HTML>
<html>
<head>
<title>Joy Bangla</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Politics Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel="stylesheet" type="text/css">
<!-- Custom Theme files -->
<link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<script src="js/jquery.min.js"> </script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--/script-->
<link href='//fonts.googleapis.com/css?family=Hammersmith+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Libre+Baskerville:400,400italic,700' rel='stylesheet' type='text/css'>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
</head>
<body>
	<div class="header" id="home">
		<div class="content white">
			<nav class="navbar navbar-default" role="navigation">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index_In.php">Joy Bangla</a>
			</div>
			<!--/.navbar-header-->
		
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
						<li class="active"><a href="">Home</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">The Party<b class="caret"></b></a>
							<ul class="dropdown-menu multi-column columns-2">
								<div class="row">
									<div class="party">
										<ul class="multi-column-dropdown">
											<li><a href="#">History</a></li>
											<li class="divider"></li>
											<li><a href="#">Photo Gallery</a></li>
										</ul>
									</div>
								</div>
							</ul>
						</li>
						
						<li><a href="#">Contact</a></li>
						<li><a href="login_dbo.php?logout='1'">
                            <?php if(isset($_SESSION['email'])) echo $_SESSION['email']." "?>Logout
				        </a></li>
				</ul>
				
			</div>
				<!--/.navbar-collapse-->
				<!--/.navbar-->
			</div>
			</nav>
		</div>
    </div>
    <br />
    <div class="container">  
        <h4 align="center"> User List </h4><br />  
        <div class="table-responsive">  
            <div class="col-md-12" align="right">
                <form method="post" action="pdf.php">  
                    <input type="submit" name="generate_pdf" class="btn btn-success" value="Report" />  
                </form>
            </div>
            <br/>
            <br/>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="5%">Id</th>
                        <th width="30%">Name</th>
                        <th width="15%">Phone</th>
                        <th width="30%">Email</th>
                    </tr>
                </thead>
                <?php
                include_once("config.php");
                $result = mysqli_query($con,"SELECT* FROM login");
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['phone'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "</tr>";
                }
                mysqli_close($con);
                ?>
            </table>
        </div>
    </div>
    
 <!--/start-footer-section-->
			<div class="footer-section">
			   <div class="container">
					<div class="footer-grids">
						<div class="col-md-4 footer-grid">
						<h4>EDITOR PICKS</h4>
						  <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/joy-2ed.jpg" class="img-responsive" alt=""/>

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Nov 22, 2018</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 <div class="editor-pics">
							 <div class="col-md-3 item-pic">
							   <img src="images/obaidul quader.jpg" class="img-responsive" alt=""/>

							   </div>
					   	        <div class="col-md-9 item-details">
							    	<h5 class="inner"><a href="#">More Than 120 ER Visits Linked To Synthetic WordPress In NYC...</a></h5>
								      <div class="td-post-date">Nov 22, 2018</div>
							     </div>
								<div class="clearfix"></div>
							</div>
							 
						</div>
						<div class="col-md-4 footer-grid">
							<h4>About Politics</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Mission</a></li>
									<li><a href="#">Organization</a></li>
									<li><a href="#">Our Achievements</a></li>
									<li><a href="#">Literature</a></li>
									<li><a href="#">Our Inspiration</a></li>
									<li><a href="#">Inc Sessions</a></li>
								</ul>
						</div>
						<div class="col-md-4 footer-grid">
								<h4>MEDIA RESOURCES</h4>
								<ul class="td-pb-padding-side">
									<li><a href="#">Speeches</a></li>
									<li><a href="#">Public Forum</a></li>
									<li><a href="#">Photo Gallery</a></li>
									<li><a href="#">Books and Monographs</a></li>
								</ul>
								<div class="clearfix"></div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
	<!--//end-footer-section-->
			<!--/start-copyright-section-->
				<div class="copyright">
					<p>&copy; 2018 Joy Bangla. All Rights Reserved</p>
				</div>


				<!--start-smoth-scrolling-->
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
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>


<!--JS-->
  <script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

<!--//JS-->

</body>
</html>