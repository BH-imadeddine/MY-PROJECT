<?php
						 $reg=$db->query("select *from mission where validation='valider'");
						
						 while($ligne=$reg->fetch()){
							
						 ?>

                                                <tr> <td><?php echo $ligne['mattriculation_vehi'] ?></td>
								
								 <td> <?php echo $ligne['lordre_mission'] ?> </td>
                                         <td><?php echo $ligne['datedebut_mission'] ?></td>
                                         <td><?php echo $ligne['datefin_mission'] ?></td>
                                         <td><?php echo $ligne['lien_mission'] ?></td>
                                         <td><?php echo $ligne['montant'] ?></td>
                                         
                                         <td style="color:green"><?php echo $ligne['validation'] ?></td>
                                        <td>
                          
                          <?php   include 'modal_mission_vali.php';?> 
                                       </td>
                                 </tr> 
                                   <?php }?>
