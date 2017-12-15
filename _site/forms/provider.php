<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="providerForm" name="providerForm" action="/forms/provider_form_process.php" method="post">
  <div class="formSection formSectionA">
    <div class="left">
      <h3>How would you prefer to be contacted?</h3>
      <p>Please provide at least one preferred method of contact, so that we are able to respond to your inquiry.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="phone">Phone number</label>
        <input type="tel" name="phone" id="phone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
               data-parsley-multiple-fields="" data-parsley-validate-if-empty/>
      </div>
      <div class="inputWrap">
        <label for="email">Email address</label>
        <input type="email" name="email" id="email" />
      </div>
      <div class="inputWrap">
        <label for="signal">Signal number</label>
        <input type="tel" name="signal" id="signal" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$" />
      </div>
      <div class="inputWrap half">
        <label for="service1">Service</label>
        <input type="text" name="service1" placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap half fr">
        <label for="service1handle">Other contact methods. Example: WhatsApp, Skype</label>
        <input type="text" name="service1handle" placeholder="Username, handle, number"/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service2"  placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service2handle" placeholder="Username, handle, number"/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service3"  placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service3handle" placeholder="Username, handle, number"/>
      </div>
    </div>
  </div>

  <div class="formSection formSectionB">
    <div class="left">
      <h3>What would you like us to know about you?</h3>
      <p>Please share what information you think is appropriate for us to learn more about you. All fields are optional.</p>
    </div>
    <div class="right">
      <div class="inputWrap half">
        <label for="first">Enter your first name</label>
        <input type="text" name="first" placeholder=""/>
      </div>
      <div class="inputWrap half fr">
        <label for="last">Enter your last name</label>
        <input type="text" name="last" placeholder=""/>
      </div>
      <div class="inputWrap">
        <label for="other">Enter an alternative name or alias </label>
        <input type="text" name="other"/>
      </div>
      <div class="inputWrap">
        <label for="affiliates">Add any groups or organizations you are affiliated with that you'd like to share.</label>
        <p class="helpText">Separate multiple organizations using a comma.</p>
        <textarea name="affiliates"></textarea>
      </div>
      <div class="inputWrap">
        <label for="pgp">Enter your PGP fingerprint</label>
        <input type="text" name="pgp"/>
      </div>
      <div class="inputWrap">
        <label for="language">Primary or preferred language</label>
        <input type="text" name="language"/>
      </div>
      <div class="inputWrap">
        <label for="otherlanguage">Other languages</label>
        <input type="text" name="otherlanguage"/>
      </div>
    </div>
  </div>

  <div class="formSection formSectionC">
    <div class="left">
      <h3>What country are you located in?</h3>
      <p>Please tell us what country you are located in. This information is required in order for us to best match you to organizations seeking support.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="country">Enter your country</label>
        <p class="helpText">Required information</p>
        <input type="text" name="country" required />
      </div>
    </div>
  </div>

  <div class="formSection formSectionD">
    <div class="left">
      <h3>What is your digital security background? </h3>
      <p>Please tell us more about your digital security background.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="country">Your skills and expertise</label>
        <p class="helpText">Please indicate which of the following roles you would like to fill. Select all that apply.</p>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="trainerCheck" name="trainerCheck" />
            <label for="trainerCheck"> </label>
          </div>
          Trainer/Facilitator
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="securityExpertCheck" name="securityExpertCheck" />
            <label for="securityExpertCheck"> </label>
          </div>
          Security expert/advocate
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="hardwareSoftwareCheck" name="hardwareSoftwareCheck" />
            <label for="hardwareSoftwareCheck"> </label>
          </div>
          Hardware/Software Expert
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="otherCheck" name="otherCheck" />
            <label for="otherCheck"> </label>
          </div>
          Other <span class="helpText">Please describe below, in Additional background, any additional background, skills, or expertise</span>
        </div>
      </div>
      <div class="inputWrap">
        <label for="background">Additional background</label>
        <p class="helpText">Please describe your digital security background, any other roles you may be able to fill, and how else you may be able to assist organizations seeking support.</p>
        <textarea name="background"></textarea>
      </div>
      <div class="inputWrap">
        <label for="qualifications">Qualifications and certifications</label>
        <p class="helpText">Please list any qualifications or certifications you think are relevant</p>
        <textarea name="qualifications"></textarea>
      </div>
    </div>
  </div>
  <input type="submit"/>
  <input type="hidden" name="token" value="<?php print $token; ?>" />
</form>