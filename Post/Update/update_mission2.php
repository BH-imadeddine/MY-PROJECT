<?php


include '../../Formulaire/include/connexion.php';
$validation=$_POST['validation'];
$raison=$_POST['raisone'];
$idving=$_GET['Idmission'];
echo $idving;
echo $raison;
echo $validation;



$sql_str="UPDATE  `parcauto`.`mission` SET  `raison` =  '$raison',
`validation` =  '$validation' WHERE  `mission`.`id_mission` ='$idving';";
 


             if ($db->exec($sql_str))
             {
                header('location:../../Formulaire/list_mission.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }
