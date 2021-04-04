var map = L.map('map').setView([29.638058, 52.525713], 14);
mapLink =  '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; ' + mapLink + ' Contributors',
  maxZoom: 16,
}).addTo(map);
L.marker([29.638058, 52.525713]).addTo(map);
// var theMarker = {};
// map.on('click', function (e) {
//   lat = e.latlng.lat;
//   lon = e.latlng.lng;

//   console.log("You clicked the map at LAT: " + lat + " and LONG: " + lon);
//   //Clear existing marker, 

//   if (theMarker != undefined) {
//     map.removeLayer(theMarker);
//   };

//   //Add a marker to show where you clicked.
//   theMarker = L.marker([lat, lon]).addTo(map);
// });