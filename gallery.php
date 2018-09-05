
<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Gallery' ;
	$description = 'Final Project' ;
	$author = 'WEI-HSUAN,WONG' ;
	
	// Display the header which uses the above variables.
	include 'headerfinal.php' ;
?>
<body>
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
		<div class="familypicturehero-image">
			<div class="hidden hero-text">
				
				<h1>Welcome to Gallery</h1>	
				
			</div>
			<div class="text-block">
				<h4>Wesley</h4>
				<p><img src="images/icon.png"  alt="icon" width="20" height="20">Sensoji</p>
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
		<div class="contentgallery">	
			<div class="galleryrow">
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/Airport.jpg" alt="Airport" >
					<div class="galleryoverlay">
						<div class="gallerytext">Taiwan Taoyuan Airport</div>
					</div>
					
					
				</div>
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/Bropicture.jpg" alt="Bropicture">
					<div class="galleryoverlay">
						<div class="gallerytext">Ooedo Onsen Monogatari</div>
					</div>
					
				</div>
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/FamilyPicture.jpg" alt="FamilyPicture" >
					<div class="galleryoverlay">
						<div class="gallerytext">Tokyo DisneySea</div>
					</div>
					
				</div>
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/Familypicture1.jpg" alt="Familypicture1" >
					<div class="galleryoverlay">
						<div class="gallerytext">Odaiba</div>
					</div>
					
				</div>
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/Familypicture2.jpg" alt="Familypicture2">
					<div class="galleryoverlay">
						<div class="gallerytext">MeijiJingu</div>
					</div>
					
				</div>
				<div class="gallerycolumn">
					
					<img src="images/FamilyPicture/Home.jpg" alt="home">
					<div class="galleryoverlay">
						<div class="gallerytext">My home</div>
					</div>
					
				</div>
				
				
				
			</div>
			<br>		
			
		</div>
		<a href=#home class="top">Top</a>
		<?php include 'footer.php';?><a id=contactme></a>
	</div>	
	
	<script src="finalproject.js"></script>		
</body>
</html>		