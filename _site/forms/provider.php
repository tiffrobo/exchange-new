<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="providerForm" name="providerForm" action="/forms/provider_form_process.php" method="post">
  <div class="formSection formSectionA">
    <div class="left">
      <h3>How would you prefer to be contacted?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis sunt minus deleniti, repellat hic fugit tenetur soluta modi, perferendis repellendus officia quod ducimus ea adipisci, in pariatur! Illum, saepe culpa!</p>
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
      <h3>How would you prefer to be contacted?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis sunt minus deleniti, repellat hic fugit tenetur soluta modi, perferendis repellendus officia quod ducimus ea adipisci, in pariatur! Illum, saepe culpa!</p>
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
        <input type="text" name="country" required />
      </div>
    </div>
  </div>

  <div class="formSection formSectionD">
    <div class="left">
      <h3>How would you prefer to be contacted?</h3>
      <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis sunt minus deleniti, repellat hic fugit tenetur soluta modi, perferendis repellendus officia quod ducimus ea adipisci, in pariatur! Illum, saepe culpa!</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <label for="country">Your skills and expertise</label>
        <p class="helpText">Select all that apply</p>
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
          Other <span class="helpText">Please describe below, in Additional background</span>
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
  <p>Lorem, ipsum dolor sitquidem voluptatibus ecusandae ratione.</p>
  <input type="submit"/>
  <input type="hidden" name="token" value="<?php print $token; ?>" />
</form>