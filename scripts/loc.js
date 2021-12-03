function obtenerLatLon() {
    
    function geoloc_ok(pos) {
        $("#gmap_antes").hide();
        lat = pos.coords.latitude;
        lon = pos.coords.longitude;
        console.log("Localizacion permitida");
        updateGMaps(lat, lon);
    }
    
    function geoloc_error(err) {
        errorMsg = err.message
        console.log(errorMsg);
    }
    navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error);

    if (errorMsg) {
        return [undefined, undefined, errorMsg];
    }
    else {
        document.cookie = "lat=" + lat;
        document.cookie = "lon=" + lon;
        return [lat, lon, undefined];
    }
}