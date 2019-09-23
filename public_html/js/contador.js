window.jQuery(function ($) {

       
    var teste = new Date();
    teste.setMinutes(teste.getMinutes() + 30);
    $("#valor").html(teste);
    $('div, #valor').countDown();

});