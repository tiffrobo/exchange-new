<?php
include "config.php";
include "functions.php";

$fields = array(
  'name',
  'title',
  'organization',
  'website',
  'affiliates',
  'moreInfo',
  'helpNotSureCheck',
  'phone',
  'email',
  'signal',
  'pgp',
  'serviceHandle',
  'service',
  );

session_start();

process_form('assistance', $fields, $path_to_submissions, $gnupg_key_fp);

?>
