<?php 
include '../../Formulaire/include/connexion.php';

$Debut_date = $_POST['dateD'];
$Fin_date =$_POST['dateF'];
$mat_vehi =$_POST['matVehi'];
$montant =$_POST['montantMis'];




 $sql_str="INSERT INTO `vignette`(`datedebut_vign`,`datefin_vign`,`mattriculation_vehi`,`montant_vin`) VALUES ('$Debut_date','$Fin_date','$mat_vehi','$montant')";

             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_vignette.php?confirm=1');
             }
               else
                {
                    header('location:../../Formulaire/liste_vignette.php?confirm=4');
                }