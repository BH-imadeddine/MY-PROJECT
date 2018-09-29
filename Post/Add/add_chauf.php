 <?php
include '../../Formulaire/include/connexion.php';
$matricul_chauf=$_POST['matChaf'];
$nom=$_POST['nomChaf'];
$prenom=$_POST['prenomChaf'];
$cin=$_POST['cin'];
$email=$_POST['mailChauf'];
$tel=$_POST['telChauf'];
$service=$_POST['serviceChauf'];
$adresse=$_POST['adress'];

$reg="INSERT INTO  `parcauto`.`chauffeur` (
`matricul_chauf` ,
`nom_chauf` ,
`prenom_chauf` ,
`cin_chauf` ,
`email_chauf` ,
`adrese_chauf` ,
`service_chauf` ,
`tel_chauf`
)
VALUES (
'$matricul_chauf',  '$nom',  '$prenom',  '$cin',  '$email',  '$adresse',  '$service',  '$tel'
);

";
$db->query($reg);
header('location:../../Formulaire/list_chaufeur.php?confirm=1');

