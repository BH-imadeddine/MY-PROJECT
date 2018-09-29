 
<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $row['id_carburant']?>"> <i class="fa fa-bars"></i> Consulter</a>
<a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $row['id_carburant']?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
<a href="#" data-toggle="modal" data-target="#confirm-delete<?php echo $row['id_carburant']?>" role="button" onClick=""><i class="fa fa-trash-o"></i>Supprimer</a>


<div class="modal fade" id="myModale<?php echo $row['id_carburant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                
                                                                <div class="modal-header">
                                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                       <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form action="../Post/Update/update_carburant.php?id=<?php echo $row['id_carburant'];?>" method="post">
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <td>
                                                                                    <label>vehicule</label>
                                                                                    <select class="form-control" name="vehiC" >
                                                                                        <option hidden="" selected="">
                                                                                            <?php $id=$row['id_carburant'];
                                                                                            $a=$db->query("SELECT mattriculation_vehi FROM carburant WHERE id_carburant=$id");
                                                                                            $req=$a->fetch();echo $req['mattriculation_vehi'];?>
                                                                                        </option>
                                                                                            <?php $res1=$db->query("SELECT mattriculation_vehi FROM vehicule");
                                                                                            while($row1=$res1->fetch()){?>
                                                                                        <option><?php echo $row1['mattriculation_vehi'];?>
                                                                                        </option>
                                                                                            <?php }?>
                                                                                    </select>
                                                                                </td>  
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Type</label>
                                                                                    <select class="form-control" name="typeC">
                                                                                        <option hidden="" selected=""><?php echo $row['type_carbu']?></option>
                                                                                        <option class="form-control">essence</option>
                                                                                        <option class="form-control">gazoil</option>
                                                                                        <option class="form-control">super</option>
                                                                                        <option class="form-control">algerie</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                     <label>Quantité</label> <input class="form-control" type="text" name="quantiteC" value="<?php echo $row['quantite']?>" >
                                                                                </td>
                                                                            </tr>
                                                                            
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Montant</label> <input class="form-control" type="text" name="montC" value="<?php echo $row['montant_cab']?>" >

                                                                                </td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>
                                                                                    <label>Date</label> <input class="form-control" type="date" name="dateC" value="<?php echo $row['dateC']?>" >

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


           <div class="modal fade" id="myModale1<?php echo $row['id_carburant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                         <label>vehicule</label> <select class="form-control" name="vehiC" disabled="">
                             <option hidden="" selected=""><?php $id=$row['id_carburant'];
                           $a=$db->query("SELECT mattriculation_vehi FROM carburant WHERE id_carburant=$id");
                            $req=$a->fetch();
                            echo $req['mattriculation_vehi'];?>
                            </option>
                            <option><?php $res0=$db->query("SELECT mattriculation_vehi FROM vehicule");
                             while($row0=$res0->fetch()){?><option><?php echo $row0['mattriculation_vehi'];?></option>
                             <?php }?>
                         </select>
                     </td>
                 </tr>
                 <tr>
                     <td><label>Type</label><select class="form-control" name="typeC" disabled="">
                             <option hidden="" selected=""><?php echo $row['type_carbu']?></option>
                             <option class="form-control">essence</option>
                             <option class="form-control">eazoil</option>
                             <option class="form-control">super</option>
                             <option class="form-control">algerie</option></select></td>
                     </tr>
                 <tr>
                     <td>
                         <label>Quantité</label> <input class="form-control" type="text" name="quantiteC" value="<?php echo $row['quantite']?>" disabled="">
                     </td>
                 </tr>
                
                 <tr>
                     <td>
                         <label>Montant</label> <input class="form-control" type="text" name="montC" value="<?php echo $row['montant_cab']?>" disabled="">
                     </td>
                 </tr> <tr>
                     <td>
                         <label>date</label> <input class="form-control" type="text" name="dateC" value="<?php echo $row['dateC']?>" disabled="">
                     </td>
                 </tr></table>
                                            </form>

                                        </div>
                                              <div class="modal-footer">
           <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
         </div>
       </div>
     </div>
   </div>


        <div class="modal fade" id="confirm-delete<?php echo $row['id_carburant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">

               </div>
               <div class="modal-body">
                   <form action="../Post/Delete/Delete_carburant.php?id=<?php echo $row['id_carburant']?>" method="post">


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
                                                           