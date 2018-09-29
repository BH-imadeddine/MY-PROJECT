<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['Idvisite'];




$sql_str=" DELETE FROM  `parcauto`.`visitetechnique` where  `visitetechnique`.`id_visitetechn`='$idving'";


             if ($db->exec($sql_str))
             {
                     header('location:../../Formulaire/liste_visitetechnique.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }

