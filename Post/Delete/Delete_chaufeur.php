<?php
include '../../Formulaire/include/connexion.php';

$idving=$_GET['id'];




$sql_str=" DELETE FROM  `parcauto`.`chauffeur` where  `chauffeur`.`matricul_chauf`='$idving'";


             if ($db->exec($sql_str))
             {
                    header('location:../../Formulaire/list_chaufeur.php?confirm=3');
             }
               else
                {
                   header('location:../error.php');
                }

