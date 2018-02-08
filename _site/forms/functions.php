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

function str_putcsv($input, $delimiter = ',', $enclosure = '"') {
  $fp = fopen('php://memory', 'r+b');
  fputcsv($fp, $input, $delimiter, $enclosure);
  rewind($fp);
  $data = rtrim(stream_get_contents($fp), "\n");
  fclose($fp);
  return $data;
}

function process_form($form_name, $fields, $save_path, $key_fp) {
  if (!empty($_POST['token'])) {
    if (hash_equals($_SESSION['token'], $_POST['token'])) {

      $list = [$fields];

      foreach ($fields as $field) {
        $list[1][] = is_array($_POST[$field]) ? implode(';', $_POST[$field]) : $_POST[$field];
      }

      $sid = $_POST['token'];

      $plaintext = '';
      foreach ($list as $fields) {
        $line = str_putcsv($fields);
        $plaintext .= $line . '\n';
      }

      $ciphertext = encrypt_data($plaintext, $key_fp);
      if ($ciphertext === FALSE) {

        redirect('/form-error');

      } else {

        $filename = $save_path . $sid . '.csv.gpg';
        $ret = file_put_contents($filename, $ciphertext, FILE_APPEND | LOCK_EX);

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

