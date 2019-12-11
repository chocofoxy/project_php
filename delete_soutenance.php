<?php
  require('./checkSession.php') ;
  if ( isset($_GET['id']) ) {
    $id = $_GET['id'] ;
    $res = $conn->query("SELECT * FROM soutenance WHERE numjury ='$id' ")->fetch();
    if ( count($res) ) {
      $conn->query("DELETE FROM soutenance WHERE numjury ='$id' ");
      header('Location:./dashboard.php');
    }
  }
  header('Location:./dashboard.php');

?>
