<?php 
     $requete=  $db->query( "SELECT * FROM vehicule");
        while ($rowe =  $requete->fetch()) {?>
            <tr>  
                <td><?php        echo $rowe['mattriculation_vehi']; ?></td>
                <td><?php        echo $rowe['date_vehi']; ?></td>
                <td><?php        echo $rowe['marque_vehi']; ?></td>
                <td><?php        echo $rowe['categorie_vehi']; ?></td>
                <td><?php        echo $rowe['puissance_vehi']; ?></td>
                <td><?php        include 'modal_vehicule.php';?></td>
            </tr> 
<?php } ?>
                        