jQuery(document).ready(function($){
  $("#providerForm-wrapper").load('/forms/provider.php', function() {
    $('#providerForm').parsley();

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
          en: 'You must fill in one contact field -- either Phone, Email, or Signal'
        }
      });
  });
});