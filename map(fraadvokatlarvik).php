
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>

<script type="text/javascript">
function initialize()
{


// setup STYLES
var styles = [
	{
		featureType: 'water',
		elementType: 'all',
		stylers: [
			{ color: '#f2f2f2' }
		]
	},{
		featureType: 'landscape',
		elementType: 'all',
		stylers: [
			{ hue: '#d7d7d7' },
			{ saturation: -100 },
			{ lightness: 0 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'poi',
		elementType: 'all',
		stylers: [
			{ visibility: 'off' }
		]
	},{
		featureType: 'road.arterial',
		elementType: 'geometry',
		stylers: [
			{ hue: '#ff8f2b' },
			{ saturation: 100 },
			{ lightness: 100 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'road.highway',
		elementType: 'geometry',
		stylers: [
			{ color: '#f67700' }
		]
	},{
		featureType: 'poi',
		elementType: 'geometry',
		stylers: [
			{ hue: '#aaaaaa' },
			{ saturation: -100 },
			{ lightness: -15 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'transit',
		elementType: 'labels',
		stylers: [
			{ hue: '#a9dbd7' },
			{ saturation: 41 },
			{ lightness: 4 },
			{ visibility: 'on' }
		]
	},{
		featureType: 'poi',
		elementType: 'labels',
		stylers: [
			{ visibility: 'on' }
		]
	}
];
var styledMapType = new google.maps.StyledMapType(styles, { name: 'Advokat' });


// setup MARKER
var image = new google.maps.MarkerImage(
  'pin.png',
  new google.maps.Size(25,32),
  new google.maps.Point(0,0),
  new google.maps.Point(13,32)
);

var shadow = new google.maps.MarkerImage(
  'pin-shadow.png',
  new google.maps.Size(45,32),
  new google.maps.Point(0,0),
  new google.maps.Point(13,32)
);

var shape = {
  coord: [14,0,16,1,17,2,18,3,19,4,19,5,20,6,20,7,20,8,21,9,21,10,21,11,20,12,20,13,20,14,20,15,19,16,19,17,18,18,17,19,16,20,16,21,18,22,24,23,24,24,23,25,23,26,22,27,20,28,17,29,15,30,13,31,10,31,10,30,9,29,9,28,8,27,8,26,7,25,7,24,6,23,6,22,5,21,4,20,4,19,3,18,3,17,2,16,1,15,1,14,1,13,1,12,0,11,0,10,0,9,0,8,1,7,1,6,1,5,2,4,3,3,4,2,5,1,7,0,14,0],
  type: 'poly'
};


// setup Locations
var point1 = new google.maps.LatLng(59.054225, 10.026783); // Kongegata 24, Larvik


/*========================MAP 1 - Sandefjord ===========================*/

// specify OPTIONS
var options1 = {
	center: point1,
	mapTypeControlOptions: { mapTypeIds: ['']}, // needs to have some kind of string content for "var styledMapType = new google.maps.StyledMapType(styles, { name: 'Advokat' });" to show up as label
	zoom: 17,
	mapTypeId: 'Advokat' // needs to be same as map.mapTypes.set('Advokat', styledMapType);
};


// create MAP
var div1 = document.getElementById('map1');
var map1 = new google.maps.Map(div1, options1);

// set STYLE
map1.mapTypes.set('Advokat', styledMapType);

// add MARKER
var marker1 = new google.maps.Marker({
  icon: image,
  shadow: shadow,
  shape: shape,
  map: map1,
  title: 'Advokat',
  position: point1
});


} //END Initialize


</script>


<div id="map1"></div>
&nbsp;
