function showPendientes() {
    $("#ofertasPendientes").show();
    $("#ofertasDisponibles").hide();
    $("#ofertasTerminadas").hide();
};

function showDisponibles() {
    $("#ofertasPendientes").hide();
    $("#ofertasDisponibles").show();
    $("#ofertasTerminadas").hide();
};

function showTerminadas() {
    $("#ofertasPendientes").hide();
    $("#ofertasDisponibles").hide();
    $("#ofertasTerminadas").show();
};

$(document).ready(function() {
    $("#ofertasDisponibles").hide();
    $("#ofertasTerminadas").hide();
});
