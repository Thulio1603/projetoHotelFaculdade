$(document).ready(function() {
    $("#button").click(function(){
        jQuery.ajax({
            type: "POST",
            url: "http://imguol.com.br:8080/projetoFaculdade/projetoHotel/model/login.php",
            data: {
                    name: $("#name").val(),
                    senha: $("#senha").val()
                },
                dataType: 'jason',
            success: function( data )
            {
                alert( data );
            }
        });
    });
});