jQuery(document).ready(function($) {
	$.ajax({
		url: 'displayOrders.php',
		type: 'GET',
		dataType: 'JSON',
	})
	.done(function(html) {
		$("#show").append(html.responseText);

	})
	.fail(function(html) {
		$("#show_order").append(html.responseText);
		console.log(html.responseText);

	})
	.always(function() {
		console.log("complete");
	});
	
});