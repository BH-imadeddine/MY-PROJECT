 <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $rowe['mattriculation_vehi']; ?>"> <i class="fa fa-bars"></i> Consulter</a>
 <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModalee<?php echo $rowe['mattriculation_vehi']; ?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>               
 <a href="#" data-href="delete.php?id=23" data-toggle="modal" data-target="#confirm-delete<?php echo $rowe['mattriculation_vehi']; ?>"> <i class="fa fa-trash-o"></i>Supprimer</a>
                                            
   
    <div class="modal fade" id="myModalee<?php echo $rowe['mattriculation_vehi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                   <h4 class="modal-title" id="myModalLabel">Modification</h4>
                </div>             
                <div class="modal-body">
                    <fieldset>
                                        
                       <form action="../Post/Update/update_vehicule.php?id=<?php echo $rowe['mattriculation_vehi']?>" method="post">
                        
                           <table class="ui basic table">
                               <tr>
                                    <td><label>Mattriculation</label><input class="form-control" type="text" name="matVehicule" size="20" value="<?php echo $rowe['mattriculation_vehi']; ?>"></td>
                                    <td><label>Etat</label>
                                        <select class="form-control" name="etat">
                                          <option hidden="" selected><?php echo $rowe['etat_vehi']; ?></option>
                                          <option class="form-control"> Disponible</option>
                                          <option class="form-control"> Non disponible</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>puissance</label> <input class="form-control" type="number" name="puissance" size="20" value="<?php echo $rowe['puissance_vehi']; ?>">
                                    </td>
                                    <td>
                                        <label>Date</label> <input class="form-control" type="date" name="date_vehicule" value="<?php echo $rowe['date_vehi']; ?>"> 
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label>utilisation</label> <select class="form-control" name="use_vehicule" value="<?php echo $rowe['etat_vehi']; ?>">
                                            <option class="form-control">Branchement</option>
                                            <option class="form-control">Branchement</option>
                                            <option hidden="" selected><?php echo $rowe['utilisation']; ?></option>
                                        </select>  
                                    </td>
                                    <td>
                                        <label>Categorie</label><input class="form-control" type="text" name="cat_vehicule" value="<?php echo $rowe['categorie_vehi']; ?>"> 
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label>Marque</label>

                                        <select class="form-control" id="slct12" name="slct1" onchange="populate(this.id,'slct333')">
                                            <option hidden="" selected=""><?php echo $rowe['marque_vehi']; ?></option>
                                                 <option class="form-control" value="Dacia">Dacia</option>
                                                  <option class="form-control" value="Volvo">Volvo</option>
                                                  <option class="form-control" value="Peugeot">Peugeot</option>
                                                  <option class="form-control" value="Audi">Audi</option>
                                                  <option class="form-control" value="Volkswagen"> Volkswagen</option>
                                             
                                        </select>
                                        
                                        
                                        

                                    </td>
                                    <td>
                                        <label>Modele</label>
                                        <select class="form-control" id="slct333" name="slct2">
                                            <option hidden="" selected><?php echo $rowe['modele_vehi']; ?></option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label>Parc</label>
                                        <select name="nomP" class="form-control">

                                            <?php $id1=$rowe['parc']; 
                                            $res7=$db->query("SELECT * FROM parc");
                                            while($row3=$res7->fetch()){ ?>
                                            <option><?php echo $row3['nom_parc'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <label>Nombre_palce</label> <input class="form-control" type="number" name="Nbr_place" value="<?php echo $rowe['nombre_plac_vehi']; ?>">  
                                    </td>
                                    
                                </tr>
                            </table>                              
                           <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
                                <input type="submit" class="btn btn-primary" value="L'enregistrement" />
                           </div> 
                        </form>
                        
                    </fieldset>
                </div>
            </div>
        </div>
   </div>
 
 
    <div class="modal fade" id="confirm-delete<?php echo $rowe['mattriculation_vehi']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">

                            </div>
                            <div class="modal-body">
                                <form action="../Post/Delete/Delete_vehicule.php?id=<?php echo $rowe['mattriculation_vehi']?>" method="post">

                                    <h3>Voulez-vous vraiment supprimer cette vehicule </h3>

                             <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>



                                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
                            </div>
                             </form>
                                   </div>
                        </div>
             </div>
    </div>
                                             
    <div class="modal fade" id="myModale1<?php echo $rowe['mattriculation_vehi']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                     <h4 class="modal-title" id="myModalLabel">Informations</h4>
                </div>
                              
                <div class="modal-body">
                    <fieldset>
                                        
                        <form action="#" method="post">                 
                            <table class="ui basic table">
                                <tr>
                                    <td><label>Mattriculation</label><input class="form-control" type="text" name="matVehicule" size="20" disabled="" value="<?php echo $rowe['mattriculation_vehi']; ?>"></td>
                                    <td><label>Etat</label>
                                     <input  class="form-control" type="text" name="pauissance" size="20" disabled="" value="<?php echo $rowe['etat_vehi']; ?>">   
                                       
                                    </td>   
                                </tr>
                                <tr>
                                    <td>
                                        <label>puissance</label> <input  class="form-control" type="text" name="pauissance" size="20" disabled="" value="<?php echo $rowe['puissance_vehi']; ?>">
                                    </td>
                                    <td>
                                        <label>Date</label> <input class="form-control" type="text" name="date_vehicule" disabled="" value="<?php echo $rowe['date_vehi']; ?>"> 
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <label>utilisation</label>
                                        <input disabled="" value="<?php echo $rowe['utilisation']; ?>" class="form-control" type="text" name="cat_vehicule"> 
                                          
                                    </td>
                                    <td>
                                        <label>Categorie</label>
                                        <input disabled="" value="<?php echo $rowe['categorie_vehi']; ?>" class="form-control" type="text" name="cat_vehicule"> 
                                    </td>
                                 </tr>      
                                <tr>
                                    <td>
                                        <label>Marque</label>

                                      
                     <input class="form-control" type="text" name="Nbr_place" disabled="" value="<?php echo $rowe['marque_vehi']; ?>">  
                                    </td>
                                    <td>
                                        <label>Modele</label>
                                      
                                        <input class="form-control" type="text" name="Nbr_place" disabled="" value="<?php echo $rowe['modele_vehi']; ?>">  
                                    </td>
                                </tr>
                                <tr>  
                                    <td><label>Parc</label>
                                     <?php 
                                       $nom=$rowe['parc'];
                                       $requ=  $db->query( "SELECT nom_parc FROM parc  ,vehicule  where id_parc=parc and parc=$nom");
                                        while ($ro =  $requ->fetch()) {?>
                                    
                                        <input class="form-control" type="text" name="Nbr_place" disabled="" value="<?php echo $ro['nom_parc']; ?>">  
                                   
                                    </td>
                                         <?php } ?>
                                    <td>
                                       
                                        <label>Nombre_palce</label> <input class="form-control" type="number" name="Nbr_place" disabled="" value="<?php echo $rowe['nombre_plac_vehi']; ?>">  
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