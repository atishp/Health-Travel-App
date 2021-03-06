<?php
/* Displays user information and some useful messages */
session_start();

// Check if user is logged in using the session variable
if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: ../error.php");    
}
else {
    // Makes it easier to read
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $email = $_SESSION['email'];
    $active = $_SESSION['active'];
}
?>
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
	
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>

	
	<link rel="stylesheet" href="css/styleD.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
  	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	
	<title>edit_profile</title>
</head>
<body>

	<header>
            <nav>
                <div class="row nav-row">
                    <div class="header-nav-controls">
                        <a href="../profile/profile.php"><img src="img/travel_logo_white.png" alt="Company Logo" class="logo"></a>
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo-black">
                        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    </div>
                    <ul class="main-nav js--main-nav">
                        <li><a href="../index.php" class="scrollTrigger" data-scroll-to="js--section-features"></a></li>
                        <li><a href="../My Data/my_data.php">my data</a></li>
						<li><a href="#">edit profile</a></li>
						<li><a href="../My History/my_history.php">my history</a></li>
						<li><a href="../My articles/Articles.php">my articles</a></li>
                        <li><a href="#" class="scrollTrigger" data-scroll-to="js--section-cities"></a></li>
                        <li><a class="cd-signin" href="../logout.php" name="logout">log out</a></li>
						
                    </ul>
                </div>
            </nav>
	</header>
	
<form class="cd-form floating-labels">
		<fieldset>
			<legend>Edit Profile</legend>

			<div class="error-message">
				<p>Please enter a valid email address</p>
			</div>

			<div class="icon">
				<label class="cd-label" for="cd-name">Name</label>
				<input class="user" type="text" name="cd-name" id="cd-name" required>
		    </div> 

		    <div class="icon">
				<label class="cd-label" for="cd-name">Surname</label>
				<input class="user" type="text" name="cd-name" id="cd-name" required>
		    </div> 
			
			<div class="icon">DOB
				<label class="cd-label" for="cd-name"></label>
				<input class="user" type="date" name="cd-name" id="cd-name" required>
		    </div>

		    <div class="icon">
		    	<label class="cd-label" for="cd-email">Email</label>
				<input class="email error" type="email" name="cd-email" id="cd-email" required>
		    </div>
		</fieldset>
		<div class="icon">
				<label class="cd-label" for="cd-name">Password</label>
				<input class="user" type="password" name="cd-name" id="cd-name" required>
		    </div> 
			<div class="icon">
				<label class="cd-label" for="cd-name">Confirm Password</label>
				<input class="user" type="password" name="cd-name" id="cd-name" required>
		    </div> 
			
			<div class="icon">
				<label class="cd-label" for="cd-name">Home Country</label>
				<input class="user" type="text" name="cd-name" id="cd-name" required>
		    </div> 

		<fieldset>
			<legend></legend>

			<div>
				<h4>Gender</h4>

				<p class="cd-select icon">
					<select class="budget">
						<option value="0">Select Gender</option>
						<option value="1">Male</option>
						<option value="2">Female</option>
						<option value="3">Other</option>
					</select>
				</p>
			</div> 

			<!-- <div>
				<h4>Project type</h4>

				<ul class="cd-form-list">
					<li>
						<input type="radio" name="radio-button" id="cd-radio-1" checked>
						<label for="cd-radio-1">Choice 1</label>
					</li>
						
					<li>
						<input type="radio" name="radio-button" id="cd-radio-2">
						<label for="cd-radio-2">Choice 2</label>
					</li>

					<li>
						<input type="radio" name="radio-button" id="cd-radio-3">
						<label for="cd-radio-3">Choice 3</label>
					</li>
				</ul>
			</div>

			<div>
				<h4>Features</h4>

				<ul class="cd-form-list">
					<li>
						<input type="checkbox" id="cd-checkbox-1">
						<label for="cd-checkbox-1">Option 1</label>
					</li>

					<li>
						<input type="checkbox" id="cd-checkbox-2">
						<label for="cd-checkbox-2">Option 2</label>
					</li>

					<li>
						<input type="checkbox" id="cd-checkbox-3">
						<label for="cd-checkbox-3">Option 3</label>
					</li>
				</ul>
			</div> 

			<div class="icon">
				<label class="cd-label" for="cd-textarea">Project description</label>
      			<textarea class="message" name="cd-textarea" id="cd-textarea" required></textarea>
			</div>-->

			<div>
		      	<input type="submit" value="Save">
		    </div>
		</fieldset>
	</form>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/velocity.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<footer>
            <div class="row">
                <div class="col span-1-of-2">
                    <ul class="footer-nav">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Windows App</a></li>
                        <li><a href="#">iOS App</a></li>
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
    <script type="text/javascript" src="js/script.min.js">
	<script src="js/jquery-2.1.1D.js"></script>
<script src="js/mainD.js"></script> <!-- Resource jQuery -->
	</script>
</html>