$( document ).ready(function() {
		var route = {};
	$.getJSON( "./src/app_api/modules/ambulancias/routes.json", function( data ) {
		route = data; 
		console.log(data)
	});

	$('#form_create_ambulancias').on('submit',function(e){
		e.preventDefault()
		var exp1 = validateName('#modelo' ,$("#modelo").val())
		var exp2 = ('#placa' ,$("#placa").val())
		var exp3 = validateName('#tipo' ,$("#tipo").val())
		if (exp1 && exp2 && exp3) {
			$.ajax({
				beforeSend: function (){
					$('#sub').html('<i class="fa fa-spin fa-circle-o-notch" aria-hidden="true"></i>')
					console.log('Status: tomo los datos')
				},
				url: route.create.url,
				type: route.create.type,
				data: $('#form_create_ambulancias').serialize(),
				success: function (resp){
					alert(resp);
					res = JSON.parse(resp)
					if (res.save == true) {
						$('#form_create_ambulancias')[0].reset()
							$('#sub').html('<i style="color:green;" class="fa fa-floppy-o" aria-hidden="true"></i>')
					} else{
						$('#sub').html('<i style="color:red;" class="fa fa-exclamation-circle" aria-hidden="true"></i>')
					}
					console.log(res)
						$('#form_message').html(	
							'<div class="alert alert-light alert-dismissible fade show" role="alert">'+
							'		<ul>'+
							'			<li>Connection : '+res.connection+'</li>'+
							'			<li>Found : '+res.found+'</li>'+
							'			<li>Save : '+res.save+'</li>'+
							'		</ul>'+
							'		<button class="close" data-dismiss="alert" aria-label="Close">'+ 
							'			<i class="fa fa-window-close" aria-hidden="true"></i>'+
							'		</button>'+
							'</div>' )
				},
				error: function (jqXHR,estado,error) {
					console.log('----------------------')
					console.log('Status: Entro en error')
					console.log(estado)
					console.log(error)
				},
				complete: function (jqXHR,estado) {
					console.log('----------------------')
					console.log(estado)
				},
				timeout: 80000
			})
		} else {
				$('#form_message').html(	
						'<div class="alert alert-light alert-dismissible fade show" role="alert">'+
						'		<h3>Validation problems</h3>'+
						'		<button class="close" data-dismiss="alert" aria-label="Close">'+ 
						'			<i class="fa fa-window-close" aria-hidden="true"></i>'+
						'		</button>'+
						'</div>' )
		}
	});

	

});

function validateName(input, str){
		if ( str.match(/^[A-Za-z]([a-zA-Z]| |-|')+$/g) ) {
			$(input).addClass('is-valid')
			$(input).removeClass('is-invalid')
			return true
		} else {
			$(input).addClass('is-invalid')
			$(input).removeClass('is-valid')
			
			return false
		}
	}