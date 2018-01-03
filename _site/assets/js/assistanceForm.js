jQuery(document).ready(function($){
  $("#assistanceForm-wrapper").load('/forms/assistance.php', function() {
    $('#assistanceForm').parsley();

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