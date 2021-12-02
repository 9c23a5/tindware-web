function geoloc_ok(pos) {
    $("#gmap_antes").hide();
    alert("Lat: " + pos.coords.latitude + ". Lon: " + pos.coords.longitude + ".Acc: ");
}

function geoloc_error(err) {
    alert(err.message);
}

var geoloc_opcion = { enableHighAccuracy: true };

$(document).ready(function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(geoloc_ok, geoloc_error, geoloc_opcion);
    }
    else {
        alert("No soporte")
        $("#gmap_antes").hide();
        $("#gmap_nosoporte").show();
    }
});