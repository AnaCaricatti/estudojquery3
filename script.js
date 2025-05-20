let estadoLuz = false;

function atualizarEstadoDaLuz(){
    if (estadoLuz){
        $(".luz").addClass("ligar");
        $("#ligar").html("Desligar a Luz");
    }else{
        $(".luz").removeClass("ligar");
        $("#ligar").html("Ligar a Luz");
    }
}

$("#ligar").on("click", function(){
    estadoLuz = !estadoLuz;
    atualizarEstadoDaLuz();
});

$(document).ready(function(){
    atualizarEstadoDaLuz();
});