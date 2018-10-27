$(document).ready(function() {

    let elem = $('#name');

    //$(elem).attr('value','background-color: red;');
    $(elem).attr({
        placeholder: 'Insira o seu nome...',
    });

    let btSalvar = $('#btSalvar');

    $(btSalvar).toggleClass('pintaDeVermelho');

    //$("#btEnviar").submit();

    // let btContinuar = $('<button>',{
    //     text: 'Continuar',
    //     id: 'btContinuar'
    // });

    //$(btSalvar).after(btContinuar);
    //$(btSalvar).before(btContinuar);

    // let btSalvar = document.getElementById('btSalvar');
    // btSalvar.addEventListener('click',salvarEmail());
    // btSalvar.removeEventListener('click');

    //$("#btSalvar").unbind().bind();
    $("#btSalvar").bind('click', function(){
        salvarEmail();
    });

});

function salvarEmail(){
    var url = "salvarEmail.php";

    $.ajax({
        url: url,
        dataType: 'html',
        method: 'POST',
        data: {
            email: $('#email').val(),
        },
        success:function(response){
            $('#resposta').html(response);
        },
        error:function(response){
            console.log(response);
        }
    });


    return false;
}