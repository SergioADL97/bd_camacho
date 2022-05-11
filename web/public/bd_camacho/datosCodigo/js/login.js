$(document).ready(function(){


    $("#form-login").submit(function(){
        var form=$(this);
        var ruta=form.attr('action');
        $.ajax({
            url: ruta,
            data: form.serialize(),//serialize cinvierte todo en un array
            type:'POST',
            BeforeSend:function(){
                $(".mensaje-login").html("Iniciado");
            },
            success: function(data){
                if(data=="true")
                {
                    window.location = './datosCodigo/views/redirect.php';
                }
                else
                {
                    $(".mensaje-login").html("Ha ocurrido un error: "+data);
                }
            }
        });
        return false;
    });

    $("#form-register").submit(function(){
        var form=$(this);
        var ruta=form.attr('action');
        $.ajax({
            url: ruta,
            data: form.serialize(),//serialize cinvierte todo en un array
            type:'POST',
            BeforeSend:function(){
                $(".mensaje-register").html("Registrando");
            },
            success: function(data){
                console.log(data);
                if(data=="true")
                {
                    window.location = './datosCodigo/views/redirect.php';
                }
                else
                {
                    $(".mensaje-register").html("Ha ocurrido un error: "+data);
                }
            }
        });
        return false;
    });
});