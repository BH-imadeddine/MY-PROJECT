<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requ=$db->prepare("select * from assurance where agence like :rechrche or  mattriculation_vehi like :rechrche");
$requ->execute(array(
    'rechrche'=>'%'.$_POST['rechrche'].'%'
));

if($requ->rowCount()==0){
    
    echo 'no resulta';
}  else {
    while ($row=$requ->fetch()){
        ?>
<div class="User">
    <table>
        <tr>
           <td  class="UserName">  <?php echo $row['mattriculation_vehi'] ?> </td>
           <td   class="UserInfo" >  <?php echo $row['agence'] ?> </td>
            <td class="UserInfo" >  <?php echo $row['datedebut_assur'] ?> </td>
                  <td  <?php
                     $madate= $row['datefin_assur'];
                list($a,$m,$j)=explode("-",$madate);
                $date="$m"; 
                  if($date === date('m')){
                  ?> style="color: red"  <?php } ?>  > 
               
                   
              
                                             <?php echo $row['datefin_assur']?></td>
            <td  class="UserName">  <?php echo $row['montant_ass'] ?> </td>
            <td  class="UserName">
            
             
            <?php   include '../liste_body/body_assurance/modal_assurance.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_assurance/body_assurance.php';
}



?>
