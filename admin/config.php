<?php
  // variable data the database
  $host = 'localhost';
  $username = 'root';
  $pass = '';
  $dbname = 'project';

  // connection database mysqli
  $connection = new mysqli($host, $username, '', $dbname);

  // condition from connection database
	if ($connection->connect_error) { 
		die("Unable to Connect database: " . $db->connect_error);
  }
  
  // hidden errors in page
  error_reporting(0);
  
?>