<?php
include '../../Formulaire/include/connexion.php';
$id=$_GET['id'];
$req="DELETE FROM `parcauto`.`vehicule` WHERE `vehicule`.`mattriculation_vehi` = '$id'";



if($db->query($req)){

header('location:../../Formulaire/liste_vehicule.php?confirm=3');}
else{


header('location:../../Formulaire/liste_vehicule.php?confirm=4');
}
?>
