<?php
 $reg=$db->query("select *from vidange");
 while($line=$reg->fetch()){
?>
<tr>  
    <td><?php echo $line ['mattriculation_vehi'] ?></td>
    <td><?php echo $line['datedebut'] ?> </td>
    <td><?php  echo $line ['montant_vidange']?></td>
    <td><?php  echo $line ['nbrkilo']?></td>
                                        
    <td> <?php include 'modal_vidange.php';?>  </td>
</tr> 
 <?php }?>