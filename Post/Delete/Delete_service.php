<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idservice'];




$sql_str=" DELETE FROM  `parcauto`.`service` where  `service`.`id_service`='$idving'";


             if ($db->exec($sql_str))
             {
                     header('location:../../Formulaire/liste_service.php');
             }
               else
                {
                   header('location:../error.php');
                }

