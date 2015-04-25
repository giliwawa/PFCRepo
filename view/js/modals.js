$(document).ready(function(){
    $('.modal-trigger').leanModal({
    	opacity:.7
    });
      $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
      });
  });
  
  function testCreds(){
      var usr = $("#icon_prefix").val();
      var pwd = $("#icon_password").val();
      $.ajax({
          type: "POST",
          url: "controller/loginController.php",
          data: {username: usr, password: pwd},
          cache: false,
          success: function (html){
              $("#icon_prefix").val(html);
          }
      });
  }