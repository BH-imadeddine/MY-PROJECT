<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $row['id_parc']?>"> <i class="fa fa-bars"></i> Consulter</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $row['id_parc']?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#confirm-delete<?php echo $row['id_parc']?>"><i class="fa fa-trash-o"></i>Supprimer</a>
                                                                                  <div class="modal fade" id="confirm-delete<?php echo $row['id_parc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
            <div class="modal-body">
                <form action="../Post/Delete/Delete_parc.php?id=<?php echo $row['id_parc']?>" method="post">
                    
                
         <h3>Voulez-vous vraiment supprimer ce parc?</h3>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
            </div>
             </form>
                   </div>
        </div>
    </div>
</div>
                                            <div class="modal fade" id="myModale<?php echo $row['id_parc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                        
                                         <form action="../Post/Update/update_parc.php?id=<?php echo $row['id_parc']; ?>" method="post">
                                             <div></div>
                                             <table class="ui basic table">
               <tr>
                   <td><label>Nom du parc</label><input class="form-control" type="text" name="nom_parc" size="20" value="<?php echo $row['nom_parc']?>"></td>
                 
                  
              
                  <td>
                      <label>Lieu du parc</label> <input class="form-control" type="text" name="lieu_parc" size="20" value="<?php echo $row['lieu_parc']?>">
                  </td>
               </tr>
			  <tr>
                   <td>
                       <label>Matricule du gerant</label> <select name="matG" class="form-control" >
                           <option hidden="" selected=""><?php echo $row['mat_gerant'];?></option>
                           <?php $res0=$db->query("SELECT mat_gerant FROM gerant mat_gerant ");
                           while($row0=$res0->fetch()){?>
                           <option><?php echo $row0['mat_gerant'];?></option>
                           <?php } ?>
                       </select>
                  </td>
                  <td>
                      <label>Capacité du parc </label> <input class="form-control" type="number" name="capacite_parc" value="<?php echo $row['capacite_parc']?>"> 
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
                                                   <div class="modal fade" id="myModale1<?php echo $row['id_parc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Informations</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="#" method="post">
                                             <div></div>
                                   <table class="ui basic table">
               <tr>
                   <td><label>Nom du parc</label><input class="form-control" type="text" disabled="" name="nom_parc" size="20" value="<?php echo $row['nom_parc']?>"></td>
                 
                  
              
                  <td>
                      <label>Lieu du parc</label> <input class="form-control" disabled="" type="text" name="lieu_parc" size="20" value="<?php echo $row['lieu_parc']?>">
                  </td>
               </tr>
			  <tr>
                   <td>
                     <label>Matricule du gerant</label> <input disabled="" type="text" name="matG" class="form-control" value="<?php echo $row['mat_gerant']?>">
                  </td>
                  <td>
                      <label>Capacité du parc </label> <input disabled="" class="form-control" type="number" name="capacite_parc" value="<?php echo $row['capacite_parc']?>"> 
                  </td>
              </tr>
          </table>                 
        
                                     
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
      </div></form></div>
    </div>
  </div>
</div>                                     