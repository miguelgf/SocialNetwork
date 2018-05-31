<?php

error_reporting(0);

$connection = new mysqli(
  '127.0.0.1',
  'root',
  'root',
  'SozialesNetzwerk',
  '8889'
);

if ($connection->connect_error) {
  $error = $connection->connect_error;
  die('We have no connection to database; ' . $error);
}

// echo 'Connection sucessful';
