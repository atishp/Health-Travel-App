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

	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/styleA.css"> <!-- Gem style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="css/style.min.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/style.max.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/grid.css"> <!-- Resource style -->
	<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
	<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	
	<title>My Articles</title>
</head>
<body>

	<header>
            <nav>
                <div class="row nav-row">
                    <div class="header-nav-controls">
                        <a href="../profile/profile.php"><img src="img/travel_logo_white.png" alt="Company Logo" class="logo"></a>
						<!--<div class="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>-->
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo-black">
                        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    </div>
                    <ul class="main-nav js--main-nav">
                        <li><a href="../index.php" class="scrollTrigger" data-scroll-to="js--section-features"></a></li>
                        <li><a href="../My Data/my_data.php">my data</a></li>
						<li><a href="../edit_profile/edit_profile.php">edit profile</a></li>
						<li><a href="../My History/my_history.php">my history</a></li>
						<li><a href="#">my articles</a></li>
                        <li><a href="#" class="scrollTrigger" data-scroll-to="js--section-cities"></a></li>
                        <li><a class="cd-signin" href="../logout.php" name="logout">log out</a></li>
						
                    </ul>
                </div>
            </nav>
	</header>
	<main>
		

		<section id="cd-team" class="cd-section">
			<div class="cd-container">
				<h2>my articles</h2>
				<ul>
					<li>
						<a href="#0" data-type="member-1">
							<figure>
								<img src="img/team-member-1.jpg" alt="Team member 1">
								<div class="cd-img-overlay"><span>View Article</span></div>
							</figure>

							<div class="cd-member-info">
								Staying Healthy on a Cruise <span>By Kevin O. Hwang</span>
							</div> <!-- cd-member-info -->
						</a>
					</li>
					
					<li>
						<a href="#0" data-type="member-2">
							<figure>
								<img src="img/team-member-1.jpg" alt="Team member 1">
								<div class="cd-img-overlay"><span>View Article</span></div>
							</figure>

							<div class="cd-member-info">
								Protecting Yourself from Airplane Germs <span>By Diana Rodriguez</span>
							</div> <!-- cd-member-info -->
						</a>
					</li>

					<li>
						<a href="#0" data-type="member-3">
							<figure>
								<img src="img/team-member-1.jpg" alt="Team member 1">
								<div class="cd-img-overlay"><span>View Article</span></div>
							</figure>

							<div class="cd-member-info">
								How to Stay Healthy on a Road Trip <span>By Marijke Vroomen-Durning, RN</span>
							</div> <!-- cd-member-info -->
						</a>
					</li>
				</ul>
			</div> <!-- cd-container -->
		</section> <!-- cd-team -->

		<div class="cd-overlay"></div>
	</main>

	<div class="cd-member-bio member-1">
		<div class="cd-member-bio-pict">
			<img src="img/member-bio-img-1.jpg" alt="Member Bio image">
		</div> <!-- cd-member-bio-pict -->

		<div class="cd-bio-content">
			<h1>Staying Healthy on a Cruise</h1>
			<p>If you're thinking of going on a cruise, you already know the merits of spending your days gazing at crystal blue waters and exploring exotic ports. But there also risks involved with this type of travel, and it's important to do some careful research before booking your ticket on a cruise. A number of serious onboard illnesses, for instance, have been reported in the news as of late, sometimes affecting hundreds of travelers -- and in cases like these insufficient medical care on some ships only seemed to compound the problem.

If you're set on a cruise vacation though, you can make it a successful one. Read on to learn what you need to know and what precautions you'll want to take.

Medical Emergency at Sea: What Aid Should Be Available

In researching the medical care on board a cruise ship, be sure to ask specific questions about how the staff handles medical emergencies. The following guarantees of care are typical offered on the average cruise ship:</p>
			<p>Staff. If you contract an illness during your travel on a cruise ship, the medical facilities onboard should be able to take care of you. This means the ship should have at least one doctor and generally a few nurses who can handle a medical emergency or illness.
Care level. The infirmary on the ship should be able to handle basic medical needs in the case of illnesses and minor injuries. Infirmary personnel are typically able to administer intravenous fluids, as well as handle a broken bone or sprained wrist or ankle. Limited medications usually are available, and there may be a defibrillator for emergency treatment of serious heart rhythm problems -- if this is an issue that concerns you be sure to ask about it when researching cruise lines. Doctors on the cruise ship should also be able to communicate with medical experts on land.
Emergency provisions. If a passenger gets very ill on the cruise, the person may be evacuated from the ship. In other instances, sick passengers may be confined to the infirmary for treatment and observation if it is believed that their infection could spread through the cruise ship.</p>
<p>Onboard Illnesses: How They Spread

A contagious illness that may be a concern on land can be even more problematic on a cruise ship packed with people eating, drinking, and swimming in the same places. There have been increasing instances of norovirus (which causes severe vomiting and diarrhea) or the flu spreading rapidly through a cruise ship -- which is probably not surprising given the constant contact of passengers with each other and with crew members. Both respiratory and gastrointestinal illnesses are common on cruise ships, especially among passengers who are over age 65 or who have a chronic medical problem.

Prepare Before Boarding

Illness can happen on any cruise ship, and on any cruise line, but you may want to do some research before choosing a cruise line to determine which one is most likely to meet any medical needs that arise. Look for a cruise line that has a good record of preventing and handling illnesses on board. You might research each cruise line and then its individual ships to find out what level of care is available.</p>
<a href="http://www.everydayhealth.com/healthy-travel/cruise-medical-emergencies.aspx">Read more...</a>
		</div> <!-- cd-bio-content -->
	</div> <!-- cd-member-bio -->

	<div class="cd-member-bio member-2">
		<div class="cd-member-bio-pict">
			<img src="img/member-bio-img-2.jpg" alt="Member Bio image">
		</div> <!-- cd-member-bio-pict -->

		<div class="cd-bio-content">
			<h1>Protecting Yourself from Airplane Germs</h1>
			<p>Jumping on an airplane and jetting away can get you where you need to go fast, but in the close quarters of a jet cabin, you'll be exposed to every cough and sneeze of your fellow passengers. To avoid arriving at your destination with symptoms of a cold or other illness, follow these tips to reduce your exposure to germs on the plane.

Pre-Plane Illness Prevention Strategies for the Frequent Flier

A healthy diet with lots of antioxidant-rich fruits and vegetables can boost your immune system and help you stay healthy during travel. There are also some herbal supplements that may help by easing symptoms of colds, shortening the length of time that you're sick, or preventing symptoms of illness altogether. A product like Airborne, which claims to prevent colds, has itself not been proven effective, but some of the ingredients in Airborne have been studied and might help keep colds at bay. Some travelers swear by them, even though studies don’t appear to back them up. Popular remedies include:

Vitamin C. Studies are unclear about whether vitamin C can actually prevent colds, but getting extra vitamin C when you're sick may help you feel better sooner.
Echinacea. Echinacea is a popular herbal supplement used to boost immunity, though, again, research studies have not specifically found it effective in preventing colds.
Zinc. While this essential mineral may not prevent a cold, if you get sick, zinc may help you feel better faster.</p>
			<p>Germ Warfare

Once on the plane, be sure to practice the same basic hygiene principals and techniques that you would use on the ground to minimize the germs you pick up and to reduce your risk of getting sick. You should:

Wash your hands. "Always wash your hands before eating and after using the toilet," says Greg T. Snider, MD, a physician at the Lexington Clinic's Occupational and Travel Services Department in Kentucky. You might also carry a small bottle of hand-sanitizing gel for times when you can't get to a sink, and sanitize your hands more frequently if anyone around you is showing symptoms of an illness.
Avoid touching your face. This is a good idea in normal circumstances, but especially on a plane, where you don’t know who sat in the seat before you. "Never touch your face, mouth, or nose with unwashed hands and always wash your hands thoroughly after performing any personal hygiene task," says Dr. Snider.
Switch your seat if possible. If your flight isn't packed, look for a seat by yourself, away from other passengers, to limit your contact with germs. It might also be a good idea for you to wipe down your seat, and anything else you touch on the plane, with an antibacterial wipe.
Consider a mask. If you or someone you're traveling with is sick and coughing, you might want to bring a surgical mask to prevent the spread of germs to other people on the plane.</p>
		<p>Take Other Important Precautions

You can also reduce your risk of other problems that may arise on an airplane, from dry skin to life-threatening blood clots.

Protect against “airplane air.” Air inside the airplane is fairly dry, so keep yourself hydrated by drinking plenty of water and/or juices. Apply moisturizer to your skin if it becomes uncomfortably dry, and protect lips against chapping, too, by using a medicated lip balm.
Reduce your risk of a blood clot. Staying immobile for prolonged periods, such as on long flights, increases the risk of developing blood clots in your legs. You can minimize this possibility by getting up from your seat and walking about the cabin every 60 to 90 minutes. Drinking plenty of water and juices can also help. Avoid beverages that cause you to urinate excessively, such as alcohol and caffeinated drinks.
Follow Frequent-Flier Tips

If you want to stay healthy and you have to fly a lot, follow a frequent flier’s tried-and-true prevention methods. Pamela Melton, vice president and director of operations at Marketing Resources Inc. in Elmhurst, Ill., travels often and offers the following advice:

Keep your hands clean and watch what you touch. "I bring a good supply of hand sanitizer to use before diving into the in-flight snack or airport lunch," says Melton. "I'm also mindful of areas where human contact is high, such as escalator handrails and bathrooms. I wash my hands or use the hand sanitizer frequently and always before eating or drinking."
Pack medications just in case. It's a good idea to pack a few over-the-counter medications in case you do start to feel a little under the weather or show symptoms of an illness while traveling. "I keep a supply of antihistamines and non-drowsy decongestant medications in my carry-on luggage," says Melton. "These can come in handy if you begin feeling stuffy or feel a cold coming on. [I also find that] the best combination for fighting off a cold in the early stages is zinc and vitamin C. I carry both of these with me to prevent a cold from becoming worse."</p>
		<a href="http://www.everydayhealth.com/healthy-travel/airplane-germ-protection.aspx">Read more...</a>
		</div> <!-- cd-bio-content -->
	</div> <!-- cd-member-bio -->

	<div class="cd-member-bio member-3">
		<div class="cd-member-bio-pict">
			<img src="img/member-bio-img-3.jpg" alt="Member Bio image">
		</div> <!-- cd-member-bio-pict -->

		<div class="cd-bio-content">
			<h1>How to Stay Healthy on a Road Trip</h1>
			<p>Road trip! Two words that can either lift your spirits in anticipation of your upcoming travel plans or give you a sinking feeling of dread. With a few easy strategies in place, though, any road trip can be fun and even healthy — and something you’ll want to do again. Read on to learn how you can manage to eat well, stay comfortable, and arrive at your destination feeling energized and refreshed.

Eating Healthy

Thoughts of eating “on the road” typically call to mind images of vending machines and fast food. But that doesn’t have to be the case. Here are better ways to eat while you're traveling by car or bus:

Brown-bag it. Packing your own food is a great way to eat well while you travel. “Pack drinks and snacks in the car with you,” says Heidi Reichenberger McIndoo, MS, RD, a nutrition consultant based in Boston, Massachusetts. “Great items to bring on a car trips include plain water, enhanced flavored waters like vitamin water, dried fruit, fresh fruit like apples and bananas, cheese sticks, and nuts.” Be sure to wash any produce thoroughly before you leave, and bring a cooler to keep drinks and perishable items at a chill temperature.
Stay clear of vending machines. McIndoo warns against rest-stop food and vending machines: “They are notorious for being full of high-fat, high-salt, and high-sugar foods” — not what you need to stay healthy and energized on your road trip!
Munch regularly. Most people's bodies are accustomed to eating something (whether a snack or meal) at least every four to five hours, and the same is true when you travel. If you go longer than that because you don’t want to stop driving, you may end up overeating later or snacking on the wrong kinds of foods.</p>
			<p>Being Comfortable

Sitting in a car for hours on end can cause noticeable stiffness and muscular pain so it’s important to pay extra attention to comfort while on your road trip. The following tips can help you avoid body pain when you're on the road:

Watch your posture. Make sure that you’re sitting comfortably at the wheel, with your seat set so that you’re not stretching to reach the steering wheel.
Move your seat. Position the seat at about a 100-degree angle so you’re not slouching, and be sure that the small of your back, the lumbar part, is supported. You can use a small pillow or even a rolled up towel for this purpose.
Use cruise control. On long drives, resting both feet on the floor is easier on your back and hips. Just be sure to continue paying close attention to the road ahead.
Take a break. Be sure to stop regularly (experts recommend every 20 to 30 minutes) to get out of your car and stretch before continuing on. This is especially true if you have chronic back pain or other issues that are triggered by sitting in one position for too long. Taking frequent breaks can also help prevent deep vein thrombosis — a blood clot in one of the deep veins in your body, usually in your legs, that can form if you don’t move around for a long time.
Staying Awake

One safety issue that is often overlooked on road trips is that of the sleepy driver. Most people are aware of the dangers of drinking and driving but are less aware that driving drowsy can be just as fatal, according to the National Sleep Foundation. Driving drowsy can produce the same slow reaction time, decreased awareness, and visual changes that driving drunk will, especially if you’re driving at night. To combat drowsy driving:

Get enough rest. While it may seem obvious, make sure you get plenty of sleep before you leave. This can be tough if you’re running around with last-minute preparations. If you’re driving, however, being rested is important for your reaction time and overall competence. In addition, make sure on a multi-day trip that you give yourself enough time to unwind after a day at the wheel, and get a good night’s sleep before hitting the road again the next day.
Pay attention if you start to feel sleepy. Listen to your body and pull over if you begin to feel groggy. Take a little rest or change drivers.</p>
<a href="http://www.everydayhealth.com/healthy-travel/staying-healthy-on-a-road-trip.aspx">Read more...</a>
		</div> <!-- cd-bio-content -->
	</div> <!-- cd-member-bio -->
	<a href="#0" class="cd-member-bio-close">Close</a> <!-- close the author bio section -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/main.js"></script> <!-- Gem jQuery -->
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
</html>