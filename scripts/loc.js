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

async function realizarGeocoding(query) {
    var apikey = "2a6ef58c88ad4fd9810b422c5348c25e" // en produccion esto no deberia estar asi c:;
    var requestOptions = {
        method: "GET",
    };

    const posicion = await fetch("https://api.geoapify.com/v1/geocode/search?text=" + query + "&format=json&limit=1&bias=countrycode:es&apiKey=" + apikey, requestOptions)
    .then(response => response.json())
    .then(result => {
        console.log(result)
        posicion = {}
        posicion["formatted"] = result.results[0].formatted;
        posicion["lat"] = result.results[0].lat;
        posicion["lon"] = result.results[0].lon;
        console.log(posicion)
        return posicion;
    })
    .catch(error => console.log('error', error));

    console.log(posicion)
}
