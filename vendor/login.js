$(document).ready(function() {
    $("#button").click(function(){
        jQuery.ajax({
            type: "POST",
            url: "../model/login.php",
            data: {
                    name: $("#name").val(),
                    senha: $("#senha").val()
                },
            dataType: 'text',
            success: function( data ){
                if($.trim(data) == 'login'){
                    $(window.document.location).attr('href', "http://localhost:8080/projetoHotel/projetoHotelFaculdade/view/painel.html");
                }else{
                    alert('Usuário e/ou senha incorreto(s)');
                }
            },
            error: function(data){
                alert('erro ao enviar');
            }
        });
    });
});