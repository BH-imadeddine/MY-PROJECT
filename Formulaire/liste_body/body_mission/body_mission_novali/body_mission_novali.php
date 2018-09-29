 <?php
						
$reg1=$db->query("select *from mission where validation='non valider'");
	while($ligne=$reg1->fetch()){					 
	 ?>

<tr> 
                                     
                                     
                                     <td><?php echo $ligne['mattriculation_vehi'] ?></td>			 
                                     <td><?php echo $ligne['lordre_mission'] ?> </td>
                                     <td><?php echo $ligne['datedebut_mission'] ?></td>
                                     <td><?php echo $ligne['datefin_mission'] ?></td>
                                     <td><?php echo $ligne['lien_mission'] ?></td>
                                     <td><?php echo $ligne['montant'] ?></td>  
                                    <td style="color:red"><?php echo $ligne['validation'] ?></td>
                                        <td>
                                           <?php include 'modal_mission_novali.php'; ?>     
                                       </td>
                                 </tr> 
                                   <?php }?>							