<?php
  require('./checkSession.php') ;
  if ( isset($_GET['id']) ) {
    $id = $_GET['id'] ;
    $res = $conn->query("SELECT * FROM enseignant WHERE matricule='$id' ")->fetch();
    if ( count($res) ) {
      $conn->query("DELETE FROM enseignant WHERE matricule='$id' ");
      header('Location:./dashboard_enseignant.php');
    }
  }
  header('Location:./dashboard_etudiant.php');

?>
