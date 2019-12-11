<?php
  require('./checkSession.php') ;
  if ( isset($_POST['nce']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['classe']) ) {
    $nom = $_POST['nom'] ;
    $prenom = $_POST['prenom'] ;
    $classe = $_POST['classe'] ;
    $nce = $_POST['nce'] ;
    $res = $conn->query("SELECT * FROM etudiant WHERE nce='$nce' ")->fetchAll();
    if ( count($res) != 0 ) {
      $conn->query("UPDATE etudiant SET  nom = '$nom' , prenom = '$prenom' , classe = '$classe' WHERE nce='$nce' ");
    }
    header('Location:./dashboard_etudiant.php');

  } else {
    header('Location:./dashboard_etudiant.php');
  }
?>
