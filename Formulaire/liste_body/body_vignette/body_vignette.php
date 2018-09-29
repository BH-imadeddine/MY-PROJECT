    <?PHP
                     $req=$db->query("select * from vignette");
                      while($ligne=$req->fetch()) { 
                          ?> 


<tr>  
                                        <td><?php echo $ligne['mattriculation_vehi']?></td>
                                         <td><?php echo $ligne['datedebut_vign']?></td>
                                        <td  <?php
                     $madate= $ligne['datefin_vign'];
                list($a,$m,$j)=explode("-",$madate);
             $date_y="$a"; 
                  $date_m="$m"; 
                  if($date_y === date('Y') && $date_m===date('m')){
                  ?> style="color: red"  <?php } ?>  ><?php echo $ligne['datefin_vign']?> </td>
                                       
                                         <td><?php echo $ligne['montant_vin']?></td>
                                        <td>
                                            
                                            <?php include 'modal_vignette.php'; ?>
       
                                            
                                       </td>
                                 </tr> 
                                    <?php }?>  