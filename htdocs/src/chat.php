<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/chat.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary ">
        <div class="container-fluid row">
            <div class="col-4"></div>
            <h1 class="col-4 text-center">Chat P8</h1>
            <div class="dropdown col-4 text-end">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <form class="text-center"  action="./process/login/logout.php" method="post">
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-circle-xmark"> Log out</i></button>
                        </form>
                    </li>
                </ul>
            </div>

        </div>
    </nav>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="chat">
                <ul class="mess"></ul>
            </div>
            <div>
                <form class="form" action="./process/post/message-to-DB.php" method="post">
                     <textarea class="form-control textcontent" id="exampleFormControlTextarea1" name="msg" rows="3"></textarea>
                     <input type="hidden" name="id" value="<?= $_SESSION["id"]?>">
                    <button type="submit" class="btn btnMessage" name="">Chat</button>
                </form>
            </div>
        </div>
    </div>
</div>






<script src="./assets/js/toDB.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>