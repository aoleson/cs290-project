function initialize() {
    var mapProp = {
        center:new google.maps.LatLng(44.564111, -123.279565),
        zoom:15,
        mapTypeId:google.maps.MapTypeId.HYBRID
    };
    var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
    var infowindow = new google.maps.InfoWindow();
    
    var marker1 = new google.maps.Marker({
        position: {lat: 44.567199, lng: -123.278715},
        map: map,
        title: 'Kelley Engineering Center'
    });
    marker1.addListener('click', function() {
        infowindow.setContent('<div><strong> Kelley Engineering Center </strong><br>');
        infowindow.open(map, marker1);
    });
    
    var marker2 = new google.maps.Marker({
        position: {lat: 44.564086, lng: -123.285524},
        map: map,
        title: 'Peavy Hall'
    });
    marker2.addListener('click', function() {
        infowindow.setContent('<div><strong> Peavy Hall </strong><br>');
        infowindow.open(map, marker2);
    });
    
    var marker3 = new google.maps.Marker({
        position: {lat: 44.565098, lng: -123.275942},
        map: map,
        title: 'Valley Library'
    });
    marker3.addListener('click', function() {
        infowindow.setContent('<div><strong> Valley Library </strong><br>');
        infowindow.open(map, marker3);
    });
    
    var marker4 = new google.maps.Marker({
        position: {lat: 44.561275, lng: -123.280588},
        map: map,
        title: 'Gill Coliseum'
    });
    marker4.addListener('click', function() {
        infowindow.setContent('<div><strong> Gill Coliseum </strong><br>');
        infowindow.open(map, marker4);
    });
    
}
            
google.maps.event.addDomListener(window, 'load', initialize);