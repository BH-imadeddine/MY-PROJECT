<?php

include '../../Formulaire/include/connexion.php';
$matricul_veh=$_POST['matVehi'];
$typepane=$_POST['type_panne'];
$prenomontantm=$_POST['montant'];
$date=$_POST['date'];


$sql_str="INSERT INTO  `parcauto`.`panne` (
`id_panne` ,
`type_panne` ,
`montant_pan` ,
`mattriculation_vehi`,`dateP`
)
VALUES (
NULL ,  '$typepane',  '$prenomontantm',  '$matricul_veh','$date'
);

";

             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/list_panne.php?confirm=1');
             }
               else
                {
                    header('location:../../Formulaire/list_panne.php?confirm=4');
                }