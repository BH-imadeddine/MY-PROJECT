<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from carburant where type_carbu like :rechrche or  mattriculation_vehi like :rechrche");
$requtte->execute(array(
    'rechrche'=>'%'.$_POST['rechrche'].'%'
));

if($requtte->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($row=$requtte->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="UserName">  <?php echo $row['mattriculation_vehi'] ?> </td>
           <td   class="UserInfo" >  <?php echo $row['type_carbu'] ?> </td>
            <td class="UserInfo" >  <?php echo $row['quantite'] ?> </td>
           <td  class="UserName">  <?php echo $row['montant_cab'] ?> </td>
            <td class="UserName" ><?php echo $row['dateC']?></td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_carburant/modal_carburant.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_carburant/body_carburant.php';
}



?>
