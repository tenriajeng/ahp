<?php 
  $host = 'localhost';
  $user = 'root';
  $password = '';
  $db = 'mdis';

  $connection = mysqli_connect( $host, $user, $password, $db ) or die( mysqli_error() );
?>