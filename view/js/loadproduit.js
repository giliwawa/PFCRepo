function loadproduit () {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","admin_display_product.php",true);
    xmlhttp.send();
}
function loadproduct_cat(cat) {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","view_product_categorie.php?categorie="+cat,true);
    xmlhttp.send();
}
function addproduit () {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","admin_add_product.php",true);
    xmlhttp.send();
}
function modifyproduct(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","modifyproduct.php?id_produit="+id,true);
    xmlhttp.send();
}
function deleteproduct(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","deleteproduct.php?id_produit="+id,true);
    xmlhttp.send();
}
function adddiscount(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","admin_add_discount.php?id_produit="+id,true);
    xmlhttp.send();
}