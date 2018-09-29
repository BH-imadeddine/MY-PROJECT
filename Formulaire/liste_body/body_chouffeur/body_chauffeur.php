 <?php $requete=$db->query("SELECT * FROM chauffeur");
    while ($row = $requete->fetch()) {?>
   <tr>  
                                         
                                    <td><?php echo $row['matricul_chauf']?></td>
                                    <td><?php echo $row['nom_chauf']?></td>
                                    <td><?php echo $row['prenom_chauf']?></td>
                                    <td><?php echo $row['service_chauf']?></td>
                                     
                                                                                                                                                                                                                                                                                                                                                                                           
       
                                        <td>
                                            <?php include 'modal_choufeur.php';?>
                                           </td>
                                              <?php }?> 
                                 </tr>  
                                 