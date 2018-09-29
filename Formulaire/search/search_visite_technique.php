<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requ=$db->prepare("select * from visitetechnique where datedebut_visi like :rechrche or  mattriculation_vehi like :rechrche");
$requ->execute(array(
    'rechrche'=>'%'.$_POST['rechrche'].'%'
));

if($requ->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($line=$requ->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="UserName">  <?php echo $line['mattriculation_vehi'] ?> </td>
           <td   class="UserInfo" >  <?php echo $line['datedebut_visi'] ?> </td>
            <td  <?php
                     $madate= $line['datefin_visi'];
                list($a,$m,$j)=explode("-",$madate);
                $date="$m"; 
                  if($date === date('m')){
                  ?> style="color: red"  <?php } ?>  > <?php  echo $line ['datefin_visi']?></td>
           <td  class="UserName">  <?php echo $line['montant_visi'] ?> </td>
           
            <td  class="UserName">
            
             
            <?php   include '../liste_body/body_visite_technique/modal_visite_technique.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_visite_technique/body_visite_technique.php';
}



?>
