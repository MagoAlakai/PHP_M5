<?php

   $five_integers= array(1, 2, 3, 4, 5); 
   $three_integers= array(6, 7, 8);
   $all_integers = array_merge($five_integers, $three_integers);

   echo 'Este array tiene los siguientes elementos:'.'<br>';
   foreach ($all_integers as $item=> $value){
        echo 'Posición '.$item.': '.$value.'<br>';
   }

   
  

?>