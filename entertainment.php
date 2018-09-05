<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Entertainment' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>
<body onscroll="myFunction()">	
	<div class="content">
		<a id=home></a>
		<header>
		<a href="https://chelan.highline.edu/~wesley16838/csci202/finalproject/index.php"><img class="wow fadeIn" data-wow-delay=".4s" src="images/newlogo.png"  alt="logo"></a>
		</header>
		<div class="entertainmenthero-image wow fadeIn">
			<div class="hero-text wow fadeIn" data-wow-delay=".4s">
				
				<h1>TOKYO ONE PIECE TOWER</h1>	
				
			</div>
			<div class="text-block wow fadeInLeft" data-wow-delay=".4s">
				<h4>Toyoko Tower</h4>
				<p><img src="images/icon.png"  alt="icon" width="20" height="20">4-2-8 Shiba Koen, Minato Ward, Tokyo</p>
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
		
		<div class="row">
			<div class="hotelcolumn wow fadeIn">
				<h2>About Tokyo One Piece Tower</h2><img src="images/why.png" class="icon" alt="icon"><hr>
				<p class="indent">This is the first ever large-scale theme park for the popular Japanese anime “ONE PIECE”. “ONE PIECE” is Japan’s most popular anime. It has been published overseas in more than 35 countries and regions. The popular anime version airs in over 40 countries and regions. Over 320 million copies have been published worldwide so far. When you step into the park, you enter “Tongari Island,” an original island. The island is a fun world where elders, islanders, and pirates swagger about! You can enjoy this theme park even you don’t know anything about “ONE PIECE.” There are safe attractions for the kids to play on, popular live attractions, restaurants and cafe, as well as goods shops (1F).</p>
				<a href="https://onepiecetower.tokyo/?lang=en" class="button"><span>Official Website</span></a>			
				
			</div>
			
			<div class="hotelcolumn wow fadeIn">
				<h2>Information</h2><hr>
				<p class="bold">Tokyo One Piece Tower</p>
				<p class="indent"><img src="images/icon.png" class="icon" alt="icon">Location:4-2-8 Shiba Koen, Minato Ward, Tokyo</p>
				<p class="indent"><img src="images/phone.png" class="icon" alt="icon">TEL：+81 3-5777-5308</p>
				<p class="indent"><img src="images/time.png" class="icon" alt="icon">Park Hours：10: 00-22:00 (last admission 21:00)</p>				
				<p class="indent"><img src="images/map.png" class="icon" alt="icon">Map</p>
				<div id="map" ></div><br>				
				<a href="https://www.google.com/maps/place/35%C2%B039'31.0%22N+139%C2%B044'43.7%22E/@35.658621,139.7432823,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d35.658621!4d139.745471?hl=en" class="button"><span>See map</span></a></button>
			</div>
			
			<div class="hotelcolumn wow fadeIn">
				<h2>Tickets</h2><hr>
				<table class="border">
					<caption><h3><b>LIVE & PARK PASS</b></h3></caption>
					<thead>
						<tr><th>Tickets</th><th>Adult</th><th>Junior</th><th>Child</th></tr>
					</thead>
					<tbody>
						<tr><td>Advance ticket</td><td>3,000 yen</td><td>2,600 yen</td><td>1,500 yen</td></tr>
						<tr><td>Day ticket</td><td>3,200 yen</td><td>2,700 yen</td><td>1,600 yen</td></tr>
					</tbody>
				</table>	
				<br>
				<table class="border">
					<caption><h3><b>PARK PASS</b></h3></caption>
					<thead><tr><th>Tickets</th><th>Adult</th><th>Junior</th><th>Child</th></tr></thead>
					<tbody><tr><td>Advance ticket</td><td>2,000 yen</td><td>1,600 yen</td><td>500 yen</td></tr>
					<tr><td>Day ticket</td><td>2,200 yen</td><td>1,700 yen</td><td>600 yen</td></tr></tbody>
				</table>	
			</div>
			
			<div class="hotelcolumn wow fadeIn">
				<h2>Transportation</h2><hr>
				<table class="border">
					<caption><h3><b>Subway/JR</b></h3></caption>
					<thead><tr><th>Route</th><th>Exit station / exit</th><th>Distance</th></tr></thead>
					<tbody><tr><td>Metropolitan Subway Oedo Line</td><td>Akabanebashi Station / Akabanebashi Gate</td><td>5 minute walk</td></tr>
					<tr><td>Tokyo Metro Hibiya Line</td><td>Kamiyacho Station / Exit No.2</td><td>7 minute walk</td></tr>								
					<tr><td>Metropolitan Subway Mita Line</td><td>Onarimon Station / Exit No. A1</td><td>6 minute walk</td></tr>
					<tr><td>Metropolitan Subway Asakusa Line</td><td>Daimon Station / Exit A6</td><td>10 minute walk</td></tr>
					<tr><td>JR</td><td>Hamamatsucho Station / North Exit</td><td>15 minute walk</td></tr></tbody>
				</table>
				
			</div>
			
			
			<div class="hotelcolumn wow fadeIn">
				<h2>Tokyo One Piece Tower Gallery</h2><hr>
			<div class="row">
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show3.jpg" alt="show3" onclick="openImg('show3');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show4.jpg" alt="show4" onclick="openImg('show4');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show1.jpg" alt="show1" onclick="openImg('show1');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show6.jpg" alt="show6" onclick="openImg('show6');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show12.jpg" alt="show12" onclick="openImg('show12');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show8.jpg" alt="show8" onclick="openImg('show8');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show9.jpg" alt="show9" onclick="openImg('show9');">
			</div>
			<div class="hotelcolumn1 img1">
			<img src="images/TokyoTower/show10.jpg" alt="show10" onclick="openImg('show10');">
			</div>
			</div> 
			
			<div id="show3" class="expandedImg">
			<img src="images/TokyoTower/show3.jpg" alt="show3">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Monkey D. Luffy</div>
			</div>
			
			<div id="show4" class="expandedImg">
			<img src="images/TokyoTower/show4.jpg" alt="show4">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Tony Tony Chopper </div>
			</div>
			
			<div id="show1" class="expandedImg">
			<img src="images/TokyoTower/show1.jpg" alt="show1">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Live Show</div>
			</div>
			
			<div id="show6" class="expandedImg">
			<img src="images/TokyoTower/show6.jpg" alt="show6">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Stage</div>
			</div>	
			<div id="show12" class="expandedImg">
			<img src="images/TokyoTower/show12.jpg" alt="show7">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Nami</div>
			</div>
			
			<div id="show8" class="expandedImg">
			<img src="images/TokyoTower/show8.jpg" alt="show8">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Nico Robin</div>
			</div>
			
			<div id="show9" class="expandedImg">
			<img src="images/TokyoTower/show9.jpg" alt="show9">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Franky</div>
			</div>
			
			<div id="show10" class="expandedImg">
			<img src="images/TokyoTower/show10.jpg" alt="show10">
			<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
			<div class="imgtext">Sanji</div>
			</div>			
			</div>
			
			</div>
			<a href=#home class="top">Top</a>
			<div class="wow fadeIn"><?php include 'footer.php';?><a id=contactme></a></div>
			</div>	
			
			<script src="finalproject.js"></script>		
			</body>
			</html>																									