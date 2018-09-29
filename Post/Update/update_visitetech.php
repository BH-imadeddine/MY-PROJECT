<?php
if(isset($_POST['dateD']))
{
include '../../Formulaire/include/connexion.php';


$Debut_date = $_POST['dateD'];
$Fin_date =$_POST['dateF'];
$mat_vehi =$_POST['matVehi'];
$montant =$_POST['montantMis'];

$idving=$_GET['Idvisite'];
echo $idving;


$sql_str="UPDATE  `parcauto`.`visitetechnique` SET  `datedebut_visi` ='$Debut_date',
`datefin_visi` =  '$Fin_date',`montant_visi` = '$montant',`mattriculation_vehi` ='$mat_vehi' WHERE  `visitetechnique`.`id_visitetechn` =$idving;";
 


             if ($db->exec($sql_str))
             {
                   header('location:../../Formulaire/liste_visitetechnique.php?confirm=2');
             }
               else
                {
                   header('location:../error.php');
                }

}  else {
    header('location:../../Formulaire/liste_visitetechnique.php');
}
?>

