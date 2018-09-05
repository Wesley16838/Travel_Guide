var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;
function myFunction() {
	
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky")
		} else {
		navbar.classList.remove("sticky");
	}
}



function openImg(imgName) {
	var i, x;
	x = document.getElementsByClassName("expandedImg");
	for (i = 0; i < x.length; i++) {
		x[i].style.display = "none";
	}
	document.getElementById(imgName).style.display = "flex";
}

function initMap() {
	var uluru = {lat: 35.658621, lng: 139.745471};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom:15,
		center: uluru
	});
	var marker = new google.maps.Marker({
		position: uluru,
		map: map
	});
}

function adjust_textarea(h) {
    h.style.height = "1.5em";
    h.style.height = (h.scrollHeight)+"em";
}


new WOW().init();

$(document).ready(function() {
	$('#menu').bind('click',function(event){
		$('#navbar ul').slideToggle();
	});
	
	$(window).resize(function(){  
		var w = $(window).width();  
		if(w > 768) {  
			$('#navbar ul').removeAttr('style');  
		}  
		});
		
		});
				