
// (function(){

// 	var parallax = document.querySelectorAll(".banner-img"),
// 	speed = -0.5;

// 	window.onscroll = function(){
// 		[].slice.call(parallax).forEach(function(el,i){

// 			var windowYOffset = window.pageYOffset,
// 			elBackgrounPos = "0 " + (windowYOffset * speed) + "px";

// 			el.style.backgroundPosition = elBackgrounPos;

// 		});
// 	};

// })();
$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: false,           // Boolean: Show pager, true or false
  nav: true,             // Boolean: Show navigation, true or false
  random: false,          // Boolean: Randomize the order of the slides, true or false
  pause: false,           // Boolean: Pause on hover, true or false
  pauseControls: true,    // Boolean: Pause when hovering controls, true or false
  prevText: "",   // String: Text for the "previous" button
  nextText: "",       // String: Text for the "next" button
  maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
  navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
  manualControls: "",     // Selector: Declare custom pager navigation
  namespace: "rslides",   // String: Change the default namespace used
  before: function(){},   // Function: Before callback
  after: function(){}     // Function: After callback
});

$(document).ready(function() {
	$(".fancybox").fancybox({
		helpers : {
			overlay : {
				css : {
					'background' : 'rgba(0, 0, 0, 0.5)'
				}
			}
		}
	});
});

// The latitude and longitude of your business / place
var position = [40.192652, -76.163415];
 
function showGoogleMaps() {
 
var latLng = new google.maps.LatLng(position[0], position[1]);
 
var mapOptions = {
zoom: 16, // initialize zoom level - the max value is 21
streetViewControl: false, // hide the yellow Street View pegman
scaleControl: true, // allow users to zoom the Google Map
mapTypeId: google.maps.MapTypeId.ROADMAP,
center: latLng
};
 
map = new google.maps.Map(document.getElementById('googlemaps'),
mapOptions);
 
// Show the default red marker at the location
marker = new google.maps.Marker({
position: latLng,
map: map,
draggable: false,
animation: google.maps.Animation.DROP
});
}
 
google.maps.event.addDomListener(window, 'load', showGoogleMaps);


$(".menu-click").click(function(){
  $("nav").toggle(400);
});