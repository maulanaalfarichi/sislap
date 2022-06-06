<?php
  $dbhost = 'localhost';
  $dbuser = 'takatek_diklatpim';
  $dbpass = 'qazxsw1234';
  $dbname = 'takatek_e-bisa';

  $connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

  if ($connect->connect_error) {
   die('Maaf koneksi gagal: '. $connect->connect_error);
  }