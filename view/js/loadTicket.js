		function loadTicket () {
			xmlhttp = new XMLHttpRequest();xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("show").innerHTML = xmlhttp.responseText;
            }
        }
			xmlhttp.open("GET","admin_ticket.php",true);
        	xmlhttp.send();
		}