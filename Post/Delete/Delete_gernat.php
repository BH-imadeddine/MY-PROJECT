<?php
include '../../Formulaire/include/connexion.php';

$id=$_GET['id'];




$sql_str=" DELETE FROM  `parcauto`.`gerant` where  `gerant`.`mat_gerant`='$id'";


             if ($db->exec($sql_str))
             {
                    header('location:../../Formulaire/list_gerant.php?confirm=3');
             }
               else
                {
                   header('location:../../Formulaire/list_gerant.php?confirm=4');
                }

