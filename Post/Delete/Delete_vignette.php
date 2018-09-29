<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idvignet'];
echo $idving;


$sql_str=" DELETE FROM  `parcauto`.`vignette` where  `vignette`.`id_vignete`='$idving'";


             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_vignette.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }