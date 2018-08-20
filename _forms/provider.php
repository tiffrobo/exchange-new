<?php include 'form_prepare.php'; ?>
<form class="bigForm" id="providerForm" name="providerForm" action="/forms/provider_form_process.php" method="post">
  <div class="formSection formSectionA">
    <div class="left">
      <h3>Let's get acquainted.</h3>
      <img src="/assets/img/lock-small.png" class="lock"/>
      <p class="indent">Everything you share is secured via encryption while it travels and while we have it.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
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
      <h3>Tell us more.</h3>
      <p>Check all that apply.</p>
    </div>
    <div class="right">
      <div class="inputWrap">
        <h4>Background</h4>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="trainerCheck" name="trainerCheck" />
            <label for="trainerCheck"> </label>
          </div>
          Trainer
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="softwareExpertCheck" name="softwareExpertCheck" />
            <label for="softwareExpertCheck"> </label>
          </div>
          Software Expert
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="facilitatorCheck" name="trainerCheck" />
            <label for="facilitatorCheck"> </label>
          </div>
          Facilitator
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="otherCheck" name="otherCheck" />
            <label for="otherCheck"> </label>
          </div>
          Other
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="hardwareExpertCheck" name="hardwareExpertCheck" />
            <label for="hardwareExpertCheck"> </label>
          </div>
          Hardware Expert
        </div>
        <div class="inputWrap half fr">
          <input type="text" name="otherText" placeholder="Example"/>
        </div>
      </div>
      <div class="inputWrap">
        <h4>Community Networks</h4>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="antiCorruptionCheck" name="antiCorruptionCheck" />
            <label for="antiCorruptionCheck"> </label>
          </div>
          <strong>Anti-Corruption &amp; Transparency</strong>
          <p>The organization campaigns, or takes other actions against corruption and transparency.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="antiWarCheck" name="antiWarCheck" />
            <label for="antiWarCheck"> </label>
          </div>
          <strong>Anti-War/Anti-Violence</strong>
          <p>The organization campaigns, or takes other actions against war.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="cultureCheck" name="cultureCheck" />
            <label for="cultureCheck"> </label>
          </div>
          <strong>Culture</strong>
          <p>The organization campaigns or acts to promote cultural events.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="domesticViolenceCheck" name="domesticViolenceCheck" />
            <label for="domesticViolenceCheck"> </label>
          </div>
          <strong>Domestic Violence</strong>
          <p>The organization campaigns or acts to prevent domestic violence.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="educationCheck" name="educationCheck" />
            <label for="educationCheck"> </label>
          </div>
          <strong>Education</strong>
          <p>The organization in concerned with some form of education.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="economicChangeCheck" name="economicChangeCheck" />
            <label for="economicChangeCheck"> </label>
          </div>
          <strong>Economic Change</strong>
          <p>Issues of economic policy, wealth distribution, etc.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="environmentCheck" name="environmentCheck" />
            <label for="environmentCheck"> </label>
          </div>
          <strong>Environment</strong>
          <p>The organization campaigns or acts to protect the environment.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="electionMonitoringCheck" name="electionMonitoringCheck" />
            <label for="electionMonitoringCheck"> </label>
          </div>
          <strong>Election Monitoring</strong>
          <p>The organization is an election monitor, or involved in election monitoring.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="freedomToolCheck" name="freedomToolCheck" />
            <label for="freedomToolCheck"> </label>
          </div>
          <strong>Freedom Tool Development</strong>
          <p>The organization develops tools for use in defending or extending digital rights.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="freedomExpressionCheck" name="freedomExpressionCheck" />
            <label for="freedomExpressionCheck"> </label>
          </div>
          <strong>Freedom of Expression</strong>
          <p>The organization is concerned with freedom of speech issues.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="fundingCheck" name="fundingCheck" />
            <label for="fundingCheck"> </label>
          </div>
          <strong>Funding</strong>
          <p>The organization is a funder of organizations or projects working with at risk users.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="healthIssuesCheck" name="healthIssuesCheck" />
            <label for="healthIssuesCheck"> </label>
          </div>
          <strong>Health Issues</strong>
          <p>The organization prevents epidemic illness or acts on curing them.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="humanRightsCheck" name="humanRightsCheck" />
            <label for="humanRightsCheck"> </label>
          </div>
          <strong>Human Rights Issues</strong>
          <p>Relating to the detection, recording, exposure, or challenging of abuses of human rights.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="internetTelecomsCheck" name="internetTelecomsCheck" />
            <label for="internetTelecomsCheck"> </label>
          </div>
          <strong>Internet and Telecoms</strong>
          <p>Issues of digital rights in electronic communications.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="LGBTCheck" name="LGBTCheck" />
            <label for="LGBTCheck"> </label>
          </div>
          <strong>LGBTQAI+</strong>
          <p>Issues relating to the Lesbian, Gay, Bi, Transgender community.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="policyCheck" name="policyCheck" />
            <label for="policyCheck"> </label>
          </div>
          <strong>Policy</strong>
          <p>The organization is a policy think- tank, or policy advocate.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="politicsCheck" name="politicsCheck" />
            <label for="politicsCheck"> </label>
          </div>
          <strong>Politics</strong>
          <p>The organization takes a strong political view or is a political entity.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="privacyCheck" name="privacyCheck" />
            <label for="privacyCheck"> </label>
          </div>
          <strong>Privacy</strong>
          <p>Issues relating to the individual’s reasonable right to privacy.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="rapidResponseCheck" name="rapidResponseCheck" />
            <label for="rapidResponseCheck"> </label>
          </div>
          <strong>Rapid Response</strong>
          <p>The organization provides rapid response type capability for civil society.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="refugeesCheck" name="refugeesCheck" />
            <label for="refugeesCheck"> </label>
          </div>
          <strong>Refugees</strong>
          <p>Issues relating to displaced people.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="reproductiveCheck" name="reproductiveCheck" />
            <label for="reproductiveCheck"> </label>
          </div>
          <strong>Reproductive Rights</strong>
          <p>The organization provides campaigns or acts to protect reproductive rights.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="infoSecurityCheck" name="infoSecurityCheck" />
            <label for="infoSecurityCheck"> </label>
          </div>
          <strong>Security</strong>
          <p>Issues relating to physical or information security.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="womensRightsCheck" name="womensRightsCheck" />
            <label for="womensRightsCheck"> </label>
          </div>
          <strong>Women’s Rights</strong>
          <p>Issues pertaining to inequality between men and women, or issues of particular relevance to women.</p>
        </div>
        <div class="checkWrap half detailed">
          <div class="ch5">
            <input type="checkbox" value="1" id="youthRightsCheck" name="youthRightsCheck" />
            <label for="youthRightsCheck"> </label>
          </div>
          <strong>Youth Rights</strong>
          <p>Issues of particular relevance to youth.</p>
        </div>
      </div>
      <div class="inputWrap">
        <h4>Skills</h4>
        <h5>Analysis</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="incidentAnalysisCheck" name="incidentAnalysisCheck" />
            <label for="incidentAnalysisCheck"> </label>
          </div>
          Incident Analysis
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="threatModelingCheck" name="threatModelingCheck" />
            <label for="threatModelingCheck"> </label>
          </div>
          Threat Modeling
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="bestPracticeCheck" name="bestPracticeCheck" />
            <label for="bestPracticeCheck"> </label>
          </div>
          Best Practice Review
        </div>

        <h5>Internal Process</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="trainingCheck" name="trainingCheck" />
            <label for="trainingCheck"> </label>
          </div>
          Education/Training
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="policyWritingCheck" name="policyWritingCheck" />
            <label for="policyWritingCheck"> </label>
          </div>
          Policy Writing
        </div>

        <h5>Securing Systems and Processes</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="securingHardwareCheck" name="securingHardwareCheck" />
            <label for="securingHardwareCheck"> </label>
          </div>
          Securing Hardware
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="securingInfrastructureCheck" name="securingInfrastructureCheck" />
            <label for="securingInfrastructureCheck"> </label>
          </div>
          Securing Infrastructure
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="securingDataCheck" name="securingDataCheck" />
            <label for="securingDataCheck"> </label>
          </div>
          Securing Data
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="securingCommunicationsCheck" name="securingCommunicationsCheck" />
            <label for="securingCommunicationsCheck"> </label>
          </div>
          Securing Communications
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="secureCollaborationCheck" name="secureCollaborationCheck" />
            <label for="secureCollaborationCheck"> </label>
          </div>
          Using Secure Collaboration Tools
        </div>

        <h5>Physical Security</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="securityTravelCheck" name="securityTravelCheck" />
            <label for="securityTravelCheck"> </label>
          </div>
          Security Travel
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="protestSecurityCheck" name="protestSecurityCheck" />
            <label for="protestSecurityCheck"> </label>
          </div>
          Security For Protests
        </div>

        <h5>Social</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="socialEngineeringCheck" name="socialEngineeringCheck" />
            <label for="socialEngineeringCheck"> </label>
          </div>
          Social Engineering
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="safeReportingCheck" name="safeReportingCheck" />
            <label for="safeReportingCheck"> </label>
          </div>
          Journalism and Safe Reporting
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="hackRespondingCheck" name="hackRespondingCheck" />
            <label for="hackRespondingCheck"> </label>
          </div>
          Responding to Being Hacked
        </div>

        <h5>Digital</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="onlinePrivacyCheck" name="onlinePrivacyCheck" />
            <label for="onlinePrivacyCheck"> </label>
          </div>
          Protection of Online Privacy
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="malwareAttackCheck" name="malwareAttackCheck" />
            <label for="malwareAttackCheck"> </label>
          </div>
          Recovering from a Malware Attack
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="doxxedTrolledCheck" name="doxxedTrolledCheck" />
            <label for="doxxedTrolledCheck"> </label>
          </div>
          Doxxed or Trolled
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="circumventionCheck" name="circumventionCheck" />
            <label for="circumventionCheck"> </label>
          </div>
          Circumvention Methods
        </div>

        <h5>Development</h5>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="androidDevCheck" name="androidDevCheck" />
            <label for="androidDevCheck"> </label>
          </div>
          Android App Development
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="iosDevCheck" name="iosDevCheck" />
            <label for="iosDevCheck"> </label>
          </div>
          iOS App Development
        </div>
        <div class="checkWrap half">
          <div class="ch5">
            <input type="checkbox" value="1" id="webDevCheck" name="webDevCheck" />
            <label for="webDevCheck"> </label>
          </div>
          Web Development
        </div>
      </div>
    </div>
  </div>

  <div class="formSection formSectionC">
    <div class="left">
      <h3>Let's stay in touch.</h3>
      <p><em>* Please provide <strong>at least one</strong> preferred method of contact.</em></p>
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
        <label for="servicehandle">Other</label>
        <input type="text" name="servicehandle" placeholder="Username, handle, number"/>
      </div>
      <div class="inputWrap half fr">
        <label for="service">Provider</label>
        <input type="text" name="service" placeholder="Example: WhatsApp, Skype"/>
      </div>
      <div class="inputWrap">
        <label for="qualifications">Certifications & qualifications</label>
        <textarea name="qualifications"></textarea>
      </div>
    </div>
  </div>

   <div class="formSection formSectionD">
    <div class="left">
      <h3>How did you hear about us?</h3>
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

</form>
