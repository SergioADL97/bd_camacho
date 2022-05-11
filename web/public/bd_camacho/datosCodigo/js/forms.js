$(document).ready(function() {
	// variable que contiene la ruta del controlador
	var url_listado = $(".content-list").data('url');
	// llamamos la función para cargar los datos de la base de datos
	list( url_listado );


	// función par acrear registros
	$(".form-crear").on('submit', function(){
		var form = $(this);
		var url = form.attr('action');
		// ejecutamos un ajax
		$.ajax({
			url: url,
			type: 'POST',
			data: form.serialize(),
			success: function( response ) {
				if( response == 'sucess' )
				{
					alert('Registro creado con éxito');
				}
				else
				{
					alert('Error: ' + response);
				}
			},
		});
		return false;
	});


	// función par acrear registros
	$(".form-editar").on('submit', function(){
		var form = $(this);
		var url = form.attr('action');
		// ejecutamos un ajax
		$.ajax({
			url: url,
			type: 'POST',
			data: form.serialize(),
			success: function( response ) {
				if( response == 'sucess' )
				{
					alert('Registro actualizado con éxito');
				}
				else
				{
					alert('Error: ' + response);
				}
			},
		});
		return false;
	});

});



// función para ejecutar el listado de datos
function list( url )
{
	// ejecutamos un ajax
	$.ajax({
		url: url,
		type: 'POST',
		data: { 'action': 'listar' },
		success: function( response ) {
			$(".content-list").html(response);
		},
	});
	
}