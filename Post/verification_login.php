<?php

session_start();
if (!isset($_SESSION['username']) || !$_SESSION['username']){
 
      header('location:../index.php?error=3');
}
$dbusername=isset($_SESSION['username']) ? $_SESSION['username']:'';
$etat=isset($_SESSION['etat']) ? $_SESSION['etat']:'';
$no=isset($_SESSION['nom']) ? $_SESSION['nom']:'';
$pr=isset($_SESSION['prenom']) ? $_SESSION['prenom']:'';


