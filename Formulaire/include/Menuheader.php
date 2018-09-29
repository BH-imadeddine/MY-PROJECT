<?php
include 'include/connexion.php';
            ?>
<meta charset="UTF-8">
    <title>Gestion parc d'automobile</title>
 




<div class="menu heade">
      <header class="main-header">
        <!-- Logo -->
        <a href="Main_Principale.php" class="logo"><b> <img src="../CSS/image/LOGO.png" class="user-image" alt="User Image"/></b></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
         
        
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              
             
               <?php  if($etat=='super' || $etat=='Gerant' ) {?>
              <li class="dropdown notifications-menu">
                   <?php $requ=$db->query("call parcauto.alert(@num, @nb_assu, @nb_visite, @nb_vignette);");
                 $req=$db->query("select @num, @nb_assu, @nb_visite, @nb_vignette;");
                                      while ($row= $req->fetch()) {?>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning"><h6 style="color: #ffffff ;size: 30px; display: inline; font-weight: bold" ><?php  echo $row['@num']?> </h6></span>
                </a>
                                                 
                <ul class="dropdown-menu">
                  <li class="header">vous avez  <?php  echo $row['@num']?> notifications</li>
                 
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="liste_assurance.php">
                            <i class="fa fa-certificate"></i><h5 style="color: red ;size: 50px; display: inline; font-weight: bold" ><?php  echo $row['@nb_assu']?> </h5> : Liste assurace
                        </a>
                      </li>
                       <li>
                           <a href="liste_visitetechnique.php">
                               <i class="fa fa-wrench"></i><h5 style="color: red ;size: 50px; display: inline; font-weight: bold" ><?php  echo $row['@nb_visite']?></h5> : Liste visite technique
                        </a>
                      </li>
                       <li>
                           <a href="liste_vignette.php">
                               <i class="fa fa-files-o"></i><h5 style="color: red ;size: 50px; display: inline; font-weight: bold" > <?php  echo $row['@nb_vignette']?></h5> : Liste vignette
                        </a>
                      </li>
                         <?php } ?>  
                      
                    </ul>
                  </li>
                
                </ul>
              </li>
                 <?php  }?>
              <!-- Tasks: style can be found in dropdown.less -->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <?php if($etat=="Gerant"){ ?>
                    <img src="../CSS/image/Gerant.png" class="user-image" alt="User Image"/>
                     <?php }else if($etat=="super"){ ?>
                    <img src="../CSS/image/super.png" class="user-image" alt="User Image"/>
                    <?php }else if($etat=="Comptable"){ ?>
                     <img src="../CSS/image/Comptable.png" class="user-image" alt="User Image"/>
                        <?php } ?>
                     <span class="hidden-xs" style="font-size: 15px"><?php echo  $dbusername; ?></span>
                </a>
                <ul class="dropdown-menu">
                  
                  <li class="user-header">
                       <p>
                    Bienvenu Ms le  :
                    <h3 style="size: 900px; font-weight: bold"> <?php echo ''. $etat ?> </h3>
                   
                   
                  </li>
                  <!-- Menu Body -->
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                        <a href="../index.php?error=3 " class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              
              </li>
         
          </div>
        </nav>
      </header>
    </div>
    
    
    
    
    
        
 