$(document).ready(function(){
  $("#user").on('paste', function(e){
    e.preventDefault();
    alert('Esta acción está prohibida');
  })

  $("#user").on('copy', function(e){
    e.preventDefault();
    alert('Esta acción está prohibida');
  })
})
