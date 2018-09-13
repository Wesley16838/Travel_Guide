<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>
<body onscroll="myFunction()">
	<!-- Content of the page goes here. -->
	<div class="content">
		<a id=home></a>
		<header>
		<a href="http://www.wesleywong.xyz/Travel_Guide/index.php"><img class="wow fadeIn"  src="images/newlogo.png"  alt="logo"></a>
		</header>
		<div class='slider'>										
			<div class='slide1'>	<span class="text wow fadeIn" data-wow-delay=".4s" >Welcome to Tokyo<br></span><div class="text-block wow fadeIn"><h4>Akihabara</h4><p>01/14/2017</p></div></div>
			<div class='slide2'>	<span class="text">Welcome to Tokyo<br></span><div class="text-block"><h4>GhibliMuseum</h4><p>01/13/2017</p></div></div>
			<div class='slide3'>	<span class="text">Welcome to Tokyo<br></span><div class="text-block"><h4>Harajuku</h4><p>01/11/2017</p></div></div>
			<div class='slide4'>	<span class="text">Welcome to Tokyo<br></span><div class="text-block"><h4>MeijiJingu</h4><p>01/11/2017</p></div></div>
			<div class='slide5'>	<span class="text">Welcome to Tokyo<br></span><div class="text-block"><h4>Shibuya</h4><p>01/12/2017</p></div></div>
		</div>
		<div id="navbar">
			<div id="menu">&#x2261; Menu</div>
			<ul>
				
				<li><a href="index.php#whytokyo">Why Tokyo</a></li>
				<li><a href="index.php#planyourtrip">Plan Your Trip</a></li>
				<li><a href="index.php#exploretokyo">Explore Tokyo</a></li>
				<li><a href="index.php#transportation">Transport</a></li>
				<li><a href="index.php#gallery">Gallery</a></li>
				<li><a href="index.php#contactme">Contact me</a></li>
			</ul>
		</div>
		<a id=whytokyo></a>
		<article>
			<p class="title wow fadeIn" data-wow-duration="2s">Why I LOVE Tokyo</p><hr class="wow fadeIn"  data-wow-delay=".1s">					
			<p class="intro wow fadeIn" data-wow-delay=".2s">I went backpacking in Tokyo, Japan in January 2017 with my friends. I was continuously surprised by amazing scenery in every corner. Besides, I enjoyed in every beautiful encounters in the such a vibrant city. Tokyo has everything you can ask of a city, and has it in spades : a prosperity, cosmopolitan dining scene, more cafes and bars than you could visit in a lifetime, developed transportation system and grassy parks-plus it is clean and safe. Why not fall in love with Tokyo?</p>
			<p class="bold wow fadeIn" data-wow-delay=".2s"> - By Wei-Hsuan Wong(2017)</p>
		</article>
		
		<a id=planyourtrip></a>
		<article>		
			<p class="title wow fadeIn" data-wow-duration="2s">Plan Your Trip</p><hr class="wow fadeIn"  data-wow-delay=".1s">
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/Nightlife.php" target="_blank"><img src="images/Shibuya/Shibuya1.jpg" class="image1" alt="nightlife">	
						<span class="imagetext">Nightlife</span>
					</a>						
				</section>
				<span class="overlay">Shopping,Night view</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/eating.php" target="_blank"><img src="images/Dessert/food2.jpg" class="image1" alt="eating">	
						<span class="imagetext">Eating</span>
					</a>	
				</section>
				<span class="overlay">Breakfast,Dessert</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/hotel.php" target="_blank"><img src="images/Toyoko-INN/Toyoko-INN-DeluxeTwinRoom.jpg" class="image1" alt="nightlife">
						<span class="imagetext">Hotels</span>
					</a>	
				</section>
				<span class="overlay">Toyoko-INN</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/entertainment.php" target="_blank"><img src="images/TokyoTower/TokyoTower10.jpg" class="image1" alt="entertainment">	
						<span class="imagetext">Entertainment</span>
					</a>	
				</section>
				<span class="overlay">Activity & Festivals etc</span>
			</div>
		</article>
		
		<a id=exploretokyo></a>
		<article>
			<p class="title wow fadeIn" data-wow-delay=".3s" data-wow-duration="2s">Explore Tokyo</p><hr class="wow fadeIn"  data-wow-delay=".1s">				
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/Akihabara.php" target="_blank"><img src="images/Akihabara/Akihabara8.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">Akihabara</span>
					</a>	
				</section>
				<span class="overlay">Anime and Manga</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<img src="images/GhibliMuseum/GhibliMuseum1.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">GhibliMuseum</span>
						
				</section>
				<span class="overlay">coming soon</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<img src="images/Harajuku/Harajuku9.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">Harajuku</span>
						
				</section>
				<span class="overlay">coming soon</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/MeijiJingu.php#home" target="_blank"><img src="images/MeijiJingu/MeijiJingu15.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">MeijiJingu</span>
					</a>	
				</section>
				<span class="overlay">Popular shrines in Tokyo</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<img src="images/Odaiba/Odaiba2.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">Odaiba</span>
					
				</section>
				<span class="overlay">coming soon</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<img src="images/Shibuya/Shibuya2.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">Shibuya</span>
						
				</section>
				<span class="overlay">coming soon</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<a href="http://www.wesleywong.xyz/Travel_Guide/disney.php" target="_blank"><img src="images/TokyoDisneySea/Mikey.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">TokyoDisneySea</span>
					</a>	
				</section>
				<span class="overlay">Theme Park</span>
			</div>
			<div>
				<section class="wow fadeIn"  > 
					<img src="images/TokyoTower/TokyoTower2.jpg" class="image1" alt="Akihabara">	
						<span class="imagetext">TokyoTower</span>
						
				</section>
				<span class="overlay">coming soon</span>
			</div>
		</article>
		
		<a id=transportation></a>
		<div class="fullscreen wow fadeIn">
			
			
			
			<div class="column">
				<div class="columntransportation">
					<div class="title">Transportation</div>
					<p>Tokyo is covered by a dense network of train, subway, which are operated by about a dozen different companies. The train lines operated by JR East and the subway lines are most convenient for moving around central Tokyo.</p>
				    <a href="" class="button1 disabled">coming soon</a>
				</div>
				<div class='translider'>
					<div class='translide1'></div>
					<div class='translide2'></div>
					<div class='translide3'></div>
					<div class='translide4'></div>
					<div class='translide5'></div>
				</div>
				
				
				
			</div>
		</div>
		
		
		<a id=gallery></a>
		<div class="galleryfullscreen wow fadeIn">	
			<div class="backgroundcolor">
				<div class="gallerybox">
					<div class="title">Gallery</div>			
				</div>
				<div class="galleryimage">
					<a href="http://www.wesleywong.xyz/Travel_Guide/gallery.php" target="_blank"><img src="images/gallery.jpg" alt="JR"><div class="overlay1"><span class="transtext1">Read More</span></div></a>		
				</div>				
			</div>
		</div>
		
		<a href=#home class="top">Top</a>
		<div class="wow fadeIn"><?php include 'footer.php';?><a id=contactme></a></div>
		
	</div>
	<!-- link to external JS file -->
	<script src="finalproject.js"></script>							
</body>
</html>										