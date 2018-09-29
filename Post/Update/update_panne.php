<?php

include '../../Formulaire/include/connexion.php';
$matricul_veh=$_POST['matVehi'];
$typepane=$_POST['type_panne'];
$prenomontantm=$_POST['montant_pan'];
$date_p=$_POST['date_pan'];

$idpanne=$_GET['idpanne'];




$reg="UPDATE  `parcauto`.`panne` SET  `type_panne` =  '$typepane',
`montant_pan` =  '$prenomontantm',
`mattriculation_vehi` =  '8948-rt-01',
`dateP` =  '$date_p' WHERE  `panne`.`id_panne` =$idpanne;";
 


             if ($db->exec($reg))
             {
                  header('location:../../Formulaire/list_panne.php?confirm=2');
             }
             
               else
                {
                   header('location:../error.php');
                }



