<?php
include "config.php";

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
  'background',
  'qualifications',
  'supportAreas',
  'moreInfo'
  );

session_start();

if (!empty($_POST['token'])) {
  if (hash_equals($_SESSION['token'], $_POST['token'])) {

    $list = [$fields];
    foreach ($fields as $field) {
      $list[1][] = is_array($_POST[$field]) ? implode(';', $_POST[$field]) : $_POST[$field];
    }
    $filename = $_POST['token'];
    $fp = fopen($path_to_submissions . $filename . '.csv', 'w');

    foreach ($list as $fields) {
      fputcsv($fp, $fields);
    }

    fclose($fp);

    header('Location: /thank-you');

  }
  else {
    // unmatched token
    header('Location: /form-error');
  }
}
else {
  // no token
  header('Location: /form-error');
}




?>