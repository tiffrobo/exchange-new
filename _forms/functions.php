<?php

function dsx_send_mail($form) {
  $message = 'A submission has been made to the ' . $form . ' form on digitalsecurityexchange.org';
  mail('ops@digitalsecurityexchange.org', 'new ' . $form . ' form submission', $message);
}

function import_key($pubkey_file) {
  $pub_key = file_get_contents($gnupg_pubkey);
  $gpg = new gnupg();
  $info = $gpg->import($pub_key);
  var_dump($info);
}

function encrypt_data($plaintext, $key_fp) {
  try {
    $gpg = new gnupg();
    $gpg->seterrormode(gnupg::ERROR_EXCEPTION);
    $gpg->addencryptkey($key_fp);
    $ciphertext = $gpg->encrypt($plaintext);
    return $ciphertext;
  } catch (Exception $e) {
    // TODO error logging
    //echo 'ERROR: ' . $e->getMessage();
    return FALSE;
  }
}

function is_https() {
  return
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || $_SERVER['SERVER_PORT'] == 443;
}

function redirect($relative_path) {
  $schema = is_https() ? "https" : "http";
  $schema .= "://";
  $host  = $_SERVER['HTTP_HOST'];
  $uri = $schema . $host . $relative_path;
  header("Location: $uri");
}

function random_token() {
  if (function_exists('mcrypt_create_iv')) {
    return bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
  } else {
    return bin2hex(openssl_random_pseudo_bytes(32));
  }
}

function make_filename($prefix, $suffix = 0) {
  $date_str = date('Y-m-d_His');
  if($suffix != 0) {
    $suffix = '-' . $suffix;
  }
  return $prefix . $date_str . $suffix . '.txt.gpg';
}

function post_to_txt($fields) {

  $list = [$fields];

  $lines = '';
  foreach ($fields as $field) {
    $value = is_array($_POST[$field]) ? implode('; ', $_POST[$field]) : $_POST[$field];
    $lines .= $field . ": " . $value . "\n";
  }
  return $lines;
}

function atomic_write($dir, $data, $try = 0) {
  if($try > 10) {
    // TODO logging
    return FALSE;
  }
  $fname = make_filename($dir, $try);
  $fp = fopen($fname, "x");
  if($fp !== FALSE) {
    if (flock($fp, LOCK_EX | LOCK_NB)) {
      fwrite($fp, $data);
      fflush($fp);
      flock($fp, LOCK_UN);
      return $fname;
    }
  }
  return atomic_write($dir, $data, $try+1);
}

function process_form($form_name, $fields, $save_path, $key_fp) {
  if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {

      $plaintext = post_to_txt($fields);

      $ciphertext = encrypt_data($plaintext, $key_fp);

      if ($ciphertext === FALSE) {

        redirect('/form-error');

      } else {

        $ret = atomic_write($save_path, $ciphertext);

        if ($ret === FALSE) {
          redirect('/form-error');
        } else {
          dsx_send_mail($form_name);
          redirect('/thank-you');
        }
      }
    }
    else {
      // unmatched token
      redirect('/form-error');
    }
  }
  else {
    // no token
    redirect('/form-error');
  }
}

