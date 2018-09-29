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
$res=$db->query("SELECT id_parc  FROM `parc` WHERE nom_parc ='$parc'")or die(print_r($db->errorInfo()));
while ($row = $res->fetch()) {
    
 $id_parc=$row['id_parc'];
}



$req="INSERT INTO `parcauto`.`vehicule` (
`mattriculation_vehi` ,
`etat_vehi` ,
`puissance_vehi` ,
`date_vehi` ,
`nombre_plac_vehi` ,
`parc` ,
`marque_vehi` ,
`modele_vehi` ,
`categorie_vehi` ,
`utilisation`
)
VALUES ('$matV',  '$etat',  '$puiss',  '$date',  '$nbr',  '$id_parc',  '$mark',  '$mod',  '$cat',  '$use')";
if($db->query($req)){

header('location:../../Formulaire/liste_vehicule.php?confirm=1');}
else{


header('location:../../Formulaire/liste_vehicule.php?confirm=4');
}



?>
