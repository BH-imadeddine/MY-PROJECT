<a href="#" role="button" onclick="" data-toggle="modal"  data-target="#myModale1<?php echo $ligne['id_mission'] ?>"> <i class="fa fa-bars"></i> Consulter</a>
                   <?php if($etat=="Gerant"){ ?>                        
              <a href="#" role="button" onclick="" data-toggle="modal"  data-target="#myModale<?php echo $ligne['id_mission'] ?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
               <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $ligne['id_mission']?>"> <i class="fa fa-trash-o"></i>Supprimer</a>
                   <?php  }?>	
                 <?php if($etat=="super"){ ?>
                           <a style="color:blue" href="#" role="button" onclick="" data-toggle="modal"  data-target="#myModale2<?php echo $ligne['id_mission'] ?>"> <i class="fa fa-pencil-square-o"></i> Valider</a>
			  <?php  }?>								
											
											
											
<div class="modal fade" id="myModale1<?php echo $ligne['id_mission'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                  <td><label>Ordre de mission</label><input class="form-control" type="text" name="ordermis" value="<?php echo $ligne['lordre_mission'] ?>" disabled=""></td>
                  <td><label>N° de travail</label><input class="form-control" type="text" name="numtrav" value="<?php echo $ligne['num_travail'] ?>" disabled=""></td>
                  
              </tr>
              <tr>
                  <td>
                      <label>Date debut</label> <input class="form-control" type="text" name="dateD" value="<?php echo $ligne['datedebut_mission'] ?>" disabled="">
                  </td>
                  <td>
                      <label>Date fin</label> <input class="form-control" type="text" name="dateF" value="<?php echo $ligne['datefin_mission'] ?>" disabled="">
                  </td>
              </tr>
              <tr>
                  <label>Mattriculation_chauffeur</label>
           <input class="form-control" type="text" name="matChaf" value="<?php echo $ligne['matricul_chauf'] ?>" disabled="">
                 
                       
                  <label>Mattriculation_vehiculet</label> 
                  
           <input class="form-control" type="text" name="matVehi" value="<?php echo $ligne['mattriculation_vehi'] ?>" disabled="">
                      
              </tr>
              <tr>
                  <td>
                      <label>Motif</label> 
                     <input class="form-control" type="text" name="motif" value="<?php echo $ligne['motiv'] ?>" disabled=""> 
                     
                  </td>
                  <td>
                      <label>Montant</label> <input type="text" class="form-control" name="montantMis" value="<?php echo $ligne['montant'] ?>" disabled="">
                  </td>
              </tr>
              
              
              <tr>
                  <td>
                      <label>Validation</label> 
                     <input class="form-control" type="text"  value="<?php echo $ligne['validation'] ?>" disabled=""> 
                     
                  </td>
                  <td>
                      <label>raison</label> <input style="color: red" type="text" class="form-control"  value="<?php echo $ligne['raison'] ?>" disabled="">
                  </td>
              </tr>
              
              

          </table> 
            <table class="table table-striped">
              <tr>
                  <td>
                      <label>Lieu de mission</label><br/>
                      <input class="form-control" name="adress"  value="<?php echo $ligne['lien_mission'] ?>" disabled=""/>
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
                         <option style="color: #00AAFF;font-weight: bold;">valider</option>
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
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
                                                   
  <div class="modal fade" id="myModale<?php echo $ligne['id_mission'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_mission.php?Idmission=<?php echo $ligne['id_mission']?>" method="post">
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
             
                                             </table>
                                             
                                             <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
        <input type="submit" value="L'Enregistrement" class="btn btn-primary"/>
       
      </div>
                                         </form>
        
                                     </div>
                                           
    </div>
  </div>
</div>
                                                
                                                
                                                
 <div class="modal fade" id="confirm-delete<?php echo $ligne['id_mission']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
        <div class="modal-body">
            <form action="../Post/Delete/Delete_mission.php?Idmission=<?php echo $ligne['id_mission']?>" method="post">
                    
                
         
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
                 </div>
             </form>
         </div>
        </div>
    </div>
</div>