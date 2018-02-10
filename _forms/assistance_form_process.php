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
  'organization',
  'title',
  'affiliates',
  'pgp',
  'language',
  'otherlanguage',
  'country',
  'remoteOrganization',
  'urgentCheck',
  'ongoingRadio',
  'supportAreas',
  'moreInfo',
  'hearAbout'
  );

session_start();

process_form('assistance', $fields, $path_to_submissions, $gnupg_key_fp);

?>
