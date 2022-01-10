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
    }).catch(function(error) {
        console.log(error);
    });
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

function geoloc_ok(pos) {
    $("#gmap_antes").hide();
    lat = pos.coords.latitude;
    lon = pos.coords.longitude;
    console.log("Localizacion permitida");
    updateGMaps(lat, lon);
}

function geoloc_error(err) {
    console.log(err.message);
}

function getLocForm() {
    var texto = $("#inputMostrar").val();
    if (!texto) {
        alert("Form vacio");
    }
    else {
        updateGMaps(undefined, undefined, texto);
    }
}

function cookieTest() {
    document.cookie = "test=value";
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
                alert("Se ha encontrado el siguiente error: " + error);
            }
            else {
                var lat = promiseLatLon.coords.latitude.toString();
                var lon = promiseLatLon.coords.longitude.toString();
                console.log(`lat: ${lat} lon: ${lon}`)
                console.log('updateando')
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

