/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function adminLogin(){
    var usr = $("#login").val();
    var pwd = $("#pwrd").val();
    $.ajax({
        url:'../controller/loginController.php',
        type:'POST',
        data:{username : usr, password : pwd, action : 'Admin' },
        success: function(html){
            if(html === "1"){
                window.location = "admin.php";
            }
        }
    });
}


