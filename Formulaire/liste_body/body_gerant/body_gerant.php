 <?php $requete=$db->query("SELECT * FROM gerant");
    while ($row = $requete->fetch()) {?>
 <tr>  
                                          <td><?php echo $row['mat_gerant']?></td>
                                          <td><?php echo $row['nom']?></td>
                                          <td><?php echo $row['prenom']?></td>
                                           <td><?php echo $row['email']?></td>
                                           
                                         
                                        <td>
                                       <?php include 'modal_gerant.php'; ?>              
                                       </td>
                                 </tr>
                                   <?php }?>  
  