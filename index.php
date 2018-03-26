<?php
  ob_start();
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,'http://192.168.1.204:8083/WorkSpace/rest-api/API/read');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $response = curl_exec($ch);
  print_r($response);
  ?>