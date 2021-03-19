<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

echo 'Écrire un programme PHP qui affiche tous les nombres impairs   entre 0 et 10000, par ordre croissant : "1 3 5 7 ... 9995 9997 9999" </br>';


for($i = 0; $i < 10000; $i++)
{
    if($i % 2 !== 0) 
    {
        print($i);
        echo '</br>';
    }
}

?>
