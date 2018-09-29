<?php

include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idpanne'];

$sql_str=" DELETE FROM  `parcauto`.`panne` where  `panne`.`id_panne`='$idving'";


             if ($db->exec($sql_str))
             {
                     header('location:../../Formulaire/list_panne.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }


