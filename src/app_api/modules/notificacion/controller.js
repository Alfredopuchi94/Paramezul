$( document ).ready(function() {
	var route = {}
	$.getJSON( "./src/app_api/modules/cliente/routes.json", function( data ) {
		route = data
		console.log(data)
	})

	function actualizar() {
		// Assign handlers immediately after making the request,
		// and remember the jqxhr object for this request
		$.get( route.update.url, function(data) {
			alert( "success" )
		})
		.fail(function() {
			alert( "error" )
		})
		// .done(function() {
		// 	alert( "second success" )
		// })
		// .always(function() {
		// 	alert( "finished" )
		// })
	}

	setInterval(
		actualizar(),
		60000
	);

})
