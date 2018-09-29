<?php
$reg=$db->query("select *from panne");
  while($line=$reg->fetch()){
						 
?>							
   <tr> 
        <td> <?php echo $line['mattriculation_vehi'] ?>  </td>
	<td><?php echo $line['type_panne'] ?> </td>
        <td><?php echo $line['montant_pan'] ?> </td>
        <td><?php echo $line['dateP'] ?> </td>
        <td><?php   include 'modal_panne.php';?></td>       
   </tr> 
       
<?php }?>