<?php
include '../Formulaire/include/connexion.php';



$res=$db->query('select * from statiqtique') or die(print_r($db->errorInfo()));
 $results=array();
 while ($row = $res->fetch()){
     echo $row['year'].' '.$row['t1'].'  '.$row['t2'].'  '.$row['t3'].'</br>';
  
}
?>



    

