function updateGMaps(lat, lon, query) {
    var urlTemplate = "https://maps.google.com/maps?q=QUERY&t=&z=13&ie=UTF8&iwloc=&output=embed";
    if (query === undefined) {
        var query = lat + ',' + lon;
    }
    var url = urlTemplate.replace('QUERY', query);
    $("#gmap").attr('src', url);
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

$(document).ready(function() {
    $("#gmap").hide();
    $("#gmap_nosoporte").hide();
    $("#gmap_noseguro").hide();

    if (window.isSecureContext) {
        if (navigator.geolocation) {
            const {lat, lon, error} = obtenerLatLon();
            if (error) {
                alert("Se ha encontrado el siguiente error: " + eror);
            }
            else {
                document
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

