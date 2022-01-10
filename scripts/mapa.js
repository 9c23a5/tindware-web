async function obtenerLatLon() {
    
    function geoloc_ok(pos) {
        console.log(pos)
    }
    
    function geoloc_error(err) {
        console.log(err);
    }

    return new Promise((geoloc_ok, geoloc_error) => {
        navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error);
    }).catch(function(error) {
        console.log(error);
    });
}

async function coordenadasDesdeGeocoding(query) {
    var apikey = "2a6ef58c88ad4fd9810b422c5348c25e" // en produccion esto no deberia estar asi c:;
    var requestOptions = {
        method: "GET",
    };

    fetch("https://api.geoapify.com/v1/geocode/search?text=" + query + "&format=json&limit=1&bias=countrycode:es&apiKey=" + apikey, requestOptions)
    .then(response => response.json())
    .then(result => {
        //console.log(result)
        formatted = result.results[0].formatted;
        lat = result.results[0].lat.toString();
        lon = result.results[0].lon.toString();
        var objeto = {}
        var objeto = {lat, lon, formatted};
        console.log(objeto)
    })
    .catch(error => {
        console.warn('ERROR: No se ha encontrado ' + query)
        return error;
    })
}

function obtenerOfertasCercanas(lat, lon) {
    // Como sortear las ofertas: https://stackoverflow.com/a/42983430
}

function updateGMaps(lat, lon, query) {
    var urlTemplate = "https://maps.google.com/maps?q=QUERY&t=&z=13&ie=UTF8&iwloc=&output=embed";
    if (query === undefined) {
        var query = lat + ',' + lon;
    }
    var url = urlTemplate.replace('QUERY', query);
    $("#gmap").attr('src', url);
    $("#gmap_antes").hide();
    $("#gmap").show();
}

async function getLocForm() {
    var texto = $("#inputMostrar").val();
    if (!texto) {
        alert("Form vacio");
    }
    else {
        console.log("UPDATE texto: " + texto);
        updateGMaps(undefined, undefined, texto);
        //Ahora obtenemos las coords desde 
        let promise = await coordenadasDesdeGeocoding(texto)
        let promise2 = promise.Then(objeto => {
            console.log(`UPDATE lat: ${objeto[0]} lon: ${objeto[1]} name: ${objeto[2]}`)
        })
    }
}

$(function(){
    $("#inputMostrar").keypress(function (e) {
        var key = e.which;
        if(key == 13) {
            $("#buttonMostrar").click();
        }
    });
});

$(document).ready(async function() {
    $("#gmap").hide();
    $("#gmap_nosoporte").hide();
    $("#gmap_noseguro").hide();

    if (window.isSecureContext) {
        if (navigator.geolocation) {
            console.log('tiene api')
            const promiseLatLon = await obtenerLatLon();
            if (!promiseLatLon) {
                console.log("ERROR: " + error);
            }
            else {
                var lat = promiseLatLon.coords.latitude.toString();
                var lon = promiseLatLon.coords.longitude.toString();
                console.log(`UPDATE lat: ${lat} lon: ${lon}`)
                updateGMaps(lat, lon);
            }
        }
        else {
            $("#gmap_antes").hide();
            $("#gmap_nosoporte").show();
        }
    }
    else {
        $("#gmap_antes").hide();
        $("#gmap_noseguro").show();
    }
});

