<?php

function dsx_send_mail($form) {
  $message = 'A submission has been made to the ' . $form . ' form on digitalsecurityexchange.org';
  mail('peter@echo.co', 'new ' . $form . ' form submission', $message);
}