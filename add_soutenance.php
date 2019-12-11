<?php
  require('./checkSession.php') ;
  if ( isset($_POST['id']) && isset($_POST['nce']) && isset($_POST['matricule']) && isset($_POST['note']) && isset($_POST['date'])) {
    $id = $_POST['id'] ;
    $date = $_POST['date'] ;
    $note = $_POST['note'] ;
    $nce = $_POST['nce'] ;
    $matricule = $_POST['matricule'] ;
    $res = $conn->query("SELECT * FROM soutenance WHERE numjury='$id' ")->fetchAll();
    if ( count($res) == 0 ) {
      $conn->query("INSERT INTO soutenance (`numjury`, `date`, `note`, `nce`, `matricule`) VALUES ('$id','$date','$note','$nce','$matricule') ");
    }
    header('Location:./dashboard.php');

  } else {
    header('Location:./dashboard.php');
  }
?>
