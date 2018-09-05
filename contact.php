
<?php
	// Define variables used in the HTML header for this page.
	$title = 'Travel Guide-Tokyo Contact' ;
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
	<div class="contactmehero-image">
		<div class="hidden hero-text">
			
			<h1>Contact me</h1>	
			
		</div>
		<div class="text-block">
			<h4>Wesley Studio</h4>
			<p>12/02/2017</p>
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
	<div class="contactmain">
		<form class="form-style-7" action="mailto:wesley16838@gmail.com" method="post">
		<h1>Welcome to contact me</h1>
			<ul>
				<li>
					<label for="name">Name</label>
					<input type="text" id="name" name="name" maxlength="100" required>
					<span>Enter your name</span>
				</li>
				<li>
					<label for="email">Email</label>
					<input type="email" id="email" name="email" maxlength="100" required>
					<span>Enter a valid email address</span>
				</li>
				<li>
					<label for="phonenumber">Phone number</label>
					<input type="text" id="phonenumber" name="phonenumber" maxlength="100" required>
					<span>input the phone number in this format: (XXX)XXX-XXXX including the ()and-</span>
					

				</li>
				<li>
					<label for="comment">Comment</label>
					<textarea name="comment" id="comment" onkeyup="adjust_textarea(this)"></textarea>
					<span>Say something about this webpage</span>
				</li>
				<li>
					<input type="submit" value="Send This" >
				</li>
			</ul>
		</form>
		<a href=#home class="top">Top</a>
		</div>
			<?php include 'footer.php';?><a id=contactme></a>
		</div>	
			
			<script src="finalproject.js"></script>		
		</body>
		</html>			