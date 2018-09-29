<?php $res=$db->query("SELECT * FROM parc");
    while ($row = $res->fetch()) {?>
        <tr>  
            <td><?php echo $row['nom_parc']?></td>
            <td><?php echo $row['lieu_parc']?></td>
            <td><?php echo $row['capacite_parc']?></td>
            <td><a href="#" role="button" onclick="" data-toggle="modal" data-target="#my<?php echo $row['id_parc']?>"><i class="fa fa-list-alt">Afficher</i></a>
                    <div class="modal fade" id="my<?php echo $row['id_parc']?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                </div>
                                <div class="modal-body">
                                    <h4>
                                        <ol>
                                            <?php $a=$row['id_parc'];

                                                                     $fc=$db->query("SELECT mattriculation_vehi FROM vehicule WHERE parc=$a");
                                                                     while($list=$fc->fetch()){ ?>
                                                                             <li><?php echo $list['mattriculation_vehi']?></li>
                                             <?php } ?>
                                        </ol>
                                    </h4> 
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </td>
                                           
            <td>
                <?php   include 'modal_parc.php';?>
            </td>
        </tr>
 <?php } ?>
                         