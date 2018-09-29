<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idvidange'];




$sql_str=" DELETE FROM  `parcauto`.`vidange` where  `vidange`.`id_vidange`='$idving'";


             if ($db->exec($sql_str))
             {
                     header('location:../../Formulaire/liste_vidange.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }

