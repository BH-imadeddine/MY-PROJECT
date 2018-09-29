<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from mission where  validation='valider' and (lordre_mission like :rechrche or   mattriculation_vehi like :rechrche) ");
$requtte->execute(array(
    'rechrche'=>'%'.$_POST['rechrche'].'%'
));

if($requtte->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($ligne=$requtte->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="UserName">  <?php echo $ligne['mattriculation_vehi'] ?> </td>
           <td   class="UserInfo" >  <?php echo $ligne['lordre_mission'] ?> </td>
            <td class="UserInfo" >  <?php echo $ligne['datedebut_mission'] ?> </td>
             <td class="UserInfo" >  <?php echo $ligne['datefin_mission'] ?> </td>
               <td   class="UserInfo" >  <?php echo $ligne['lien_mission'] ?> </td>
            <td class="UserInfo" >  <?php echo $ligne['montant'] ?> </td>
             <td class="UserInfo" style="color:green" >  <?php echo $ligne['validation'] ?> </td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_mission/body_mission_vali/modal_mission_vali.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_mission/body_mission_vali/body_mission_vali.php';
}



?>
