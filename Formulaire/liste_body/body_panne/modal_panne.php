 <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $line['id_panne'] ?>"> <i class="fa fa-bars"></i> Consulter</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $line['id_panne'] ?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
                                          <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $line['id_panne']?>"> <i class="fa fa-trash-o"></i>Delete</a>
                                            
                                             <div class="modal fade" id="myModale1<?php echo $line['id_panne'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Informations</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                         <fieldset>
                                        
                                         <form action="#" method="post">
                                             <div></div>
                                             <table class="ui basic table">
               <tr><td><label>Vehicule</label>
                       
               
                       <input class="form-control" type="text" name="matVehi" disabled="" value="<?php echo $line['mattriculation_vehi'] ?>"></td>
               </tr>
              <tr>
                 
                  <td><label>Type de Panne</label><input class="form-control" disabled="" type="text" name="type_panne" value="<?php echo $line['type_panne'] ?>">

                            </td>
                  
              </tr>
              <tr>
                  <td>
                      <label>Montant</label> <input class="form-control" type="text" disabled="" name="montant" size="20" value="<?php echo $line['montant_pan'] ?>">
                  </td>
              </tr>
              <tr>
                  <td>
                      <label>date</label> <input class="form-control" type="text" disabled="" name="date" size="20" value="<?php echo $line['dateP'] ?>">
                  </td>
              </tr>
          </table> 
                                         </form>
        </fieldset>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
      </div>
    </div>
  </div>
</div> 
                                          
                                                
<div class="modal fade" id="confirm-delete<?php echo $line['id_panne']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                            </div>
                            <div class="modal-body">
                                <form action="../Post/Delete/Delete_panne.php?Idpanne=<?php echo $line['id_panne']?>" method="post">

     <h3>Voulez-vous vraiment supprimer ce panne </h3>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>



                                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
                            </div>
                             </form>
                                   </div>
                        </div>
             </div>
</div>
                                            
                                            
                                             <div class="modal fade" id="myModale<?php echo $line['id_panne'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                         <fieldset>
                                        
                                             <form action="../Post/Update/update_panne.php?idpanne=<?php echo $line['id_panne'] ?>" method="post">
                                             <div></div>
                                             <table class="ui basic table">
               <tr>
                   <td><label>Vehicule</label>
               
                <?PHP
                     $reqq=$db->query("select mattriculation_vehi from vehicule ");
                     ?> 
                     <select name="matVehi" class="form-control">
                           <?php  while($linge=$reqq->fetch()) { ?> 
                          <option><?php echo $linge['mattriculation_vehi']?></option><?php }?>
                      
                      
                      </select>
               </td>
               
               </tr>
              <tr>
                 
                  <td><label>Type de Panne</label><input class="form-control" type="text" name="type_panne" value="<?php echo $line['type_panne'] ?>">

                            </td>
                  
              </tr>
              <tr>
                  <td>
                      <label>Montant</label> <input class="form-control" type="number" name="montant_pan" size="20" value="<?php echo $line['montant_pan'] ?>">
                  </td>
                </tr>
                <tr>
                  <td>
                      <label>date</label> <input class="form-control" type="date" name="date_pan" size="20" value="<?php echo $line['dateP'] ?>">
                  </td>
                </tr>
          </table> 
                                                                                <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">fermeture</button>
        <input type="submit" class="btn btn-primary" value="L'Enregistrement" />
      </div>
                                         </form>
        </fieldset>
                                     </div>
        
    </div>
  </div>
</div>