 <?php
include '../../Formulaire/include/connexion.php';
$matricul_gerant=$_POST['mat_gerant'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$login=$_POST['logGerant'];
$mot_pass=$_POST['mdpG'];
$email=$_POST['emai'];
$reg="INSERT INTO  `parcauto`.`gerant` (
`mat_gerant` ,
`nom` ,
`prenom` ,
`login_G` ,
`modpass_G` ,
`email` ,
`etat_G`
)
VALUES (
'$matricul_gerant',  '$nom',  '$prenom',  '$login',  '$mot_pass',  '$email',  'Gerant'
);
";
$db->query($reg);
header('location:../../Formulaire/list_gerant.php?confirm=1');

