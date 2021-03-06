<!DOCTYPE html>
<html lang="en">
<head>
  <title>home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&display=swap" rel="stylesheet">


</head>
<body>
	<!----------------------Nav-Bar--------------------------->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">BROTHER'S TUTORIAL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#faculties">About</a>
      </li>
    
            <li class="nav-item">
        <a class="nav-link" href="#social-media">Contact</a>
      </li>

     
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
	<!----------------------Carousel--------------------------->
	<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/img7.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h2>Brother's Tutorial</h2>
        <p>We Give You tools To Climb Mountains.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/img9.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h1>Brother's Tutorial</h1>
        <p>We Give You tools To Climb Mountains.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/img6.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h1>Brother's Tutorial</h1>
        <p>We Give You tools To Climb Mountains.</p>
      </div>   
    </div>

    <div class="carousel-item">
      <img src="img/img10.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h1>Brother's Tutorial</h1>
        <p>We Give You tools To Climb Mountains.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


		<!----------------------Services--------------------------->
		<section id="services" class="my-5">
			<div class="py-5">
				<h2 class="text-center">Services</h2>
			</div>


			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-12">
						<img src="img/img5.jpg" class="img-fluid aboutimg">
					</div>
					<div class="col-lg-6 col-md-6 col-12">
						<h2 class="display-4">Brother's Tutorial</h2>
						<p class="py-3">We are glad to give you all the tools to achieve your goal. We are giving services for 10 years.
						We have well educated as well as experienced guides for you. We will teach you how to study in a smart way.
						We help you to identify your dreams, your strength and let you choose your path. So join us and make your study easy and fun.</p>
						<a href="services.php" class="btn btn-success">Know More</a>
					</div>
				
				</div>
			</div>

		</section>



				<!----------------------About--------------------------->
		<section id="faculties">
		<div class="container-fluid">
			<h2 class="title text-center">About Us</h2>
			<div class="row offset-1">
				<div class="col-md-5 faculties">
					<p>8 Year's Experience!</p>
					<img src="img/ss.jpg">
					<p class="teacher-details"><b>Sumit Mishra</b><br>Co-Founder at BROTHER'S TUTORIAL</p>

					<a href="about.php" class="btn btn-outline-danger">Know More</a>
				</div>

				<div class="col-md-5 faculties">
					<p>6 Year's Experience!</p>
					<img src="img/vvv.jpg">
					<p class="teacher-details"><b>Vivek Mishra</b><br>Co-Founder at BROTHER'S TUTORIAL</p>

					<a href="about.php" class="btn btn-outline-danger">Know More</a>
				</div>
				
			</div>
		</div>
		
	</section>





				<!----------------------Downloads--------------------------->
	




				<!----------------------gallery--------------------------->
		<section class="my-5">
	<div style="text-align:center">
  <h2>Gallery</h2>
  <p>Click on the images below:</p>
</div>

<!-- The four columns -->
<div class="container-fluid">
<div class="row">
  <div class="column">
    <img src="img/img9.jpg" alt="Nature" class="img-fluid" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/img9.jpg" alt="Snow" class="img-fluid" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/img9.jpg" alt="Mountains" class="img-fluid" style="width:100%" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="img/img9.jpg" alt="Lights" class="img-fluid" style="width:100%" onclick="myFunction(this);">
  </div>
</div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:100%">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>


		</section>


	<!--------------social media section--------------->
	<section id="social-media">
		<div class="container-fluid text-center">
			<h2>Find Us On Social Media</h2>
			<div class="social-icons">
				<a href="https://www.facebook.com/groups/266301471418500"><img src="img/fb.png"></a>
				<a href="https://twitter.com/sumitvivek003"><img src="img/twitter.png"></a>
				<a href="https://www.instagram.com/sumitvivek003/"><img src="img/instagram.png"></a>
				<a href="https://www.youtube.com/channel/UCOU_UR1YpnjK8r1BNicrB-w?view_as=subscriber"><img src="img/utube.png"></a>

				
			</div>
		</div>
		
	</section>
<!---------------footer-------------->
<section>
	<div class="footer py-5 bg-dark text-center text-white">
		<h4>Contact</h4>
		<p>Near Piska Railway Station More <br> Nagri, Ranchi-835303, Jharkhand</p>
		<p>+91-9709444029 | +91-6200121576</p>
		<p>sumitvivek003@gmail.com | vivekmishra0000000000@gmail.com</p>
		<hr>
  <p>Website Crafted By Sumit Mishra</p>
</div>
</section>

<!------------------smooth scroll----------------->
	<script src="smooth-scroll.js" type="text/javascript"></script>
	<script>
	var scroll = new SmoothScroll('a[href*="#"]');
	</script>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>