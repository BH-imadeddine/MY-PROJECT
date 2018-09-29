<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from vidange where montant_vidange like :rechrche or  mattriculation_vehi like :rechrche");
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
           <td   class="UserInfo" >  <?php echo $line['datedebut'] ?> </td>
            <td class="UserInfo" >  <?php echo $line['montant_vidange'] ?> </td>
             <td class="UserInfo" >  <?php echo $line['nbrkilo'] ?> </td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_vidange/modal_vidange.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_vidange/body_vidange.php';
}



?>
