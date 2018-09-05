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
		<h1>Resize the browser window to see how the image will scale.</h1>		
		<picture>			
			<source srcset="images/MeijiJingu/MeijiJingu19.jpg" media="(min-width:60em)">
			<source srcset="images/TokyoDisneySea/DisneyShow.jpg" media="(min-width:40em)">		
			<img class="imageresize" src="images/gallery.jpg" alt="gallery" style="width:auto;">
		</picture>					
		
		<a href=#home class="top">Top</a>
		<?php include 'footer.php';?><a id=contactme></a>
	</div>	
	
	
</body>
</html>		