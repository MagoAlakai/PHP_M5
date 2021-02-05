<?php

   $five_integers= array(1, 2, 3, 4, 5); 
   $three_integers= array(6, 7, 8);

   $all_integers = array_merge($five_integers, $three_integers);

   echo 'Muestro número de elementos en array: '.count($all_integers).'<br>';
   var_dump($all_integers);

?>