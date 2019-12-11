<?php
  require('./checkSession.php') ;
  if ( isset($_GET['id']) ) {
    $id = $_GET['id'] ;
    $res = $conn->query("SELECT * FROM etudiant WHERE nce ='$id' ")->fetch();
    if ( count($res) ) {
      $conn->query("DELETE FROM etudiant WHERE nce ='$id' ");
      header('Location:./dashboard_etudiant.php');
    }
    header('Location:./dashboard_etudiant.php');

  }
?>
