<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $line['id_visitetechn'] ?>" ><i class="fa fa-bars"></i> Consulter</a>
<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $line['id_visitetechn'] ?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
<a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $line['id_visitetechn']?>"> <i class="fa fa-trash-o"></i> Supprimer</a>
											 
											
<div class="modal fade" id="myModale1<?php echo $line['id_visitetechn'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal<?php echo $line['id_visitetechn'] ?>" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Informations</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="#" method="post">
                                             <table class="table table-striped">
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" value="<?php echo $line['datedebut_visi'] ?> " disabled="">
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="date" name="dateF" value="<?php echo $line['datefin_visi'] ?> " disabled="">
                  </td>
              </tr>
             
              <tr>
                
                      <td>
                  <label>Mattriculation_vehiculet</label>
                  <input class="form-control" type="text" name="matVehi" value="<?php echo $line['mattriculation_vehi']?>" disabled="">
                      
                  </td>
                  <td>
                    <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $line['montant_visi'] ?> " disabled="">
                  </td>
              </tr>
             

          </table> 
         
                                         </form>
        
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
      </div>
    </div>
  </div>
</div>
                                             

<div class="modal fade" id="myModale<?php echo $line['id_visitetechn'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_visitetech.php?Idvisite=<?php echo $line['id_visitetechn']?>" method="post">
                                             <table class="table table-striped">
         
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" value="<?php echo $line['datedebut_visi']?>" required>>
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="date" name="dateF" value="<?php echo $line['datefin_visi']?>" required>
                  </td>
              </tr>
             
              <tr>
                  <td>
               <label>Mattriculation_vehiculet</label>
               
                  
               
             
                       <?PHP
                     $reqq=$db->query("select mattriculation_vehi from vehicule ");
                     ?> 
                     <select name="matVehi"  class="form-control" required>
                           <?php  while($liine=$reqq->fetch()) { ?> 
                          <option><?php echo $liine['mattriculation_vehi']?></option><?php }?>
                      
                      
                      </select>
                   
                  </td>
                  <td>
           <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $line['montant_visi']?>" required>
                  </td>
              </tr>
              
              

          </table> 
                                             <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
       <input type="submit" class="btn btn-primary" value="l'Enregistrement"/>
      </div>
        
                                         </form>
        
                                     </div>
                                           
    </div>
  </div>
</div> 
							
<div class="modal fade" id="confirm-delete<?php echo $line['id_visitetechn']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
            <div class="modal-body">
                <form action="../Post/Delete/delete_visitetechn.php?Idvisite=<?php echo $line['id_visitetechn']?>" method="post">
                    
                    <h2> Voulez-vous vraiment supprimer </h2>
         
            <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
            </div>
             </form>
                   </div>
        </div>
    </div>
</div>	