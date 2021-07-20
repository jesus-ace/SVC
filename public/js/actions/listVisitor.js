/*
*	función para mostrar el usuario utilizando 
*	jquery datatables y ajax.
*/
$(document).ready( function () {
	var table = $('#visitor-table').DataTable({
		"serverSide":true,
		"ajax": 'api/list_visitor',
		"columns":[
			{data:"vi_id"},
			{data:"vi_nombre"},
			{data:"vi_apellido"},
			{data:"vi_cedula"},
			{data:"vi_telefono"},
			{data:"vi_domicilio"},
			{data:"vi_responsable"},
			{"defaultContent":"<button type='button' data-toggle='modal' data-target='#modal' class='far fa-eye'></button>"}
		]
	});
	obtener_data("#visitor-table tbody", table);
});


/*
*	función para mostrar y editar el usuario utilizando 
*	jquery ajax.
*/

var obtener_data = function(tbody, table){
	$(tbody).on('click', 'button.far', function(){
		var data = table.row($(this).parents('tr')).data();
		//console.log(data);
		var vi_id =$('#vi_id').val(data.vi_id),
			vi_nombre =$('#vi_nombre').val(data.vi_nombre),
			vi_apellido =$('#vi_apellido').val(data.vi_apellido),
			vi_cedula =$('#vi_cedula').val(data.vi_cedula),
			vi_telefono =$('#vi_telefono').val(data.vi_telefono),
			vi_domicilio =$('#vi_domicilio').val(data.vi_domicilio);
			vi_responsable =$('#vi_responsable').val(data.vi_responsable)
			mt_motivo =$('#mt_motivo').val(data.motivos.mt_motivo)
			vi_responsable =$('#vi_card_id').val(data.vi_car_id)
			vi_photo = data.vi_photo;
			var photo = $('#box_photo').attr('src', "../imagenes/"+vi_photo);
		$('#formeditar').on('submit', function(e){
			e.preventDefault();
			var id = $('#vi_id').val();
			$.ajax({
				type: "PUT",
				url:  "/api/List_user/"+id,
				data: $('#formeditar').serialize(),
				success: function(response){
					console.log(response)
					$('#modal').modal('hide')
					location.reload();
					swal({
  						title: "Visistante Editado!",
  						text: "El Visistante se a Editado Exitosamente",
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