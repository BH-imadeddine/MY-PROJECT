<?php
include '../../Formulaire/include/connexion.php';
$cap=$_POST['capacite_parc'];
$mat=$_POST['matG'];
$lieu=$_POST['lieu_parc'];
$parc=$_POST['nom_parc'];
$id=$_GET['id'];
$req="UPDATE `parcauto`.`parc` SET `nom_parc` = '$parc', `lieu_parc` = '$lieu', `capacite_parc` = $cap , `mat_gerant`='$mat' WHERE `parc`.`id_parc` =$id ";
$db->query($req);
header('location:../../Formulaire/list_parc.php?confirm=2');
?>
