<?php
include '../../Formulaire/include/connexion.php';
$cap=$_POST['capacite_parc'];
$mat=$_POST['matG'];
$lieu=$_POST['lieu_parc'];
$parc=$_POST['nom_parc'];
$req="INSERT INTO parc(nom_parc,lieu_parc,capacite_parc,mat_gerant) values('$parc','$lieu',$cap,'$mat')";
$db->query($req);
header('location:../../Formulaire/list_parc.php?confirm=1');
?>
