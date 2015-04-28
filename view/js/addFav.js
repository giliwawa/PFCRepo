function addFav (id_produit) {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById(id_produit).innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","../controller/addFavorisController.php?id_produit="+id_produit,true);
    xmlhttp.send();
}

function deleteFav(id_produit){
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById(id_produit).innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","../controller/deleteFavorisController.php?id_produit="+id_produit,true);
    xmlhttp.send();
}