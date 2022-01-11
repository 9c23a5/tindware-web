function showNuevas() {
    $("#ofertasNuevas").show();
    $("#ofertasEnProceso").hide();
    $("#ofertasTerminadas").hide();
};

function showEnProceso() {
    $("#ofertasNuevas").hide();
    $("#ofertasEnProceso").show();
    $("#ofertasTerminadas").hide();
};

function showTerminadas() {
    $("#ofertasNuevas").hide();
    $("#ofertasEnProceso").hide();
    $("#ofertasTerminadas").show();
};

$(document).ready(function() {
    $("#ofertasEnProceso").hide();
    $("#ofertasTerminadas").hide();
});
