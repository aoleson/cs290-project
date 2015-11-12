function initialize() {
    var mapProp = {
        center:new google.maps.LatLng(44.564111, -123.279565),
        zoom:15,
        mapTypeId:google.maps.MapTypeId.HYBRID
    };
    var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
}
            
google.maps.event.addDomListener(window, 'load', initialize);