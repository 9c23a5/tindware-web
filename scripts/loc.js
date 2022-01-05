async function obtenerLatLon() {
    
    function geoloc_ok(pos) {
        $("#gmap_antes").hide();
        lat = pos.coords.latitude;
        lon = pos.coords.longitude;
        console.log("Localizacion permitida");
        var objeto = {};
        objeto["lat"] = lat;
        objeto["lon"] = lon;
        // updateGMaps(lat, lon);
        console.log("objeto:", objeto)
        return objeto;
    }
    
    function geoloc_error(err) {
        console.log(err.message);
    }

    return new Promise((geoloc_ok, geoloc_error) => {
        navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error);
    });
}
