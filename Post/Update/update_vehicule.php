<?php
include '../../Formulaire/include/connexion.php';
$etat=$_POST['etat'];
$matV=$_POST['matVehicule'];
$etat=$_POST['etat'];
$puiss=$_POST['puissance'];
$date=$_POST['date_vehicule'];
$nbr=$_POST['Nbr_place'];
$parc=$_POST['nomP'];
$mark=$_POST['slct1'];
$mod=$_POST['slct2'];
$use=$_POST['use_vehicule'];
$cat=$_POST['cat_vehicule'];
$id=$_GET['id'];
$res=$db->query("SELECT id_parc  FROM `parc` WHERE nom_parc ='$parc'")or die(print_r($db->errorInfo()));
while ($row = $res->fetch()) {
    
 $id_parc=$row['id_parc'];
}

$req="UPDATE `parcauto`.`vehicule` SET `puissance_vehi` = '$puiss', `mattriculation_vehi` = '$matV', `nombre_plac_vehi` = $nbr, `parc` = $id_parc, `marque_vehi` = '$mark', `modele_vehi` = '$mod', `categorie_vehi` = '$cat', `utilisation` = '$use', `etat_vehi` = '$etat' WHERE `vehicule`.`mattriculation_vehi` = '$id'";

if($db->query($req)){

header('location:../../Formulaire/liste_vehicule.php?confirm=2');}
else{


header('location:../../Formulaire/liste_vehicule.php?confirm=4');
}


?>
