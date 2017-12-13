jQuery(document).ready(function($){
  $("#assistanceForm-wrapper").load('/forms/assistance.php', function() {
    $('#assistanceForm').parsley();


  });
});