<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
   
 $requ=$db->prepare("select * from vehicule where mattriculation_vehi like :rechrche");
$requ->execute(array(
    'rechrche'=>$_POST['rechrche'].'%'
));

if($requ->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($rowe=$requ->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="">  <?php echo $rowe['mattriculation_vehi'] ?> </td>
           <td  class="" > <?php echo $rowe['date_vehi'] ?> </td>
           <td class="" >  <?php echo $rowe['marque_vehi'] ?> </td>
           <td  class="">  <?php echo $rowe['categorie_vehi'] ?> </td>
           <td  class="">  <?php echo $rowe['puissance_vehi'] ?> </td>
           <td class="">
            
             
               <?php   include '../liste_body/body_vehicule/modal_vehicule.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_vehicule/body_vehicule.php';
}



?>
