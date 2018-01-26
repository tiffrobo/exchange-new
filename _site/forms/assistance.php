<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="assistanceForm" name="assistanceForm" action="/forms/assistance_form_process.php" method="post">
  <div class="formSection formSectionA">
    <div class="left">
      <h3>How would you prefer to be contacted?</h3>
      <p>Please provide <strong>at least one preferred method of contact</strong>, so that we are able to respond to your inquiry</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <div id="contactError"></div>
        <label for="phone">Phone number</label>
        <input type="tel" name="phone" id="phone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
               data-parsley-multiple-fields="" data-parsley-validate-if-empty data-parsley-errors-container="#contactError" />
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
        <label for="service1handle">Other contact method(s), if any</label>
        <input type="text" name="service1handle" placeholder="Username, handle, number"/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service2"  placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service2handle" placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service3"  placeholder="ex: Skype, WhatsApp, etc."/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service3handle" placeholder="Username, handle, number"/>
      </div>
    </div>
  </div>

  <div class="formSection formSectionB">
    <div class="left">
      <h3>What would you like us to know about you?</h3>
      <p>Please share what information you think is appropriate for us to learn more about you. <strong>All fields are optional.</strong></p>
    </div>
    <div class="right">
      <div class="inputWrap half">
        <label for="first">First name</label>
        <input type="text" name="first" placeholder=""/>
      </div>
      <div class="inputWrap half fr">
        <label for="last">Last name</label>
        <input type="text" name="last" placeholder=""/>
      </div>
      <div class="inputWrap cb">
        <label for="other">Alternative name or alias </label>
        <input type="text" name="other"/>
      </div>
      <div class="inputWrap">
        <label for="organization">Your organization</label>
        <input type="text" name="organization"/>
      </div>
      <div class="inputWrap">
        <label for="title">Your title/role</label>
        <input type="text" name="title"/>
      </div>
      <div class="inputWrap">
        <label for="affiliates">Add any groups or organizations you would like to share.</label>
        <p class="helpText">Separate multiple organizations using a comma.</p>
        <textarea name="affiliates"></textarea>
      </div>
      <div class="inputWrap">
        <label for="pgp">PGP fingerprint</label>
        <input type="text" name="pgp"/>
      </div>
      <div class="inputWrap">
        <label for="language">Primary or preferred contact language</label>
        <input type="text" name="language"/>
      </div>
      <div class="inputWrap">
        <label for="otherlanguage">Other languages with which you have proficiency</label>
        <input type="text" name="otherlanguage"/>
      </div>
    </div>
  </div>

  <div class="formSection formSectionC">
    <div class="left">
      <h3>What country are you located in?</h3>
      <p>Please tell us in what country you are located so we can connect you to the appropriate providers. If you prefer to provide this information at a later stage, you may leave this information blank.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="country">Country</label>
        <input type="text" name="country"/>
      </div>
      <div class="inputWrap">
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="remoteOrganization" name="remoteOrganization" />
            <label for="remoteOrganization"> </label>
          </div>
          I and/or my organization are remote and do not have a single location
        </div>
      </div>
    </div>
  </div>

  <div class="formSection formSectionD">
    <div class="left">
      <h3>What type of support are you seeking? </h3>
      <p>Please tell us more about what support you may be seeking. <strong>All fields are optional.</strong></p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="urgentCheck">Is your need urgent?</label>
        <p class="helpText">Select yes if you require a response within 24 hours</p>
        <div id="urgentErrors"></div>
        <div class="checkWrap">
          <div class="rad">
            <input type="radio" value="yes" id="urgentCheck" name="urgentCheck" required data-parsley-errors-container="#urgentErrors" data-parsley-error-message="Please indicate whether your need is urgent" />
            <label for="urgentCheck1">Yes</label>
          </div>
          <div class="rad">
            <input type="radio" value="no" id="urgentCheck" name="urgentCheck" required />
            <label for="urgentCheck2">No</label>
          </div>
        </div>
        <label for="ongoingRadio">Are you seeking one-time support or ongoing support? </label>
        <p class="helpText">Please tell us what type of support you are seeking </p>
        <div class="checkWrap">
          <div class="rad">
            <input type="radio" id="ongoingRadio1" name="ongoingRadio" value="one-time" />
            <label for="ongoingRadio1">One Time Support</label>
          </div>
          <div class="rad">
            <input type="radio" id="ongoingRadio2" name="ongoingRadio" value="ongoing" />
            <label for="ongoingRadio2">Ongoing Support</label>
          </div>
          <div class="rad">
            <input type="radio" id="ongoingRadio3" name="ongoingRadio" value="not-sure"/>
            <label for="ongoingRadio3">I'm Not Sure</label>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="formSection formSectionE">
    <div class="left">
      <h3>Which of the following areas of support are you interested in? </h3>
      <p>Please tell us which of the following areas of support you may be seeking. Select all that apply.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <div id="supportAreasError"></div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureComCheck" value="communications" name="supportAreas[]" required data-parsley-errors-container="#supportAreasError" data-parsley-error-message="Please select at least one support area, or select Other"/>
            <label for="secureComCheck"> </label>
          </div>
          Securing my communications
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureDataCheck" value="data" name="supportAreas[]" />
            <label for="secureDataCheck"> </label>
          </div>
          Securing my data
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureHardwareCheck" value="hardware" name="supportAreas[]" />
            <label for="secureHardwareCheck"> </label>
          </div>
          Securing my hardware
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securingInfraCheck" value="infrastructure" name="supportAreas[]" />
            <label for="securingInfraCheck"> </label>
          </div>
          Securing my infrastructure
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureCollabCheck" value="collaboration tools" name="supportAreas[]" />
            <label for="secureCollabCheck"> </label>
          </div>
          Securing my collaboration tools
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureCollabCheck" value="network" name="supportAreas[]" />
            <label for="secureCollabCheck"> </label>
          </div>
          Securing my network
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="threatModelingCheck" value="threatmodeling" name="supportAreas[]" />
            <label for="threatModelingCheck"> </label>
          </div>
          Threat modeling
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securityAssessmentCheck" value="assessment" name="supportAreas[]" />
            <label for="securityAssessmentCheck"> </label>
          </div>
          Security assessment
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureTravelCheck" value="travel" name="supportAreas[]" />
            <label for="secureTravelCheck"> </label>
          </div>
          Security for travel
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securityProtestsCheck" value="protests" name="supportAreas[]" />
            <label for="securityProtestsCheck"> </label>
          </div>
          Security for protests
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="respondHackCheck" value="hacked" name="supportAreas[]" />
            <label for="respondHackCheck"> </label>
          </div>
          Responding to being hacked
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="remoteOrganization" value="doxx-troll" name="supportAreas[]" />
            <label for="remoteOrganization"> </label>
          </div>
          Responding to being doxxed or trolled
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="respondDoxCheck" value="other" name="supportAreas[]" />
            <label for="respondDoxCheck"> </label>
          </div>
          Other (please describe below)
        </div>
      </div>
    </div>
  </div>
  <div class="formSection formSectionF">
    <div class="left">
      <h3>What else can you tell us about your issue and/or the type of support you are seeking?</h3>
      <p>Please list any additional details that will help us understand the issue you are experiencing and the support you are seeking.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <textarea name="moreInfo"></textarea>
      </div>
    </div>
  </div>

  <div class="formSection formSectionG">
    <div class="left">
      <h3>How did you hear about us? </h3>
    </div>
    <div class="right">
      <div class="inputWrap">
        <textarea name="hearAbout"></textarea>
      </div>
    </div>
  </div>

  <div class="formSection formSectionH formSectionSubmit">
    <div class="left">
    </div>
    <div class="right">
      <div class="inputWrap">
        <input type="submit"/>
        <input type="hidden" name="token" value="<?php print $token; ?>" />
      </div>
    </div>
  </div>

  </div>
  </div>
  
</form>
