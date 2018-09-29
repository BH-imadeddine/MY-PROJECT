<!DOCTYPE html>
<html>
<?php 
include './include/connexion.php';
require_once '../Post/verification_login.php'; 
if ($etat== "Comptable" ){
 
      header('location:../index.php?error=4');
}

?> 
    <head>
             <title> statistique</title>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="CSS/bootstrap-3.3.4-dist/css/bootstrap.min.css">
            <link href="../CSS/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link rel="stylesheet" type="text/css" href="../CSS/semonic/semantic.min.css">
            <link href="../CSS/Divers/AdminLTE.min.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/_all-skins.min.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/stylebody.css" rel="stylesheet" type="text/css" />
            <link href="../CSS/Divers/sb-admin.css" rel="stylesheet">
            <link href="../CSS/Divers/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
            <link href="../CSS/Divers/style_satatistique.css" rel="stylesheet" type="text/css" /> 
            <script type="text/javascript" src="../CSS/jqry/jquery-1.11.2.min.js"></script>
            <?php include './include/statistique/carburant/js_carburant.php'; ?>
            <?php include './include/statistique/panne/js_panne.php' ?>
             <?php include './include/statistique/assurance/js_assurance.php' ?>
            
            
            
               
    </head>
    <body>
            <div class="contre">

     
                <div class="bardroit"> 
                    <?php include './include/Menuheader.php'; ?>   
                </div>


                <div class="menuvert" style="background-color: #32373d">
                     <div class="colonegauche"> 
                      <?php  include './include/Menubody.php'; ?>
                     
                     </div>
                     
                     <div class="colonedroit">
                        
                          <aside id="stylebody">
                              <div id="bloc_carburant">
                                  <?php include './include/statistique/carburant/body_carburant.php'; ?>
                              </div>
                              <div id="bloc_pane">
                                   <?php include './include/statistique/panne/body_panne.php'; ?>
                              </div>
                              <div id="bloc_assurance">
                                <?php include './include/statistique/assurance/body_assurance.php'; ?>  
                              </div>
                            
                       
                          </aside>   
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
        
        
           
            
</html>

