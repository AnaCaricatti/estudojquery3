let estadoLuz = true;

$("#nomeInput").on("keyup", function () {
    const nome = $(this).val();
    $("#nome").html(nome);
});
//funçao ligar e desligar luz
$("#ligar").on("click", function () {
    estadoLuz = !estadoLuz;
    if (!estadoLuz) {
    $(".luz").addClass("acender");
    $("#ligar").html("Desligar Luz");
} else {
    $(".luz").removeClass("acender");
    $("#ligar").html("Ligar Luz");
}
});