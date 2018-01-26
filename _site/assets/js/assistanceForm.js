jQuery(document).ready(function($){
  $("#assistanceForm-wrapper").load('/forms/assistance.php', function() {
    $('#assistanceForm').parsley();

    $("input[name='service1'],input[name='service2'],input[name='service3']").each(function(){
      $(this).after("<span class='connector'></span>")
    })

    window.Parsley
      .addValidator('multipleFields', {
        requirementType: 'string',
        validateString: function(value, requirement) {
          if (value || $('#email').val() || $('#signal').val()) {
            return true;
          }
          else {
            return false;
          }

        },
        messages: {
          en: 'Please fill in at least one contact field -- either Phone, Email, or Signal'
        }
      });
  });
});