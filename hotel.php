<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo hotel' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>
<body onscroll="myFunction()">	
	<div class="content">
		<a id=home></a>
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
		<div class="hotelhero-image">
			<div class="hero-text">
				
				<h1>Toyoko INN in Tokyo</h1>	
				
			</div>
			<div class="text-block">
				<h4>Toyoko Inn Tokyo Nihombashi Zeimusho Mae</h4>
				<p><img src="images/icon.png" alt="icon" width="20" height="20">11-5 Nihonbashitomizawacho, Chuo, Tokyo 103-0006</p>
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
			<div class="hotelcolumn">
				<h2>Why Toyoko INN</h2><img src="images/why.png" class="icon" alt="icon"><hr>
				<p class="indent">Toyoko INN offers a safe, clean comfortable rooms & environment with reasonable rate.
				Enjoy traditional warm-hearted Japanese service and comfortable stay at our modern hotels, which are located near to the railway stations or airports. Besides, the price is cheaper than other hotel's price. Toyoko-INN is very suitable for backpacker.</p>
				<a href="https://www.toyoko-inn.com/eng" class="button"><span>Official Website</span></a>				
				
			</div>
			
			<div class="hotelcolumn">
				<h2>Hotel Information</h2><hr>
				<p class="bold">Toyoko Inn Tokyo Nihombashi Zeimusho Mae</p>
				<p class="indent"><img src="images/icon.png" class="icon" alt="icon">Location : 11-5 Nihonbashitomizawacho, Chuo, Tokyo 103-0006</p>
				<p class="indent"><img src="images/phone.png" class="icon" alt="icon">TEL：03-3661-1045  FAX：03-3661-1046</p>
				<p class="indent"><img src="images/about.png" class="icon" alt="icon">About : Toyoko Inn Co., Ltd. (株式会社東横イン Kabushiki Kaisha Tōyoko In) is a chain of no-frills business hotels in Japan.</p>
			</div>
			
			<div class="hotelcolumn">
				<h2>Access</h2><hr>
				<p class="indent">2 minutes walk from the A1 exit of Bakuro-Yokoyama Station
					on the Toei Subway Shinjuku Line or Higashi-Nihombashi Station on the Toei Subway Asakusa Line.	
					3 minutes walk from the No.1 exit of Bakuro-cho Station on JR Sobu Main Line.	
					It is the nearest in the hotel of Toyoko from Tokyo Station. 
					(It takes about 5 minutes by train)
				*HYPERDIA timetable--<a  href="http://www.hyperdia.com/">http://www.hyperdia.com/</a></p>
				<a href="https://www.google.co.jp/maps/place/35%C2%B041'28.8%22N+139%C2%B046'51.3%22E/@35.691332,139.7787353,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x0!8m2!3d35.691332!4d139.780924?hl=en" class="button"><span>See map</span></a>				
			</div>
			
			<div class="hotelcolumn">
				<h2>Room Information</h2><hr>
				<table class="border">
					<caption><h3><b>Room information</b></h3></caption>
					<thead><tr><th>Room type</th><th>Regular Room Rate</th></tr></thead>
					<tbody>
						<tr><td>Single Room</td><td>[Weekday & Sun]	¥7,300(¥7,884)<br>[Sat & Pre-Holiday] ¥7,800(¥8,424)</td></tr>
						<tr><td>Economy Double Room</td><td>[Weekday & Sun]	¥8,300(¥8,964)<br>[Sat & Pre-Holiday] ¥9,300(¥10,044)</td></tr>
						<tr><td>Economy Twin Room</td><td>[Weekday & Sun] ¥9,300(¥10,044)<br>[Sat & Pre-Holiday] ¥10,300(¥11,124)</td></tr>
						<tr><td>King Double</td><td>[Weekday & Sun]	¥9,300(¥10,044)<br>[Sat & Pre-Holiday] ¥10,300(¥11,124)</td></tr>
						<tr><td>Accessible Twin Room</td><td>[Weekday & Sun] ¥10,300(¥11,124)<br>[Sat & Pre-Holiday] ¥11,300(¥12,204)</td></tr>
					</tbody>				
				</table>
				
			</div>
			
			
			<div class="hotelcolumn">
				<h2>Hotel Gallery</h2><hr>
				<div class="row">
					<div class="hotelcolumn1 img1">
						<img src="images/Toyoko-INN/double.jpg" alt="doubleroom" onclick="openImg('doubleroom');">
					</div>
					<div class="hotelcolumn1 img1">
						<img src="images/Toyoko-INN/Toyoko-INN-1.jpg" alt="Twin" onclick="openImg('Twin');">
					</div>
					<div class="hotelcolumn1 img1">
						<img src="images/Toyoko-INN/Toyoko-INN-2.jpg" alt="selfie" onclick="openImg('selfie');">
					</div>
					<div class="hotelcolumn1 img1">
						<img src="images/Toyoko-INN/Toyoko-INN-Vending-machine.jpg" alt="beverage" onclick="openImg('beverage');">
					</div>
				</div> 
				<div id="doubleroom" class="expandedImg">
					<img src="images/Toyoko-INN/double.jpg" alt="doubleroom">
				<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
				<div class="imgtext">Doubleroom</div>
				</div>
				
				<div id="Twin" class="expandedImg">
					<img src="images/Toyoko-INN/Toyoko-INN-1.jpg" alt="Twin">
					<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
					<div class="imgtext">Twin Room</div>
				</div>
				
				<div id="selfie" class="expandedImg">
					<img src="images/Toyoko-INN/Toyoko-INN-2.jpg" alt="selfie">
					<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
					<div class="imgtext">Selfie</div>
				</div>
				
				<div id="beverage" class="expandedImg">
					<img src="images/Toyoko-INN/Toyoko-INN-Vending-machine.jpg" alt="beverage">
					<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
					<div class="imgtext">vending machine</div>
				</div>				
			</div>
			
		</div>
		<a href=#home class="top">Top</a>
		<?php include 'footer.php';?><a id=contactme></a>
	</div>	
	
	<script src="finalproject.js"></script>		
</body>
</html>										