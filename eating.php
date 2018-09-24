<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Eating' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>
<body onscroll="myFunction()">	
	<div class="content">
	<a id=home></a>
		<header>
		<a href="http://www.wesleywong.xyz/Travel_Guide/index.php"><img class="wow fadeIn" data-wow-delay=".4s" src="images/newlogo.png"  alt="logo"></a>
		</header>
		<div class="eatinghero-image wow fadeIn">
			<div class="hero-text wow fadeIn" data-wow-delay=".4s">
				
				<h1>Enjoy Cuisine in Japan</h1>	
				
			</div>
			<div class="text-block wow fadeInLeft" data-wow-delay=".4s">
				<h4>Eggs'n Things</h4>
				<p><img src="images/icon.png"  alt="icon" width="20" height="20">4-30-2 Jingumae, Shibuya-ku Tokyo</p>
			</div>
		</div>
		<div id="navbar">
			<ul>
				<li><a href="index.php#whytokyo">Why Tokyo</a></li>
				<li><a href="index.php#planyourtrip">Plan Your Trip</a></li>
				<li><a href="index.php#exploretokyo">Explore Tokyo</a></li>
				<li><a href="index.php#transportation">Transport</a></li>
				<li><a href="index.php#gallery">Gallery</a></li>
				<li><a href="index.php#contactme">Contact me</a></li>
			</ul>
		</div>
		
		<div class="row wow fadeIn">
			<div class="nightlifecolumn">
				<h2>Eggs'n Things</h2><hr>
				<img src="images/Dessert/Breakfastfamily.jpg" class="img" alt="Tokyo station">
				<p class="address bold">Eggs 'n Things Harajuku</p>
				<p class="address bold"><img src="images/icon.png" class="icon" alt="icon"> 4-30-2 Jingumae, Shibuya-ku Tokyo </p>
				<p class="bold"><img src="images/time.png" class="icon" alt="time"> Open time</p>
				<p class="bold">Mon-Fri:9am-10.30pm (last orders 9.30pm)</p>
				<p class="bold">Sat, Sun & hols:8am-10.30pm (9.30pm)</p>
				<p class="indent">2015 marked the 40th anniversary of this popular Hawaiian pancake house, whose first Japanese branch can be found in Harajuku. Originally based in Oahu, the shop is well known in its native locale for its pancakes, omelettes, egg dishes and locos, with diners queuing out the door. Japanese tourists in Hawaii are especially big fans, bringing back the shop’s special pancake mix as a souvenir, and since coming to Tokyo, the love affair with their pancakes shows no sign of growing cold. The Harajuku shop consists of a terrace and two indoor floors that are big on Hawaiian atmosphere, with light pouring in. Menu-wise, plain pancakes start at ¥700 and on the high end, topped with banana whipped cream and macadamia nuts, they will run about ¥1,150. Beyond pancakes, omelettes and eggs benedict, a slew of different kinds of waffles and crêpes are also on offer, ready to be topped with a variety of speciality syrups like guava and coconut, in addition to the traditional maple.</p>
			</div>
			
			<div class="nightlifecolumn">
				<h2>Ichiran ramen</h2><hr>
				<img src="images/Dessert/food3.jpg" class="img" alt="Ichiran ramen">
				<p class="address bold">Ichiran Ramen</p>
				<p class="indent bold"><img src="images/icon.png" class="icon" alt="icon"> 6-5-6 Jingumae, Shibuya, Tokyo Prefecture</p>								
				<p class="bold"><img src="images/time.png" class="icon" alt="time"> Open time</p>
				<p class="bold">10:00 AM - 10:45 PM</p>
				<p class="indent">Ichiran Ramen (一蘭 Ichiran) is a Japanese ramen food-service business specializing in tonkotsu ramen.The chain restaurant began in Fukuoka as a humble ramen stall in 1960 named "Futaba Ramen". It was later re-named "Ichiran"in 1966. After three decades of serving ramen from a single location, under the leadership of CEO Manabu Yoshitomi it opened its first concept store in 1993, which became the blueprint for all future Ichiran ramen shop locations. The restaurant is distinctive for serving ramen to customers in individual booths along a counter, with a curtain separating the customer from the staff.</p>
				
			</div>
			
			<div class="nightlifecolumn">
				<h2>Bills</h2><hr>
				<img src="images/Dessert/bills.jpg" class="img" alt="Omoide Yokocho">
				<p class="address bold">Odaiba - Bills</p>
				<p class="indent bold"><img src="images/icon.png" class="icon" alt="icon"> Decks Tokyo Beach, Seaside Mall 3F, 1-6-1 Daiba, Minato-ku, Tokyo 135-0091</p>								
				<p class="bold"><img src="images/time.png" class="icon" alt="time"> Open time</p>
				<p class="bold">Mon-Fri: 9am – 11pm (Last orders: food 10pm, drinks 10.30pm)</p>
				<p class="bold">Weekend & Holidays:8am -11pm(Last orders: food 10pm, drinks 10.30pm)</p>						
				<p class="indent">Bills Odaiba is a resounding success, and it makes the other culinary offerings at Decks look positively dowdy in comparison. Yet there's a nagging sense of functionality to the place that could stop people falling for it as hard as they did with the Shichirigahama branch.</p>
			</div>
			
		</div>
		<a href=#home class="top">Top</a>
		<div class="wow fadeIn"><?php include 'footer.php';?><a id=contactme></a></div>
		</div>	
		
		<script src="finalproject.js"></script>		
	</body>
</html>