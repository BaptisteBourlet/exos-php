<?php 
include('tableaux.php');
include('fonctions.php');
include('exo1.php');
include('exoConditions.php');
include('exoBoucle.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php



if(isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['choix'])){
    echo("Bonjour !");
    echo("Je sais comment tu t'appelles, hé hé. Tu t'appelles " . " " . $_POST['nom']. " " .$_POST['prenom']. " " . $_POST['choix'] . " " .$_POST['fileToUpload']. "!");
}else {
    
    echo '<p>Veuillez taper votre Nom ainsi que votre Prénom :</p>';
    echo '<form method="post" action="">';
    echo 'Votre nom: <input type="text" name="nom" required/> <br>';
    echo 'Votre prénom: <input type="text" name="prenom" required/> <br>';
    echo 'Votre SEXE: <select name="choix" size="1" required>';
    echo '<option>Monsieur';
    echo '<option>Madame';
    echo '</select> <br>';
    echo '<form action="" method="post" enctype="multipart/form-data">
    Selectionnez une image à upload : 
        <input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf" required>
        <br><input type="submit" value="Valider" name="submit"/>
    </form>';
}




// if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['civilité']))
// {
//     echo 'Bonjour '.$_POST['civilité']. ' ' .$_POST['nom'].' ' .$_POST['prenom'];
// }
// else
// {
//      echo '<form action="" method="post">
//          <label>Prenom</label>
//          <input type="text" name="prenom" required>
//          <label>Nom</label>
//          <input type="text" name="nom" required>
//          <select name="civilité" size="1" required>
//              <option>Monsieur
//              <option>Madame
//          </select>
         
//      </form>
//      <form action="formulaire.php" method="post" enctype="multipart/form-data">
//      Selectionnez une image à upload : 
//      <input type="file" name="fileToUpload" id="fileToUpload" accept=".pdf" required>
//      <input type="submit" value="Upload Image" name="submit">
//     </form>';

// }
     ?>

</body>
</html>
