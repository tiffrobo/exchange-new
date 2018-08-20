<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="assistanceForm" name="assistanceForm" action="/forms/assistance_form_process.php" method="post">
<div class="formSection formSectionA">
    <div class="left">
      <h3>Let's get acquainted</h3>
      <img src="/assets/img/lock-small.png" class="lock"/>
      <p class="indent">Everything you share is encrypted while it travels and while we have it.</p>
    </div>
    <div class="right">
      <div class="inputWrap cb">
        <label for="name">Name or alias </label>
        <input type="text" name="name"/>
      </div>
      <div class="inputWrap">
        <label for="title">Title/role</label>
        <input type="text" name="title"/>
      </div>
      <div class="inputWrap">
        <label for="organization">Organization</label>
        <input type="text" name="organization"/>
      </div>
      <div class="inputWrap">
        <label for="website">Organization website</label>
        <input type="text" name="website"/>
      </div>
      <div class="inputWrap">
        <label for="affiliates">Other organizations or affiliations</label>
        <textarea name="affiliates"></textarea>
      </div>
    </div>
  </div>

  <div class="formSection formSectionB">
    <div class="left">
      <h3>How can we help you?</h3>
    </div>
    <div class="right">
      <div class="inputWrap" style="padding-bottom: 0px">
        <label for="moreInfo">Tell us a little more about what you need.</label>
        <textarea name="moreInfo" placeholder="Example: I need help developing a security policy"></textarea>
      </div>
      <div class="inputWrap">
        <div class="checkWrap">
          <div class="ch5">
            <input type="checkbox" value="0" id="helpNotSureCheck" name="helpNotSureCheck" />
            <label for="helpNotSureCheck"> </label>
          </div>
          <p class="indent">I don’t know yet, can you help me figure it out?</p>
        </div>
      </div>
    </div>
  </div>

  <div class="formSection formSectionC">
    <div class="left">
      <h3>Let's stay in touch.</h3>
      <em><p>* Please provide <strong>at least one</strong> preferred method of contact.</p></em>
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
      <div class="inputWrap">
        <label for="pgp">PGP fingerprint</label>
        <input type="text" name="pgp"/>
      </div>
      <div class="inputWrap half">
        <label for="serviceHandle">Other</label>
        <input type="text" name="service1handle" placeholder="Username, handle, number"/>
      </div>
      <div class="inputWrap half fr">
        <label for="service">Provider</label>
        <input type="text" name="service1" placeholder="Example: WhatsApp, Skype"/>
      </div>
    </div>
  </div>

  <div class="formSection formSectionD">
    <div class="left">
      <h3>How did you hear about us? </h3>
    </div>
    <div class="right">
      <div class="inputWrap">
        <textarea name="hearAbout"></textarea>
      </div>
    </div>
  </div>

  <div class="formSection formSectionE formSectionSubmit">
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
