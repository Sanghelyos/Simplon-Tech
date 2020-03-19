// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat: 49.7398947, lng: 4.7193771};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 13, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}