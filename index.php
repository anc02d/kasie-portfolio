<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!--		Bootstrap Stylesheet from CDN-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- Latest compiled and minified JavaScript from Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
				  integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
				  crossorigin="anonymous"></script>
<!--My style sheet -->
<!--		<link rel="stylesheet" href="style.css" type="text/css">-->
		<title>Kasie Cochrane</title>
	</head>
	<body>

		<div class="container-fluid">
			<div class="jumbotron">
				<div class="container">
					<h1>Kasie's Portfolio!</h1>
					<p>Kasie is a visual artist completing her fine arts degree requirements at CNM. Please look around at her work.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<nav class="navbar navbar-inverse" role="navigation">
<!--						<div class="container">-->
<!--						@todo make the sidebar either hidden or bkgd color go the length of page-->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
										  data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
							</div>
							<div id="sidebar-wrapper" class="sidebar-toggle">
								<ul class="sidebar-nav">
									<li><a href="#">Bio</a></li>
									<li><a href="#">Artist's Statement</a></li>
									<li><a href="#">CV</a></li>
<!--									@todo change dropdown to a non-button-->
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
											aria-expanded="false">Media<span class="caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="#">Oil</a></li>
											<li><a href="#">Pastel</a></li>
											<li><a href="#">Graphite</a></li>
											<li><a href="#">Watercolor</a></li>
											<li><a href="#">Print</a></li>
											<li><a href="#">Papercut</a></li>
											<li><a href="#">Sculpture</a></li>
										</ul>
									</li>
								</ul>
							</div>
<!--						</div>-->
					</nav>
				</div>
				<div class="col-md-4 col-md-offset-4">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="false">
						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="http://placekitten.com/g/500/400" alt="Kitty 1">
								<div class="carousel-caption">
									This is a picture right?
								</div>
							</div>
							<div class="item">
								<img src="http://placekitten.com/g/300/300" alt="Kitty 2">
								<div class="carousel-caption">
									This should be the second cat image...
								</div>
							</div>
							<div class="item">
								<img src="http://placekitten.com/g/600/500" alt="Kitty 3">
								<div class="carousel-caption">
									Kitteh!!!
								</div>
							</div>
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div> <!-- div ends main content container -->

	</body>
</html>