<?php
    $error = isset($_GET["error"]) ? 1 : 0; //Existe el parametro error?
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="container">
        <h1 class="title">Login</h1>
            <form action="api/login.php" method="GET">
                <input type="email" id="email" name="email" placeholder="email" class="input" required>
                <br>
                <input type="password" id="pass" name="password" placeholder="password" class="input" required>
                <?php
                    if($error == 1){
                        ?>
                        <p class="error">Email o contraseña incorrectos.</p>
                        <?php
                    }
                ?>
                <div class="btns">
                    <button type="submit" class="btn btn-action">Enviar</button>
                    <a href="register.html"><input type="button" value="Registrarme"  class="btn btn-link"></a>
                </div>
                
               
            </form>

    </div>    




</body>
</html>