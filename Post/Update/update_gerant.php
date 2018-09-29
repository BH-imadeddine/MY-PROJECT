<?php

include '../../Formulaire/include/connexion.php';

$matricul_gerant=$_POST['mat_gerant'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$login=$_POST['logGerant'];
$mot_pass=$_POST['mdpG'];
$email=$_POST['email'];

$id=$_GET['id'];



$reg="UPDATE  `parcauto`.`gerant` SET  `mat_gerant` =  '$matricul_gerant',
`nom` =  '$nom',
`prenom` =  '$prenom',
`login_G` =  '$login',
`modpass_G` =  '$mot_pass',
`email` =  '$email' WHERE  `gerant`.`mat_gerant` =  '$id';";
 


             if ($db->exec($reg))
             {
                   header('location:../../Formulaire/list_gerant.php?confirm=2');
             }
               else
                {
                   header('location:../../Formulaire/list_gerant.php?confirm=4');
                }


?>

