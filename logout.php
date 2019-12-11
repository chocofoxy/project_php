<?php
require('./checkSession.php') ;
session_destroy();
header('Location:./') ;
 ?>
