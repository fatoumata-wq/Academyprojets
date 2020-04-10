<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div id="cadre">
        <nav>
            <div class='logo'>
                <img class='log' src="Images/logo-QuizzSA.png" alt="">
            </div>
            <label class='h2'>Le Plaisir de Jouer</label>
        </nav>
        <div class="container">
                <div class='login'>
                    <div class="text">Login form</div>
                </div>
            <form action="" method="post">
                <div class="champ">
                    <input type="text" name="username" class="username" placeholder="Login" autocomplete="off">
                    <div class="icone"> <img src="Images/Icônes/ic-login.png"> </div>
                </div>
                <div class="champ">
                <input type="password" name="password" class="password" placeholder="password">
                <div class="icone"> <img src="Images/Icônes/ic-password.png"> </div>
                </div>
                <input type="submit" name="connexion" value="connexion" class="connexion">  
                <a href="#">S'inscrire pour jouer ?</a>      
            </form>
        </div>
        </div>
    </body>
</html>