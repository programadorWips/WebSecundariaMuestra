
function initMap() {
var myLatLng = {lat: 9.638529, lng: -63.132659};

// Create a map object and specify the DOM element
// for display.
var map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 4
});

// Create a marker and set its position.
var marker = new google.maps.Marker({
    map: map,
    position: myLatLng,
    title: 'Hello World!'
});
}
