<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="assistanceForm" name="assistanceForm" action="/forms/assistance_form_process.php" method="post">
  <div class="formSection formSectionA">
    <div class="left">
      <h3>How would you prefer to be contacted?</h3>
      <p>Please provide at least one preferred method of contact, so that we are able to respond to your inquiry</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="phone">Phone number</label>
        <input type="tel" name="phone" id="phone" data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
               data-parsley-multiple-fields="" data-parsley-validate-if-empty />
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
        <input type="text" name="service1" placeholder="ex: Skype, WhatsApp, etc."/>
      </div>
      <div class="inputWrap half fr">
        <label for="service1handle">Contact</label>
        <input type="text" name="service1handle" placeholder="Username, handle, number, etc."/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service2"  placeholder="ex: Skype, WhatsApp, etc."/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service2handle" placeholder="Username, handle, number, etc."/>
      </div>
      <div class="inputWrap half">
        <input type="text" name="service3"  placeholder="ex: Skype, WhatsApp, etc."/>
      </div>
      <div class="inputWrap half fr">
        <input type="text" name="service3handle" placeholder="Username, handle, number, etc."/>
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
        <label for="first">First name</label>
        <input type="text" name="first" placeholder=""/>
      </div>
      <div class="inputWrap half fr">
        <label for="last">Last name</label>
        <input type="text" name="last" placeholder=""/>
      </div>
      <div class="inputWrap">
        <label for="other">Other name or alias</label>
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
        <label for="affiliates">Affiliated groups or organizations</label>
        <p class="helpText">Separate multiple names with commas</p>
        <textarea name="affiliates"></textarea>
      </div>
      <div class="inputWrap">
        <label for="pgp">Public PGP Key</label>
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
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis sunt minus deleniti, repellat hic fugit tenetur soluta modi, perferendis repellendus officia quod ducimus ea adipisci, in pariatur! Illum, saepe culpa!</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="country">Country</label>
        <p class="helpText">Required information</p>
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
      <p>Please tell us more about what support you may be seeking. All fields are optional.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="skills">Is your need urgent?</label>
        <p class="helpText">Please check if you require a response within 24 hours</p>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="1" id="urgentCheck" name="urgentCheck" />
            <label for="urgentCheck"> </label>
          </div>
          My need is urgent
        </div>
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
      <div class="inputWrap">
        <label for="background">Additional background</label>
        <p class="helpText">Please describe your digital security background, any other roles you may be able to fill, and how else you may be able to assist organizations seeking support.</p>
        <textarea name="background"></textarea>
      </div>
      <div class="inputWrap">
        <label for="qualifications">Qualifications &amp; certifications</label>
        <p class="helpText">List any qualifications or certifications you think may be relevant</p>
        <textarea name="qualifications"></textarea>
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
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureComCheck" value="secureComCheck" name="supportAreas[]" required/>
            <label for="secureComCheck"> </label>
          </div>
          Securing my communications
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureDataCheck" value="secureDataCheck" name="supportAreas[]" />
            <label for="secureDataCheck"> </label>
          </div>
          Securing my data
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureHardwareCheck" value="secureHardwareCheck" name="supportAreas[]" />
            <label for="secureHardwareCheck"> </label>
          </div>
          Securing my hardware
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securingInfraCheck" value="securingInfraCheck" name="supportAreas[]" />
            <label for="securingInfraCheck"> </label>
          </div>
          Securing my infrastructure
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureCollabCheck" value="secureCollabCheck" name="supportAreas[]" />
            <label for="secureCollabCheck"> </label>
          </div>
          Securing my collaboration tools
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="penetrationCheck" value="penetrationCheck" name="supportAreas[]" />
            <label for="penetrationCheck"> </label>
          </div>
          Penetration testing
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="threatModelingCheck" value="threatModelingCheck" name="supportAreas[]" />
            <label for="threatModelingCheck"> </label>
          </div>
          Threat modeling
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securityAssessmentCheck" value="securityAssessmentCheck" name="supportAreas[]" />
            <label for="securityAssessmentCheck"> </label>
          </div>
          Security assessment
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="secureTravelCheck" value="secureTravelCheck" name="supportAreas[]" />
            <label for="secureTravelCheck"> </label>
          </div>
          Security for travel
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="securityProtestsCheck" value="securityProtestsCheck" name="supportAreas[]" />
            <label for="securityProtestsCheck"> </label>
          </div>
          Security for protests
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="respondHackCheck" value="respondHackCheck" name="supportAreas[]" />
            <label for="respondHackCheck"> </label>
          </div>
          Responding to being hacked
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="remoteOrganization" value="remoteOrganization" name="supportAreas[]" />
            <label for="remoteOrganization"> </label>
          </div>
          Responding to being doxxed
        </div>
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" id="respondDoxCheck" value="respondDoxCheck" name="supportAreas[]" />
            <label for="respondDoxCheck"> </label>
          </div>
          Other (please describe below
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

  </div>
  </div>

  <p>Lorem, ipsum dolor sitquidem voluptatibus ecusandae ratione.</p>
  <input type="submit"/>
  <input type="hidden" name="token" value="<?php print $token; ?>" />
</form>
