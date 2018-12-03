<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo2-php</title>
</head>
<body>
<p> votre adresse ip est :
<?php
/**
 * Récupérer la véritable adresse IP d'un visiteur
 */
function get_ip() {
	// IP si internet partagé
	if (isset($_SERVER['HTTP_CLIENT_IP'])) {
		return $_SERVER['HTTP_CLIENT_IP'];
	}
	// IP derrière un proxy
	else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		return $_SERVER['HTTP_X_FORWARDED_FOR'];
	}
	// Sinon : IP normale
	else {
		return (isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '');
	}
}
echo (get_ip());
setcookie("login",($_POST['pseudo']),time()+3000);
setcookie("mdp",($_POST['password']),time()+3000);
setcookie("confirmMDP",($_POST['cpassword']),time()+3000);
?></p>

<?php
$user_agent=$_SERVER['HTTP_USER_AGENT'];
echo ($user_agent.'<br>');
echo ($_SERVER['SERVER_NAME']);
?>
<form action="cookie.php" method="post" enctype="multipart/form-data">
    <div>
        <p>Ton prénom : </p>
        <input type="text" name="prenom"/>
        <p>Ton nom : </p>
        <input type="text" name="nom"/>
        <p>Ton âge : </p>
        <input type="text" name="age"/>
        <p></p>
        <input type="submit" value="Valider">
        <p>Ton pseudo : </p>
        <input type="text" name="pseudo"/>
        <p>Ton mot de passe : </p>
        <input type="password" name="password"/>
        <p>Confirmation mot de passe : </p>
        <input type="password" name="cpassword"/>
        <input type="submit" value="Valider">
        <p></p>
    </div>
</form>
</body>
</html>