<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title>Silicon Diary</title>
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="assets/css/styles.css" rel="stylesheet"/>
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){

         $("#myCarousel").carousel();

    });

    </script>
</head>
<body>
	<div class="container main">
		<div class="row">
			<div class="col-md-2">
				<div class="wrap">
					<h1 class="header"><a href="index.php"><img src="assets/images/logo.png"/><img src="assets/images/logo2.png"/><p class="caption">Website Development</p></a></h1>
					<hr class="bar">
					<hr class="bardown">
					<nav class="navbar navbar-default mainnav" role="navigation">
					  <!-- Brand and toggle get grouped for better mobile display -->
					  <div class="navbar-header">
					    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					      <span class="sr-only">Toggle navigation</span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					      <span class="icon-bar"></span>
					    </button>
					    <!-- <a class="navbar-brand" href="#">Brand</a> -->
					  </div>

					  <!-- Collect the nav links, forms, and other content for toggling -->
					  <div class="collapse navbar-collapse navbar-ex1-collapse">
					    <ul class="nav navbar-nav mainnavul">
					      <li><a class="active" href="#">Home</a></li>
					      <li><a href="aboutus.php">About Us</a></li>
					      <li><a href="#">Get Quote</a></li>
					      <li><a href="#">Projects</a></li>
					      <li><a href="#">Contact Us</a></li>
					    </ul>
					  </div><!-- /.navbar-collapse -->
					</nav>
				</div>
			</div>
			<section class="col-md-10 banner">
				<h1 style="color:#fff; font-weight:normal; margin-bottom:0; font-size:24px; margin-top:170px;">PROFESSIONAL DESIGN</h1>
                <div class="col-sm-8 col-sm-offset-2" style="padding:0 20px;">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <!-- Carousel indicators -->
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                        </ol> -->   
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <h2 style="color:#c72425; border: 2px solid #c72425; font-size: 36px; padding: 10px 20px; font-weight:normal;">4-5 Page Website. Only AUD 500</h2>
                            </div>
                            <div class="item">
                                <h2 style="color:#c72425; border: 2px solid #c72425; font-size: 30px; padding: 10px 20px; font-weight:normal;">Shopping Cart Website. Only AUD 1000</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 style="color:#fff; clear:both; font-weight:normal; font-size:16px;">BEST TEMPLATE FOR CORPORATE WEBSITES</h3>
			</section>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-10">
					<p>&copy 2016 Silicon Diary. All rights reserved</p>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>