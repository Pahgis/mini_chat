<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="./src/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <!-- Bouton sign / log in-->
    <section class="">
        <div class=""></div>
        <div class=" " id="">
            <div class="signin  ">
                <form action="./process/login/signin.php" method="post" class="formsign ">
                    <input type="text" name="pseudo" id="" class="form-control" placeholder="pseudo">
                    <input type="email" name="mail" id="" class="form-control" placeholder="Email">
                    <input type="password" name="pwd" id="" class="form-control" placeholder="Mot de passe">
                    <input type="password" name="pwd_confirm" id="" class="form-control" placeholder="Confirmer mot de passe">
                    <button class="">Submit</button>
                </form>
            </div>
            <div class="">
                <form action="./process/login/login.php" method="post" class="formsign ">
                    <input type="text" name="pseudo" id="" class="form-control" placeholder="pseudo">
                    <input type="password" name="pwd" id="" class="form-control" placeholder="Mot de passe">
                    <button class="" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </section>
    <div class="">
        <div class="">
            <div class=""><button class="  bg-blue-400 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" >Sign In</button></div>
            <div class=""><button class="">Se connecter</button></div>
        </div>
    </div>
    
    <script src="./assets/js/sign.js"></script>
</body>

</html>