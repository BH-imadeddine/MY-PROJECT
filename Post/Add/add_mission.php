 <?php
include '../../Formulaire/include/connexion.php';

$lordre_mission=$_POST['ordermis'];
$datedebut_mission=$_POST['dateD'];
$datefin_mission=$_POST['dateF'];
$num_travail=$_POST['numtrav'];
$lien_mission=$_POST['adress'];
$montant=$_POST['montantMis'];
$motiv=$_POST['motif'];
$mattricule_chauf=$_POST['matChaf'];
$matricule_vehicule=$_POST['matVehi'];
echo $motiv;
$reg="INSERT INTO  `parcauto`.`mission` (
`id_mission` ,
`lordre_mission` ,
`datedebut_mission` ,
`datefin_mission` ,
`num_travail` ,
`lien_mission` ,
`montant` ,
`motiv` ,
`raison` ,
`matricul_chauf` ,
`mattriculation_vehi` ,
`validation`
)
VALUES (
NULL ,  '$lordre_mission',  '$datedebut_mission',  '$datefin_mission',  '$num_travail', "
        . " '$lien_mission',  '$montant',  '$motiv', NULL ,  '$mattricule_chauf',  '$matricule_vehicule',  'non valider'
);
";

if($db->query($reg)){

header('location:../../Formulaire/list_mission.php?confirm=1');}
else{


header('location:../../Formulaire/list_mission.php?confirm=4');
}