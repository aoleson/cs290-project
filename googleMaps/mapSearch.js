// This sample uses the Place Autocomplete widget to allow the user to search
// for and select a place. The sample then displays an info window containing
// the place ID and other information about the place that the user has
// selected.

function initMap() {
  var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: 44.564111, lng: -123.279565},
    zoom: 15,
    mapTypeId:google.maps.MapTypeId.HYBRID
  });

  var input = document.getElementById('pac-input');

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map
  });
  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

  autocomplete.addListener('place_changed', function() {
    infowindow.close();
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      return;
    }

    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
    }

    // Set the position of the marker using the place ID and location.
    marker.setPlace({
      placeId: place.place_id,
      location: place.geometry.location
    });
    marker.setVisible(true);

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' +
        'Coordinates: ' + place.geometry.location + '<br>' +
        place.formatted_address);
    infowindow.open(map, marker);
  });
}