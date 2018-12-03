<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo2-php</title>
</head>
<body>
<?php
echo ('Votre login est : '.$_COOKIE['login']);
echo (' Votre mot de passe est : '.$_COOKIE['mdp']);
echo (' Votre mot de passe est : '.$_COOKIE['confirmMDP']);
?>
<form action="cookie.php" method="post" enctype="multipart/form-data">
    <div>
        <p>Ton pseudo : </p>
        <input type="text" name="pseudo"/>
        <p>Ton mot de passe : </p>
        <input type="password" name="password"/>
        <p>Confirmation mot de passe : </p>
        <input type="password" name="cpassword"/>
        <p></p>
        <input type="submit" value="Valider">
        
    </div>
</form>
</body>
</html>