<?php
$server = 'rec353.encs.concordia.ca';
$username = 'rec353_4';
$password = 'aA12345';
// $database = 'comp353';
$database = 'rec353_4';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
  $con2 = mysqli_connect($server,$username,$password,$database);
  //print('Connected');
} catch (PDOException $e) {
  //print('Not Connnnnnnfected');
  die('Connection Failed: ' . $e->getMessage());
}

?>