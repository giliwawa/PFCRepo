jQuery(document).ready(function($) {
	$.ajax({
		url: 'displayOrder.php',
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function() {
		console.log("success");
	})
	.fail(function() {
		console.log("error");
	})
	.always(function() {
		console.log("complete");
	});
	
});