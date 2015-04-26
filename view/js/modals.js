$(document).ready(function(){
    $('.modal-trigger').leanModal({
    	opacity:.7
    });
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
      $("#error").hide();
  });
  
function testCreds(){
    var usr = $("#icon_prefix").val();
    var pwd = $("#icon_password").val();
    
    $.ajax({
        type: "POST",
        url: "../controller/loginController.php",
        data: {username: usr, password: pwd, action:'login'},
        cache: false,
        success: function (html){
            if(html == '1')
            {
                $("#error").addClass("valid");
                $("#error").html("You are now connected");
                $("#error").show().delay(800).fadeOut(500);
                
            }

        }
    });
}