 <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $row['id_assurance']?>"> <i class="fa fa-bars"></i> Consulter</a>
 <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $row['id_assurance']?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
 <a href="#" data-toggle="modal" data-target="#confirm-delete<?php echo $row['id_assurance']?>" role="button" onClick=""><i class="fa fa-trash-o"></i> Supprimer</a>
                                             <div class="modal fade" id="myModale1<?php echo $row['id_assurance']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Informations</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="#" method="post">
                                             <table class="table table-striped">
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" disabled="" value="<?php echo $row['datedebut_assur']?>">
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="date" name="dateF" disabled="" value="<?php echo $row['datefin_assur']?>">
                  </td>
              </tr>
             
              <tr>
                  <td>
                       <label>Mattriculation_vehiculet</label> <input class="form-control" type="text" name="matVehi" disabled="" value="<?php echo $row['mattriculation_vehi']?>">
                  </td>
                  <td>
                    <label>Agence</label> <input type="text" name="agence" class="form-control" disabled="" value="<?php echo $row['agence']?>">  
                  </td>
              </tr>
              <tr>
                 
                  <td>
                      <label>Montant</label> <input type="text" class="form-control" name="montantMis" disabled="" value="<?php echo $row['montant_ass']?>">
                  </td>
              </tr>

          </table> 
         
                                         </form>
        
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> 

                                            <div class="modal fade" id="confirm-delete<?php echo $row['id_assurance']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
            <div class="modal-body">
                <form action="../Post/Delete/Delete_assurance.php?id=<?php echo $row['id_assurance']?>" method="post">
                    
                
         <h3>Voulez-vous vraiment supprimer cette assurance </h3>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
            </div>
             </form>
                   </div>
        </div>
    </div>
</div>
                                            <div class="modal fade" id="myModale<?php echo $row['id_assurance']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_assurance.php?id=<?php echo $row['id_assurance']?>" method="post">
                                             <table class="table table-striped">
         
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" value="<?php echo $row['datedebut_assur']?>">
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="date" name="dateF" value="<?php echo $row['datefin_assur']?>">
                  </td>
              </tr>
             
              <tr>
                  <td>
                     <label>Mattriculation_vehiculet</label> <select name="matVehi"  class="form-control">
                         <option hidden="" selected="">
                        <?php 
                        $id=$row['id_assurance'];
                        $a=$db->query("SELECT mattriculation_vehi FROM assurance WHERE id_assurance=$id");
                         $req=$a->fetch();echo $req['mattriculation_vehi'];
                         ?></option>
                         <?php $res0=$db->query("SELECT mattriculation_vehi FROM vehicule");
                          while($row0=$res0->fetch()){?><option><?php echo $row0['mattriculation_vehi'];?></option>
                          <?php }?></select>
                  </td>
                  <td>
                     <label>Agence</label> <input type="text" name="agence" class="form-control" value="<?php echo $row['agence']?>">
                  </td>
              </tr>
              
              <tr>
                 
                  <td>
                      <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $row['montant_ass']?>">
                  </td>
              </tr>

          </table> 
                                            <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
        <button type="submit" class="btn btn-primary">l'Enregistrement</button>
                                         
        
                                     </div>
       </form>
      </div>
    </div>
  </div>
</div>