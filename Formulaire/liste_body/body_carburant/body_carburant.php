<?php $requete=$db->query("SELECT * FROM carburant");
    while ($row = $requete->fetch()) {?>

       <tr>  
            <td><?php echo $row['mattriculation_vehi']?></td>
            <td><?php echo $row['type_carbu']?></td>
            <td><?php echo $row['quantite']?></td>
            <td><?php echo $row['montant_cab']?></td>
             <td><?php echo $row['dateC']?></td>
            <td><?php   include 'modal_carburant.php';?></td>                                                                                                                                                                                                                                                                                                                                                                                         
        </tr>  
<?php }?>
