<?php 
include 'include\connexion.php';
require_once '../Post/verification_login.php';
if ($etat== "Comptable" ){
 
      header('location:../index.php?error=4');
}
$confirm = isset($_GET['confirm']) ? $_GET['confirm']:'';
?> 
<!DOCTYPE html>
<html>
    <head>
           <title>Chaufeur </title>
            <meta charset="utf-8">
                                    <!-- link for file CSS  -->
                                    
           
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap-3.3.4-dist/css/bootstrap.min.css">
            <link href="../CSS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="../CSS/semonic/semantic.min.css">
            <link rel="stylesheet" type="text/css" href="../CSS/Divers/style_page.css">
            <link href="../CSS/Divers/AdminLTE.min.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/_all-skins.min.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/stylebody.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/sb-admin.css" rel="stylesheet">
            <link href="../CSS/Divers/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
             <script src="../CSS/dist/sweetalert.min.js"></script>
            <link rel="stylesheet" type="text/css" href="../CSS/dist/sweetalert.css">
            
             
            <link rel="stylesheet" type="text/css" href="../CSS/Divers/styleRecherch.css">
            
            <script type="text/javascript" src="../CSS/jqry/jquery-1.11.2.min.js"></script>
                               <!-- function for search php/MYsql and AJAX JAVASCRIPT  -->
            <script type="text/javascript" >
                    $(document).ready(function(){

                        $("#rechrche").keyup(function(){

                            var rechrche = $("#rechrche").val();
                            $.ajax({

                                type:"post",
                                url: "search/search_chaufeur.php",
                                data: {rechrche:rechrche},
                                success:function(res)
                                {
                                 $("#UserListe").html(res);
                                }
                            });
                        });
                    });
            </script>
    </head>
    <body>
            <div class="contre">
             <div id="confirm">
             <?php 
                 switch ($confirm){
                   case 1: ?>
                       <script type="text/javascript" >
                         swal("Aouter avec succès!", "clic sur cette button", "success")
                       </script>
                         <?php
                         break;
                   case 2: ?>
                        <script type="text/javascript" >
                         swal(" modifer avec succès!", "clic sur cette button", "success")
                       </script>
                        <?php break;
                   case 3:?>
                        <script type="text/javascript" >
                         swal("supprimer  avec succès!", "clic sur cette button", "success")
                       </script>
                        
                   <?php break;
                    case 4:?>
                        <script type="text/javascript" >
                         swal("Cancelled", "Your imaginary file is safe :)", "error")
                       </script>
                        <?php break;
                              }
                                                     ?>
          
        </div>
       
      
                <div class="bardroit"> 
                    <?php  include './include/Menuheader.php'; ?> 
                </div>


                <div class="menuvert">
                      <div class="colonegauche">
                      <?php   include './include/Menubody.php'; ?>
                     </div>
                     
                     <div class="colonedroit">
                        <aside id="stylebody">
                            <fieldset id="filbordr" >
                                <legend><h2 id="legh5"> <i class="fa fa-user"></i> Liste chaufeur</h2></legend> 
                            
                                <div class="tab_btn" >
                                    <div class="btn_add" style="display: inline">
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i>  Ajouter</button>
                                     </div>   
                                    
                                 
                               
      
 
                                
                                      <div class="ui input focus" id="tablerech" style="display: inline">
                                         <input type="text" placeholder="Search..." name="rechrche" id="rechrche" >
                                                
                                               </div>
                          </div>
                                <div style="width:90%; overflow-x: hidden; max-height: 450px;">
                           <div style="width:90%; overflow-x: hidden; max-height: 450px;">
                                <table class="ui teal table" id="tablewidh">
                             
                             <thead>
                                 <tr>
                                        <th>matricule</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Service</th>
                                        <th>Option</th>
                                 </tr>
                             </thead>
                            
       


                             <tbody id="UserListe">
                                
                                 <?php include './liste_body/body_chouffeur/body_chauffeur.php'; ?>
                             </tbody>

                        </table> 
                           </div>
                      </div>              
                            </fieldset>
                        </aside>   
                     </div>
                </div>

            </div>

        
  

            
            
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">L'Ajout du chauffeur </h4>
                                         </div>
                              
                                     <div class="modal-body">
                                        
                                         <form action="../Post/Add/add_chauf.php" method="post">
                                             <table class="ui teal table" >
              <tr>
                  <td><label>Matricule</label><input class="form-control" type="text" name="matChaf" required></td>
                  <td><label>Nom</label><input class="form-control" type="text" name="nomChaf" required></td>
                  
              </tr>
              <tr>
                  <td><label>Prenom</label><input class="form-control" type="text" name="prenomChaf" required></td>
                  <td>
                      <label>CIN</label> <input class="form-control" type="text" name="cin" required>
                  </td>
                      </tr>
                      <tr>
                  <td>
                      <label>Email</label> <input class="form-control" type="text" name="mailChauf" required> 
                  </td>
                  <td>
                      <label>Tel</label> <input class="form-control" type="text" name="telChauf" required> 
                  </td>
          </tr>

         
              <tr>
                  <td>
                      
                      <label>Service</label> <input class="form-control" type="text" name="serviceChauf" required> 
                      
                  </td>
                  <td>
                      <label>Adresse</label><br/>
                      <textarea class="form-control" name="adress" rows="2" cols="30" required></textarea>
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
        <div class="modal fade" id="confirm-delete<?php echo $ligne['id_vignete']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            
            </div>
            <div class="modal-body">
                <form action="../Post/Delete/Delete_chquffeur.php?id=<?php echo $ligne['id_vignete']?>" method="post">
                    
                
         <h3>Voulez-vous vraiment supprimer ce chauffeur </h3>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
               
                
                
                  <input type="submit" class="btn btn-danger btn-ok" value="Delete"/>
            </div>
             </form>
                   </div>
        </div>
    </div>
</div>
           
               <div class="modal fade" id="myModale1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    
</div> 

    </body>

            <script type="text/javascript" src="../CSS/jqry/jquery.js"></script>
            <script type="text/javascript" src="../CSS/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
            <script>$.widget.bridge('uibutton', $.ui.button);</script>
            <script src="../CSS/semonic/semantic.min.js"></script>
            <script src="../CSS/Divers/app.min.js" type="text/javascript"></script>
            <script src="../CSS/Divers/demo.js" type="text/javascript"></script>
        
        
            <script> 
                        $(document).ready(function(){
                            $("#flip").click(function(){
                                $("#panel").slideToggle("slow");
                            });
                        });
            </script>
            
</html>

