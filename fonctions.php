<?php
/*function mafonction() {
    return true;
}

/*Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.

function mafonctiona($chaine) {
    $chaine = "coucou";
    return $chaine;
}

/*Faire une fonction qui prend en paramètre deux chaines de caractères (prénom et nom de famille) et qui retourne la concaténation de ces deux chaines.

$prenom = "";
$nom = "";
function mafonctionb($prenom, $nom) {
    
    return $prenom.$nom;
}
$yo = mafonctionb('Baptiste', ' Bourlet<br>');
echo ($yo);

/*Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
Les deux nombres sont identiques si les deux nombres sont égaux

function nombre($a, $b) {
    if ($a>$b) {
    return $a;
} else {
    return $b;
    }
}

/*Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui retourne la concaténation de ces deux paramètres.


function chainenbr($a, $c) {
    return $a.$c;
}
$ya = chainenbr(17, ' coucou');
echo ('<br>'.$ya.'<br>');

/*Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit retourner une chaine de la forme : "Bonjour" + nom + prenom + ",tu as" + age + "ans". 

function npa($nom,$prenom,$age) {
    return "Bonjour ".$nom.$prenom.", tu as ".$age." ans.<br>";
}
$ye = npa("Bourlet ","Baptiste",23);
echo ($ye);


/*Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

Homme
Femme
La fonction doit renvoyer en fonction des paramètres :

Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeur
Vous êtes une femme et vous êtes mineur
Gérer tous les cas. 

function majeur($genre, $age) {
    
if ($age<18 && $genre = "homme") {
    return ("Vous êtes un ".$genre." et vous êtes mineur <br>");
} else if ($age<18 && $genre != "homme") {
    return ("Vous êtes une femme et vous êtes mineur <br>");
} else if ($age>18 && $genre = "homme") {
    return ("Vous êtes un ".$genre." et vous êtes majeur <br>");
} else if ($age>18 && $genre != "homme") {
    return ("Vous êtes une femme et vous êtes majeur <br>");
    }
}
$yu = majeur("homme",25);
echo ($yu."<br>");

/*Faire une fonction qui prend en paramètre trois nombres et qui retourne la somme de ces nombres. Tous les paramètres doivent avoir une valeur par défaut. 

function add($x,$y,$z) {
    return $x+$y+$z;
}
$yi = add(10,10,10);
echo ($yi."<br>");*/
?>