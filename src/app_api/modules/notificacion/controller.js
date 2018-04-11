
	
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
	return code
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
	'				<input type="hidden" value="'+a.__id+'" id="id"/> <br>' +
	'				<a href="#" class="btn btn-light aceptar" id="'+a.__id+'">Aceptar</a>' +
	'				<a href="#" class="btn btn-light rechazar" id="'+a.__id+'">Rechazar</a>' +
	'			</p>'+
	'		</div>'+
	'	</div><br>'
	return code
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
	return code
	}

// Funcion para ir actualizando cada 60 segundos
	function actualizar() {
		$.get("./src/app_api/modules/notificacion/crud/update.php", function(data) {
			var res = JSON.parse(data)
			console.log('Actualizo')
			$("#notification-panel").html('')
			var content = res.data
			for (var i = 0; i < content.length; i++) {
				// console.log(content[i])
				if (content[i].status == 'ACEPTADA') {
					$("#notification-panel").append(aceptada(content[i]))
				} else if (content[i].status == 'PENDIENTE') {
					$("#notification-panel").append(pendiente(content[i]))
				} else {
					$("#notification-panel").append(rechazada(content[i]))
				}
			}
		})
		.fail(function() {
			console.log( "error" )
		})
	}

	actualizar()
	var myVar = setInterval(function(){ actualizar() }, 15000 );

// Funcion para cambiar el status de la Notification a REALIZADA
	function changeStatus (id, newStatus) {
		var params = {
			'id': id,
			'newStatus': newStatus
		}

		$.ajax({
			beforeSend: function (){
				// $('#cliente_sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
			},
			url: './src/app_api/modules/notificacion/crud/status.php',
			type: 'POST',
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

$(document).ready(function(){
	$(".aceptar").click( function(e) {
		var id = e.currentTarget.id
		console.log("id: ",e.currentTarget.id)
		console.log("aceptar")
		// changeStatus(id, 'ACEPTADA')
		
	});	

	$(".rechazar").click( function(e) {
		var id = e.currentTarget.id
		console.log("id: ",e.currentTarget.id)
		console.log("Rechazar")
		// changeStatus(id, 'RECHAZADA')
		
	});	
})


