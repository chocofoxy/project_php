<?php
 require('./connexion.php') ;
 if (isset($_POST['username']) && isset($_POST['password'])) {
     $username = $_POST['username'] ;
     $password = $_POST['password'] ;
     $res = $conn->query("SELECT login , mot_de_passe FROM administrateur WHERE login='$username' ")->fetch();
     if (count($res) == 0 || $res['mot_de_passe'] !== $password) {
         $_SESSION['error'] = true ;
         header('Location:./') ;
     } else {
         $_SESSION['username'] = $username ;
         header('Location:./dashboard.php') ;
     }
 } else {
     header('Location:./') ;
 }
?>
