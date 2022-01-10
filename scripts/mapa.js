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

function getLocForm() {
    var texto = $("#inputMostrar").val();
    if (!texto) {
        alert("Form vacio");
    }
    else {
        console.log("UPDATE texto: " + texto);
        updateGMaps(undefined, undefined, texto);
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

