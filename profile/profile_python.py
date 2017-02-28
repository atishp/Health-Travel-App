#!/python27/python
from jinja2 import Environment
HTML="""
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style.min.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style.max.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/grid.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	
	<title>Product Quick View | CodyHouse</title>
</head>
<body>

	<header>
            <nav>
                <div class="row nav-row">
                    <div class="header-nav-controls">
                        <img href="index.html" src="img/travel_logo_white.png" alt="Company Logo" class="logo">
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo-black">
                        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    </div>
                    <ul class="main-nav js--main-nav">
                        <li><a href="../index.html" class="scrollTrigger" data-scroll-to="js--section-features"></a></li>
                        <li><a href="profile/index.html">my data</a></li>
						<li><a href="profile/index.html">edit profile</a></li>
						<li><a href="profile/index.html">my history</a></li>
						<li><a href="profile/index.html">my articles</a></li>
                        <li><a href="#" class="scrollTrigger" data-scroll-to="js--section-cities"></a></li>
                        <li><a class="cd-signin" href="#0">log out</a></li>
						
                    </ul>
                </div>
            </nav>
	</header>
	
	<div class="cd-3d-portfolio">
	<nav class="cd-3d-portfolio-navigation">
		<div class="cd-wrapper">
			<h1>My Profile</h1>
				
			<ul>
				<li><a href="#0" class="selected">1</a></li>
				<li><a href="#0">2</a></li>
				<li><a href="#0">3</a></li>
			</ul>
		</div>
	</nav> <!-- .cd-3d-portfolio-navigation -->
	
	<div class="projects">
		<ul class="row">
			<li class="front-face selected project-1">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>Transportation</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-2">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>Sleep cycle</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-3">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>Weather</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>
						<p id="demo"></p>
						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>
		</ul> <!-- .row -->
	
		<ul class="row">
			<li class="front-face selected project-4">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>health kit</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>
							
						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-5">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>tips and tricks</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-6">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>my destination</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>
		</ul> <!-- .row -->
	
		<ul class="row">
			<li class="front-face selected project-7">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>Edit profile</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-8">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>UV index</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-9">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>my doctor</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>

						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>
		</ul> <!-- .row -->
	</div><!-- .projects -->

	<a href="#0" class="cd-top">Top</a>
</div>
	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Windows App</a></li>
                        <li><a href="#">W App</a></li>
                        <li><a href="#">Android App</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </div>
                <div class="col span-1-of-2">
                    <ul class="social-links">
                        <li><a href="#" target="_blank"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-social-googleplus"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-heart"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="ion-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row copyright-text">

                <p>
                    
                </p>
            </div>
        </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/selectivizr/1.0.3b/selectivizr.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.waypoints/2.0.5/waypoints.min.js"></script>
    <script type="text/javascript" src="js/script.min.js"></script>
</html>
<script>
var x = document.getElementById("demo");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}
function showPosition(position) {
    x.innerHTML = "Latitude: " + position.coords.latitude + 
    "<br>Longitude: " + position.coords.longitude; 
}
window.onload = getLocation;
</script>
"""
def print_html_doc():
    print Environment().from_string(HTML).render()

if __name__ == '__main__':
    print_html_doc()