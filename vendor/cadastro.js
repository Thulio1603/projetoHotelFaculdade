$(document).ready(function() {
    $("#button").click(function(){
        if($("#senha").val() == '' || $("#senha").val() == null && $("#name").val() == '' || $("#name").val() == null){
            alert('Todos os campos Devem ser preenchidos');
        }else{
            jQuery.ajax({
                type: "POST",
                url: "../model/cadastro.php",
                data: {
                        name: $("#name").val(),
                        senha: $("#senha").val()
                    },
                dataType: 'text',
                success: function( data ){
                    console.log(data);
                    if($.trim(data) == 'cadastro'){
                        alert('Cadastrado com Sucesso');
                        $(window.document.location).attr('href', "http://localhost:8080/projetoHotel/projetoHotelFaculdade/view/index.html");
                    }else{
                        alert('Usuário já existente, tente novamente');
                    }
                },
                error: function(data){
                    alert('erro ao enviar');
                }
            });
        }
    });
});