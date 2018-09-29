<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $line['id_vidange'] ?>"> <i class="fa fa-bars"></i> Consulter</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $line['id_vidange'] ?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
                                           <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $line['id_vidange']?>"></i> Supprimer</a>
											
											<div class="modal fade" id="myModale1<?php echo $line['id_vidange']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                      <label>Date debut</label> <input class="form-control" type="text" name="dateD" value="<?php echo $line['datedebut'] ?> " disabled="">
                  </td>
                   <td>  <label>nombre de kilo</label> <input class="form-control" type="text" name="nbrkilo" value="<?php echo $line['nbrkilo'] ?> " disabled=""></td> 
              </tr>
             
              <tr>
                  <td>  <label>Mattriculation_vehiculet</label>
                       <input class="form-control" type="text" name="matVehi" value="<?php echo $line['mattriculation_vehi']?>" disabled=""></td>
                  <td>
                    <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $line['montant_vidange'] ?> " disabled="">
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

<div class="modal fade" id="myModale<?php echo $line['id_vidange'] ?>"" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_vidange.php?Idvidange=<?php echo $line['id_vidange']?>" method="post">
                                             <table class="table table-striped">
         
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" value="<?php echo $line['datedebut'] ?> ">
                  </td>
                 
                       <td>  <label>nombre de kilo</label> <input class="form-control" type="text" name="nbrkilo" value="<?php echo $line['nbrkilo'] ?> "></td> 
                 
              </tr>
             
              <tr>
                  <td><label>Mattriculation_vehiculet</label>
                       <?PHP
                     $reqq=$db->query("select mattriculation_vehi from vehicule ");
                     ?> 
                     <select name="matVehi" "<?php echo $line['mattriculation_vehi'] ?>" class="form-control">
                           <?php  while($ligne=$reqq->fetch()) { ?> 
                          <option><?php echo $ligne['mattriculation_vehi']?></option><?php }?>
                      
                      
                      </select></td>  
                  <td>
                     <label>Montant</label> <input type="text" class="form-control" name="montantMis"value="<?php echo $line['montant_vidange'] ?> ">
                  </td>
              </tr>
              
              

          </table> 
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
        <input type="submit" class="btn btn-primary" value="L'Enregistrement"/>
      </div>
                                         </form>
        
                                     </div>
                                           
    </div>
  </div>
</div> 


 <div class="modal fade" id="confirm-delete<?php echo $line['id_vidange']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
            <div class="modal-body">
                <form action="../Post/Delete/delete_vidange.php?Idvidange=<?php echo $line['id_vidange']?>" method="post">
                    
                
         
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
            </div>
             </form>
                   </div>
        </div>
    </div>
</div>