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
        console.log(recherche);
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
    /*xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("modif").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","update_user.php?IdUser="+id,true);
    xmlhttp.send();*/
    var usr = $('#username').val();
    var pwd = $('#password').val();
    var  nom= $('#nom').val();
    var  prenom= $('#prenom').val();
    
    var  date_naissance= $('#date_naissance').val();
    var  adresse= $('#adresse').val();
    var  num_tel= $('#num_tel').val();
    var  nbr_point= $('#nbr_point').val();
    var  cin= $('#CIN').val();
    var  privilege= $('#privilege').val();
    var  email= $('#email').val();
    var form = [prenom,nom,date_naissance,adresse,cin,num_tel,nbr_point,email,privilege,usr,pwd] ;
    console.log(form);
    $.ajax({
        url:'update_user.php',
        type : 'POST',
        data:{id_user:id,FORM : form},
        success:function(html){
            console.log(html);
        }
    });
}

function loadupdateUser_User(id) {
    
    var usr = $('#username').val();
    var pwd = $('#password').val();
    var  nom= $('#nom').val();
    var  prenom= $('#prenom').val();
    
    var  date_naissance= $('#date_naissance').val();
    var  adresse= $('#adresse').val();
    var  num_tel= $('#num_tel').val();
    var  cin= $('#CIN').val();
    var  email= $('#email').val();
    var form = [prenom,nom,date_naissance,adresse,cin,num_tel,email,usr,pwd] ;
    console.log(form);
    $.ajax({
        url:'update_user_user.php',
        type : 'POST',
        data:{id_user:id,FORM : form},
        success:function(html){
            window.location='viewProfil.php'
        }
    });
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
