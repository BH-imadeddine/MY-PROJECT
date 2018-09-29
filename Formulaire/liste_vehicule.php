<?php include '.\include\connexion.php';
require_once '../Post/verification_login.php';
if ($etat== "Comptable" ){
 
      header('location:../index.php?error=4');
}

$confirm = isset($_GET['confirm']) ? $_GET['confirm']:'';
?>
<!DOCTYPE html>
<html>
    
   <head><title> vehicule </title>
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
                               <!-- function for search php/MYsql and AJAX JAVASCRIPT  -->
            <script type="text/javascript" >
                    $(document).ready(function(){

                        $("#rechrche").keyup(function(){

                            var rechrche = $("#rechrche").val();
                            $.ajax({

                                type:"post",
                                url: "search/search_vehicule.php",
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
                    <?php  include './include/Menubody.php'; ?>
                </div>
                <div class="colonedroit">
                    <aside id="stylebody">
                         <fieldset id="filbordr" >
                                    <legend> <h2 id="legh5"><i class="fa fa-car"></i> Liste vehicule</h2></legend> 
                         <div class="tab_btn" >
                                     <div class="btn_add" style="display: inline">
                                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> <i class="fa fa-plus"></i>  Ajouter</button>
                                     </div>   
                                    
                                 
                               
      
 
                                
                                      <div class="ui input focus" id="tablerech" style="display: inline">
                                         <input type="text" placeholder="Search..." name="rechrche" id="rechrche" >
                                                
                                               </div>
                                </div>
                         <div style="width:90%; overflow-x: hidden; max-height: 450px;">           
                        <table class="ui teal table" id="tablewidh" >  
                            <thead>
                                 <tr>
                                        <th>mattriculation</th>
                                        <th>Date</th>
                                        <th>Marque</th>
                                        <th>Catégorie</th>
                                        <th>Puissance</th>
                                        <th>Option</th>
                                 </tr>
                            </thead>
                            <tbody id="UserListe">
                                   <?php  include './liste_body/body_vehicule/body_vehicule.php'; ?>
                            </tbody>
                        </table>
                         </div>
                         </fieldset>             
                    </aside>  
                </div>
            </div>
        </div>
        <!-- modal d'ajouter vehicule  -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">L'ajout du véhicule</h4>
                    </div>
                              
                    <div class="modal-body">
                        <fieldset>                 
                            <form action="../Post/Add/add_vehicule.php" method="post">
                                <table class="ui basic table">
                                  <tr>
                                      <td><label>Mattriculation</label><input class="form-control" type="text" name="matVehicule" size="20" required=""></td>
                                        <td><label>Etat</label>
                                            <select class="form-control" name="etat" required>
                                               <option class="form-control"> Disponible</option>
                                               <option class="form-control"> Non disponible</option>
                                            </select>
                                        </td>   
                                   </tr>
                                   <tr>
                                        <td>
                                            <label>puissance</label> <input class="form-control" type="number" name="puissance" size="20" required>
                                        </td>
                                        <td>
                                            <label>Date</label> <input class="form-control" type="date" name="date_vehicule" required> 
                                        </td>
                                   </tr>
                                    <tr>
                                        <td>
                                            <label>Nombre_palce</label> <input class="form-control" type="number" name="Nbr_place" required>  
                                        </td>
                                        <td><label>Parc</label>
                                            <select name="nomP" class="form-control" required>
                                                <?php 
                                                $query=$db->query("SELECT * FROM parc");
                                                while($row1=$query->fetch()){ ?>
                                                <option><?php echo $row1['nom_parc'];?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                   </tr>
                                    <tr>
                                        <td>
                                            <label>utilisation</label> <select class="form-control" name="use_vehicule" required>
                                                <option class="form-control">Branchement</option>
                                                <option class="form-control">deplacemnt</option>
                                                 <option class="form-control">service externe</option>
                                            </select>  
                                        </td>
                                        <td>
                                            <label>Categorie</label><input class="form-control" type="text" name="cat_vehicule" required> 
                                        </td>
                                   </tr>
                                  <tr>
                                        <td>
                                            <label>Marque</label>

                                            <select class="form-control" id="slct11" name="slct1" onchange="populate(this.id,'slct21')" required>
                                                  <option class="form-control" value="Dacia">Dacia</option>
                                                  <option class="form-control" value="Volvo">Volvo</option>
                                                  <option class="form-control" value="Peugeot">Peugeot</option>
                                                  <option class="form-control" value="Audi">Audi</option>
                                                  <option class="form-control" value="Volkswagen"> Volkswagen</option>
                                                  
                                            </select>

                                        </td>
                                        <td>
                                            <label>Modele</label>
                                            <select class="form-control" id="slct21" name="slct2" required>

                                            </select>
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
    </body>
          
           

            <script type="text/javascript" src="../CSS/jqry/jquery.js"></script>
            <script type="text/javascript" src="../CSS/bootstrap-3.3.4-dist/js/bootstrap.js"></script>
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
            <script>
             function populate(s1,s2){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
	s2.innerHTML = "";
	if(s1.value == "Dacia"){
		var optionArray = ["Sandero|sandero","Duster|Duster","Logan|logan"];
	} else if(s1.value == "Volvo"){
		var optionArray = ["Vns serie|vns Series","Xc60|XC60"];
	} else if(s1.value == "Peugeot"){
		var optionArray = ["Partner|partner","Expert|expert","Bipper|bipper"];
	}else if(s1.value == "Audi"){
		var optionArray = ["A4|A4","Q5|Q5"];
	}else if(s1.value == "Volkswagen"){
		var optionArray = ["Passat SW|Passat SW","Amaraci|Amaraci" ,"Sharan|Sharan"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
}
             </script>
            
</html>
    
