<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo_php</title>
</head>

<body>
    <?php
/******* exo 1): afficher le plus petit entre A et B *******/


/*
$a = 4;
$b = 6;
if ($a > $b) {
    echo $b;
}
else ($a < $b) {
    echo $a;
}*/


/******* exo 2): afficher le plus petit entre A, B et C *******/

/*$a = 5;
$b = 4;
$c= 3;

echo min ($a, $b, $c);*/


/******** exo 3): afficher un nombre aléatoire entre 1 et 100; *********/

/*echo rand (2,99);*/


/******** exo 4): afficher un nombre aléatoire entre 5 et 100 **********/

/*echo rand (6,99);*/



/******** exo 5): Faire une fonction additon **********/

/*function addition($n1,$n2){
    echo $n1+$n2;
}
addition(14,7);*/


/********* exo 6): faire une fonction PGCD ***********/

/*** bwahhhhhh ****/


/********* exo 7): Afficher "Je vais faire du bon visuel" 
 *                 si x (<-- nb aléatoire entre 1 et 100) < 50 
 *                 sinon "Je suis un piou piou"; ******************/

/*$x = rand (1,99); 
if ($x < 50) {
    echo "Je vais faire du bon visuel";
}
else {
echo "Je suis un piou piou";
}*/


/*********exo 8): Afficher 30 fois "petite péruche" + numéro;*******/

/*$nb = 1;
while ($nb <= 30)
{
    echo "petite péruche n°".$nb."<br/>";
    $nb++;
}*/
/*
ou 

for ($i =0; $i <= 30; $i++){
    echo "petite peruche: count $1 <br>";
}*/


/*********exo 9): Afficher "petite péruche" + numéro si x (<-- nb aléatoire entre 1 et 100) < 50 ****/
/*$x = rand (1, 99);
$A = "petite perruche";
while ($x <= 50){
  echo ($x);
  echo ($A.'</br>');
  $x++;
}*/

/*autre idée mais pas fonctionnelle:
$x = rand (1,99);

for ($x=1; $x<50; $x++)

{
    echo "petite péruche n°".$x."<br/>";
}*/


/******* exo 10): faire une fonction qui prend en param x, si x==1 als afficher (AAAA),
 * si x==2 (OOOO), x==3(CCCC), x==4(DDDD) sinon (je suis une perruche) *************/

/*$x = rand (1,8);
if ($x == 1){
  echo "AAAA";
}
elseif ($x == 2){
  echo "BBBB";
}
elseif ($x == 3){
  echo "CCCC";
}
elseif ($x == 4){
  echo "DDDD";
}
else {
  echo "je suis une perruche";
}*/


/*******exo 11): 10 avec switch/case */

/*$x = rand(1,8);

switch($x)
{
 case 1:
  echo'AAAA';
  break;

 case 2:
  echo'BBBB';
  break;

 case 3:
  echo'CCCC';
  break;

 case 4:
  echo'DDDD';
  break;

 default :
  echo 'je suis une perruche' ;
  break;
}*/


/******* exo 12): si x==1 (x aléatoire entre 1 et 2), include page1.html, sinon include page2.html
page1 = h1 je suis une perruche page2 = h2 j’ai bientôt fini les exos php
 */

/*$x = rand(1, 2);
switch($x)
{
 case 1:
  include "page1.html";
  break;

 default :
  include "page2.html";
  break;
}*/




/************CORRECTION *************** */

/*exo 1:*/


?>
</body>

</html>