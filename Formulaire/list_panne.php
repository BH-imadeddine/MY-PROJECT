<!DOCTYPE html>
<html>
    <?php 
include 'include\connexion.php';
 require_once '../Post/verification_login.php';
 if ($etat== "Comptable" ){
 
      header('location:../index.php?error=4');
}
$confirm = isset($_GET['confirm']) ? $_GET['confirm']:'';
?> 
    <head>
             <title> Carburant </title>
            <meta charset="utf-8">
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
            <script type="text/javascript" >
            $(document).ready(function(){
              
             $("#rechrche").keyup(function(){
               
           var rechrche = $("#rechrche").val();
              $.ajax({
                   
                  type:"post",
                  url: "search/search_panne.php",
                  data: {rechrche:rechrche},
                  success:function(res){
                   $("#UserListe").html(res);
                    }
              });
              
            });
              
            });
            
           </script>
    </head>
    <body>
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
            <div class="contre">

     
                <div class="bardroit"> 
                    <?php include './include/Menuheader.php'; ?>  
                </div>


                <div class="menuvert">
                     <div class="colonegauche">
                         <?php include './include/Menubody.php'; ?>
                     </div>
                     
                     <div class="colonedroit">
                         <aside id="stylebody">
                            <fieldset id="filbordr" >
                                    <legend><h2 id="legh5">Liste panne</h2></legend> 
                         <div class="tab_btn" >
                                    <div class="btn_add" style="display: inline">
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i>  Ajouter</button>
                                     </div>   
                                    
                                 
                               
      
 
                                
                                      <div class="ui input focus" id="tablerech" style="display: inline">
                                         <input type="text" placeholder="Search..." name="rechrche" id="rechrche" >
                                                
                                               </div>
                                </div>
                         <div style="width:90%; overflow-x: hidden; max-height: 450px;">
                         <table class="ui teal table" id="tablewidh">
                             
                             <thead>
                                 <tr>
                                        <th>Vehicule</th>
                                        <th>Type de panne</th>
                                         <th>Montant</th>
                                         <th>Date</th>
                                          <th>Option</th>
                                        
                                 </tr>
                             </thead>
                            
                             <tbody  id="UserListe">
                                 <?php include './liste_body/body_panne/body_panne.php'; ?>
                             </tbody>

                        </table>
                         </div>
                            </fieldset>>           
                       </aside>  
                     </div>
                </div>

            </div>


  

            
            
               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">L'Ajout du panne </h4>
                                         </div>
                              
                                     <div class="modal-body">
                                         <fieldset>
                                        
                                             <form action="../Post/Add/add_panne.php" method="post">
                                             <div></div>
                                             <table class="ui basic table">
                          <tr><td><label>Vehicule</label>
                                  
                                  
                                 
               
                <?PHP
                     $reqq=$db->query("select mattriculation_vehi from vehicule ");
                     ?> 
                                  <select name="matVehi" class="form-control" required>
                           <?php  while($line=$reqq->fetch()) { ?> 
                          <option><?php echo $line['mattriculation_vehi']?></option><?php }?>
                      
                      
                      </select>
               </td>
                          
                          
                          
                          
                          </tr>
              <tr>
                 
                  <td><label>Type de Panne</label><input class="form-control" type="text" name="type_panne" required>

                            </td>
                  
              </tr>
              <tr>
                  <td>
                      <label>Montant</label> <input class="form-control" type="number" name="montant" size="20" required>
                  </td>
                  
                 
              </tr>
               <tr>
                  <td>
                      <label>Date</label> <input class="form-control" type="date" name="date_pan" size="20" required>
                  </td>
                  
                 
              </tr>
          </table> 
                                                                               <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button>
        <input type="submit" class="btn btn-primary" value="L'Enregistrement"/>
      </div>
                                         </form>
        </fieldset>
                                     </div>
         
    </div>
  </div>
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
