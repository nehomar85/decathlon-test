<?php
  $host_name = 'localhost';
  $database = 'decathlon';
  $user_name = 'root';
  $password = '';

  $dk_conn = new mysqli($host_name, $user_name, $password, $database);

  if ($dk_conn->connect_error) {
    die('Failed to connect to MySQL: '. $Portal->connect_error);
  }
?>