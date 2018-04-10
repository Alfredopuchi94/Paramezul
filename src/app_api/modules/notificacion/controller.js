$( document ).ready(function() {
	
	var route2 = {}
	$.getJSON( "./src/app_api/modules/notificacion/routes.json", function( data ) {
		route2 = data
		console.log(data)
	})
	.fail(function() {
		console.log( "error" )
	})

// Construccion de la notification
function aceptada (a){
	var code = ''+
	'	<div class="card text-center text-white bg-info" id="'+a.__id+'">'+
	'		<div class="card-header">'+
	'			Estado: <b>ACEPTADA</b>'+
	'		</div>'+
	'		<div class="card-body">'+
	'			<h6 class="card-title">LLAMAR: <strong>'+a.telefono+'</strong></h6>'+
	'			<p class="card-text">'+
	'				<b>Nombre:</b> '+a.nombre+' <br>'+
	'				<b>Informacion:</b> '+a.info+' <br>'+
	'				<b>Tipo:</b> '+a.tipo+' <br> '+
	'				<b>Fecha:</b> '+a.created_at +
	'			</p>'+
	'		</div>'+
	'	</div><br>'
}

function pendiente (a){
	var code = ''+
	'	<div class="card text-center text-white bg-warning" id="'+a.__id+'">'+
	'		<div class="card-header">'+
	'			Estado: <b>PENDIENTE</b>'+
	'		</div>'+
	'		<div class="card-body">'+
	'			<h6 class="card-title">LLAMAR: <strong>'+a.telefono+'</strong></h6>'+
	'			<p class="card-text">'+
	'				<b>Nombre:</b> '+a.nombre+' <br>'+
	'				<b>Informacion:</b> '+a.info+' <br>'+
	'				<b>Tipo:</b> '+a.tipo+' <br> '+
	'				<b>Fecha:</b> '+a.created_at +
	'				<input type="hidden" value="'+a.__id+'" id="id"/> ' +
	'				<button type="button" class="btn btn-light" id="btn-aceptar">Aceptar</button>' +
	'				<button type="button" class="btn btn-light" id="btn-rechazar">Rechazar</button>' +
	'			</p>'+
	'		</div>'+
	'	</div><br>'
}

function rechazada (a){
	var code = ''+
	'	<div class="card text-center text-white bg-danger" id="'+a.__id+'">'+
	'		<div class="card-header">'+
	'			Estado: <b>RECHAZADA</b>'+
	'		</div>'+
	'		<div class="card-body">'+
	'			<h6 class="card-title">LLAMAR: <strong>'+a.telefono+'</strong></h6>'+
	'			<p class="card-text">'+
	'				<b>Nombre:</b> '+a.nombre+' <br>'+
	'				<b>Informacion:</b> '+a.info+' <br>'+
	'				<b>Tipo:</b> '+a.tipo+' <br> '+
	'				<b>Fecha:</b> '+a.created_at +
	'			</p>'+
	'		</div>'+
	'	</div><br>'
	}

// Funcion para ir actualizando cada 60 segundos
	function actualizar() {
		$.get("./src/app_api/modules/notificacion/crud/update.php", function(data) {
			res = JSON.parse(data)
			console.log(res)
			// if (res.status == 'ACEPTADA') {
			// 	$("#notification-panel").append(aceptada(res))
			// } else if (res.status == 'PENDIENTE') {
			// 	$("#notification-panel").append(pendiente(res))
			// } else {
			// 	$("#notification-panel").append(rechazada(res))
			// }
		})
		.fail(function() {
			console.log( "error" )
		})
	}

	actualizar()
	setInterval(
		actualizar(),
		60000
	);

// Funcion para cambiar el status de la Notification a REALIZADA
	function changeStatus (id, newStatus) {
		var params = {
			'id': id,
			'newStatus': newStatus
		}

		e.preventDefault()
		$.ajax({
			beforeSend: function (){
				// $('#cliente_sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
			},
			url: route2.status.url,
			type: route2.status.type,
			contentType: "application/json",
      dataType: "json",
			data: JSON.stringify(params),
			success: function (resp) {
				res = JSON.parse(resp)
				alert('Operacion realizada')
			},
			error: function (jqXHR,estado,error) {
				console.log('----------------------')
				console.log('Status: Entro en error')
				console.log(estado)
				console.log(error)
			}
		})
	}

	$( "#btn-aceptar" ).click(function() {
	  var id = $('id').val()
		changeStatus(id, 'ACEPTADA')
	});

	$( "#btn-rechazar" ).click(function() {
	  var id = $('id').val()
		changeStatus(id, 'RECHAZADA')
	});

});

