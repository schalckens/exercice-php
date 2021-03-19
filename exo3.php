<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Écrire un programme qui calcule 30! (factorielle de 30 = 30 x 29 x 28 … x 3 x 2) <br><br>', "\n";

$som = 1;
for($i = 30; $i > 1; $i--)
{
    $som = $som *= $i ;
}
echo 'La factorielle est égale à : ', $som;

//correction


for($f=1,$i=2;$i<=30;$i++) 
{
    $f *= $i;
}
echo "30! = $f";
//ou
echo '30! = ',$f;


?>