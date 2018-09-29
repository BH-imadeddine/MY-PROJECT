<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from chauffeur where matricul_chauf like :rechrche or  nom_chauf like :rechrche or  prenom_chauf like :rechrche");
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
                  
                                    <td><?php echo $row['matricul_chauf']?></td>
                                    <td><?php echo $row['nom_chauf']?></td>
                                    <td><?php echo $row['prenom_chauf']?></td>
                                    <td><?php echo $row['service_chauf']?></td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_chouffeur/modal_choufeur.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_chouffeur/body_chauffeur.php';
}



?>
