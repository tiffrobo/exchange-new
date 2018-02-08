<?php

$dsx_home = getenv('DSX_HOME');
$gnupg_key_fp = getenv('DSX_KEY_FINGERPRINT');

$path_to_submissions =  $dsx_home . "submissions/";
$gnupg_home  =  $dsx_home . "gnupg/";
$gnupg_pubkey = $gnupg_home . "dsx.pub";

putenv("GNUPGHOME=".$gnupg_home);
