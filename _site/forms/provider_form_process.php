<?php
include "config.php";
include "functions.php";

$fields = array(
  'phone',
  'email',
  'signal',
  'service1',
  'service1handle',
  'service2',
  'service2handle',
  'service3',
  'service3handle',
  'first',
  'last',
  'other',
  'affiliates',
  'pgp',
  'language',
  'otherlanguage',
  'country',
  'trainerCheck',
  'securityExpertCheck',
  'hardwareSoftwareCheck',
  'otherCheck',
  'background',
  'qualifications',
  );

session_start();

process_form('provider', $fields, $path_to_submissions, $gnupg_key_fp);

?>
