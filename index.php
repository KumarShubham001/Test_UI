<!DOCTYPE HTML>
<html lang="en" class="no-js">
<head>

    <title>Design Avenue|Registration</title>
    
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- shortcut icon -->
    <link rel="shortcut icon" href="images/file.png" />

    <!-- links for css designs -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"  />
    <link href="css/style.css" rel="stylesheet" type="text/css"  />
    <link href="css/responsive.css" rel="stylesheet" type="text/css"  />
    
    <!-- link for font awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    
</head>
<body>
	<div class="se-pre-con"></div>

	<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">Design Avenue</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<span class="li-text">
								<!-- text for Navbar -->
							</span> 
							<span class="li-social">
								<!-- Icons for navbar -->
							</span>
						</li>
					</ul>
				</div>
			</div>
		</nav>

	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="card">
					
						<form action method="post" id="msform">
							<ul id="progressbar">
								<li class="active">Details</li>
								<li>Duration</li>
								<li>Services</li>
							</ul>

							<fieldset>
								<h1 class="center">Details of the Event</h1>

								<input type="text" name="event" placeholder="Search For Your Event">
								<input type="text" name="location" placeholder="Start by typing your location">
								<input type="date" name="date" placeholder="Select single or multiple dates">
								<p class="center">*For urgent booking, <a href="#">Schedule a meeting now</a></p>

								<input type="button" name="next" value="Proceed" class="next center">
							</fieldset>

							<fieldset>
								<h1 class="center">Pricing and Duration</h1>

								<label>Duration</label>&nbsp; &nbsp;<input type="button" onclick="toggleButton()" class="half-day" value="Half Day"><input type="button" onclick="toggleButton()" class="full-day active" value="Full Day">
								<p class="center">*Half Day: upto 4 hours, Full Day: upto 8 hours</p>
								<input type="button" name="previous" value="Go Back" class="previous left">
								<input type="button" onclick="toggle()" name="next" value="Proceed" class="next right">
							</fieldset>

							<fieldset>
								<h1 class="center">Services</h1>
								
								<label>Photographers</label>
								<input type="text" name="quantity" placeholder="No. of photographers">
								<input type="text" name="quality" placeholder="Quality">
								<label>Videographers</label>
								<input type="text" name="quantity" placeholder="No. of videographers">
								<input type="text" name="quality" placeholder="Quality">
								<input type="button" name="previous" value="Go Back" class="previous left">
								<input type="submit" name="submit" value="Book Now" class="right">
							</fieldset>
						</form>
				</div>
			</div>
		</div>
	</div>

	<!-- links for js scripts -->
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/scroll.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>