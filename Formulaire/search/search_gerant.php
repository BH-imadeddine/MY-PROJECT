<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from gerant where mat_gerant like :rechrche or  nom like :rechrche or  prenom like :rechrche");
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
           <td><?php echo $row['mat_gerant']?></td>
           <td><?php echo $row['nom']?></td>
           <td><?php echo $row['prenom']?></td>
           <td><?php echo $row['email']?></td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_gerant/modal_gerant.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_gerant/body_gerant.php';
}



?>
