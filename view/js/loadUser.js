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


function loaddisplaymodifierUser(){
    
    $.ajax({
        type: "POST",
        url: "../../controller/modifieruserController.php"},
        cache: false,
        dataType : "json",
        success: function (html){
            var labelArray = [];
            var valArray = [];
            //console.log(data.produit);
            $.each(html,function(index,elt){
               //console.log(index+" "+element);
               //console.log(elt.produit);
               labelArray.push(elt.produit);
               valArray.push(elt.quantite);
               //array.push({elt.produit : elt.quantite});
            });
            testchart(labelArray,valArray);
            console.log(labelArray);
            console.log(valArray);

        }
    });
}