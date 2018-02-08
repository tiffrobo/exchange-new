<?php

function dsx_send_mail($form) {
  $message = 'A submission has been made to the ' . $form . ' form on digitalsecurityexchange.org';
  mail('ops@digitalsecurityexchange.org', 'new ' . $form . ' form submission', $message);
}

function isHttps() {
  return
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443;
}

function redirect($relative_path) {
  $schema = isHttps() ? "https" : "http";
  $schema .= "://";
  $host  = $_SERVER['HTTP_HOST'];
  $uri = $schema . $host . $relative_path;
  header("Location: $uri");
}

