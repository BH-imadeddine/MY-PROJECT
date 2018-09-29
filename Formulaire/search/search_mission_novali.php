<?php
session_start();
$etat=isset($_SESSION['etat']) ? $_SESSION['etat']:'';
include '../include/connexion.php';


if(isset($_POST['search']) && $_POST['search']!=""){
 $requtte=$db->prepare("select * from mission where validation='non valider' and(lordre_mission like :search or   mattriculation_vehi like :search )");
$requtte->execute(array(
    'search'=>'%'.$_POST['search'].'%'
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
             <td class="UserInfo" style="color:red" >  <?php echo $ligne['validation'] ?> </td>
            <td  class="UserName">
            
             
               <?php   include '../liste_body/body_mission/body_mission_novali/modal_mission_novali.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_mission/body_mission_novali/body_mission_novali.php';
}



?>
