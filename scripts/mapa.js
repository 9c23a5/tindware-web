function geoloc_ok(pos) {
    $("#gmap_antes").hide();
    alert("Lat: " + pos.coords.latitude + ". Lon: " + pos.coords.longitude );
    var lat = pos.coords.latitude;
}

function geoloc_error(err) {
    console.log(err.message);
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
            alert("No soporte")
            $("#gmap_antes").hide();
            $("#gmap_nosoporte").show();
        }
    }
    else {
        $("#gmap_antes").hide();
        $("#gmap_noseguro").show();
    }
});
