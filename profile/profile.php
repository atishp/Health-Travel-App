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
  	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="js/nav/modernizr.js"></script> <!-- Modernizr -->
	<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  	
	<title>My Profile</title>
</head>
<body>

	<header>
            <nav>
                <div class="row nav-row">
                    <div class="header-nav-controls">
                        <a href="#"><img src="img/travel_logo_white.png" alt="Company Logo" class="logo"></a>
                        <img src="img/travel_logo_white.png" alt="Company Logo" class="logo-black">
                        <a class="mobile-nav-icon js--nav-icon"><i class="ion-navicon-round"></i></a>
                    </div>
                    <ul class="main-nav js--main-nav">
                        <li><a href="../index.html" class="scrollTrigger" data-scroll-to="js--section-features"></a></li>
                        <li><a href="../My Data/my_data.php">my data</a></li>
						<li><a href="../edit_profile/edit_profile.php">edit profile</a></li>
						<li><a href="../My History/my_history.php">my history</a></li>
						<li><a href="../My articles/Articles.php">my articles</a></li>
                        <li><a href="#" class="scrollTrigger" data-scroll-to="js--section-cities"></a></li>
                        <li><a class="cd-signin" href="../logout.php" name="logout">log out</a></li>
						<!--<a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>-->
						
                    </ul>
                </div>
            </nav>
	</header>
	<h1>Welcome</h1>
          
          <p>
          <?php 
     
          // Display message about account verification link only once
          if ( isset($_SESSION['message']) )
          {
              echo $_SESSION['message'];
              
              // Don't annoy the user with more messages upon page refresh
              unset( $_SESSION['message'] );
          }
          
          ?>
          </p>
          
          <?php
          
          // Keep reminding the user this account is not active, until they activate
          if ( !$active ){
              echo
              '<center><div class="info">
              Account is unverified, please confirm your email by clicking
              on the email link!
              </div></center>';
          }
          
          ?>
          <h3></h3>
          <center><h2>wELCOME <?php echo $first_name.' '.$last_name; ?></h2></center>
	<div class="cd-3d-portfolio">
	<nav class="cd-3d-portfolio-navigation">
		<div class="cd-wrapper">
			<h1>My Profile</h1>
				
			<ul>
				<li><a href="#0" class="selected">1</a></li>
				<li><a href="#0">2</a></li>
				<!--<li><a href="#0">3</a></li>-->
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
							<fieldset>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div>
			<center><h4>Select Mode of Transpotation</h4></center>
			<p class="cd-select icon">
			<select id='purpose' class="budget">
<option value="0">Select Mode of Transpotation</option>
<option value="1">By Airline</option>
<option value="2">By Cruise Ship</option>
<option value="3">By Car</option>
<option value="4">By Train</option>
</select>

<div class="project-content";' style='display:none;' id='business'><br/>&nbsp;
<br/>&nbsp;<p>The travel season kicks off with Thanksgiving and continues through the New Year. This means security hassles, including possible health risks from the new full-body scanners, 
as well as the not-all-that-remote possibility of catching a cold or flu while flying the friendly skies.
Fear not. Here are expert tips for healthy flying, starting at the airport.
    </p>
	<p>1. It's Germy Up There</p>
	<p>The holidays coincide with the yearly cold and flu season, and a widely quoted study in the Journal of Environmental Health Research suggests 
	you may be up to 100 times more likely to catch a cold on a plane than you are in your normal day-to-day-life.To lower your risk, don't touch the doorknob on the airplane bathroom. "Take a paper towel, and grab the door knob to get out," he says. 
	Also avoid grabbing onto seats when walking through the plane. If you must take hold to steady yourself, use hand sanitizer as soon as you return to your seat.
	</p>
	<p>Boost Your Defenses</p>
	<p>Holiday flights are often packed, so switching seats is not always an option. This means if your neighbor has a cold or flu, you may be out of luck. "If someone is coughing and sneezing within three seats in any direction, you may get infected," Powell says.

So does that mean you are definitely going to catch it? Not necessarily. The best offense is always a good defense, Powell says.


Use saline nasal spray before and after the flight. "The plane air is so dry and that dries out your mucus membranes, which reduces your resistance to infection, but keeping these membranes moist with saline spray may help."</p>
    <br/>
</div>
<div class="project-content";' style='display:none;' id='business2'><br/>&nbsp;
<br/>&nbsp;<p>
    Have we made you nervous? Don't be. It's relatively easy to stay healthy and not get sick on a cruise ship if you take a few simple precautions. All you really need is a mental checklist and a few minutes a day. (Note to self: 
	Pack the hand sanitizer, refill that water bottle and apply sunscreen.) While we can't guarantee you won't get sick -- for all you know, your germy coworkers may have already infected you before you embark on your trip -- 
	here are our top 10 tips for staying healthy and minimizing yourchances of getting sick on your next cruise.</p>
    <p>1. Don't drink the water</p>
	<p>I know we just told you to drink a lot of water, but in some destinations -- like Mexico or Egypt -- it's not necessarily safe to drink local water. Check the U.S. State Department's website (or the equivalent in your country of residence) for country-specific travel warnings; the section on "Medical Facilities and Health Information" will mention any restrictions on drinking water. In these destinations, you will want to drink only beverages in sealed bottles to avoid getting sick.

Also, avoid ice and fruit where you'd eat the skin, as well as uncooked vegetables. Bring your own drinks and snacks from the cruise ship to be safe -- though do be careful about breaking local laws in port that prohibit bringing meats and cheese ashore -- and when in doubt, ask whether items have been made or washed with local water.</p>
	<p>2. Chew ginger candies</p>
	<p>Or eat green apples, wear acupressure wristbands, head outside for fresh air, look at the horizon or book a low-deck, midship cabin. Why? All of these tricks are ways to beat seasickness. You can also take over-the-counter meds like Dramamine, or ask your doctor about the Transderm patch. Alternately, book a very port-intensive itinerary (try Oceania or Azamara) in order to spend as few days at sea as possible. River cruising on Europe's normally placid waters is also a good bet for those worried about seasickness. And, Alaska's Inside Passage voyages are typically calm.</p>
	<br/>
</div>
<div class="project-content";' style='display:none;' id='business3'><br/>&nbsp;
<br/>&nbsp;<p>
    Is there anything that screams “freedom” and “summer” more than a few friends, a dusty car, and the open road? The road trip has been immortalized in American pop music, literature, 
	and movies since the invention of the automobile at the end of the 19th century. But more often than not, road trips go hand-in-hand with unhealthy road foods (fried onions, anyone?), 
	cramped legs, and sunburned noses. This summer, try these tips for a road trip that’s fun, entertaining, safe, and — best of all — healthy.</p>
    <p>1. Choose water</p>
	<p>Bring a few reusable (BPA-free) water bottles and fill ‘em up at every rest stop. If overnight lodgings include a freezer, 
	chill bottles while you sleep for ice-cold H20 all day long. Avoid soda and creamy, sweet coffee drinks, which pack unnecessary sugar and fat and (if caffeinated) actually contribute to dehydration.</p>
	<p>2. Don’t forget the SPF.</p>
	<p>No trucker burn here! Windshields and windows might keep the bugs out of the car, but they don’t fully protect our skin from the sun. Slather on some broad spectrum SPF 30 or higher at regular intervals to keep skin safe.</p>
	<br/>
</div>
<div class="project-content";' style='display:none;' id='business4'><br/>&nbsp;
<br/>&nbsp;<p>
    The time you spend on long train rides can be an opportunity to get organized or make plans for your next destination. Read ahead in your guidebook, write journal entries, 
	delete yesterday’s bad photos, double-check your connection information with the conductor, organize your daypack, or write an email home (you don’t have to be online to write one). 
	If the train has power outlets (rare but becoming more common), charge your gadgets. Don’t, however, get so immersed in chores that you forget to keep an eye out the window for beautiful scenery around the next bend.</p>
	<p>1. Pack snacks</p>
	<p>Some trains have dining cars, but not all of them have edible food or the food is astronomically expensive. You may also be able to buy snacks, but chances are they aren’t all that healthy, 
	and the selection might be poor. When you’re stuck on a train track 12 hours from anywhere, the last thing you want is to be hungry, so come prepared with a variety of stuff to nibble on. Bonus points for healthy snacks, 
	especially because you’re not going to get a lot of exercise on board.</p>
	<p>2. Bring wet wipes and toilet paper</p>
	<p>After a long day and a long night with canned train air, you’re going to want to take a shower. No can do … but the next best thing is a good wipe down with a wet wipe. 
	I find them particularly helpful for waking up in the morning. As for the toilet paper, some trains will have it, others won’t at all, but all will be running a little low by the time the ride is over.</p>
    <br/>
</div>
</p>
</div>
			</fieldset>
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

			
		</ul> <!-- .row -->
	
		<ul class="row">
			<li class="front-face selected project-4">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>Destination</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>
							<!--<fieldset>
			<legend></legend>

			<div>
			     <h1></h1>
				 <h3></h3>
				 <h1></h1>
				 <h1></h1>
				<center><h4>Select your Destination</h4></center>

				<p class="cd-select icon">
					<select class="budget">
						<option value="0">Select Destination</option>
						<option value="1">France</option>
						<option value="2">USA</option>
						<option value="3">Italy</option>
						<option value="4">Great Britain</option>
					</select>
				</p>
			</div>  -->
			
			
			<!-- .try------------------------------------------------------------------------------------------------------------------------ -->
			<fieldset>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<div>
			<center><h4>Select your Destination</h4></center>
			<p class="cd-select icon">
			<select id='purposea' class="budget">
<option value="0">select Destination Country</option>
<option value="11">USA</option>
<option value="12">UK</option>
<option value="13">France</option>
<option value="14">Italy</option>
</select>

<div class="project-content";' style='display:none;' id='businessx'><br/>&nbsp;
<br/>&nbsp;<p>
    The United States is a vast land and, as a result, most people plan their trips within a given region, be it the East Coast, the Southwest, the beaches of Florida or California, or outlying regions like Hawaii and Alaska. 
	There are plenty of options for travelers with incredible sights sprinkled across the country.The USA is home to some of the most spectacular scenery in the world and some of the most recognizable icons on the globe. 
	For anyone in the enviable position of having unlimited time and resources, these are the top attractions to include on your itinerary.</p>
	<p>1. Grand Canyon: </p>
	<p>This incredible natural attractions is one of the most visited places in the United States. Carved out by the Colorado River, the Grand Canyon cuts deep into the landscape, creating dramatic cliff walls and ledges. 
	Visitors standing on the rim of the canyon can see down to the canyon floor a mile below, and look out over the ridges and cliffs that run as far as the eye can see. The South Rim is the most visited section of Grand Canyon National Park, with a large visitors center, regular bus service along the Rim in the high season, and a walkway that runs along the canyon with numerous viewing points and platforms. 
	The North Rim, which also has lookout areas, provides a different perspective. This section of the park has limited access from November to May due to snow and winter conditions.
	</p>
	<p>2. Niagara Falls</p>
	<p>Situated along the Canada-US border, Niagara Falls is one of the most famous waterfalls in the world. The water from Lake Erie flows into Lake Ontario over these massive waterfalls, known for the great quantity of water that is constantly tumbling over the vertical drop. The amount of water going over the falls is actually reduced in winter, when more water is used to produce hydroelectric power. Most visitors will not notice a difference.

Niagara Falls is actually a set of three falls, consisting of the largest section known as Horseshoe Falls, a second section on the American side of the river known as the American Falls, and a much thinner section located next to the American Falls, known as Bridal Veil Falls. On clear days, the plume of mist rising from Niagara Falls can be seen from as far away as the CN Tower in downtown Toronto, Canada, on the opposite shore of Lake Ontario.</p>
    <br/>
</div>
<div class="project-content";' style='display:none;' id='businessx2'><br/>&nbsp;
<br/>&nbsp;<p>
    It's little wonder London is one of the world's top tourist destinations, attracting upward of 15 million visitors each and every year. Britain's capital city is a vibrant arts and entertainment center (its theaters are always busy), and 50 years after the Beatles, the country's music scene still rocks.

London also boasts one of the planet's greatest concentrations of cultural attractions. From royal palaces to the people's parliament, from Roman ruins to castles and cathedrals, you could spend endless days exploring London's sites without ever running out of unique things to see and do.</p>
    <p>1. Buckingham Palace and the Changing of the Guard</p>
	<p>One of Britain's most iconic buildings, Buckingham Palace is also the scene of London's most popular display of pomp and circumstance, the Changing of the Guard. Drawing crowds at 11:30am in every season, this colorful and free display of precision marching and music also takes place at St James's Palace where you can follow the band along The Mall as they march between sites.

Buckingham Palace was built in 1837 and has been the London residence of the Royal Family since Queen Victoria's accession. If you're wondering whether the Queen is in, look at the flagpole atop the building: if the royal standard is flying day and night, she's at home. On special state occasions, she and members of the Royal Family may even emerge on the central balcony.</p>
	<p>2. The British Museum</p>
	<p>Displaying one of the world's finest collections of antiquities, the British Museum contains more than 13 million artifacts from the ancient world. With priceless objects from Assyria, Babylonia, China, Europe, and elsewhere, it's hard to know where to begin. But most tourists head first for the museum's most famous exhibits: the controversial Elgin Marbles from the Parthenon, the Rosetta Stone, the colossal bust of Rameses II, the Egyptian mummies, and the spectacular hoard of 4th-century Roman silver known as the Mildenhall Treasure.</p>
	<br/>
</div>
<div class="project-content";' style='display:none;' id='businessx3'><br/>&nbsp;
<br/>&nbsp;<p>
    From the boulevards of Paris to the fashionable seaside resorts of the Côte d'Azur, France offers some of the most beautiful scenery in the world. France delights romantics with fairy-tale castles, soaring cathedrals, and picture-perfect villages, yet still impresses realists with its progressive, contemporary style. Begin with the Eiffel Tower, the modern emblem of France. Then discover famous masterpieces of art at the Louvre Museum. Spend a day pretending to be royalty at the elegant Palace of Versailles. Save time for leisurely gourmet meals; traditional French gastronomy has been inscribed on the UNESCO list of Intangible Cultural Heritage. Each region has its own distinctive cuisine and culture. Quaint fishing villages of Brittany specialize in crêpes and seafood, while cozy chalets in the French Alps serve hearty cheese fondue with charcuterie. Indulge in it all and savor the irresistible charm of France.</p>
    <p>1. Eiffel Tower</p>
	<p>The symbol of Paris, the Eiffel Tower is one of the world's most famous landmarks. This feat of ingenuity is a structure of 8,000 metallic parts, designed by Gustave Eiffel as a temporary exhibit for the World Fair of 1889. Originally loathed by critics, the 320-meter-high tower is now a beloved and irreplaceable fixture of the Paris skyline. The structure's unique gracefulness has earned it the nickname of "Iron Lady." Visitors are impressed by the tower's monumental size and the breathtaking panoramas at each of the three levels. Tourists can dine with a view at the first level or indulge at the Michelin-starred Jules Vernes restaurant on the second level. At the exhilarating height of 276 meters, the top level offers a sweeping outlook over the city of Paris and beyond-extending as far as 70 kilometers on a clear day.</p>
	<p>2. Louvre Museum</p>
	<p>In the former royal palace of French Kings, the Louvre is an incomparable museum that ranks among the top European collections of fine arts. Many of Western Civilization's most famous works are found here including the Mona Lisa by Leonardo DaVinci, the Wedding Feast at Cana by Veronese, and the 1st-century-BC Venus de Milo sculpture. The collection owes its wealth to the contributions of various kings who lived in the Louvre. Other pieces were added as a result of France's treaties with the Vatican and the Republic of Venice, and from the spoils of Napoléon I. The Louvre has an astounding collection of 30,000 artworks, including countless masterpieces. It's impossible to see it all in a day or even in a week. Focus on a shortlist of key artworks for the most rewarding experience.</p>
	<br/>
</div>
<div class="project-content";' style='display:none;' id='businessx4'><br/>&nbsp;
<br/>&nbsp;<p>
    Italy is one of the most visited countries in all of Europe, known for its fascinating cities, ancient sights, cultural treasures, and beautiful scenery. There are so many choices for travelers it's hard to know where to begin. Many people start with the major cities of Rome, Venice, Florence, Milan, and Naples. Others, seeking something a little different, head for Sicily, the Amalfi Coast, or the Cinque Terra to hike between the hillside villages that line the coast. Italy's landscape offers a diverse mix of mountains, islands, beaches, and rolling countryside, which also provide a plenitude of recreational opportunities.</p>
	<p>1.  Colosseum</p>
	<p>For travelers making their way through Italy, the Colosseum is a must see. This huge Amphitheater is the largest of its kind ever built by the Roman Empire and has remained a model for sports facilities right up to modern times. Today the structure stands in stark contrast to the modern development that surrounds it, and is a prominent reminder of ancient times and the extensive history of Rome.</p>
	<p>2. Venice Canals</p>
	<p>A gondola ride through the canals of Venice is a tradition that travelers have been participating in for centuries. Venice is a city of islands and the canals have long been, in many ways, the city's streets. Lining the canals are the old buildings which have remained relatively unchanged for hundreds of years, adding to the romantic charm. The Grand Canal is the most famous of these waterways and one of the most photographed sites in Venice</p>
    <br/>
</div>
</p>
</div>
			</fieldset>
			<!-- .try------------------------------------------------------------------------------------------------------------------------ -->
		
			
			
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
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>
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
							<h2>Weather</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>
							<p>
								<?php
include('ip2locationlite.class.php');
 
//Load the class
$ipLite = new ip2location_lite;
$ipLite->setKey('0f9539e141e7cd69ac186fc4158820ccdf862adc7a8d46062ab6ed7c9f319b86');
 
//Get errors and locations
#$locations = $ipLite->getCity($_SERVER['REMOTE_ADDR']);
$locations = $ipLite->getCity('174.5.48.144');
$errors = $ipLite->getError();
 
//Getting the result
echo "<p>\n";
echo "<strong>First result</strong><br />\n";
if (!empty($locations) && is_array($locations)) {
  foreach ($locations as $field => $val) {
    echo $field . ' : ' . $val . "<br />\n";
if($field=='latitude')
{
$lat=$val;
}
if($field=='longitude')
{
$long=$val;
}
  }
}

 
//Show errors
//echo "<p>\n";
//echo "<strong>Dump of all errors</strong><br />\n";
if (!empty($errors) && is_array($errors)) {
  foreach ($errors as $error) {
    echo var_dump($error) . "<br /><br />\n";
  }
} else {
  //echo "No errors" . "<br />\n";
}
echo "</p>\n";
$api_2 = 'http://api.openweathermap.org/data/2.5/weather?lat=' . $lat . '&lon=' . $long . '&appid=af00bfa7e6be6ffd6c249c0106ecee0b';
$weather = file_get_contents($api_2);
?>
							</p>
							<p>
							<?php echo $weather; ?>
							</p>
						</div>
					</div> <!-- .project-content -->

					<a href="#0" class="close-project">Close</a>
				</div> <!-- .project-wrapper -->
			</li>

			<li class="right-face project-8">
				<div class="project-wrapper">
					<div class="project-image">
						<div class="project-title">
							<h2>My Doctor</h2>
						</div>
					</div> <!-- .project-image -->

					<div class="project-content">
						<div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>

							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique eius ea sequi distinctio autem repellat, libero esse nam. Quam nesciunt nobis iure cupiditate neque hic magnam optio assumenda unde sequi. Rem cumque iure cum reprehenderit repellendus, autem voluptates maxime ipsa numquam libero nobis saepe laudantium amet praesentium voluptatibus, fuga eveniet.
							</p>
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
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/script1.js"></script>
</html>