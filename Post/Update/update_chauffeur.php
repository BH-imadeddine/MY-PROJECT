<?php

include '../../Formulaire/include/connexion.php';

$matc_chof=$_POST['matChaf'];
$nom=$_POST['nomChaf'];
$prenom=$_POST['prenomChaf'];
$cin=$_POST['cin'];
$email=$_POST['mailChauf'];
$tel=$_POST['telChauf'];
$service=$_POST['serviceChauf'];
$adresse=$_POST['adress'];

$idchauf=$_GET['id'];



$reg="UPDATE  `parcauto`.`chauffeur` SET  `matricul_chauf` =  '$matc_chof',
`nom_chauf` =  '$nom',
`prenom_chauf` =  '$prenom',
`cin_chauf` =  '$cin',
`email_chauf` =  '$email',
`adrese_chauf` =  '$tel',
`service_chauf` =  '$service',
`tel_chauf` =  '$tel' WHERE  `chauffeur`.`matricul_chauf` =  '$idchauf';";
 


             if ($db->exec($reg))
             {
                   header('location:../../Formulaire/list_chaufeur.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }


?>

