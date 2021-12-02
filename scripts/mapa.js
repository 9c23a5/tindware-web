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
    alert("ok");
    updateGMaps(lat, lon);
}

function geoloc_error(err) {
    console.log(err.message);
}

function getLocForm() {
    var texto = $("#formBuscar").val();
    if (texto === "") {
        console.log("form empty");
    }
    else {
        updateGMaps(undefined, undefined, texto);
    }
}

$(document).ready(function() {
    $("#gmap").hide();
    $("#gmap_nosoporte").hide();
    $("#gmap_noseguro").hide();

    if (window.isSecureContext) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error);
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
