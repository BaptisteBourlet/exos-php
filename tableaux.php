<?php
/*Créer un tableau mois et l'initialiser avec les valeurs suivantes :

janvier
février
mars
avril
mai
juin
juillet
aout
septembre
octobre
novembre
décembre
 

$tab1 = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];
for ($i=0; $i<count($tab1);$i++) {
echo ($tab1[$i]."<br>");
}

/*Avec le tableau de l'exercice 1,

afficher la valeur de la troisième ligne de ce tableau.
afficher la valeur de l'index 5.
modifier le mois de aout pour lui ajouter l'accent manquant. 
$tab1 = ["janvier","fevrier","mars","avril","mai","juin","juillet","aout","septembre","octobre","novembre","decembre"];

echo ($tab1[3]."<br>");

$tab1[7] ="août";
echo ($tab1[7]."<br>");


/*Voici la liste des départements de la région Auvergne-Rhône-Alpes : Ain (01), Allier (03), Ardèche (07), Cantal (15), Drôme (26), Isère (38), Loire (42), 
Haute-Loire (43), Puy-de-Dôme (63), Rhône (69), Savoie (73), Haute-Savoie (74)

Créer un tableau associatif avec comme index le numéro des départements et en valeur leur nom.
Afficher la valeur de l'index 69.
Ajouter la ligne correspondant au département de la ville de Metz.
Afficher toutes les valeurs ainsi que les clés associées grâce à une boucle sous la forme : "Le département" + nom_departement + "a le numéro" + num_departement
 

$array = [
    "Ain" => '01',
    "Allier" => '03',
    "Ardèche"=> '07',
    "Cantal"=> '15',
    "Drôme"=> '26',
    "rhône"=> '69',
];
echo ($array["rhône"]."<br>");

foreach ($array as $key => $value) {
    echo($value.$key."<br>");
}

/*Camille se marie et doit envoyer des mails à ses amis.

En utilisant ce tableau, faites en sorte que chaque personne de cette liste reçoit le même mail en faisant en sorte qu'il soit personnalisé.

array("Alex", "Max", "Dominique", "Claude", "Leslie", "Charlie", "Lou");

Mail : "Salut prénom, devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)"

$monarray = [
    1=>"Max",
    2=>"Alex",
    3=>"Dominique",
    4=>"Claude",
    5=>"Leslie",
    6=>"Charlie",
    7=>"Lou",
];
foreach ($monarray as $key => $value) {
    echo("Salut ".$value.", devine quoi! Je me marie dans samedi dans deux semaines ! j'espère te compter parmi les invités ! Gros bisous :)<br>");
}*/
?>