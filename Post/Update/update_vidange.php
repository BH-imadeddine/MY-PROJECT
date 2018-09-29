<?php

include '../../Formulaire/include/connexion.php';


$datedebut = $_POST['dateD'];
$montant =$_POST['montantMis'];
$mat_vehi =$_POST['matVehi'];
$nombrekilo =$_POST['nbrkilo'];

$idving=$_GET['Idvidange'];
echo $idving;


$sql_str="UPDATE  `parcauto`.`vidange` SET  `datedebut` ='$Debut_date',
`montant_vidange` =  '$montant',`nbrkilo` = '$nombrekilo',`mattriculation_vehi` ='$mat_vehi' WHERE  `vidange`.`id_vidange` =$idving;";
 


             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_vidange.php?confirm=2');
             }
               else
                {
                   header('location:../error.php?confirm=4');
                }


?>

