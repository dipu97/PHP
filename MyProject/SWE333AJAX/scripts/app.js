$(document).ready(function(){
  $.get('function/index.php',function(response){
    $('#DataView').html(response);
  })
})
