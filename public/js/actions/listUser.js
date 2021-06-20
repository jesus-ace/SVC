/*
*	función para mostrar el usuario utilizando 
*	jquery datatables y ajax.
*/
$(document).ready( function () {
	var table = $('#usuarios').DataTable({
		"serverSide":true,
		"ajax": 'api/list_user',
		"columns":[
			{data:"us_id"},
			{data:"us_nombre"},
			{data:"us_apellido"},
			{data:"us_cedula"},
			{data:"us_correo"},
			{data:"us_user"},
			{"data":"rols.rol_tipo"},
			{"defaultContent":"<button type='button' data-toggle='modal' data-target='#modal' class='far fa-eye'></button>"}
		]
	});
	obtener_data("#usuarios tbody", table);
});


/*
*	función para mostrar y editar el usuario utilizando 
*	jquery ajax.
*/

var obtener_data = function(tbody, table){
	$(tbody).on('click', 'button.far', function(){
		var data = table.row($(this).parents('tr')).data();
		//console.log(data);
		var us_id =$('#us_id').val(data.us_id),
			us_nombre =$('#us_nombre').val(data.us_nombre),
			us_apellido =$('#us_apellido').val(data.us_apellido),
			us_cedula =$('#us_cedula').val(data.us_cedula),
			us_correo =$('#us_correo').val(data.us_correo),
			us_user =$('#us_user').val(data.us_user);
			us_photo = data.us_photo;
			var photo = $('#box_photo').attr('src', "../imagenes/"+us_photo);
		//console.log(us_photo);

		$('#formeditar').on('submit', function(e){
			e.preventDefault();
			var id = $('#us_id').val();
			$.ajax({
				type: "PUT",
				url:  "/api/List_user/"+id,
				data: $('#formeditar').serialize(),
				success: function(response){
					console.log(response)
					$('#modal').modal('hide')
					location.reload();
					swal({
  						title: "Ususario Editado!",
  						text: "El Usuario se a Editado Exitosamente",
  						icon: "success",
  						button: "Aceptar",
  						
					});
				},
				error: function(error){
					console.log(error)
					swal({
  						title: "Error al Editar Usuario",
  						icon: "warning",
  						button: "Aceptar",
					});
				}
			});
		});

	});
}

