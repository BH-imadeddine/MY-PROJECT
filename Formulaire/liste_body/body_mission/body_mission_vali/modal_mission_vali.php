  <a style="color:blue" href="#" role="button" onclick="" data-toggle="modal"  data-target="#myModale2<?php echo $ligne['id_mission'] ?>"> <i class="fa fa-pencil-square-o"></i> Modifer</a>

        <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $ligne['id_mission']?>"> <i class="fa fa-trash-o"></i>Supprimer</a>
                      
                   <div class="modal fade" id="confirm-delete<?php echo $ligne['id_mission']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
        <div class="modal-body">
            <form action="../Post/Delete/Delete_mission.php?Idmission=<?php echo $ligne['id_mission']?>" method="post">
                    
                <h2>Voulez-vous vraiment supprimer </h2>
         
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
                 </div>
             </form>
         </div>
        </div>
    </div>
</div>
          <div class="modal fade" id="myModale2<?php echo $ligne['id_mission'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">validation</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_mission2.php?Idmission=<?php echo $ligne['id_mission']?>" method="post">
                                             <table class="table table-striped">
              <tr>
                  <td><label>Ordre de mission</label><input class="form-control" type="number" name="ordermis" value="<?php echo $ligne['lordre_mission'] ?>"></td>
                  <td><label>N° de travail</label><input class="form-control" type="number" name="numtrav" value="<?php echo $ligne['num_travail'] ?>"></td>
                  
              </tr>
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="date" name="dateD" value="<?php echo $ligne['datedebut_mission'] ?>"/>
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="date" name="dateF" value="<?php echo $ligne['datefin_mission'] ?>">
                  </td>
              </tr>
              <tr>
                  <td> <label>Mattriculation_chauffeur</label>
                        <input class="form-control" type="text" name="matChaf" value="<?php echo $ligne['matricul_chauf'] ?>"></td>
                    <td> <label>Mattriculation_vehiculet</label>
                                 <input class="form-control" type="text" name="matVehi" value="<?php echo $ligne['mattriculation_vehi'] ?>" ></td>
              </tr>
              <tr>
                  <td>
                      <label>Motif</label> 
                     <input class="form-control" type="text" name="motif" value="<?php echo $ligne['motiv'] ?>"> 
                  </td>
                  <td>
                      <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $ligne['montant'] ?>" >
                  </td>
                 
              </tr>

          </table> 
            <table class="table table-striped">
              <tr>
                  
                  
                  <td>
                      <label>Lieu de mission</label><br/>
                      <textarea class="form-control" name="adress" rows="2" cols="60"  ><?php echo $ligne['lien_mission'] ?></textarea>
                  </td>
              </tr>
              <?php //test super************************** ?>
              
                 <tr>
                  
                  
                  <td>
                      <label>Raison</label><br/>
                      <textarea class="form-control" name="raisone" rows="2" cols="60"  ><?php echo $ligne['raison'] ?></textarea>
                  </td>
              </tr>
              <tr>
                   <td>
                      <label style="color:green;font-weight: bold;text-align: center;size: 90px">Validation</label>
                      <select class="form-control" style="text-align: center" name="validation">
                          <option selected="" style="color:red;font-weight: bold;text-align: center"><?php echo $ligne['validation'] ?></option>
                         <option style="color: #00AAFF;font-weight: bold;">non valider</option>
                     </select>
                  </td>
              </tr>
                <?php //test super************************** ?>
                                             </table>
                                             
                                             <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
       
         <input type="submit" value="Validation" class="btn btn-primary"/>
      </div>
                                         </form>
        
                                     </div>
                                           
    </div>
  </div>
</div>