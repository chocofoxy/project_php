<?php
  include('./dbconfig.php') ;
  try {
    $conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $username, $password);
  } catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
  }
  session_start();

 ?>
