<?php




if (
    !empty($_POST["pseudo"]) &&
    !empty($_POST["pwd"])
) {
     require_once '../connexion.php';
    $preparedRequestGetUser = $connexion->prepare(
        "SELECT * FROM users WHERE pseudo = ?"
    );
    $preparedRequestGetUser->execute([
        $_POST["pseudo"]
    ]);  
    $user = $preparedRequestGetUser->fetch(PDO::FETCH_ASSOC);
}

if($_POST["pwd"] == $user["pwd"]){
    session_start();
    $_SESSION["pseudo"] = $user["pseudo"];
    $_SESSION["pwd"] = $user["pwd"];
    $_SESSION["droit"] = $user["droit"];
    $_SESSION["id"] = $user["id"];
    $_SESSION["ip"]= $_SERVER['REMOTE_ADDR'];
    header('Location: ../../chat.php?success=Connected');
}
