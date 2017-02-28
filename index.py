#!/python27/python
from jinja2 import Environment
HTML="""
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Travel health guide
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <meta charset="utf-8">
        <meta author="Ameya patil, Atish pawar">
        <meta title="WHI project">
        <meta description="This HTML5 website template is part of a series of templates I am open sourcing. Website is completely responsive and is capable of sending mails (I have included a simple PHP mailer script). This is available for anyone to use both commercially or non-commercially. Credits would be much appreciated.">
        <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="img/manifest.json">
        <link rel="mask-icon" href="img/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Roboto:400,700|Lato:100,300,400,300i" rel="stylesheet">
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/grid.css">
        <link rel="stylesheet" type="text/css" href="css/style.min.css">
        <link rel="stylesheet" type="text/css" href="css/queries.min.css">
<script src="js/modernizr.js"></script> <!-- Modernizr -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
    </head>
    <body>
        <header>
            <nav>
                <div class="row nav-row">
                    <div class="header-nav-controls">
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo">
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo-black">
                        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    </div>
                    <ul class="main-nav js--main-nav">
                        <li><a href="#" class="scrollTrigger" data-scroll-to="js--section-cities">Destinations</a></li>
                        <li><a class="cd-signin" href="#0">Sign in</a></li>
<li><a class="cd-signup" href="#0">Sign up</a></li>
                    </ul>
                </div>
            </nav>
            <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
<ul class="cd-switcher">
<li><a href="#0">Sign in</a></li>
<li><a href="#0">New account</a></li>
</ul>

<div id="cd-login"> <!-- log in form -->
<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-email" for="signin-email">E-mail</label>
<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<label class="image-replace cd-password" for="signin-password">Password</label>
<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">
<a href="#0" class="hide-password">Hide</a>
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<input type="checkbox" id="remember-me" checked>
<label for="remember-me">Remember me</label>
</p>

<p class="fieldset">
<input class="full-width" type="submit" value="Login">
</p>
</form>
 
<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
<!-- <a href="#0" class="cd-close-form">Close</a> -->
</div> <!-- cd-login -->

<div id="cd-signup"> <!-- sign up form -->
<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-username" for="signup-username">Username</label>
<input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<label class="image-replace cd-email" for="signup-email">E-mail</label>
<input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<label class="image-replace cd-password" for="signup-password">Password</label>
<input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
<a href="#0" class="hide-password">Hide</a>
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<input type="checkbox" id="accept-terms">
<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
</p>

<p class="fieldset">
<input class="full-width has-padding" type="submit" value="Create account">
</p>
</form>

<!-- <a href="#0" class="cd-close-form">Close</a> -->
</div> <!-- cd-signup -->

<div id="cd-reset-password"> <!-- reset password form -->
<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

<form class="cd-form">
<p class="fieldset">
<label class="image-replace cd-email" for="reset-email">E-mail</label>
<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
<span class="cd-error-message">Error message here!</span>
</p>

<p class="fieldset">
<input class="full-width has-padding" type="submit" value="Reset password">
</p>
</form>

<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
</div> <!-- cd-reset-password -->
<a href="#0" class="cd-close-form">Close</a>
</div> <!-- cd-user-modal-container -->
</div>
           <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
           <script src="js/modernizr.js"></script> 
           <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
<link rel="stylesheet" href="css/login-css/style.css"> 
           <script src="js/main.js"></script>
            <div class="hero-text-box">
                <h1>Health concerns while travelling?<br />Get best recommendations for your voyage.</h1>
                <a class="btn btn-ghost scrollTrigger" href="#" data-scroll-to="js--section-features">Show me more</a>
            </div>
        </header>
        <section class="section-features js--section-features">
            <div class="row">
                <h2>Discover the world &mdash; with us.</h2>
                <p align="justify" class="long-copy">Hello, your personalized travel health app is here! We plan to use cutting edge technologies in order to improve travelling experience of user by suggesting weather conditions of the destination, most common diseases in the area and preventive measures, suggesting the sleep cycles to tackle the jet lag, health problems and tips for different modes of transportation, recommending useful articles from web by mining the data, smart device integration. </p>
            </div>

        </section>
        <section class="section-travels js--section-travels">
            <ul class="travels-showcase">
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-1.jpg" alt="Korean bibimbap with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-2.jpg" alt="Simple italian pizza with cherry tomatoes">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-3.jpg" alt="Chicken breast steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-4.jpg" alt="Autumn pumpkin soup">
                    </figure>
                </li>
            </ul>
            <ul class="travels-showcase">
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-4.jpg" alt="Paleo beef steak with vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-3.jpg" alt="Healthy baguette with egg and vegetables">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-2.jpg" alt="Burger with cheddar and bacon">
                    </figure>
                </li>
                <li>
                    <figure class="travel-photo">
                        <img src="img/img-1.jpg" alt="Granola with cherries and strawberries">
                    </figure>
                </li>
            </ul>
            <div style="clear:both;"></div>
        </section>    
        <section class="section-steps js--section-steps">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="img/app-iPhone.png" alt="Iphone app" class="app-screen js--wp-2"/>
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Sign up.</p>
                    </div>
					<div class="works-step">
                        <div>2</div>
                        <p>Build your profile & update it timely.</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your trip. See you the next time!</p>
                    </div>
                    <div class="app-btn-box">
                        <a href="#" class="btn-app">
                            <img src="img/app-store-apple.jpg" alt="App Store Button" id="apple-app-store"/>
                        </a>
                        <a href="#" class="btn-app">
                            <img src="img/download-app-android.png" alt="Play Store Button" id="play-store"/>
                        </a>
                    </div>
                </div>
            </div>
        </section>
		
		
        <section class="section-cities js--section-cities">
            <div class="row">
                <h2>We're currently in these countries</h2>
            </div>
            <div class="row js--wp-3">
                <div class="col span-1-of-4 box">
                    <img src="img/lisbon-3.jpg" alt="We are in france"/>
                   <center> <h3>france</h3></center>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                      
                    </div>
                    <div class="city-feature">
                       
                        
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="img/san-francisco.jpg" alt="We are in San Francisco"/>
                    <center><h3>USA</h3></center>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="img/berlin.jpg" alt="We are in Berlin"/>
                    <center><h3>italy</h3></center>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                </div>
                <div class="col span-1-of-4 box">
                    <img src="img/london.jpg" alt="We are in London"/>
                    <center><h3>great britain</h3></center>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                    <div class="city-feature">
                        
                        
                    </div>
                </div>
            </div>
        </section>
		
		
		
        <section class="section-testimonials js--section-testimonials">
            <div class="row">
                <h2>our key features</h2>
                <div class="row">
                    <div class="col span-1-of-3">
                        <blockquote>
                            smart sleep cycle recommendations to tackle jet lag.
                            
                        </blockquote>
                    </div>
					<div class="row">
                    <div class="col span-1-of-3">
                        <blockquote>
                            country-wise information about receiving medical care.
                            
                        </blockquote>
                    </div>
					<div class="row">
                    <div class="col span-1-of-3">
                        <blockquote>
                            smart device integration such as android and apple mobiles .
                            
                        </blockquote>
                    </div>
                    <div class="col span-1-of-3">
                        <blockquote>
                            personalized health tips according to age, gender and destination.
                            
                        </blockquote>
                    </div>
					<div class="row">
                    <div class="col span-1-of-3">
                        <blockquote>
                            smart recomendation of health articles according to the profile of the user.
                            
                        </blockquote>
                    </div>
                    <div class="col span-1-of-3">
                        <blockquote>
                            most comman diseases in the area and prevention.
                            
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>
		
		
        
        <section class="section-form js--section-form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="POST" action="mailer.php" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="plan">Gender</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="plan" id="plan">
                                <option value="premium" selected>Male</option>
                                <option value="pro">Female</option>
                                <option value="starter">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="newsletter">Newsletter?</label>
                        </div>                        
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="newsletter" id="newsletter" value="yes" checked required />Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="message">Your feedback</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" id="message" placeholder="Your message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="submit-btn">&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" name="submit-btn" id="submit-btn" value="Send it!" />
                        </div>
                    </div>
                </form>
            </div>
        </section>
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
    <script type="text/javascript" src="js/script.min.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-52929459-2', 'auto');
      ga('send', 'pageview');

    </script>
</html>
"""
def print_html_doc():
    print Environment().from_string(HTML).render()

if __name__ == '__main__':
    print_html_doc()