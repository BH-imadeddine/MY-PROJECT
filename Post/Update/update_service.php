<?php

include '../../Formulaire/include/connexion.php';


$lordre_service = $_POST['LordSer'];
$libelle_service =$_POST['libelserc'];
$mat_vehi =$_POST['matVehi'];


$idving=$_GET['Idservice'];
echo $idving;


$sql_str="UPDATE  `parcauto`.`service` SET  `lordre_service` ='$lordre_service',
`libelle_service` =  '$libelle_service',`mattriculation_vehi` ='$mat_vehi' WHERE  `service`.`id_service` =$idving;";
 


             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_service.php');
             }
               else
                {
                   header('location:../error.php');
                }


?>

