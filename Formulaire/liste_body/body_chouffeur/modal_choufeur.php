<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $row['matricul_chauf']?>"> <i class="fa fa-bars"></i> Consulter</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $row['matricul_chauf']?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
                                            <a href="#" data-toggle="modal" data-target="#confirm-delete<?php echo $row['matricul_chauf']?>" role="button" onClick=""><i class="fa fa-trash-o"></i>Supprimer</a>  
                                       
                                               <div class="modal fade" id="myModale<?php echo $row['matricul_chauf']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Update/update_chauffeur.php?id=<?php echo $row['matricul_chauf'];?>" method="post">
                                             <table class="table table-striped">
              <tr>
                  <td><label>Matricule</label><input class="form-control" type="text" name="matChaf" value="<?php echo $row['matricul_chauf']?>"> </td>
                  <td><label>Nom</label><input class="form-control" type="text" name="nomChaf" value=" <?php echo $row['nom_chauf']?>"></td>  </tr>
                   <tr> <td><label>Prenom</label><input class="form-control" type="text" name="prenomChaf" value="<?php echo $row['prenom_chauf']?>"> </td>
            
            
                  <td>
                      <label>CIN</label> <input class="form-control" type="text" name="cin" value=" <?php echo $row['cin_chauf']?>">
                  </td></tr>
                   <tr> <td>
                      <label>Email</label> <input class="form-control" type="text" name="mailChauf" value=" <?php echo $row['email_chauf']?>"> 
                  </td>
                  <td>
                      <label>Tel</label> <input class="form-control" type="text" name="telChauf" value="<?php echo $row['tel_chauf']?>"> 
                  </td>
              </tr>

       
              <tr>
                  <td>
                      
                      <label>Service</label> 
                      <input class="form-control" type="text" name="serviceChauf" value=" <?php echo $row['service_chauf']?>">
                    
                  </td>
                  <td>
                      <label>Adresse</label><br/>
                      <textarea class="form-control" name="adress" rows="2" cols="30"  >  <?php echo $row['adrese_chauf']?></textarea>
                  </td>
              </tr>
                                             </table>
                                              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
        <button type="submit" class="btn btn-primary">L'Enregistrement</button>
      </div>
                                         </form>
        
                                     </div>
                                          
    </div>
  </div>
</div> 
                                            
                                               <div class="modal fade" id="myModale1<?php echo $row['matricul_chauf']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Informations</h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                           <table class="table table-striped">
              <tr>
                  <td><label>Matricule</label><input class="form-control" type="text" name="matChaf" value="<?php echo $row['matricul_chauf']?>"> </td>
                  <td><label>Nom</label><input class="form-control" type="text" name="nomChaf" value=" <?php echo $row['nom_chauf']?>"></td>  </tr>
                   <tr> <td><label>Prenom</label><input class="form-control" type="text" name="prenomChaf" value="<?php echo $row['prenom_chauf']?>"> </td>
            
            
                  <td>
                      <label>CIN</label> <input class="form-control" type="text" name="cin" value=" <?php echo $row['cin_chauf']?>">
                  </td></tr>
                   <tr> <td>
                      <label>Email</label> <input class="form-control" type="text" name="mailChauf" value=" <?php echo $row['email_chauf']?>"> 
                  </td>
                  <td>
                      <label>Tel</label> <input class="form-control" type="text" name="telChauf" value="<?php echo $row['tel_chauf']?>"> 
                  </td>
              </tr>

       
              <tr>
                  <td>
                      
                      <label>Service</label> 
                      <input class="form-control" type="text" name="serviceChauf" value=" <?php echo $row['service_chauf']?>">
                    
                  </td>
                  <td>
                      <label>Adresse</label><br/>
                      <textarea class="form-control" name="adress" rows="2" cols="30"  >  <?php echo $row['adrese_chauf']?></textarea>
                  </td>
              </tr>
                                             </table>
        
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
      </div>
    </div>
  </div>
   </div>
                                            
                                                <div class="modal fade" id="confirm-delete<?php echo $row['matricul_chauf']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">

               </div>
               <div class="modal-body">
                   <form action="../Post/Delete/Delete_chaufeur.php?id=<?php echo $row['matricul_chauf']?>" method="post">


            <h3>Voulez-vous vraiment supprimer </h3>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>



                     <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
               </div>
                </form>
                      </div>
           </div>
       </div>
   </div>
                                         