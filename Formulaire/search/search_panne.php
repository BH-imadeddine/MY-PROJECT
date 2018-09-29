<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from panne where type_panne like :rechrche or  mattriculation_vehi like :rechrche");
$requtte->execute(array(
    'rechrche'=>'%'.$_POST['rechrche'].'%'
));

if($requtte->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($line=$requtte->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="UserName">  <?php echo $line['mattriculation_vehi'] ?> </td>
           <td   class="UserInfo" >  <?php echo $line['type_panne'] ?> </td>
            <td class="UserInfo" >  <?php echo $line['montant_pan'] ?> </td>
             <td  class="UserName">
            
             
               <?php   include '../liste_body/body_panne/modal_panne.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_panne/body_panne.php';
}



?>
