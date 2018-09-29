<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idmission'];




$sql_str=" DELETE FROM  `parcauto`.`mission` where  `mission`.`id_mission`='$idving'";


             if ($db->exec($sql_str))
             {
                     header('location:../../Formulaire/list_mission.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }

