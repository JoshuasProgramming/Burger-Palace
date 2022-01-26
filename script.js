/**
 * Function to create the Google Map
 */

 function myMap(){
    //Map options
    let options = {
        zoom:15,
        center:new google.maps.LatLng(51.500250,-0.157400)
    }
        
    //New map
    let map = new google.maps.Map(document.getElementById('map'), options);
        
    //Add marker
    let marker = new google.maps.Marker({
    position:{lat:51.500250, lng:-0.157400},
    map:map
    });
}