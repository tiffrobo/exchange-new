<?php

function dsx_send_mail($form) {
  $message = 'A submission has been made to the ' . $form . ' form on digitalsecurityexchange.org';
  mail('ops@digitalsecurityexchange.org', 'new ' . $form . ' form submission', $message);
}