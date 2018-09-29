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

$idving=$_GET['Idmission'];






$sql_str="UPDATE  `parcauto`.`mission` SET  `lordre_mission` =  '$lordre_mission',
`datedebut_mission` =  '$datedebut_mission',
`datefin_mission` =  '$datefin_mission',
`num_travail` =  '$num_travail',
`lien_mission` =  '$lien_mission',
`montant` =  '$montant',
       
`motiv` =  '$motiv',
`matricul_chauf` =  '$mattricule_chauf',
`mattriculation_vehi` =  '$matricule_vehicule',
`validation` =  'non valider' WHERE  `mission`.`id_mission` ='$idving';";
 


             if ($db->exec($sql_str))
             {
                header('location:../../Formulaire/list_mission.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }


