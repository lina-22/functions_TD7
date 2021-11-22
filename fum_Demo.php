<!-- Démonstration :
Voici des fonctions qui retourne une chaine qui correspond à un bruit d’un animal.
function aboyer()
{
    return " Wouf ";
}
function miauler()
{
    return " Miaou ";
}
function roucouler()
{
    return" Rou rou ";
}

Il est possible de créer une fonction qui permet créer une chaine de bruit d’animaux. Par exemple :
function chantDesAnimaux1()
{
    let chant="";
    chant.=aboyer();
    chant.=miauler();
    chant.=roucouler();
    chant.=aboyer();
    return chant;
}

 echo chantDesAnimaux1();
On obtient :
Wouf Miaou Rou rou Wouf

On utilise la variable chant pour concaténer les différentes valeurs retourner par les invocations de fonction. Vous allez devoir réutiliser le même principe dans les exercices suivants on appelle parfois cette variable chaine.  
Il est donc possible d’invoquer des fonctions à l’intérieur de la définition d’une fonction.  
Exercice 6 : chantDesAnimaux2
Entrainer vous en créer votre propre fonction chant des animaux.

Exercice 7 : chantAnimal
Créer une fonction qui prend en paramètre le nom d’un animal et retourne le chant de l’animal correspondant.
Il faut utiliser les fonctions aboyer, miauler, roucouler.
 echo chantAnimal("chien") ; // Wouf
 echo chantAnimal("chat") ;//Miaou -->





<?php
function aboyer()
{
 return "Woof";
}

function miauler()
{
    return "Miaou";
}

function roucouler()
{
    return "Rourou";
}

function chantDesAnnimaux1()
{
    $resultat=aboyer();
    $resultat=$resultat.miauler();
    $resultat=$resultat.roucouler();
    $resultat=$resultat.aboyer();
    return $resultat;
}
function chantDesAnnimaux2(){
    $resultat=miauler();
    $resultat=$resultat.aboyer();
    $resultat=$resultat.miauler();
    return $resultat;
}

function chantDesAnnimaux3($nom){
    if($nom=="chien"){
        $resultat=aboyer();
    }
    elseif($nom=="chat"){
        $resultat=miauler();
    }
    elseif($nom=="oiseau"){
        $resultat=roucouler();
    }
    return $resultat;
}

echo chantDesAnnimaux1();
echo "<br>";
echo chantDesAnnimaux2();
echo "<br>";
echo chantDesAnnimaux3("chien");
echo "<br>";
echo chantDesAnnimaux3("chat");
echo "<br>";
echo chantDesAnnimaux3("oiseau");
?>
