<?php
  require('./checkSession.php') ;
  if ( isset($_POST['matricule']) && isset($_POST['nom']) && isset($_POST['prenom'])  ) {
    $nom = $_POST['nom'] ;
    $prenom = $_POST['prenom'] ;
    $matricule = $_POST['matricule'] ;
    $res = $conn->query("SELECT * FROM enseignant WHERE matricule='$matricule' ")->fetchAll();
    if ( count($res) == 0 ) {
      $conn->query("INSERT INTO enseignant (`matricule`, `nom_Ens`, `prenom_Ens` ) VALUES ('$matricule','$nom','$prenom') ");
    }
    header('Location:./dashboard_enseignant.php');

  } else {
    header('Location:./dashboard_enseignant.php');
  }
?>
