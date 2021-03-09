// Initialize and add the map
function initMap() {
  // The location of Uluru
  const uluru = { lat: 29.630177007489117, lng: 52.49669654352804 };
  // The map, centered at Uluru
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 12,
    center: uluru,
    disableDefaultUI: true,
    draggable: false,
});
  // The marker, positioned at Uluru
  const marker = new google.maps.Marker({
    position: uluru,
    map: map,
  });
}
