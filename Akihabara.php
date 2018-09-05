<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Akihabara ' ;
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
		
		<div class='akislider'>
			<div class='akislide1'><div class="hidden text">Welcome to Akihabara <br></div><div class="text-block"><h4>Akihabara</h4><p><img src="images/game.png" alt="icon" width="20" height="20"> Tokyo's Electric Town</p></div></div>
			<div class='akislide2'><span class="text">Welcome to Akihabara <br></span><div class="text-block"><h4>Akihabara</h4><p><img src="images/game.png" alt="icon" width="20" height="20"> Tokyo's Electric Town</p></div></div>
			<div class='akislide3'><span class="text">Welcome to Akihabara <br></span><div class="text-block"><h4>Akihabara</h4><p><img src="images/game.png" alt="icon" width="20" height="20"> Tokyo's Electric Town</p></div></div>
			<div class='akislide4'><span class="text">Welcome to Akihabara <br></span><div class="text-block"><h4>Akihabara </h4><p><img src="images/game.png" alt="icon" width="20" height="20"> Tokyo's Electric Town</p></div></div>
			<div class='akislide5'><span class="text">Welcome to Akihabara <br></span><div class="text-block"><h4>Akihabara </h4><p><img src="images/game.png" alt="icon" width="20" height="20"> Tokyo's Electric Town</p></div></div>
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
				<h2><img src="images/game.png" class="icon" alt="icon"> About Akihabara</h2><hr>
				
				<p class="indent">Akihabara (秋葉原), also called Akiba after a former local shrine, is a district in central Tokyo that is famous for its many <span class="p-red-style">electronics shops</span>. In more recent years, Akihabara has gained recognition as the center of Japan's otaku (diehard fan) culture, and many shops and establishments devoted to <span class="p-red-style">anime and manga</span> are now dispersed among the electronic stores in the district. On Sundays, Chuo Dori, the main street through the district, is closed to car traffic from 13:00 to 18:00 (until 17:00 from October through March).</p>
				
				<a href="https://www.google.co.jp/maps/place/Akihabara,+Tait%C5%8D,+Tokyo+110-0006,+Japan/@35.7022077,139.7722649,17z/data=!3m1!4b1!4m5!3m4!1s0x60188ea73ea6f4ff:0x5eb9f1e50fe061e3!8m2!3d35.7022051!4d139.7741464?hl=en" target="_blank" class="button"><span>See map</span></a>		
				
			</div>
			
			<div class="hotelcolumn">
			
				<h2><img src="images/game.png" class="icon" alt="icon"> 5 Best Things to Do in Akihabara </h2><hr>
				<img src="images/Akihabara/Akihabara1.jpg" alt="Akihabara1" class="left smallimg">
				<p class="bold">1. Visit AKB48 Cafe and Shop</p>
				<p class="indent">We all know Japan’s AKB48, a massively popular J-Pop girl group which has lots and lots of girls (48 girls to be exact). There’s something you may not notice is that AKB actually stands for AKiBa (in Akihabara) – where the group got their start. Not just offers sweet treats but AKB48 Shop also is a boutique selling all things related to the girls. </p><hr>
				<img src="images/Akihabara/Akihabara10.jpg" alt="Akihabara10" class="right smallimg">
				<p class="bold">2. Visit the exhibition on Tokyo Anime Center</p>
				<p class="indent">Tokyo Anime Center located on the 4th floor of UDX Building of Akihabara Crossfield. It hosts exhibitions and events related to anime, and of couse, has a shop that sells toys, stationery and other souvenirs, of anime/ manga characters as well as figures.</p><hr>			
				<img src="images/Akihabara/Gachapon.jpg" alt="Gachapon" class="left smallimg">
				<p class="bold">3.Play Gachapon</p>
				<p class="indent">Gachapon is a special kind of Japanese vending machine, but instead of dropping drinks or foods, this machine drops small (but super cute) prizes, especially each Gachapon machine drops different prizes and specializes mostly about manga, anime, games, movies and small toys such as miniature animals or foods. </p><hr>
				<img src="images/Akihabara/Akihabara8.jpg" alt="Akihabara8" class="right smallimg">
				<p class="bold">4. Play games at Arcades</p>
				<p class="indent">Japan also very famous for its arcade culture, which is games centers, where you can play almost all the coin game for 100yen each round. Games are various, from action, gambling, or sports (basketball), and prizes (U.F.O) catcher, etc.</p><hr>
				<img src="images/Akihabara/souvenir.jpg" alt="souvenir" class="left smallimg">
				<p class="bold">5.Shop anime goods at Mandarake</p>
				<p class="indent">It is the biggest place for collectibles which consists of eight floors selling everything about anime, TV superheroes, characters and mascots, and manga comics, new and used. If you are a fan of any Japanese anime, manga, games, or movies, ANY entertainment idols as well as under any platform, this is a good place to visit. I’m sure you will see your favorites figures or watching people playing card games!</p><hr>
			</div>
			
			<div class="hotelcolumn">
				<h2><img src="images/game.png" class="icon" alt="icon"> Top 5 shops</h2><hr>
				<p class="bold">1. Yodobashi Akihabara - <img src="images/icon.png" alt="icon" width="20" height="20">Address: 1-1 Kanda Hanaokacho, Chiyoda, Tokyo 101-0028</p>
				<p class="bold">2. Super Potato - <img src="images/icon.png" alt="icon" width="20" height="20">Address: 1 Chome-11-2 Sotokanda, Chiyoda, Tokyo 101-0021</p>
				<p class="bold">3. Akihabara Radio kaikan - <img src="images/icon.png" alt="icon" width="20" height="20">Address: 1-15-16, Sotokanda, Chiyoda-ku, Tokyo, 101-0021</p>
				<p class="bold">4. Akihabara Gachapon Kaikan - <img src="images/icon.png" alt="icon"  width="20" height="20">Address: 3 Chome-15-5 Sotokanda, Chiyoda, Tokyo 104-0061</p>
				<p class="bold">5. Don Quijote Akihabara Branch - <img src="images/icon.png" alt="icon" width="20" height="20">Address: 4-3-3 Sotokanda Chiyoda-ku Tokyo,JAPAN, 101-0021</p>
			</div>
			
		</div>
		<a href=#home class="top">Top</a>
		<?php include 'footer.php';?><a id=contactme></a>
	</div>
	<script src="finalproject.js"></script>							
</body>
</html>			