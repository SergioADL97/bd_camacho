$(document).ready(function() {


	// función para actualizar la encuesta
	$(".input-update").on('blur', function(){
		var form = $(".form-encuesta");
		url = form.attr('action');
		$.ajax({
			url: url,
			type: 'POST',
			data: form.serialize(),
			success: function(response) {
				if( response === 'success' )
				{
					alert("Guardado.");
				}else
				{
					alert("Ha ocurrido un error.");
				}
			},
			error: function(xhr) {
				toastr.error("Ha ocurrido un error.");
			},
		});
	});

});