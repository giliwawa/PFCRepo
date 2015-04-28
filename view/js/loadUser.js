function loadUser() {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","admin_display_user.php",true);
    xmlhttp.send();
}

function loadadminUser() {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","admin_add_user.php",true);
    xmlhttp.send();
}

function loadmodifierUser() {
	xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
	xmlhttp.open("GET","admin_modifier_user.php",true);
    xmlhttp.send();
}

function loaddisplaymodifierUser() {
	var recherche=$("#search").val();
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("modif").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","modif_user.php?reche="+recherche,true);
    xmlhttp.send(); 
}

function loadmodify(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("modif").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","modify.php?IdUser="+id,true);
    xmlhttp.send();
}

function loadupdateUser(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("modif").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","update_user.php?IdUser="+id,true);
    xmlhttp.send();
}

function loaddeleteUser(){
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("show").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","Delete_user.php",true);
    xmlhttp.send();
}

function loaddisplaydeleteUser(){
    var recherche=$("#search").val();
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("delt").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","display_delete.php?reche="+recherche,true);
    xmlhttp.send(); 
}

function loadDelete(id) {
    xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("delt").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","Delete.php?IdUser="+id,true);
    xmlhttp.send();
}
