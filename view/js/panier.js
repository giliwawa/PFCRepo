function addToCart (id) {
	$.ajax({
		url: '../controller/getIdProduitController.php',
		type: 'GET',
		dataType: 'JSON',
		data: {id_produit: id},
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


}