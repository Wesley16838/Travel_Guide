<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Disney' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>

<body onscroll="myFunction()">
	<!-- Content of the page goes here. -->
	<a id=home></a>
	<div class="content">
		<div class="nav">
			<ul>
				<li class="logo"><a href="https://chelan.highline.edu/~wesley16838/csci202/finalproject/index.php"><img src="images/logo.png"  alt="logo" width="126" height="28"></a></li>
				<li>
					<form>
						<input type="text" name="search" placeholder="Search">					
					</form>
				</li>
				<li><a href="https://www.facebook.com/"><img src="images/fb.png"  alt="fb" width="28" height="28"></a></li>
				<li><a href="https://www.instagram.com/"><img src="images/ig.png"  alt="ig"  width="28" height="28"></a></li>
				<li><a href="https://twitter.com/"><img src="images/twitter.png"  alt="twitter"  width="28" height="28"></a></li>		
				
				
			</ul>
		</div>
		
		<div class='disneyslider'>
			<div class='disneyslide1'><div class="hidden text">Welcome to Tokyo Disney Sea<br></div><div class="text-block"><h4>Tokyo Disney Sea</h4><p><img src="images/icon.png" alt="icon" width="20" height="20">Tokyo</p></div></div>
			<div class='disneyslide2'><span class="text">Welcome to Tokyo Disney Sea<br></span><div class="text-block"><h4>Tokyo Disney Sea</h4><p><img src="images/icon.png" alt="icon" width="20" height="20">Tokyo</p></div></div>
			<div class='disneyslide3'><span class="text">Welcome to Tokyo Disney Sea<br></span><div class="text-block"><h4>Tokyo Disney Sea</h4><p><img src="images/icon.png" alt="icon" width="20" height="20">Tokyo</p></div></div>
			<div class='disneyslide4'><span class="text">Welcome to Tokyo Disney Sea<br></span><div class="text-block"><h4>Tokyo Disney Sea</h4><p><img src="images/icon.png" alt="icon" width="20" height="20">Tokyo</p></div></div>
			<div class='disneyslide5'><span class="text">Welcome to Tokyo Disney Sea<br></span><div class="text-block"><h4>Tokyo Disney Sea</h4><p><img src="images/icon.png" alt="icon" width="20" height="20">Tokyo</p></div></div>
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
		<div class="row">
			<div class="hotelcolumn">
				<h2><img src="images/disney2.png" class="icon" alt="icon"> About Tokyo Disney Sea</h2><hr>
				<p class="indent">Tokyo DisneySea is a fantasy <span class="p-red-style">theme park</span> in <span class="p-red-style">Tokyo Disney Resort</span> that is unique to Japan. Inspired by the myths and legends of the sea, Tokyo DisneySea is made up of seven themed ports of call: <span class="p-red-style">Mediterranean Harbor, Mysterious Island, Mermaid Lagoon, Arabian Coast, Lost River Delta, Port Discovery and American Waterfront.</span>
While suitable for all ages, Tokyo DisneySea was designed to specifically also appeal to a more grown up audience. The park addresses the Japanese visitors' strong interest in good food by providing a wider selection of table service restaurants than Tokyo Disneyland and by serving alcoholic beverages, which are unavailable at the neighboring park.</p>
				<p class="bold"><img src="images/icon.png" class="icon" alt="icon"> Location:1-1 Maihama, Urayasu 279-0031, Chiba Prefecture</p>
				<p class="bold"><img src="images/time.png" class="icon" alt="icon"> Open hour:8:30 AM - 10:00 PM</p>
				<p class="bold"><img src="images/phone.png" class="icon" alt="icon"> Contact:+81 45-683-3333</p>
			    <a href="http://www.tokyodisneyresort.jp/en/tdr/about/pdf/EN_TDS_map.pdf" target="_blank" class="button"><span>See map</span></a>				
				
			</div>
			<div class="hotelcolumn">
			
				<h2><img src="images/disney1.png" class="icon" alt="icon"> Themed Ports</h2><hr>
				<a id=m></a><br><br>
				<img src="images/TokyoDisneySea/harbor.jpg" alt="harbor" class="left smallimg">
				<p class="bold">Mediterranean Harbor</p>
				<p class="indent">Mediterranean Harbor at the entrance to the park is styled after an <span class="p-red-style">Italian port town</span>. Its waterfront features Venice style canals and gondolas, and its buildings make up the Tokyo DisneySea Hotel MiraCosta. Large shows with boats and water fountains are held daily in the harbor.</p><hr>
				<a id=my></a><br><br>
				<img src="images/TokyoDisneySea/Mysterious.jpg" alt="Mysterious" class="right smallimg">
				<p class="bold">Mysterious Island</p>
				<p class="indent">Mysterious Island is found within the volcano at the heart of the park and is a page from the science fiction writings of Jules Verne. Here you can explore the depths of the ocean aboard one of Captain Nemo's submarines or journey to the center of the earth in one of his science vehicles.</p><hr>			
				<br><br>
				<img src="images/TokyoDisneySea/mermaid1.jpg" alt="mermaid" class="left smallimg">
				<p class="bold">Mermaid Lagoon</p>
				<p class="indent">Mermaid Lagoon allows surface dwellers to enter the undersea world of Ariel and her fishy friends from The Little Mermaid. This whimsical area of the park with its rides and shows is geared toward younger children.</p><hr>
				<a id=ar></a><br><br>
				<img src="images/TokyoDisneySea/Arabian.JPG" alt="Arabian" class="right smallimg">
				<p class="bold">Arabian Coast</p>
				<p class="indent">The Arabian Coast recreates the world of Aladdin and 1001 Arabian Nights. Here you can watch a magic show hosted by Genie or travel with Sinbad as he sets sail for discovery.</p><hr>
				<a id=l></a><br><br>
				<img src="images/TokyoDisneySea/Lost.jpg" alt="Lost" class="left smallimg">
				<p class="bold">Lost River Delta</p>
				<p class="indent">The Lost River Delta was built among the ruins of an ancient temple pyramid in the Central American jungle. The Indiana Jones Adventure ride explores the bowels of the temple ruins, while the Raging Spirits Roller Coaster rumbles along next door. The port also serves as a stop for the Tokyo DisneySea Transit Steamers which travel between the various parts of the park.</p><hr>
				<a id=p></a><br><br>
				<img src="images/TokyoDisneySea/Port.jpg" alt="Lost" class="right smallimg">
				<p class="bold">Port Discovery</p>
				<p class="indent">Port Discovery is the marina of the future where visitors can check out the StormRider, a type of virtual rollercoaster, or try out some of the experimental, self-guided watercraft that travel between the rocks, fountains and whirlpools of the Aquatopia attraction.</p><hr>
				<a id=a></a><br><br>
				<img src="images/TokyoDisneySea/water.jpg" alt="Lost" class="left smallimg">
				<p class="bold">American Waterfront</p>
				<p class="indent">The American Waterfront zone is styled after the 20th century harbor towns found around New York, New England and Cape Cod. The area features an elevated train, American styled restaurants and shops, a playhouse and the S.S. Columbia steam liner that houses a restaurant and lounge. It is also home to the Tower of Terror ride.</p>
			</div>
			<div class="hotelcolumn">
				<h2><img src="images/disney1.png" class="icon" alt="icon"> Top 10 Attractions</h2><hr>
				<p class="bold">10. Venetian Gondolas - <a href="disney.php#m"><img src="images/icon.png" alt="icon" width="20" height="20"> Mediterranean Harbor</a></p>
				<p class="bold">9. Aquatopia - <a href="disney.php#p"><img src="images/icon.png" alt="icon" width="20" height="20"> Port Discovery</a></p>
				<p class="bold">8. Raging Spirits - <a href="disney.php#l"><img src="images/icon.png" alt="icon" width="20" height="20"> Lost River Delta</a></p>
				<p class="bold">7. Journey to the Center of the Earth - <a href="disney.php#my"><img src="images/icon.png" alt="icon" width="20" height="20"> Mysterious Island</a></p>
				<p class="bold">6. Toy Story Mania - <a href="disney.php#a"><img src="images/icon.png" alt="icon" width="20" height="20"> American Waterfront</a></p>
				<p class="bold">5. 20000 Leagues Under the Sea - <a href="disney.php#my"><img src="images/icon.png" alt="icon" width="20" height="20"> Mysterious Island</a></p>
				<p class="bold">4. Fortress Explorations - <a href="disney.php#m"><img src="images/icon.png" alt="icon" width="20" height="20"> Mediterranean Harbor</a></p>
				<p class="bold">3. Indiana Jones Adventure: Temple of the Crystal Skull - <a href="disney.php#l"><img src="images/icon.png" alt="icon"  width="20" height="20"> Lost River Delta</a></p>
				<p class="bold">2. Tower of Terror - <a href="disney.php#a"><img src="images/icon.png" alt="icon" width="20" height="20"> American Waterfront</a></p>
				<p class="bold">1. Sindbad’s Storybook Village - <a href="disney.php#ar"><img src="images/icon.png" alt="icon" width="20" height="20"> Arabian Coast</a></p>
			</div>
			
		</div>
		<a href=#home class="top">Top</a>
		<?php include 'footer.php';?><a id=contactme></a>
	</div>
	<script src="finalproject.js"></script>							
</body>
</html>			