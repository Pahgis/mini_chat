<?php 

require_once "../connexion.php";

$preparedRequest = $connexion->prepare("SELECT * FROM message INNER JOIN users WHERE message.id_users= users.id ");
$preparedRequest->execute();

$data = $preparedRequest->fetchAll(PDO::FETCH_ASSOC);


echo json_encode($data);

?>