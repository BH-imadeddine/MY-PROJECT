<?php 
session_start();
session_destroy(); 

$error = isset($_GET['error']) ? $_GET['error']:'';


?><!DOCTYPE html>
<html lang="en">
        <head>
                      
                   <title>Parc Automobile R.A.D.E.E.O</title>
                   <meta http-equiv="content-type" content="text/html; charset=UTF-8">
                   <meta charset="utf-8">
                   <meta name="generator" content="Bootply" />
                   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
                   <link href="CSS/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
                   <link href="CSS/font-awesome/css/font-awesome.min.css" rel="stylesheet">
                   <link href="CSS/Divers/styleLogin.css" rel="stylesheet">
                   <link rel="stylesheet" type="text/css" href="CSS/semonic/semantic.min.css">
        </head>
        <body>
                <div class="container-full" >

                     <div class="row">

                         <div class="col-lg-12 text-center v-center">

                             <form class="col-lg-12"  action="Post/Post_login.php" method="POST">
                                 <div class="input-group" style="width:320px;text-align:center;margin:0 auto;">

                                     <div class="bor" style=" ">
                                         <table align='center'> 
                                           <tr>
                                               <td><img class="navbar-bran" width=280px height="200px" src="CSS/image/onlinelogomaker-081715-2439.png"></td></tr>
                                           <tr>
                                               <td style="text-align: center"><label class="control-label" for="InputEmail1_" style="font-size: 20px ;font-family: bold;color: black ;"></label></td></tr>
                                           <tr>
                                               <td ><input type="text" class="form-control input-lg"  placeholder="Votre login" name="username" required /></td></tr>
                                           <tr>
                                               <td style="text-align: center"><label for="InputPasse_" style="font-size: 20px ;font-family: bold;color: black " ></label></td></tr>                                   
                                           <tr>
                                               <td><input type="password" class="form-control input-lg" name="password" placeholder="Votre mot de passe" required /></td></tr>                        
                                                   <br>                                                  
                                         </table>
                                             <br/>
                                             <button type="submit" class="ui teal button""><b>Connecter</b></button> 
                                             <button type="reset" class="btn btn-danger btn"> ANNULER</button>
                                             <br>
                                              <br>
                                             <div id="error">
                                                   <?php 
                                                   switch ($error){
                                                   case 1:
                                                   echo " login et le mot de passe n'exciste pas !!";
                                                   break;
                                               case 2:
                                                   echo " login ou le mot de passe incorecte !!";
                                                   break;
                                              case 3:
                                                   echo " vous éte déconnecter ";
                                                   break;
                                               case 4:
                                                   echo " Vous avez pas le droit d'entrer dans la page ";
                                                   break;
                                                   }
                                                     ?>
                                                 
                                             </div>
                                     </div>	

                                 </div>
                            </form>          
                         </div>

                     </div>
                </div>
          
                   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
                   <script src="js/bootstrap.min.js"></script>
        
        </body>
        
</html>

