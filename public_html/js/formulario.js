

$(document).ready(function () {
    $("input[name='telefone']").mask("99 – 999999999");


    var x = [];
    var lista = document.getElementsByName("lista");


    for (var i = 0; i < lista.length; i++)
        if (lista[i].checked == true) {

            x[i] = '{"name":' + lista[i].id + ', "id": ' + lista[i].id + '}';


        }




    $("form").validate({
        rules: {
            nome: {required: true, minlength: 11},
            telefone: {required: true, minlength: 11},
            comoConheceu: {required: false},
            radioRedeSocial: {required: false}


        },
        messages: {
            nome: {required: "<br /><center><div class='alert bg-danger text-danger'><span class='erro'>O nome é um campo obrigatório</span></div></center>", minlength: "<br /><center><div class='alert bg-danger text-danger'><span class='erro'>Insira pelo menos um sobrenome</span></div></center><br />"},
            telefone: {required: "<br /><center><div class='alert bg-danger text-danger'><span class='erro'>O telefone é um campo obrigatório</span></div></center><br />"},

        },

        //função para enviar após a validação


        submitHandler: function (form) {
             //var dados = $(form).serialize();
              
            $.ajax({
                type: "POST",
                url: "http://localhost/Formulario-EloGroup/public_html/recebeFormulario.php",
                data: dados,
                success: function (data) {

                    //fecha o alert automatico
                    window.setTimeout(function () {
                        $(".alert").fadeTo(1000, 0).slideUp(1000, function () {
                            $(this).remove();
                        });
                    }, 5000);

                    $("#caixa").html("");
                    if (data === 'Erro: campo obrigatório não preenchido')
                        $("#caixa").html("<center><div class='alert bg-danger text-danger'>" + data + "</div></center>");
                    else {
                        $("#caixa").html("<center><div class='alert bg-success text-success'>" + data + "</div></center>");
                        $("input[type=text]").val("");
                    }
                    $('html, body').animate({scrollTop: 0}, 'slow');
                },
                error: function () {
                    $("input[type=text]").val("");
                }
            });
        }

    });


});





function exibeRede() {
    var x = '<label>Quais:</label></b><div class="row" align="center" id="listaCheck">';
    myObj = {

        "listaRede": [{"name": " Facebook ", "id": "Facebook"}, {"name": " LinkedIn ", "id": "LinkedIn"}, {"name": " Instagram ", "id": "Instagram"}]
    }
    for (i in myObj.listaRede) {
        x += ' <div class="col-sm-4" ><label class="checkbox-inline"><input type="checkbox" id="' + myObj.listaRede[i].id + '" name=lista >' + myObj.listaRede[i].name + '</label></div>';

    }
    x += '</div>'
    document.getElementById("redeSocial").innerHTML = x;

}

function limpaRedeSocial() {
    document.getElementById("redeSocial").innerHTML = ''

}





function verificaChecks() {

   var x=[]
    var lista = document.getElementsByName("lista"); 
    

    for (var i=0;i<lista.length;i++)
        if (lista[i].checked == true){ 
       
                x[i]='{"name":'+lista[i].id+', "id": '+lista[i].id+'}'; 
        
      
        }
       
    }


