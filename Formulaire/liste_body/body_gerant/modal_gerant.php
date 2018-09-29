     <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale1<?php echo $row['mat_gerant']?>"> <i class="fa fa-bars"></i> Consulter</a>
                                            <a href="#" role="button" onclick="" data-toggle="modal" data-target="#myModale<?php echo $row['mat_gerant']?>"> <i class="fa fa-pencil-square-o"></i> Modifier</a>
                                            <a href="#" data-toggle="modal" data-target="#confirm-delete<?php echo $row['mat_gerant']?>" role="button" onClick=""><i class="fa fa-trash-o"></i>Supprimer</a>
                             
<div class="modal fade" id="myModale<?php echo $row['mat_gerant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                
                                                                <div class="modal-header">
                                                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                       <h4 class="modal-title" id="myModalLabel">Modification</h4>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <form action="../Post/Update/update_gerant.php?id=<?php echo $row['mat_gerant'];?>" method="post">
                                                                        <table class="table table-striped">
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Matricule</label>
                                                                                    <input class="form-control" type="text" name="mat_gerant" value="<?php echo $row['mat_gerant']?>" >
                                                                                </td>  
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Nom</label>
                                                                                    <input class="form-control" type="text" name="nom" value="<?php echo $row['nom']?>" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                     <label>Prenom</label> <input class="form-control" type="text" name="prenom" value="<?php echo $row['prenom']?>" >
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Email</label> <input class="form-control" type="text" name="email" value="<?php echo $row['email']?>">
                                                                                </td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>
                                                                                    <label>Login</label> <input class="form-control" type="text" name="logGerant" value="<?php echo $row['login_G']?>" >
                                                                                </td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>
                                                                                    <label>Mot de passe</label> <input class="form-control" type="text" name="mdpG" value="<?php echo $row['modpass_G']?>" >
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


           <div class="modal fade" id="myModale1<?php echo $row['mat_gerant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                                                    <label>Matricule</label>
                                                                                    <input class="form-control" type="text" name="mat_gerant" value="<?php echo $row['mat_gerant']?>" disabled="">
                                                                                </td>  
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Nom</label>
                                                                                    <input class="form-control" type="text" name="nom" value="<?php echo $row['nom']?>" disabled="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                     <label>Prenom</label> <input class="form-control" type="text" name="prenom" value="<?php echo $row['prenom']?>" disabled="">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <label>Email</label> <input class="form-control" type="text" name="email" value="<?php echo $row['email']?>" disabled="">
                                                                                </td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>
                                                                                    <label>Login</label> <input class="form-control" type="text" name="logGerant" value="<?php echo $row['login_G']?>" disabled="">
                                                                                </td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>
                                                                                    <label>Mot de passe</label> <input class="form-control" type="text" name="mdpG" value="<?php echo $row['modpass_G']?>" disabled="">
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


        <div class="modal fade" id="confirm-delete<?php echo $row['mat_gerant']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">

               </div>
               <div class="modal-body">
                   <form action="../Post/Delete/Delete_gernat.php?id=<?php echo $row['mat_gerant']?>" method="post">


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
             