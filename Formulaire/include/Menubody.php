<?php
include 'include/connexion.php';
            ?>
    <meta charset="UTF-8">
   
<div class="wrapper">
      
      
      <aside class="main-sidebar">
     
        <section class="sidebar">
         
          <div class="user-panel">
            <div class="pull-left image">
                <?php if($etat=="Gerant"){ ?>
                    <img src="../CSS/image/Gerant.png" class="user-image" alt="User Image"/>
                     <?php }else if($etat=="super"){ ?>
                    <img src="../CSS/image/super.png" class="user-image" alt="User Image"/>
                    <?php }else if($etat=="Comptable"){ ?>
                     <img src="../CSS/image/Comptable.png" class="user-image" alt="User Image"/>
                        <?php } ?>
            </div>
            <div class="pull-left info">
              <p>ADMIN</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <form action="#" method="get" class="sidebar-form">
            
          </form>
         
          <ul class="sidebar-menu">
            <li class="treeview">
                <a href="Main_Principale.php">
                <i class="fa fa-tachometer"></i>
                <span>Accueil</span> 
              </a>
            </li>
              <?php  if($etat=='super' ) {?>
            <li class="treeview">
                <a href="list_gerant.php">
                <i class="fa fa-users"></i>
                <span>Gérant</span> 
              </a>
            </li>
              <?php  }?>
              <?php  if($etat=='super' || $etat=='Gerant' ) {?>
            <li>
              <a href="liste_vehicule.php">
                <i class="fa fa-car"></i> <span>Véhicules</span> 
              </a>
            </li>
              <li class="treeview">
                  <a href="list_chaufeur.php">
                <i class="fa fa-user"></i>
                <span>Chaufeur</span>
               
              </a>
              
            </li> 
            <li class="treeview">
              <a href="#">
                <i class="fa fa-pie-chart"></i>
                <span>Opération</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                  <li><a href="liste_assurance.php"><i class="fa fa-certificate"></i> Contrat d’Assurance</a></li>
                  <li><a href="liste_visitetechnique.php"><i class="fa fa-wrench"></i> Visite technique</a></li>
                  <li><a href="liste_vignette.php"><i class="fa fa-files-o"></i> Vignette</a></li>
                   <li><a href="liste_vidange.php"><i class="fa fa-hourglass-half"></i> Vidange</a></li>
                  <li><a href="list_panne.php"><i class="fa fa-cogs"></i> Panne</a></li>
              
                <li><a href="list_carburant.php"><i class="fa fa-filter"></i> Carburant</a></li>
         
              </ul>
            </li>
             
            <li class="treeview">
                <a href="list_mission.php">
                <i class="fa fa-sign-out"></i>
                <span>Missions</span>
               
              </a>
              
            </li>
            
		 <?php } ?>
            
             <?php  if($etat=='super') {?>
            <li>
                <a href="list_parc.php">
                <i class="fa fa-delicious"></i> <span>Parc</span>
               
              </a>
            </li>
             <?php } ?>
		 <?php  if($etat=='super'  || $etat=='Comptable' ) {?>	
             
            <li class="treeview">
                <a href="statistique.php">
                <i class="fa fa-line-chart"></i> <span>Statistiques</span>
               
              </a>
              
            </li>
            <?php } ?>
           
           
                
                
           
           
              
               <?php
              $resyu=$db->query("select year(curdate()) as annee");
                              while ($roww= $resyu->fetch()) {?>         
                              ?>         
                              <li class="header"> <h5 style="display: inline ;size: 30px; color: #ffebe8">Variation de l'année </h5>
               
                <select>
                    <option><?php  echo $roww['annee']?></option>
                     
                </select>
                 <?php } ?>           
           
            </li>
           <?php $requ=$db->query("call parcauto.variation(@cab, @assura, @vidg, @visi, @vignet, @pann);");
                 $req=$db->query("select @cab , @assura, @vidg, @visi, @vignet, @pann;");
                                      while ($row= $req->fetch()) {?>
                                
                               
                 
         
                                 
   
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Carburant : <small class="variation"><?php echo $row['@cab']?> DH</small> </a> </li>
            <li><a href="#"><i class="fa fa-circle-o text-danger"></i> Assurance : <small class="variation"><?php  echo $row['@assura']?> DH</small> </a></li>
            <li><a href="#"><i class="fa fa-circle-o text-warning"></i> Visite-tech :<small class="variation"><?php echo $row['@visi']?> DH</small></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Vignette :<small class="variation"><?php  echo $row['@vignet']?> DH </small></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Panne :<small class="variation"><?php echo $row['@pann']?> DH</small></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-info"></i> Vidange :<small class="variation"><?php  echo $row['@vidg']?> DH</small></a></li>
             
	     <?php } ?>  
          </ul>
        </section>
       
      </aside>

      
    
                </div>

    
    
    
    
    
  