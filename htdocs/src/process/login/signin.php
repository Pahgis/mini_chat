<?php 




    if(!empty($_POST["pseudo"]) &&
        !empty($_POST["mail"]) &&
        !empty($_POST["pwd"]) &&
        !empty($_POST["pwd_confirm"]) &&
        $_POST["pwd"] == $_POST["pwd_confirm"]
    ){
        $color = dechex(rand(0x000000, 0xFFFFFF));
        require_once '../connexion.php';
        $preparedRequest = $connexion->prepare("INSERT INTO users (pseudo,mail, pwd, color) VALUES (?,?,?,?)");
        $preparedRequest->execute([
            $_POST["pseudo"],
            $_POST["mail"],
            $_POST["pwd"],
            $color
        ]);
        header('Location: ../../index.php?success=Compte a bien été crée');
    }else{
        header('Location: ../../index.php?error=Erreur try again');
    }




?>
