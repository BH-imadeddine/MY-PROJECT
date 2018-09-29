<?php

include '../include/connexion.php';


if(isset($_POST['rechrche']) && $_POST['rechrche']!=""){
 $requtte=$db->prepare("select * from parc where nom_parc like :rechrche or  mat_gerant like :rechrche");
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
           <td  class="UserName">  <?php echo $row['nom_parc'] ?> </td>
           <td   class="UserInfo" >  <?php echo $row['lieu_parc'] ?> </td>
            <td class="UserInfo" >  <?php echo $row['capacite_parc'] ?> </td>
             <td class="UserInfo" >  
                <a href="#" role="button" onclick="" data-toggle="modal" data-target="#my<?php echo $row['id_parc']?>"><i class="fa fa-list-alt">Afficher</i></a>
                    <div class="modal fade" id="my<?php echo $row['id_parc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
            
            </div>
                                <div class="modal-body">
                <h4><ol>
                <?php $a=$row['id_parc'];
                                         
                                         $fc=$db->query("SELECT mattriculation_vehi FROM vehicule WHERE parc=$a");
                                         while($list=$fc->fetch()){ ?>
                                                 <li><?php echo $list['mattriculation_vehi']?></li>
                                         <?php } ?>
                                         </ol>
                    </h4> 
                
         
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
            
                   </div>
                            </div>
                        </div>
                    </div>
            </td>
             <td  class="UserName">
            
             
               <?php   include '../liste_body/body_parc/modal_parc.php';?>             
            </td>
                
        </tr>
   </table>
</div>
   <?php } 
}   
}  else {
   include '../liste_body/body_parc/body_parc.php';
}



?>
