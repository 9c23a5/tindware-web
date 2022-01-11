function coordenadasDesdeGeocoding() {
    var query = $("#geocoding_input").val();
    if (query == "") {
        $("#geocoding_input").css("color","red");
        $("#geocoding_input").val("Introduce una busqueda...");
        $("#geocoding_input").attr("onclick", "limpiarInput()");
    }
    else {
    var apikey = "2a6ef58c88ad4fd9810b422c5348c25e" // en produccion esto no deberia estar asi c:;
    var requestOptions = {
        method: "GET",
    };

    fetch("https://api.geoapify.com/v1/geocode/search?text=" + query + "&format=json&limit=1&bias=countrycode:es&apiKey=" + apikey, requestOptions)
    .then(response => response.json())
    .then(result => {
        console.log(result)
        posicion = {}
        formatted = result.results[0].formatted;
        lat = result.results[0].lat;
        lon = result.results[0].lon;
        $("#geocoding_input").val(formatted)
        $("#lat").val(lat)
        $("#lon").val(lon)
    })
    .catch(error => {
        $("#geocoding_input").css("color","red");
        $("#geocoding_input").val("No encontrado");
        $("#geocoding_input").attr("onclick", "limpiarInput()");
        return console.warn(error);
    })
    }
}

async function posicionAForm(posicion) {
    var posicion = await obtenerLatLon();
    $("#lat").val(posicion.coords.latitude)
    $("#lon").val(posicion.coords.longitude)
}

function limpiarInput() {
    $("#geocoding_input").val("")
    $("#geocoding_input").css("color", "")
}
