

$(document).ready(function () {

$("input[name='cpf']").mask("999.999.999-99");

    $("form").validate({
        rules: {
            cpf: {required: true},
            senha: {required: true}
        },
        messages: {
            cpf: {required: "<div class='alert alert-warning'>Digite o CPF</div>"},
            senha: {required: "<div class='alert alert-warning'>Digite a senha</div>"}
        }

    });
    var textoPiscante = $( '.erro' );

window.setInterval( function() {
    textoPiscante.css( 'visibility', 'hidden' );
    
    window.setTimeout( function() {
        textoPiscante.css( 'visibility', 'visible' );
    }, 150 );
}, 1 * 1000 );
});