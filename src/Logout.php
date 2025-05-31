<?php
session_start();

$_SESSION = array();

// Détruire la session
session_destroy();

header("Location: ../view/index.php"); 
exit();
?>
