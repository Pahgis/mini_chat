<?php 



if(!empty($_POST["content"])){
    require_once "../connexion.php";

    $preparedRequest = $connexion->prepare("INSERT INTO message  (id_users, postUser, dates ) VALUES (?,?,?)");
    $preparedRequest->execute([
        $_POST["id"],
        $_POST["content"],
        date("Y-m-d H:i:s")
        
    ]);


}





?>