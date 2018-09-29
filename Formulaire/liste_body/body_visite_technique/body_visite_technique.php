 <?php
						 $reg=$db->query("select *from visitetechnique");
						 while($line=$reg->fetch()){
						 ?>

                                                <tr>  
                                          <td><?php echo $line ['mattriculation_vehi'] ?></td>
                                         <td><?php echo $line['datedebut_visi'] ?> </td>
                                        <td  <?php
                     $madate= $line['datefin_visi'];
                list($a,$m,$j)=explode("-",$madate);
               $date_y="$a"; 
                  $date_m="$m"; 
                  if($date_y === date('Y') && $date_m===date('m')){
                  ?> style="color: red"  <?php } ?>  > <?php  echo $line ['datefin_visi']?></td>
                                         <td><?php echo $line ['montant_visi'] ?></td>
                                        
                                        <td>
                                    <?php include 'modal_visite_technique.php'; ?>						
											
                                       </td>
                                 </tr> <?php }?>
                                   
