<?php
include '../../Formulaire/include/connexion.php';
$id=$_GET['id'];
$req="DELETE FROM parc WHERE id_parc =$id ";
$db->query($req);
header('location:../../Formulaire/list_parc.php?confirm=3');
?>
