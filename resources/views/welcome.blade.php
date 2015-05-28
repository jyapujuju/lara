<html>
<head>
	<title>Laravel</title>

	<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ URL::asset('webfonts/font.css') }}">

	
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js" ></script>	
</head>
<body>

	<!-- Fixed navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">Project name</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>
						</ul>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="../navbar/">Default</a></li>
					<li><a href="../navbar-static-top/">Static top</a></li>
					<li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>


	<div class="container">
		<br>
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="eel.png" alt="Chania" width="460" height="345">
					<div class="carousel-caption">
						<h3>EELLLLEEE</h3>
						<p>The atmoshphere in eel land is very bad</p>
					</div>
				</div>

				<div class="item">
					<img src="hangout.png" alt="Chania" width="460" height="345">
					<div class="carousel-caption">
						<h3>EELLLLEEE</h3>
						<p>The atmoshphere in eel land is very bad</p>
					</div>

				</div>

				<div class="item">
					<img src="shot.png" alt="Flower" width="460" height="345">
				</div>

				<div class="item">
					<img src="shoot.png" alt="Flower" width="460" height="345">
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="container" style="padding-top:20px;">

		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Navbar example</h1>
			<p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
			<p>To see the difference between static and fixed top navbars, just scroll.</p>
			<p>
				<a class="btn btn-lg btn-primary" href="../../components/#navbar" role="button">View navbar docs &raquo;</a>
			</p>
		</div>
		<h1 style="font-size:7em;text-align:center;font-family:samurai;">Hard work bits talent <br/> when <br/> talent doesnot work hard.</h1>
	</div> <!-- /container -->
	<div class="container">
		<div class="row">
			<!-- Main component for a primary marketing message or call to action -->
			<div class="col-lg-3">
				<h4>news 1</h4>
				<p>slkdjflajsdlfa d</p>
				<h4>news 1</h4>
				<p>slkdjflajsdlfa d</p>
				<h4>news 1</h4>
				<p>slkdjflajsdlfa d</p>
			</div>
			<div class="col-lg-6">
				<h1>Navbar example</h1>
				<p>This example is a quick exercise to illustrate how the default, static and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
				<p>To see the difference between static and fixed top navbars, just scroll.</p>
			</div>
			<div class="col-lg-3">
				<h4>notice 1</h4>
				<p>slkdjflajsdlfa d</p> 
				<h4>notice 1</h4>
				<p>slkdjflajsdlfa d</p> 
				<h4>notice 1</h4>
				<p>slkdjflajsdlfa d</p>
			</div>

		</div>
	</div> <!-- /container -->
	<div class="container">
		<div class="row">
			<!-- Main component for a primary marketing message or call to action -->
			<div class="col-lg-6">
				<div class="col-lg-1" style="width:25%;padding-top:30px;">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 96px; height: 96px;">
				</div>
				<div class="col-lg-5" style="width:75%;padding-left:30px;">
					<h3 style="font-weight:bold;"> Tej shahi</h3>
					<p style="text-align:justify;text-indent:25px;"><q>I don't understand why people discredit w3schools, since I am learning about 5 years ago, I usually find the exact information I need, if I go to other sites, the don't a complete reference of the language.</q></p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="col-lg-1" style="width:25%;padding-top:30px;">
					<img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" style="width: 96px; height: 96px;">
				</div>
				<div class="col-lg-5" style="width:75%;padding-left:30px;">
					<h3 style="font-weight:bold;"> lok prakash pandey</h3>
					<p style="text-align:justify;text-indent:25px;"><q>I don't understand why people discredit w3schools, since I am learning about 5 years ago, I usually find the exact information I need, if I go to other sites, the don't a complete reference of the language.</q></p>
				</div>
			</div>


		</div>
	</div> <!-- /container -->

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
