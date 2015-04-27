jQuery(document).ready(function(){
  $('div').on('submit',"#addproduct",function(event){
 
  //disable the default form submission
  event.preventDefault();
 
  //grab all form data  
  var formData = new FormData($(this)[0]);
 
  $.ajax({
    url: '../controller/addproduct.php',
    type: 'POST',
    data: formData,
    async: false,
    cache: false,
    contentType: false,
    processData: false,
    success: function (returndata) {
      alert(returndata);
    },
    error: function(E){
      alert(E.status+" "+E.responseText);
    }
  });
 
  return false;
});
});