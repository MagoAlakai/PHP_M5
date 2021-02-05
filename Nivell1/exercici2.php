<?php

    $str1 = 'Soy el primer string';
    $str2 = 'Soy el segundo string';

    echo '<h3>Nº de caracteres</h3>';
    echo strlen($str1).'<br>';
    echo strlen($str2).'<br>';

    echo '<h3>Orden inverso de caracteres</h3>';
    echo strrev($str1).'<br>';
    echo strrev($str2).'<br>';

    echo '<h3>Concatenación de los dos strings</h3>';
    echo ($str1).', '.($str2).'<br>';

?>