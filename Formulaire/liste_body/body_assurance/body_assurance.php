 <?php $res=$db->query("SELECT * FROM assurance");
    while ($row = $res->fetch()) {?>
        <tr>  
                                    
            <td><?php echo $row['mattriculation_vehi']?></td>
            <td><?php echo $row['agence']?></td>
            <td><?php echo $row['datedebut_assur']?></td>
               
                     <td  <?php
                     $madate= $row['datefin_assur'];
                list($a,$m,$j)=explode("-",$madate);
                $date_y="$a"; 
                  $date_m="$m"; 
                  if($date_y === date('Y') && $date_m===date('m')){
                      ?> style="color: red " title=" cette assurance est finé ce mois !!!!!" <?php } ?>  > 
               
                   
              
                                             <?php echo $row['datefin_assur']?></td>
                                         <td><?php echo $row['montant_ass']?></td>
                                         
                                        <td>
                                           <?php   include 'modal_assurance.php';?> 
                                       </td>
                                           <?php }?> 
                                 </tr> 
                            
                 