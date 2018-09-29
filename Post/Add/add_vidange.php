 <?php
include '../../Formulaire/include/connexion.php';
$date_debut=$_POST['dateD'];
$nombrekilo=$_POST['nbrkilo'];
$montant=$_POST['montantMis'];
$matricule_vehicule=$_POST['matVehi'];

$reg="INSERT INTO vidange (`datedebut`,`nbrkilo`,`montant_vidange`,`mattriculation_vehi`) values('$date_debut','$nombrekilo','$montant','$matricule_vehicule')";


if($db->query($reg)){

header('location:../../Formulaire/liste_vidange.php?confirm=1');}
else{


header('location:../../Formulaire/liste_vidange.php?confirm=4');
}






