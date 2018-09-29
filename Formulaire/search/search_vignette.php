<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from vignette where datedebut_vign like :rechrche or  mattriculation_vehi like :rechrche");
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
           <td   class="UserInfo" >  <?php echo $ligne['datedebut_vign'] ?> </td>
          <td  <?php
                     $madate= $ligne['datefin_vign'];
                list($a,$m,$j)=explode("-",$madate);
                $date="$m"; 
                  if($date === date('m')){
                  ?> style="color: red"  <?php } ?>  ><?php echo $ligne['datefin_vign']?> </td>
                                       
            <td class="UserInfo" >  <?php echo $ligne['montant_vin'] ?> </td>
             
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_vignette/modal_vignette.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_vignette/body_vignette.php';
}



?>
