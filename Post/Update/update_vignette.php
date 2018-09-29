<?php

include '../../Formulaire/include/connexion.php';


$Debut_date = $_POST['dateD'];
$Fin_date =$_POST['dateF'];
$mat_vehi =$_POST['matvehicule'];
$montant =$_POST['montantMis'];

$idving=$_GET['Idvignet'];
echo $idving;


$sql_str="UPDATE  `parcauto`.`vignette` SET  `datedebut_vign` ='$Debut_date',
`datefin_vign` =  '$Fin_date',`montant_vin` = '$montant',`mattriculation_vehi` ='$mat_vehi' WHERE  `vignette`.`id_vignete` =$idving;";
 


             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_vignette.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }


?>

