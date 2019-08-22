$(document).ready(function() {
    $("#button").click(function(){
        jQuery.ajax({
            type: "POST",
            url: "../model/login.php",
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