<?php require_once '../Post/verification_login.php'; ?>
<!DOCTYPE html>

<html>
    <head>
           <title>page principale</title>
           <meta charset="utf-8">
           <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
           <link href="../CSS/Divers/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
           <link href="../CSS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
           <link href="../CSS/Divers/AdminLTE.min.css" rel="stylesheet" type="text/css" />
           <link href="../CSS/Divers/_all-skins.min.css" rel="stylesheet" type="text/css" />
           <link href="../CSS/Divers/stylebody.css" rel="stylesheet" type="text/css" />
           <link href="../CSS/Divers/sb-admin.css" rel="stylesheet">     
    </head>
    <body>
            <div class="contre">

     
                <div class="bardroit"> 
                  
                    <?php include './include/Menuheader.php'; ?>
                </div>


                <div class="menuvert">
                        <div class="colonegauche">
                        <?php  include './include/Menubody.php'; ?>
                        </div>
                     
                    
                    <aside id="stylebody">
                        
                        
                         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 >
                            <small class="page-head"> GESTION DE PARC AUTO</small>
                        </h1>
                       
                    </div>
                </div>
                

                <div class="rowx">
			
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-car fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Gestion De Parc</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale1">
                                <div class="panel-footer">
                                   <span class="pull-left">Plus D'informations</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
						
                    </div>
					
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-tasks fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Gestion D'operations</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale2">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus D'informations</span>

               
         
             
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-wrench fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Gestion de Panne</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale3">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus D'informations</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Gestion de Vehicule</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale4">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus D'informations</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
					<div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-line-chart fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Statistique</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale5">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus D'informations</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
				
               
				
	            <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-bell fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"></div>
                                        <div class="pann">Alerte</div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" data-toggle="modal" data-target="#myModale6">
                                <div class="panel-footer">
                                    <span class="pull-left">Plus D'informations</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
				
                </div>
				 </div>
               

            </div>
                        
            <div class="modal fade" id="myModale1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Gestion De Parc</h4>
											
                                         </div>
                              
                                     <div class="modal-body">
                                         <p class="partext">C'est une interface qui permet de gérer les parcs existent en faisant connaitre le nom et le lieu du parc et savoir ca capacité . </p>

                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
            </div>
             <div class="modal fade" id="myModale2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Gestion d'operation</h4>
                                         </div>
                              
                                     <div class="modal-body">
<p class="partext"> <b> Contient des sous taches : </b>  </br>
<li class="litext"><small class="smltext">Carburant </small>: A pour but de savoir quel type d'essence utilise ce vehicule et savoir sa quantité et calculer son montant.</li>
<li class="litext"><small class="smltext">contrat dassurance </small>: Possède une agence qui contient la date début où ils ont fait l'assurance avec la date prochaine . </li>
<li class="litext"> <small class="smltext">vignette </small> :Cette interface contient la date début et la date fin de vignette et a faisant calculer le montant de chaque vignette faite .</li>
<li class="litext"><small class="smltext">visite technique </small>:Savoir la date où on a commencé à faire la visite technique et savoir la prochaine visite et calculer la montante chaque visite technique faite.</li>
<li class="litext"><small class="smltext"> vidange </small>:Savoir juste la date où ils ont fait le vidange et en calculant le montant de chaque vidange fait .</li>
<li class="litext"> <small class="smltext">amortissement </small>: cette interface contient la date et la période d'où il a commencé en calculant le montant de la voiture et le montant d'anuiter. </li></ul></p>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
</div>
             <div class="modal fade" id="myModale3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Gestion De Panne</h4>
                                         </div>
                              
                                     <div class="modal-body">
<p class="partext">c'est une interface qui contient juste le montant de chaque panne de vehicule avec le faite de savoir le type de panne  </p>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
</div>
             <div class="modal fade" id="myModale4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Gestion De Vehicule</h4>
                                         </div>
                              
                                     <div class="modal-body">
<p class="partext">c'est une interface ou il permet d'avoir toute informations sur le véhicule (sa mattriculation , son etat , sa puissance, nombre de place , capacité , sa catégorie,modele,sa marque )</p>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
</div>
             <div class="modal fade" id="myModale5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Statistique</h4>
                                         </div>
                              
                                     <div class="modal-body">
<p class="partext">Contient les statistiques de  toute les sous taches (Carburant, Contrat d'assurance,Vignette,Visite Technique,Vidange) avec Les pannes </p>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
</div>
             <div class="modal fade" id="myModale6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Alerte</h4>
                                         </div>
                              
                                     <div class="modal-body">
<p class="partext">Contient toute les alertes en ce qui concerne l'assurance et la visite technique , vidange,vignette  </p>
                                     </div>
                                           <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermeture</button></div>
    </div>
  </div>
</div>
                          
                             
                           
                         </aside>
                    
                </div>

            </div>      
    </body>
    <script src="../CSS/jqry/jquery-1.11.2.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
  
    <script src="../CSS/bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>    
   
    <script src="../CSS/Divers/app.min.js" type="text/javascript"></script>

    <script src="../CSS/Divers/demo.js" type="text/javascript"></script>

</html>

